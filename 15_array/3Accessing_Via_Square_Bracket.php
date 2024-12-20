
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

    <!-- 👇👇👇 Accessing array elements with square bracket[]  syntax  -->

    <?php
        echo $mybrTag;
        echo $myhrTag;

        $array = array(
            "foo" => "bar",
            42    => 24,
            "multi" => array(
                "dimensional" => array(
                    "array" => "foo"
                )
            )
        );

        var_dump($array["foo"]);
        var_dump($array[42]);
        var_dump($array["multi"]["dimensional"]["array"]);
    ?>

    <?php // ✅
        echo $mybrTag;
        echo $myhrTag;
        function getArray() {
            return array(1, 2, 3);
        }

        $secondElement = getArray()[1];
        echo $secondElement;
    ?>



</body>
</html>