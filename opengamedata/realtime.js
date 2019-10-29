/**
 * Function to initialize data and refresh loop when the page loads.
 */
function onload()
{
  // Create a SessionList instance for tracking state, and start the refresh loop.
  sess_list = new SessionList();
  rt_change_games(sess_list, "CRYSTAL");
  if (rt_config.custom_title !== null)
  {
    document.title = rt_config.custom_title;
  }
  document.getElementById("require_pid").onclick = function() {
      sess_list.require_player_id = this.checked;
      sess_list.refreshActiveSessionList();
      if (sess_list.selected_session_id != -1)
      {
        sess_list.refreshSelectedSession();
      }
  }
  window.setInterval(() => {
    try {
      sess_list.refreshActiveSessionList();
      if (sess_list.selected_session_id != -1)
      {
        sess_list.refreshSelectedSession();
      }
    }
    catch(err) {
      console.log(err.message);
      throw err;
    }
  }, 5000);
}


/**
 * Handler function to change the game whose sessions are on display.
 * Fairly simple, just set the active game and refresh the displayed
 * data
 * @param {} list The SessionList instance for tracking the game and its sessions.
 * @param {*} game_name The name of the game to switch to.
 */
function rt_change_games(list, game_name){
  list.active_game = game_name;
  list.refreshActiveSessionList();
  list.clearSelected();

  document.getElementById('rt_game_title').innerHTML = game_name+ " Realtime Player Data";
  document.getElementById('rt_game_events_readme').href = data_readmes[game_name];
  document.getElementById('rt_game_features_readme').href = feature_readmes[game_name];
  document.getElementById('rt_game_link').href = game_links[game_name];  document.getElementById('rt_game_img').src = thumbs[game_name];
  document.getElementById('rt_game_img').alt = "Example image of "+game_name;


  let message = document.createElement("p")
  message.appendChild(document.createTextNode("Please choose a "+game_name+" session or another game."))
  let playstats = document.getElementById("playstats");
  playstats.appendChild(message);
}

/**
 * Simple set minus operation, based on a suggestion on StackOverflow.
 * just filter A based on B not having the element.
 * @param {*} A Set from which to subtract another set.
 * @param {*} B Set to subtract from A.
 */
function setMinus(A, B) {
  return new Set([...A].filter(x => !B.has(x)));
}

/**
 * Class to manage data related to sessions for each game.
 * This is responsible for maintaining a list of sessions,
 * as well as displaying the data in the view.
 * Technically, if this were a more complicated page,
 * we might want to split out the data from the display,
 * but this works well for what it is.
 */
class SessionList
{
  /**
   * Constructor for the SessionList class
   * Sets up variables to track the active game, lists of sessions ids
   * (one list is what's active, the other is what's actively displayed),
   * and a selected ID (for detailed display).
   */
  constructor() {
    this.active_game = "WAVES";
    this.active_sessions = [];
    this.active_session_ids = [];
    this.displayed_session_ids = [];
    this.selected_session_id = -1;
    this.require_player_id = document.getElementById("require_pid").checked;
    this.statistics_NA_msg = false;
    this.request_count = 0;
    this.refreshActiveSessionList();
  }

  /**
   * Function to retrieve a list of currently active sessions.
   * First, we call the CGI backend to get the list.
   * In the handler, the returned list updates the SessionList data,
   * and then makes a further call to refresh the display list.
   */
  refreshActiveSessionList() {
    let that = this;
    function active_sessions_handler(result) {
      let parsed_sessions = 'null';
      try
      {
        parsed_sessions = JSON.parse(result);
      }
      catch (err)
      {
        console.log(`Could not parse result as JSON:\n ${result}`);
        that.request_count--;
        return;
      }
      that.active_sessions = parsed_sessions;
      console.log('Refreshed session IDs:');
      console.log(that.active_sessions);
      that.active_session_ids = Array.from(Object.keys(that.active_sessions));
      that.refreshSessionDisplayList();
      that.request_count--;
    };
    if (this.request_count < rt_config.max_outstanding_requests)
    {
      this.request_count++;
      Server.get_all_active_sessions(active_sessions_handler, this.active_game, this.require_player_id);
    }
    else
    {
      console.log(`Request count is ${this.request_count}, not making another.`);
    }
  }

