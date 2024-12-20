

<?php
    var_dump($_POST);

    function mySafety($value)   // ✅ IMP validation funct
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');// 👈 "htmlspecialchars"
    }
    
?>





