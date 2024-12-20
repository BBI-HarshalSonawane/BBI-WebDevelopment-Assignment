<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>
    
    <?php
         include "../commanly_use_constant.php";
    ?>

    <pre>
        <?php

        var_dump($_GET);  // it will return an any value present in our menu bar of chrome where our https:// wala code we return

        echo $mybrTag;
        echo $myhrTag;
        ?>
    </pre>

<!-- ---------------------- -->

    <?php
//       ?id=7973&category=electronics&quantity=3       //  👈👈<--- PUT THIS LINE with our url link like  👉👉  http://localhost:8888/Learnphp/18_GET/get.php?id=7973&category=electronics&quantity=3

        $id = $_GET['id']; 
        $category = $_GET['category'];
        $quantity = $_GET['quantity'];
        echo "There are $quantity units of the product with ID $id in the $category category available.";

        echo $mybrTag;
        echo $myhrTag;
    ?>

<!-- ---------------------- -->
   
    <?php if (!empty($_GET['book'])): ?>
        <h1><?php echo $_GET['book']; ?></h1>
    <?php endif; ?>

</body>

</html>