  /**
   * Function to update the list of displayed session IDs.
   * This is done in a way that preserves the order of session IDs
   * as much as possible.
   */
  refreshSessionDisplayList() {
    let display_set = new Set(this.displayed_session_ids);
    let active_set = new Set(this.active_session_ids);
    let remove_set = setMinus(display_set, active_set); // subtract active from display to get inactives, which are currently displayed.
    let add_set    = setMinus(active_set, display_set); // subtract display from active to get new sessions, which were not displayed yet.
    let session_list_area = document.getElementById("session_list");
    if(this.displayed_session_ids.length == 0){
      session_list_area.innerHTML = '';
    }

    // First, refresh what's in the list.
    let child_nodes = Array.from(session_list_area.children);
    for (let session_link_num in child_nodes) {
      let session_link = child_nodes[session_link_num];
      let session_id = session_link.id;
      // let session_link = child_nodes[`div_${session_id}`];
      // A) If object is in remove set, remove it.
      if (remove_set.has(session_id)) {
        session_link.remove();
        if (this.selected_session_id == session_link.id) { this.clearSelected(); }
      }
      // B) Else, update the max and current levels.
      else {
        let cur_level_div = document.getElementById(`cur_level_${session_id}`);
        cur_level_div.innerText = `current: ${this.active_sessions[session_id]["cur_level"].toString()}`;
        let max_level_div = document.getElementById(`max_level_${session_id}`);
        max_level_div.innerText = `max: ${this.active_sessions[session_id]["max_level"].toString()}`;
        let inactive_span = document.getElementById(`idle_${session_id}`);
        if (this.active_sessions[session_id]["idle_time"] > 60)
        {
          inactive_span.style.display = "inline";
        }
        else
        {
          inactive_span.style.display = "none";
        }
      }
    }
    // loop over all newly active sessions, adding them to the list.
    for (let id of add_set) {
      let session_id = id;
      let player_id = this.active_sessions[session_id]["player_id"];
      // start constructing the element
      let session_div = this.constructDisplayedSession(session_id, player_id);
      session_list_area.appendChild(session_div);
    }
    this.displayed_session_ids = [...this.active_session_ids]; // at this point, these should theoretically be the same.
    if(this.displayed_session_ids.length == 0){
      let message = document.createElement("p")
      let player_id_msg = this.require_player_id ? " Try viewing sessions without player IDs." : "";
      message.appendChild(document.createTextNode("No sessions currently available."+player_id_msg))
      session_list_area.appendChild(message);
    }
  }

  constructDisplayedSession(session_id, player_id)
  {
    let game_themes = {"CRYSTAL": "seascape", "WAVES":"daisygarden", "JOWILDER": "heatwave", "LAKELAND": "summerwarmth"}
    let that = this; // needed for onclick handler.

    let session_div = document.createElement("div");
    session_div.id = session_id;
    let avatar_img = document.createElement('img');
    avatar_img.src = 'http://tinygraphs.com/spaceinvaders/' + session_id + `?theme=${game_themes[this.active_game]}&numcolors=4`;
    session_div.appendChild(avatar_img);
    let session_link = document.createElement("a");
    session_link.onclick = function() { that.displaySelectedSession(session_id); return false;}
    session_link.innerText = !["", "null"].includes(player_id) ? player_id : session_id;
    session_link.href = `#${session_id}`;
    session_div.appendChild(session_link);
    let cur_level_div = document.createElement("div");
    cur_level_div.id = `cur_level_${session_id}`;
    cur_level_div.innerText = `current: ${this.active_sessions[session_id]["cur_level"].toString()}`;
    session_div.appendChild(cur_level_div);
    let max_level_div = document.createElement("div");
    max_level_div.id = `max_level_${session_id}`;
    max_level_div.innerText = `max: ${this.active_sessions[session_id]["max_level"].toString()}`;
    session_div.appendChild(max_level_div);
    session_div.appendChild(document.createElement("br"));


    let alert_msg = document.createElement("span");
    alert_msg.id = `idle_${session_id}`;
    alert_msg.innerText = "Inactive";
    alert_msg.classList.add("player_inactive");
    session_div.appendChild(alert_msg);

    return session_div
  }

