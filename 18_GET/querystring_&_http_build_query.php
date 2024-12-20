<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
    
            var_dump($_GET);

        ?>
    </pre>

    <?php if (!empty($_GET['book'])): ?>
        <h1><?php echo $_GET['book']; ?></h1>
    <?php endif; ?>

    <?php
     /*
        <a href="querystring.php?book=Harry Potter">Harry Potter</a>
        <a href="querystring.php?book=Beauty & the Beast">Beauty & the Beast</a>
    */
    ?>


<!-- We use "http_build_query()"✅ funct instead of "querystring" ✅ becz if we pass "Beauty & the Beast" 👉 "querystring" it will only detect an to "Beauty" becz it pretends space was there becz of (&) operator overthere. -->


    <?php
        $params = [ 
            'location' => 'New York', 
            'amenity' => 'Bed & Breakfast', 
            'deal' => 'Special & Offers'
        ];
        $query = http_build_query($params); 
        $url = "http://localhost:8888/Learnphp/18_GET/querystring_&_http_build_query.php?".$query;
        
    ?>

    <a href="querystring.php?<?php echo http_build_query(['book' => 'Harry Potter']); ?>">Harry Potter</a>

    <a href="querystring.php?<?php echo http_build_query(['book' => 'Beauty & the Beast', 'author' => 'Gabrielle-Suzanne Barbot de Villeneuve']); ?>">Beauty & the Beast</a>
    
</body>
</html>