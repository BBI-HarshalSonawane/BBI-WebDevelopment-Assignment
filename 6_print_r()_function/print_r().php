

<!-- echo 👈👈👈👈👈👈👈👈👈 
 
1) echo is used to output scalar 👉"data types"👈  such as strings, numbers, and variables.
2) It ❌"cannot" handle complex data types like 👉"arrays"👈 or objects directly.

-->

<?php 
    include "../commanly_use_constant.php";

    echo "Hello, World!";

    // Does not provide a structured view of arrays or objects.
    // Cannot output complex data types directly:

    echo $mybrTag;

    $array = [1, 2, 3];
    echo $array; // Error: Array to string conversion


?>


<!-- ------------------------------------------------------ -->

<!-- print_r() 👈👈👈👈👈👈👈👈👈               So here we introduced an "print_r()"

### Syntax ###

print_r(mixed $expression, bool $return = false): string|bool

    1) print_r() is used to display structured data, such as arrays and objects, in a human-readable format.

Limitations:❌

1) Not suitable for simple text output (adds formatting, like Array(...)).
2) Slower than echo because it processes and formats the data.

-->

<?php 
   
    echo $mybrTag;

    $array = ["apple", "banana", "cherry"];
    print_r($array);
?>









































