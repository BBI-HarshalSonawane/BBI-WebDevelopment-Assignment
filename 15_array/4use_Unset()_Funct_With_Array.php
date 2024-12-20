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

    <!-- 👇👇👇 use "unset()"✅ with array  -->

    <?php
        echo $mybrTag;
        echo $myhrTag;

        $arr = array(5 => 1, 12 => 2);

        $arr[] = 56;    // This is the same as $arr[13] = 56;
                        // at this point of the script

        $arr["x"] = 42; // This adds a new element to
                        // the array with key "x"
                        
        unset($arr[5]); // ✅ This removes the element from the array

        unset($arr);    // ✅ This deletes the whole array
        
        // echo $arr;   // ❌ error becz we already delete array
    ?>
</body>
</html>