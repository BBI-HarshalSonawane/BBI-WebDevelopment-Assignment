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



        $x=3;
        switch($x){
            case 0:
                
            case 3:
                print($x);

                if($x)
                    goto def;           //✅  here use  "goto"

            case 5:
                $x=6;

            default:
                def:
                print($x);
        }




    ?>





</body>
</html>