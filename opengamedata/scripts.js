var tables;
var table;
var headers = {
  "start_date": "Start Date",
  "end_date": "End Date",
  "date_modified": "Date Modified",
  "Dataset ID": "Dataset ID",
  "sessions": "Sessions",
  "raw": "Downloads",
}
var readmes = {
  'WAVES': 'https://github.com/fielddaylab/waves/blob/master/README.md',
  'LAKELAND': 'https://github.com/fielddaylab/lakeland/blob/master/README.md',
  'CRYSTAL': 'https://github.com/fielddaylab/crystal/blob/master/README.md',
  'JOWILDER': 'https://github.com/fielddaylab/jo_wilder/blob/master/README.md'
}
var thumbs = {
  'WAVES': '../assets/img/thumbs/waves-thumb.jpg',
  'LAKELAND': '../assets/img/thumbs/lakeland-thumb.jpg',
  'CRYSTAL': '../assets/img/thumbs/crystal-thumb.png',
  'JOWILDER': '../assets/img/thumbs/jowilder-thumb.jpg'
}
var data_readmes = {
  'WAVES': 'https://opengamedata.fielddaylab.wisc.edu/data/WAVES/readme.md',
  'LAKELAND': 'https://opengamedata.fielddaylab.wisc.edu/data/LAKELAND/readme.md',
  'CRYSTAL': 'https://opengamedata.fielddaylab.wisc.edu/data/CRYSTAL/readme.md',
  'JOWILDER': 'https://opengamedata.fielddaylab.wisc.edu/data/JOWILDER/readme.md',
}

function change_tables(value, start=false) {
  let table = document.querySelector("table");
  table.innerHTML = '';
  jQuery.getJSON("data/file_list.json",function(result){
    tables = result;
    value = start ? Object.keys(tables)[0] : value
    let table = document.querySelector("table");
    let table_name;
    generateTableHead(table, headers);
    if(start)
    {
      generate_options();
      console.log(tables)
      // document.getElementById("readme_fname").href = `data/${Object.keys(tables)[0]}/readme.md`;
    }
    generateTable(table, tables[value], headers);
    document.getElementById('game_title').innerHTML = value;
    document.getElementById('game_readme').href = data_readmes[value];
    document.getElementById('game_img').src = thumbs[value];
    document.getElementById('game_img').alt = "Example image of "+value;

    
  });
}

function generateTableHead(table, headers) {
  let thead = table.createTHead();

  let row = table.insertRow();
  for (let key in headers) {
    let th = document.createElement("th");
    let text = document.createTextNode(headers[key]);
    th.appendChild(text);
    row.appendChild(th);
  }
}
function generateTable(table, data, headers) {
  setIDs = Object.keys(data)
  setIDs.sort((x,y) => Date.parse(data[y]["start_date"]) - Date.parse(data[x]["start_date"]))
  for (let setID of setIDs) {
    var set = data[setID]
    let row = table.insertRow();
    for (key in headers) {
      let cell = row.insertCell();
      var text = null;
      switch (key) {
        case "Dataset ID":
          text = document.createTextNode(setID);
          cell.appendChild(text);
          break;
        case "raw":
            var raw_link = document.createElement('a');
            var linkText = document.createTextNode("Raw");
            raw_link.appendChild(linkText);
            raw_link.title = "Raw";
            raw_link.href = set["raw"].replace('./', 'https://opengamedata.fielddaylab.wisc.edu/');
            cell.appendChild(raw_link);
            cell.append(document.createTextNode(' - '))

            var sql_link = document.createElement('a');
            var linkText = document.createTextNode("Processed");
            sql_link.appendChild(linkText);
            sql_link.title = "Processed";
            sql_link.href = set["proc"].replace('./', 'https://opengamedata.fielddaylab.wisc.edu/');
            cell.appendChild(sql_link);
            cell.append(document.createTextNode(' - '))

            var sql_link = document.createElement('a');
            var linkText = document.createTextNode("SQL");
            sql_link.appendChild(linkText);
            sql_link.title = "SQL Dump";
            sql_link.href = set["sql"].replace('./', 'https://opengamedata.fielddaylab.wisc.edu/');
            cell.appendChild(sql_link);
          break;
        default:
            text = document.createTextNode(set[key]);
            cell.appendChild(text);

      }
    }
  }
}

function generate_options(){
  select = document.getElementById("mySelect");
  select.onchange = function(){if (this.value) change_tables(this.value);};
  for(table_name in tables){
    var option = document.createElement("option");
    option.text = table_name;
    select.add(option);
  }
}

change_tables("CRYSTAL",true); // Note that the table name is irrelevant if start is marked "true"
