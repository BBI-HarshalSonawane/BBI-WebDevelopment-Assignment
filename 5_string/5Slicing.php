

<!-- "Slicing Strings" 👈👈👈👈👈 -->

<?php

    include "../commanly_use_constant.php";

    $x = "Hello World!";

    // first way 👈👈👈   "Normal Slice" by start and end value.

    /*
    1) You can "return" a 👉 range of characters by using the substr() function.

    2) Specify the 👉 "start index" and the 👉 "number of characters" to return.
    */ 

    echo substr($x, 6, 5);  // substr() 👈  

    echo $mybrTag;
    // ---------------------------------------------------------------------------

    // second way 👈👈👈   "Slice to the End" 😇

    echo substr($x, 6);

    echo $mybrTag;
    // ---------------------------------------------------------------------------

    // Third way 👈👈👈 " Slice From the End" 😇

    echo substr($x, -5, 3);

?>































