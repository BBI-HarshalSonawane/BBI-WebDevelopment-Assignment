<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double quotes</title>
</head>
<body>
    

    <pre>
        <?php 

            include "../commanly_use_constant.php";

            echo "I'm a double quotes string";    // here use double quotes directly it will able to use everything. 👇
                
            
            echo $mybrTag;
            echo $myhrTag;

            $MyString = "Hello Everyone !!!";

            // By using an (.) dot we can concatinate string with another string
           
            echo " {$MyString} am your joining string";      // with double quotes its possible to concatinate string without (.) directly used an curly braces {} for our variable

            echo $mybrTag;
            echo $myhrTag;
            // --------------------------------------------------------------------------------
            // Now combine everything together.

            $fName="Jayant";
            $lName= "Patil";

            
            $Greet= "Hello, {$fName} I'm your mentor and ur surname is {$lName}. ";
            echo $Greet;

            // --------------------------------------------------------------------------------

            echo "\n";      // here we use "\n" for new line 👈

            echo "My new line character!!!"

        ?>
            <!-- -------------------------------------------------------------------------------- -->
            <!-- lets see what was difference between <br/>  and  "\n" -->

            <!-- <br/>
            1) Creates a visible line break in the rendered webpage. 
            2) <br/> tag is directly interpreted by the browser as a command to break the line.
            -->
            <p>This is line 1.<br/>This is line 2.</p>
            

            <!-- "\n" 
            1)  Used in source code for structuring text or creating line breaks in output for a text file or terminal.
            2. It is typically not rendered as a line break in HTML but is effective in source code or plain text output.
            -->

        <?php
            echo "This is line 1.\nThis is line 2.";
        ?>

<!-- Here is IMP because when we try to print "$" with "$" -->

        <?php
           $itemName = "banana";
           $itemPrice = 23;

           echo "My item is {$itemName} and it price is \${$itemPrice} in dollar" // here we print "$" symbol also
        ?>



    </pre>
    


</body>
</html>