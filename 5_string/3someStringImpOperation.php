

<?php 

    include "../commanly_use_constant.php";

    echo "<h1>Here is below string length we find </h1>\n";
    $myString = "Hello world!";
    echo strlen($myString);

    echo $mybrTag;
    
    echo "<h1>Here is below string we count num of words </h1>\n";
    echo str_word_count($myString);
    
    echo $mybrTag;
    
    echo "<h1>Find position of text Within a String </h1>\n";
    echo strpos($myString, "world");
    
    echo $mybrTag;
    echo "<h1>Convert String into 'Upper Case' </h1>\n";
    echo strtoupper($myString);
    
    echo $mybrTag;
    echo "<h1>Convert String into 'Lower Case' </h1>\n";
    echo strtolower($myString);
    
    echo $mybrTag;
    echo "<h1>Replace String with some other characters </h1>\n";
    echo str_replace("World", "Dolly", $myString);
    
    echo $mybrTag;
    echo "<h1>Reverse a String </h1>\n";
    echo strrev($myString);
    
    echo $mybrTag;
    echo "<h1>Remove Whitespace from String </h1>\n";
    echo trim($myString);
    
    echo $mybrTag;
    echo "<h1>Convert String into Array</h1>\n";
    $y = explode(" ", $myString);  // Split the string into an array. Use the space character (" ") as separator:
    print_r($y);        // print_r() function we use.
    print_r($myString);
    
    
    echo $mybrTag;
    $array = [1, 2, 3];
    // echo $array;     // it will not working
    print_r($array);







?>