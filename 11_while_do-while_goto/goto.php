<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        include "../commanly_use_constant.php";

         
        goto a;     //  ✅  goto

        echo 'Foo';

        a:
        echo 'Bar';



        echo $mybrTag;
        echo $myhrTag; 
        
        // ---------------------------------------------------------------------------------------

        for ($i = 0, $j = 50; $i < 100; $i++) {
            while ($j--) {
                if ($j == 17) {
                    goto end;
                }
            }
        }
        echo "i = $i";
        end:
        echo 'j hit 17';


        echo $mybrTag;
        echo $myhrTag; 

        // ---------------------------------------------------------------------------------------

        goto loop;
        for ($i = 0, $j = 50; $i < 100; $i++) {
            while ($j--) {
                loop:
            }
        }
        echo "$i = $i";


        echo $mybrTag;
        echo $myhrTag; 

        // ---------------------------------------------------------------------------------------
        
        $x=3;
        switch($x){
            case 0:
            case 3:
                print($x);    
                if($x)
                    goto def;
            case 5:
                $x=6;
            default:
                def:
                print($x);
        }

        echo $mybrTag;
        echo $myhrTag; 

        // ---------------------------------------------------------------------------------------




        
        
        










        
    ?>





</body>
</html>