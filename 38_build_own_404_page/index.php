

<!-- So basically here we try to create an project in which 
    if user try to access an ✅ "ID greater than 5"
    then we will redirect him to our 
    👉👉 custom 404 ❌ page.

 -->

<?php 
    include './mySafety_Funct.php';

    $id = (!empty($_GET['id'])) ? (int)($_GET['id']) :1;

    if($id >= 5){
        require __DIR__ .'/page404.php';
        die();        // 👈👈👈 😎 must need to use die()
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page404</title>
</head>
<body>
    <header><h1>News Website</h1></header>
    <main>
        You accessing article with ID <?php echo mySafety($id); ?>...
    </main>
</body>
</html>






