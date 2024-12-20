
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- https://www.php.net/manual/en/language.types.array.php    👈👈👈👈👈 follow this link --> 

    <pre>

        <?php
            $a=5;
        ?>

        <?php if ($a == 5): ?>
            A is equal to 5
        <?php endif; ?>
            
<!-- ------------------ -->


        <?php
            $vars = [1, 2, 3];
        ?>

        <?php foreach( $vars as $var ): ?>          <!-- here is (:) 👈 for the "foreach" statement -->
            <?php if($var):?>
                <p>Hello World!</p>
            <?php else:?>                   <!-- here is (:) 👈 for the "else" statement -->
            <p>Goodbye World!</p>
            <?php endif;?>                   <!-- here is (:) 👈 for the "endif" statement -->
        <?php endforeach; ?>
          
    </pre>

</body>
</html>