  /**
   * Function to set up display of predictions for a given session.
   * Once this has been run, another function can be used to update
   * the prediction values in place (without removing and replacing elements).
   * @param {*} session_id The id of the session to display.
   */
  displaySelectedSession(session_id) {
    let that = this;
    this.clearSelected();
    this.selected_session_id = session_id;
    let playstats = document.getElementById("playstats");
    let message = document.createElement("h4")
    let player_id = that.active_sessions[session_id]['player_id']
    let player_msg = !["", "null"].includes(player_id) ? " (Player "+player_id+")" : '';
    message.appendChild(document.createTextNode("Session "+session_id+player_msg));
    message.style.width = "-webkit-fill-available";
    playstats.appendChild(message);
    let feature_request_list = this.get_feature_request_list();
    let features_handler = function(result) {
      let features_raw = that.parseJSONResult(result);
      let features_parsed = features_raw[that.selected_session_id]
      // loop over all predictions, adding to the UI.
      for (let feature_name in features_parsed) {
        let raw_value = features_parsed[feature_name]["value"];
        let feature_value = SessionList.formatValue(raw_value, feature_request_list[feature_name]["type"]);
        // first, make a div for everything to sit in.
        let next_feature_span = document.createElement("span");
        next_feature_span.id=feature_name;
        next_feature_span.className="playstat";
        // then, add an element with prediction title to the div
        let title = document.createElement("p");
        title.innerText = feature_request_list[feature_name]["name"];
        next_feature_span.appendChild(title);
        // finally, add an element for the prediction value to the div.
        let value_elem = document.createElement("h3");
        value_elem.id = `${feature_name}_val`;
        value_elem.innerText = feature_value;
        next_feature_span.appendChild(value_elem);
        playstats.appendChild(next_feature_span);
      }

      if(features_raw === 'null'){
        playstats_message('No features available.')
      } 
    };
    let predictions_handler = function(result) {
      let predictions_raw = that.parseJSONResult(result);
      let prediction_list = predictions_raw[that.selected_session_id]
      // loop over all predictions, adding to the UI.
      for (let prediction_name in prediction_list) {
        let prediction_value = prediction_list[prediction_name]["value"];
        // first, make a div for everything to sit in.
        let next_prediction = document.createElement("span");
        next_prediction.id=prediction_name;
        next_prediction.className="playstat";
        // then, add an element with prediction title to the div
        let title = document.createElement("p");
        title.innerText = prediction_list[prediction_name]["name"];
        next_prediction.appendChild(title);
        // finally, add an element for the prediction value to the div.
        let value_elem = document.createElement("h3");
        value_elem.id = `${prediction_name}_val`;
        value_elem.innerText = prediction_value;
        next_prediction.appendChild(value_elem);
        playstats.appendChild(next_prediction);

      }
      if(predictions_raw === 'null'){
        playstats_message('No predictions available.')
      }
    };
    Server.get_predictions_by_sessID(predictions_handler, this.selected_session_id, this.active_game);
    Server.get_features_by_sessID(features_handler, this.selected_session_id, this.active_game, Object.keys(feature_request_list));
  }

