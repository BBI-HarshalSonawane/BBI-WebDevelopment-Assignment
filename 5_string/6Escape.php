
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
<pre>  

    <?php
    include "../commanly_use_constant.php";
    
    // $x = "We are the so-called "Vikings" from the north.";   // it will show an error.

    $x1 = "We are the so-called \"Vikings\" from the north.";
    echo $x1;
    echo $mybrTag;
    
    $x2 = 'We are the so-called \'Vikings\' from the north.';  // single quotes
    echo $x2;
    echo $mybrTag;
    
    $x3 = "Escape php variable name \$myvar";
    echo $x3;
    echo $mybrTag;
    
    $x4 = "Hello\nWorld";
    echo $x4;
    echo $mybrTag;
    
    $x5 = "Hello\rWorld";
    echo $x5;
    echo $mybrTag;
    
    $x6 = "Hello\tWorld";
    echo $x6;
    echo $mybrTag;
    
    
    ?>
</pre>

</body>
</html>


