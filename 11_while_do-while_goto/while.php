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
        
        
        $VAL = 1;

        while ($VAL <= 10) {
            echo $VAL++;  // (post-increment) ➕➕ print value first then increment
            echo $mybrTag;
        }
        echo $mybrTag;
        echo $myhrTag; 
        
        
        // ---------------------------------------------------------------------------------------
        
        $VAL = 1;
        while ($VAL <= 10):
            echo $VAL;
            $VAL++;
            echo $mybrTag;
        endwhile;
        
        
    ?>
        
</body>
</html>