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

// ✅   1) file_get_contents()
// ✅   2) readfile()
//  both the above funct will use to read file contents 



        // Here we will get an whatever written in file.

            echo "We will just try to use __DIR__";

            $textContent = file_get_contents(__DIR__."/myFolder/first.php");    // ✅ file_get_contents

            echo $textContent;


            // $fileContent = 
            readfile(__DIR__."/myFolder/first.php");    // ✅ it will help to fetch the file data really very fast as compare to 👉 file_get_contents

            // echo $fileContent;

        ?>

</pre>


</body>
</html>