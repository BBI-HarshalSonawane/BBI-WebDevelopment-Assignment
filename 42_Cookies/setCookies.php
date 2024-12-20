<?php

// difference between session and cookies
// session is stored on server
// cookies are stored on client side
// cookies are not secure
// cookies are stored in plain text
// cookies are limited to 4kb
// cookies are stored in browser
// cookies are stored in text file
// cookies are stored in key value pair
// cookies are stored in client side
// session are automatically deleted when browser is closed
// cookies are stored in browser until it expires
// session needs to be started before using it
// session is more secure than cookies

// syntax to set cookies
// setcookie(name, value, expire, path, domain, secure, httponly);
// name: name of the cookie
// value: value of the cookie
// expire: expiration time of the cookie
// path: path on the server where cookie will be available
// domain: domain of the cookie
// secure: if true cookie will only be transmitted over secure connection
// httponly: if true cookie will only be accessible through http protocol

// setcookie('name', 'value', time() + 86400, '/');

/* Real Example of cookies in PHP as below 👇👇 */


echo "Setting the cookie <br>";
echo time();

setcookie('category', 'Books', time() + 86400, '/'); // 86400 = 1 day in seconds 
echo '<br> The cookie has been set for 1 day';

// meaning of above project is that we are setting the cookie for 1 day and after 1 day it will be deleted automatically
// take example of flipkart, amazon, etc. they set cookies for 1 day, 1 week, 1 month, etc. for tracking the user's activity
// then they show the user the products which they have seen earlier
// this is how cookies work

// means for 1 user is blocked for 1 day, then after 1 day the user is free to see the products again
// and we show the user the products via getcookies.php file 👈👈👈

?>