  /**
   * Function to update the prediction values for a displayed session.
   * This assumes a session has been selected, and its id stored in
   * the SessionList selected_session_id variable.
   */
  refreshSelectedSession()
  {
    let that = this;
    let feature_request_list = this.get_feature_request_list();
    let features_handler = function(result) {
      // console.log(`Got back predictions: ${result}`);
      let features_raw = that.parseJSONResult(result);
      let features_parsed = features_raw[that.selected_session_id]
      // After getting the feature values, loop over whole list,
      // updating values.
      for (let feature_name in features_parsed) {
        let raw_value = features_parsed[feature_name]["value"];
        let feature_value = SessionList.formatValue(raw_value, feature_request_list[feature_name]["type"]);
        let value_elem = document.getElementById(`${feature_name}_val`);
        value_elem.innerText = feature_value;
      }
      that.request_count--;
    };
    let predictions_handler = function(result) {
      // console.log(`Got back predictions: ${result}`);
      let predictions_raw = that.parseJSONResult(result);
      let prediction_list = predictions_raw[that.selected_session_id]
      // After getting the prediction values, loop over whole list,
      // updating values.
      for (let prediction_name in prediction_list) {
        let prediction_value = prediction_list[prediction_name]["value"];
        let value_elem = document.getElementById(`${prediction_name}_val`);
        value_elem.innerText = prediction_value;
      }
      that.request_count--;
    };
    if (this.request_count < rt_config.max_outstanding_requests)
    {
      this.request_count++;
      Server.get_predictions_by_sessID(predictions_handler, this.selected_session_id, this.active_game);
      this.request_count++;
      Server.get_features_by_sessID(features_handler, this.selected_session_id, this.active_game, Object.keys(feature_request_list));
    }
    else
    {
      console.log(`Request count is ${this.request_count}, not making another.`);
    }
  }

  /**
   * Simple function to clear out data display for a selected session.
   * This is mostly intended for when switching to a new session or switching
   * to another game entirely.
   */
  clearSelected() {
    // here we'll just clear the stuff displayed in the prediction area.
    let playstats = document.getElementById("playstats");
    while (playstats.firstChild) {
      playstats.removeChild(playstats.firstChild);
    }
    this.selected_session_id = -1;
    this.statistics_NA_msg = false;
  }

  parseJSONResult(json_result)
  {   let ret_val = 'null';
      try
      {
        let predictions_raw = JSON.parse(json_result);
        ret_val = predictions_raw;
      }
      catch (err)
      {
        console.log(`Could not parse result as JSON:\n ${json_result}`);
        console.log(`Full error: ${err.toString()}`);
        ret_val = {"message": json_result.toString()};
      }
      finally
      {
        return ret_val;
      }
  }

  get_feature_request_list()
  {
    let feature_request_list = {};
    if(this.active_game === 'WAVES'){
      feature_request_list = {
        "totalSliderMoves":{"name": "Total Slider Moves", "type": "int"},
        "totalLevelTime":{"name": "Total Level Time", "type": "int"},
        "closenessSlope":{"name": "Closeness Slope", "type": "float"},
        "percentOffsetMoves":{"name": "Percent Moves: Offset", "type":"pct"},
        "percentAmplitudeMoves":{"name": "Percent Moves: Amplitude", "type": "pct"},
        "percentWavelengthMoves":{"name": "Percent Moves: Wavelength", "type": "pct"}
      };
    } else if(this.active_game === 'CRYSTAL'){
      feature_request_list = {
        "sessionEventCount":{"name": "Session Event Count", "type": "int"} 
      }
    } else if(this.active_game === 'LAKELAND'){
      feature_request_list = {
        "sess_count_tired_txt_emotes_per_capita":{"name": "Test", "type": "float"}
      }
    }
    return feature_request_list;
  }



  static formatValue(val, format)
  {
      let ret_val;
      if (format == "int")
      {
        ret_val = parseFloat(val).toFixed(0);
      }
      else if (format == "float")
      {
        ret_val = parseFloat(val).toFixed(2);
      }
      else if (format == "pct")
      {
        ret_val = `${(parseFloat(val)*100).toFixed(0)} %`;
      }
      else
      {
        console.log(`Display value had unrecognized format ${format}. Using raw value ${val}`);
        ret_val = val;
      }
      return ret_val;
  }
}

function playstats_message(msg){
  let message = document.createElement("p")
  message.appendChild(document.createTextNode(msg))
  message.style.width = "-webkit-fill-available";
  let playstats = document.getElementById("playstats");
  playstats.appendChild(message);
}
