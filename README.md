# Field Day Website ⛳🧑‍🚀
public website for Field Day

## Building the site locally

**Requirements**
- PHP - v5.4 or newer
- Node - v9.11.2 LTS (recommended)
  - Warning ⚠️: this site uses packages that are incompatible with Windows (try wsl) 
- an HTTP server running with vhosts pointing to `%project_dir%`
  Recommendations:
  * PHP [built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php)
  * [MAMP](https://www.mamp.info/en/windows/)

## Initial Installation
1. Clone the repo
```
git clone <path-to-dir>/fielddaysite
cd <path-to-dir>/fielddaysite
```

2. Install Node Dependencies
`npm install` in your `%project_dir%`

## Build & Run the Site
1. Run Gulp from Node Script
```
npm watch
```

2. With Gulp running start your HTTP Server
with PHP:
```
php -S localhost:8080`
```
or with MAMP:
* Follow [these](https://documentation.mamp.info/en/MAMP-Mac/First-Steps/index.html) steps to set up MAMP to serve the site
