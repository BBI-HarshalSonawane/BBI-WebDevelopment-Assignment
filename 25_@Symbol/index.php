
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

        /* When we try to typeCast from 👉 "array" to "string" 👈 we get an error ❌ to prevent(don't show this error) 
        We used an ✅ @ symbol

        */


            if (isset($_GET['name'])) {

                $name = (string) $_GET['name'];    // WITHOUT ❌ @ symbol get error

                // $name = @(string) $_GET['name'];    // WITH ✅ @ symbol

                var_dump($name . '!!!');

                // @notexists();
            }
    
        ?>
    </pre>
<a href="index.php?<?php echo http_build_query(['name' => ['Jannis', 'Olivia']]); ?>">Link</a>
</body>
</html>















