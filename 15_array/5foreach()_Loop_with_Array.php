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


    <!-- 👇👇👇 use "foreach"✅ loop with array  -->

    <?php
        echo $mybrTag;
        echo $myhrTag;

        $array = array(1, 2, 3, 4, 5);
        print_r($array);
        echo $mybrTag;

        // Now delete every item, but leave the array itself intact:
        foreach ($array as $i => $value) {
            unset($array[$i]); // delete value by accessing via key.
        }
        print_r($array);
        echo $mybrTag;

        // Append an item (note that the new key is 5, instead of 0).
        $array[] = 6;
        print_r($array);
        echo $mybrTag;

        // Re-index:
        $array = array_values($array);
        $array[] = 7;
        print_r($array);
    ?>


    
</body>
</html>