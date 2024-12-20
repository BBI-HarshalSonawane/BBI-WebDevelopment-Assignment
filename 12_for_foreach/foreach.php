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

         
        $arr = array(1, 2, 3, 4);
        foreach ($arr as &$value) {
            $value = $value * 2;
            echo $value;
            echo $mybrTag;
        }

        // $arr is now array(2, 4, 6, 8)
        unset($value); // break the reference with the last element
         
        echo $mybrTag;
        echo $myhrTag;

// ---------------------------------------------------------------------------------------

// ✅
/* foreach example 1: value only */

        $a = array(1, 2, 3, 17);

        foreach ($a as $v) {
            echo "Current value of \$a: $v.\n";
        }
        echo $mybrTag;
        echo $myhrTag;

/* foreach example 2: value (with its manual access notation printed for illustration) */

        $a = array(1, 2, 3, 17);

        $i = 0; /* for illustrative purposes only */

        foreach ($a as $v) {
            echo "\$a[$i] => $v.\n";
            $i++;
        }
        echo $mybrTag;
        echo $myhrTag;

/* foreach example 3: key and value */

        $a = array(
            "one" => 1,
            "two" => 2,
            "three" => 3,
            "seventeen" => 17
        );

        foreach ($a as $k => $v) {
            echo "\$a[$k] => $v.\n";
        }
        echo $mybrTag;
        echo $myhrTag;

/* foreach example 4: multi-dimensional arrays */

        $a = array();
        $a[0][0] = "a";
        $a[0][1] = "b";
        $a[1][0] = "y";
        $a[1][1] = "z";

        foreach ($a as $v1) {
            foreach ($v1 as $v2) {
                echo "$v2\n";
            }
        }
        echo $mybrTag;
        echo $myhrTag;

/* foreach example 5: dynamic arrays */

        foreach (array(1, 2, 3, 4, 5) as $v) {
            echo "$v\n";
        }


        echo $mybrTag;
        echo $myhrTag;

        // ---------------------------------------------------------------------------------------

// ✅ Unpacking nested arrays with list() 

        $array = [
            [1, 2],
            [3, 4],
        ];

        foreach ($array as list($a, $b)) {                  // "list" ✅
            // $a contains the first element of the nested array,
            // and $b contains the second element.
            echo "A: $a; B: $b\n";
        }

        echo $mybrTag;
        echo $myhrTag;

        // ---------------------------------------------------------------------------------------

        $array = [
            [1, 2],
            [3, 4],
        ];
        
        foreach ($array as list($a, $b, $c)) {
            echo "A: $a; B: $b; C: $c\n";
            echo $mybrTag;
        }

        
        echo $mybrTag;
        echo $myhrTag;

        // ---------------------------------------------------------------------------------------


        $array = [
            [1, 2],
            [3, 4],
        ];
        
        foreach ($array as [$a, $b]) {          // with [] ✅
            echo "A: $a; B: $b\n";
            echo $mybrTag;
        }
        

        echo $mybrTag;
        echo $myhrTag;

        // ---------------------------------------------------------------------------------------
        

    ?>



</body>
</html>