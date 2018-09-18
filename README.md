# ICE-Tacho

**Simple web application to show the speed of the ICE train if your are in one.**

This reads from the internal API of the ICE Portal and shows the speed big on a screen.

## Requirements

* Git
* npm
* PHP (or any other webserver)
* A browser, well

## How to start

1. Fit the requirements: Git, npm and PHP (>= 5.4) on your device  
1. Clone this repository, `cd` in it
1. Run `npm install`
1. Start the CORS proxy: `$ ./node_modules/corsproxy-https/bin/corsproxy`
1. Start the internal PHP webserver within the cloned directory (`php -S localhost:8000`)
1. Open the page on http://localhost:8000/ 

## Todo

* Get rid of PHP, use a webserver from npm
* Add npm script to start the servers
* Show error messages if something went wrong
* Use build process to generate Vue.js from NPM and use local resources to limit traffic
* Use Sass/Less to clean up CSS 
