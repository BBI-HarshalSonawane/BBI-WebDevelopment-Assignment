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
    
        // $PageTitle = "Php is best!";
        // $PageTitle = "";                // 👈👈 show true ✅ for empty($PageTitle)
        $PageTitle = 0;                    // 👈👈 show true ✅ for empty($PageTitle)

// -----------

        unset($PageTitle);          // ✅ unset()       will completely remove the variable.

        var_dump(isset($PageTitle));        // ✅ isset()
        
        var_dump(empty($PageTitle));        // ✅ empty()

    
    
        ?>

    </pre>


    <?php 

        if(isset($PageTitle)){
            echo "<h1>{$PageTitle}</h1>";
        }
        if(!empty($PageTitle)){     // we mention (!) not overthere means 
            echo "<h1>I am running when Page title is available...</h1>";    
        }
    ?>


</body>
</html>