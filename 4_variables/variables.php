
<!-- 1. By Normal Way -->

<?php 

    $greeting = "Hello from me !!!"; //Here we decleared our variable.

    // echo ($greeting);

?>

<!-- ------------------------------------------------------------------------------------------- -->

<!-- 2. Use global Keyword -->

<?php
    $sharedVariable = "Accessible globally!";
?>


<!-- ------------------------------------------------------------------------------------------- -->

<!-- 3. Use return to Return Values -->

<?php
    return "Hello from returned variable!";
?>



<!-- ------------------------------------------------------------------------------------------- -->

    <!-- 4. Use Session Variables -->


<?php
    session_start();
    $_SESSION['sharedVariable'] = "I am stored in a session!";
?>



<!-- ------------------------------------------------------------------------------------------- -->

    <!-- 5. Use Constants -->

<?php
    define('MY_CONSTANT', 'This is a constant value!');
?>






