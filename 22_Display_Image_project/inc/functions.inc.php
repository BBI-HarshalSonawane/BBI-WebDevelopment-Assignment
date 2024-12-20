

<?php
    include 'images.inc.php';
?>

<?php
    function mySafetyFunct($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');// 👈 "htmlspecialchars"
    }
?>



