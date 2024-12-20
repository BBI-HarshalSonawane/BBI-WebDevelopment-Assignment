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



        // ✅  "break"

        $arr = array('one', 'two', 'three', 'four', 'stop', 'five');
        foreach ($arr as $val) {
            if ($val == 'stop') {
                break;    /* You could also write 'break 1;' here. */
            }
            echo "$val<br />\n";
        }

        echo $mybrTag;
        echo $myhrTag;
// ---------------------------------------------------------------------------------------
   

        // ✅  "continue"

        $arr = ['zero', 'one', 'two', 'three', 'four', 'five', 'six'];
        foreach ($arr as $key => $value) {
            if (0 === ($key % 2)) { // skip members with even key BECZ HERE KEY IS BY Default assigned from 0 to ...
                continue;
            }
            echo $value . "\n";
        }

    ?>



</body>
</html>