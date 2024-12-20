<?php


    echo '<pre>';
        $myIP = $_SERVER['REMOTE_ADDR'];
        var_dump($myIP);

        var_dump($_SERVER);

    echo'</php>';



?>

<?php echo "<br>"."👇👇👇👇" ?>


<!-- ✅ "HTTP_USER_AGENT"  is nothing but it will show the who is our service provider. -->

<?php

    echo '<pre>';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';  // 👈 if "HTTP_USER_AGENT" is not set then assigned "" <-- 👈 empty string
        
        var_dump($userAgent);

    echo'</php>';

?>
