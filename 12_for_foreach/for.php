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

        
/* ✅   example 1 */

        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        echo $mybrTag;
        echo $myhrTag;

// ---------------------------------------------------------------------------------------
        
/*  ✅  example 2 */

        for ($i = 1; ; $i++) {
            if ($i > 10) {
                break;
            }
            echo $i;
        }
        echo $mybrTag;
        echo $myhrTag;

// ---------------------------------------------------------------------------------------
        
/*  ✅  example 3 */

        $i = 1;
        for (; ; ) {
            if ($i > 10) {
                break;
            }
            echo $i;
            $i++;
        }
        echo $mybrTag;
        echo $myhrTag;

// ---------------------------------------------------------------------------------------
        
/*  ✅  example 4 */

        for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);


        echo $mybrTag;
        echo $myhrTag;
        
// ---------------------------------------------------------------------------------------
        

    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );

    for($i = 0; $i < count($people); ++$i) {                // count
        $people[$i]['salt'] = mt_rand(000000, 999999);  // mt_rand(min, max) same as rand
    }

        
// ----------------------------------------sss-----------------------------------------------
        



    ?>





</body>
</html>