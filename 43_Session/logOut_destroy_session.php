<?php

    // now we try to "destroy" ❌ the session
    // means log out the user ✅


    session_start();
    if (isset($_SESSION["username"]) && $_SESSION["category"]) {
        session_unset();
        session_destroy();
        echo "You have been logged out";
    } else {
        echo "You are not logged in";
    }

?>