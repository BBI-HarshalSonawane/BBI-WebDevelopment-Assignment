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

//  both the below funct will use to read file contents.


// ✅   1) include

    include __DIR__."/inc/function.inc.php";    // if we use "include" it will not showing us an error on same line. At this line if file not found.

// --------------------------------------------------------------------------------------

// ✅   2) include_once

    include_once __DIR__."/inc/function.inc.php";

// --------------------------------------------------------------------------------------

// ✅   3) require

    require __DIR__."/inc/function.inc.php";    // ✅ require mainly used to strictly showing an error EX. if file is not available it will directly shows ❌ "fetal Error" And error will available at same line so that we can resolve it that us main difference with "include" ✅

// --------------------------------------------------------------------------------------

// ✅   4) require_once

        require_once __DIR__."/inc/function.inc.php";   // ✅ IF WE try to get same file data repeatedly then this 👉 "require_once" will be very helpful will not causes any ERROR ❌
        require_once __DIR__."/inc/function.inc.php";

// --------------------------------------------------------------------------------------


         $text = "Php learning path !";
        ?>

        <h1><?php echo($text); ?></h1>

    </pre>


</body>
</html>