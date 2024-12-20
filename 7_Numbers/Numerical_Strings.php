



<!-- 
 

    ✅ is_numeric() function can be used to find whether a variable is numeric.

    function returns "true" if the variable is a number or a numeric string,
    "false" otherwise.

-->


<?php 

    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));

?>








