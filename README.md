# pfft-websysproj
WebSys Project

Go to project here: https://galexford.github.io/pfft-websysproj/#/

Documentation:
Using bookdaddy:
The root folder of the website is fipro. Fipro requires Xampp (or some other amp stack) to be running. Specifically, it relies on the 
apache web server and the sql database. To set up the bookdaddy’s database, import the bookdaddy.sql file found in fipro using phpMyAdmin. 
Next, set up a virtual host with fipro as the root folder and set up your hosts file to map to the virtual host you created. Access the website
 by typing the address you mapped to the website into your browser.

Organization:
The file structure of the site is based in fipro and is divided based into views, statics, and controllers. The index.html file found in fipro is... 
The view folder contains all of the html and php that is displayed on the website. If you can see it, then it’s found in views. Views also contains 
a layout folder, which holds the header and footer for the website. The static folder contains all the back-end scripts for the website. Its subdivided 
into php, js, and css for php, js, and css files respectively. Finally, the controllers folder contains router.js and the front folder. Router.js is the 
file that tells Angular where each part of the webpage is. Front is the folder that holds the angular controllers for each page in the site.

Components: 

Add Listing: 
	Files: views/addListing.html, static/js/addListing.js, static/php/addlisting.php  

	addListing.html is the main web page for addListing and is accessed by clicking the “Add a Listing” button on the navbar. It houses the form used to
	add listings. Clicking submit on the form will call addListing.js and in turn use ajax to call addlisting.php. It uses addListing.js to hide and reveal
	elements. addListing.js uses ajax to call addlisting.php to take data in the form and put it into the sql database.
	

My Listings: 
	Files: views/listings.html, static/js/myListings.js, static/php/mylistings.php

	Listings.html is the main page to view your listings on. It is accessed by clicking the “My Listings” button on the navbar. Mylistings.js is the
	script that adds the data retrieved by the php to the myListings.html page and displaying them in divs on the html page. Listings.php works by
	selecting products from the database by type (book, furniture, and other) and echoing it to myListings.js.

Sign Up:
	Files: views/signup.php, static/js/signup.js, static/php/signup.php

	Signup.php is where the user creates an account. It is accessed by clicking on log in. On the log in page there is a sign up button. From there
	the user goes to the signup.php page. They are asked to fill out their first name, last name, email, date of birth, and a password. They can click
	the register button, where our code confirms that it is a edu email and that all the fields are filled in correctly. Once they fill in all the fields
	correctly, their password is salted and hashed and their info is added to the database. 
	
Log In:
	files:views/login.php
	
	Login.php is where the user can get into their account using the email and password they used to register for an account. They
	type in their email in the email slot and password in the password slot, then click the button labelled “Login” to start their 
	account’s session. Once the “Login” button is pressed, the user is immediately taken to the “My Listings” page and shown the
	listings that they have input into the site’s database through the “Add Listing” page.
