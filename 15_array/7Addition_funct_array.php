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


        $students = [
            "Alice", "Bob", "Charlie", "David", "Emma", "Frank",
            "Grace", "Henry", "Isabella", "Jack", "Kate", "Liam",
            "Mia", "Noah", "Olivia", "Peter", "Quinn", "Ruby",
            "Sophia"
        ];
        

        var_dump(array_search( "Henry",$students));
        
        echo $mybrTag;
        echo $myhrTag;
        
        // -----------------------------------------------------------------------------

        var_dump(array_splice( $students, 1,4));
        
        echo $mybrTag;
        echo $myhrTag;
        
        // -----------------------------------------------------------------------------
        
        $numArray = [2,4,6,7,8,9,0];
        var_dump(min( $numArray));
        var_dump(max( $numArray));
        var_dump(array_sum( $numArray)/ count($numArray)); // find Avg
        
        echo $mybrTag;
        echo $myhrTag;
        
        // -----------------------------------------------------------------------------
        
        
        echo "<h1>Merge 2 array !!!</h1>";
        echo $mybrTag;
        $topic1=["NewCourse", "class"];
        $topic2=["Teacher", "Student"];
        
        $myOutput = array_merge( $topic1, $topic2 );
        print_r($myOutput);

        echo $mybrTag;
        echo $myhrTag;
        
        // -----------------------------------------------------------------------------
        
        echo "<h1>Merge Recursive 2 array !!!</h1>";
        $myOutput = array_merge_recursive( $topic1, $topic2 );
        print_r($myOutput);
        
        echo $mybrTag;
        echo $myhrTag;
        
        // -----------------------------------------------------------------------------
        
        echo "<h1>Combine 2 array !!!</h1>";
        $myOutput = array_combine( $topic1, $topic2 );
        print_r($myOutput);

        
        echo $mybrTag;
        echo $myhrTag;
        
        // -----------------------------------------------------------------------------.

// Adding multiple array into single array.

        var_dump([...$topic1, ...$topic2, "meJustNewElement"]);



        
    ?>
















</body>
</html>