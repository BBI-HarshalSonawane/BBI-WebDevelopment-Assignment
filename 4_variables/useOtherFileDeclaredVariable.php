<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 1. By Using Simple way  --> 

    <h1>Below variable from other file by simple way.</h1>
    <h3>
        Hey there, 
        <?php 

            include "variables.php";    // here we access the variable declered in other file
            echo $greeting;     // and here we print that variable.

        ?>
    </h3>

    <!-- ------------------------------------------------------------------------------------------- -->


    <!-- 2. By Using global Keyword -->

    <h1>Below variable from other file by global variable.</h1>
    <h3>
        <?php
            include 'variables.php';

            function printVariable() {
                global $sharedVariable;
                echo $sharedVariable; // Outputs: Accessible globally!
            }

            printVariable();
        ?>
    </h3>


    <!-- ------------------------------------------------------------------------------------------- -->

    <!-- 3. Use return to Return Values -->

    <h1>Below variable from other file by "return" keyword.</h1>
    <h3>

        <?php
            $myVariable = include 'variables.php';
            echo $myVariable; // Outputs: Hello from returned variable!                     
        ?>

    </h3>


     <!-- ------------------------------------------------------------------------------------------- -->

    <!-- 4. Use Session Variables -->

    <h1>Below variable from other file by using "Session".</h1>
    <h3>
        <?php
        session_start();
        echo $_SESSION['sharedVariable']; // Outputs: I am stored in a session!
        ?>
    </h3>


     <!-- ------------------------------------------------------------------------------------------- -->

    <!-- 5. Use Constants -->
    <h1>Below variable from other file by using "Constants".</h1>
    <h3>
        <?php
            include 'variables.php';
            echo MY_CONSTANT; // Outputs: This is a constant value!
        ?> 
    </h3>


</body>
</html>