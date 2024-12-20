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
    
<!-- https://www.php.net/manual/en/language.types.array.php     👈👈👈👈👈 follow this link -->

<!-- ✅✅ The array() function creates an array. There are three types of array that can be created:
    indexed,
    associative,
    multidimensional.
-->

<!-- 1️⃣ way ✅ Normal bracket wala "array"-->

    <?php
        $animals = ["cat", "dog", "rabbit"];
        var_dump($animals);
    ?>




<!-- 2️⃣ way ✅ Array by array() function wala "array"-->

    <?php
        echo $mybrTag;
        echo $myhrTag;

        $animals = array("cat", "dog", "rabbit");   // array() ✅
        var_dump($animals);
    ?>





<!-- 3️⃣ way ✅ Array by 🔑"key" and "value" pair

        An array can be created using the array() language construct. It takes any number of comma-separated key => value pairs as arguments.
    EX. 👇
        array(
            key  => value,
            key2 => value2,
            key3 => value3,
            ...
        )

    here The 👉 "key" can either be an 👉"int" or a "string"👈. The value can be of any type.
    -->

    <!-- 👇👇👇 Below we declared an key => value pair walla array -->


    <?php
        echo $mybrTag;
        echo $myhrTag;

        $array = array(
            "foo" => "bar",
            "bar" => "foo",
            100   => -100,
            -100  => 100,
        );
        var_dump($array);

    ?>


   





</body>
</html>