<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        include "../commanly_use_constant.php";

// 1️⃣ Passing by Reference to Functions  ✅
    function incrementByTwo(&$num) {
        $num += 2;
    }
        
    $value = 5;
    incrementByTwo($value);
    echo $value; // Output: 7
    
    echo $mybrTag;
    echo $myhrTag;

    // ---------------------------------------------------------------------------------------

// 2️⃣ Assigning by Reference  ✅

    $a = 10;
    $b = &$a; // $b references $a
    $b += 5;
    echo "a: $a, b: $b"; // Output: a: 15, b: 15

    // $b = &$a links $b and $a.
    // Changing $b also changes $a, as they share the same memory location.

    echo $mybrTag;
    echo $myhrTag;

    // ---------------------------------------------------------------------------------------

//  3️⃣ Using & in foreach Loops  ✅
    
    $numbers = [1, 2, 3];

    foreach ($numbers as &$value) {
        $value *= 2; // Modify the original array
    }
    unset($value); // Important: unset the reference after the loop

    print_r($numbers);

// ...until ultimately the second-to-last value is copied onto the last value

// output:
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )


    echo $mybrTag;
    echo $myhrTag;

    // ---------------------------------------------------------------------------------------


    function addSuffix1($name) {
        $name .= " Smith";
    }
    
    $user = "John";
    addSuffix1($user);
    echo $user; // Output: John (unchanged)

// ------------

    function addSuffix2(&$name) {
        $name .= " Smith";
    }
    
    $user = "John";
    addSuffix2($user);
    echo $user; // Output: John Smith


    echo $mybrTag;
    echo $myhrTag;

    // ---------------------------------------------------------------------------------------

    ?>


</body>
</html>