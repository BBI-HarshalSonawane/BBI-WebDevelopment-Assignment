<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- https://www.codecademy.com/resources/docs/php/arrays     〽️refer this link for more....... -->

    <?php
        include "../commanly_use_constant.php";
    ?>

    <?php
    
    // ✅   array_chunk()

//      Syntax
//      array_chunk($array, $length, $preserve_keys)

/*      $array: Specifies the input array.
        $length: An integer that specifies the number of elements in a chunk.
        $preserve_keys: When set to true keys will be preserved. The default is false which will reindex each chunk.
    The array_chunk() function returns a multidimensional array, with each dimension containing $length elements.
*/
   

    $students = [
        "Alice", "Bob", "Charlie", "David", "Emma", "Frank",
        "Grace", "Henry", "Isabella", "Jack", "Kate", "Liam",
        "Mia", "Noah", "Olivia", "Peter", "Quinn", "Ruby",
        "Sophia"
    ];
    
    function chunkStudents($students, $chunkSize) {         // 🎁 defining funct here
        $chunkedArray = array_chunk($students, $chunkSize);
        
        //                           key           value
        foreach ($chunkedArray as $chunkNumber => $chunk) {
            echo "Chunk " . ($chunkNumber + 1) . ": " . implode(', ', $chunk) . "\n";
            // echo $mybrTag;
        }
    }

    chunkStudents($students, 5);    // 🎁 calling funct here

    echo $mybrTag;
    echo $myhrTag;



// 2️⃣ nd way  ✅ OR


    ?>

    <pre>
        <ul>
            <?php foreach ($students as $child):   ?> <!-- (.) for ending of "foreach" -->
                <li>
                    <?php 
                        echo $child;
                        echo $myhrTag;
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </pre>



</body>
</html>