<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Quotes</title>
</head>
<body>


    <pre>
        <?php 

            include "../commanly_use_constant.php";

            echo 'I\'m a string';    // here we do small magin with '\' forward slah And allow single colun in string.
            
            $MyString = "Hello Everyone !!!";
            
            // By using an (.) dot we can concatinate string with another string
                           
            echo $mybrTag;
            echo $myhrTag;
           
            echo $MyString . " am your joining string";

            echo $mybrTag;
            echo $myhrTag;
            // --------------------------------------------------------------------------------
            // Now combine everything together.

            $fName="Jayant";
            $lName= "Patil";

            $Greet= 'Hello,' .$fName .'I\'m your mentor and ur surname is '.$lName;
            echo $Greet . '<br>';


        ?>
    </pre>



    
</body>
</html>