<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        include "../commanly_use_constant.php";
    ?>

     <!-- 👇👇👇 use "Array destructuring"✅  with array  -->

    <!-- 1️⃣ way ✅-->
    <?php
        echo $mybrTag;
        echo $myhrTag;

        $myArray = ['foo', 'bar', 'baz'];
        [$foo, $bar, $baz] = $myArray;

        echo $foo; 
    echo $mybrTag;  // for line break
        echo $bar; 
    echo $mybrTag;
        echo $baz; 

    ?>

    <!-- 2️⃣ way ✅-->
    <?php
        echo $mybrTag;
        echo $myhrTag;

        $source_array = [
            [1, 'John'],
            [2, 'Jane'],
        ];

        foreach ($source_array as [$id, $name]) {
            echo "my id = {$id} and name {$name}";
            echo $mybrTag;
        }
    ?>


    <!-- 3️⃣ way ✅-->
    <?php

        echo $mybrTag;
        echo $myhrTag;
        $source_array = ['foo', 'bar', 'baz'];
        
        // Assign the element at index 2 to the variable $baz
        [ , ,$bhai] = $source_array;
        
        echo $bhai;    // prints "bhai"
    ?>


    <!-- 4️⃣ way ✅-->

    <?php
        echo $mybrTag;
        echo $myhrTag;

        $justArray = ['foo' => 1, 'bar' => 2, 'baz' => 3];

        // Assign the element at index 'baz' to the variable "$three"

        ["baz" => $three] = $justArray;

        echo $three;
        echo $mybrTag;

        // Assign the element at index "2" to the variable "$baz"

        [2 => $baz] = $justArray;
        echo $baz;

    ?>


    <!-- 5️⃣ way Swap 2 numbers with Array destructuring  ✅-->

    <?php
        $a = 1;
        $b = 2;

        [$b, $a] = [$a, $b];

        echo $a;    // prints 2
        echo $b;    // prints 1
    ?>





</body>
</html>