# ICE-Tacho

**Simple web application to show the speed of the ICE train if your are in one.**

This reads from the internal API of the ICE Portal and shows the speed big on a screen.

## Why PHP?

Because of the strict CORS restrictions the data is not accessible from any page, including local files.
Therefor there is a small PHP script to fetch the data and redistributes it on localhost.
 
## How to start

1. Fit the requirements: Git and PHP (>= 5.4) on your device  
1. Clone this repository
1. Start the internal PHP webserver within the cloned directory (`php -S localhost:8000`)
1. Open the page on http://localhost:8000/ 

## Todo

* Auto-fetching the values
* Strip down css (Bootstrap is too much)
* Strip down JS
* Smart error messages
