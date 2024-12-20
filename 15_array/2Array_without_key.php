
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


    <!-- 👇👇👇 Below we declared ✅"without" 🔑"key" walla array so it will increase it's value automatically  -->
        
    <?php
            echo $mybrTag;
            echo $myhrTag;
            
            $array = array("foo", "bar", "hello", "world");
            var_dump($array);  
    ?>


    <!-- 👇👇👇 Below we "Not" ❌ mention 🔑"key" to all elements in array it will increase it's value automatically  -->

    <?php
        echo $mybrTag;
        echo $myhrTag;

        $array = array(
                "a",
                "b",
            6 => "c",       // mentioned 🔑"key" to "c" only.
                "d",
        );
        var_dump($array);
    ?>

    <!-- 👇👇👇 Below we "Negative index" to 🔑"key" PHP will take care to assign the next key to n+1.  -->

    <?php
        echo $mybrTag;
        echo $myhrTag;

        $array = [];

        $array[-5] = 1;
        $array[] = 2;

        var_dump($array);
    ?>





    
</body>
</html>















