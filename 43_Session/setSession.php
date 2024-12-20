<?php

// session is 🚻 "stored" on server
// session is more secure than cookies
// session are automatically ❌ "deleted" when browser is closed
// session needs to be ✅ "started" before using it
// session is stored in ✅ "key" "value" pair

// syntax to set session 👇👇👇
// $_SESSION['name'] = 'value';

// Ex 

session_start();

$_SESSION['username'] = 'Harsh';
$_SESSION['category'] = 'Books';

echo "Session is set for the user {$_SESSION['username']}";

// to see the session we have to create another file and see the session
// see getSession.php file
?>