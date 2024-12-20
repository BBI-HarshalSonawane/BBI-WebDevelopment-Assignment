<?php


    $contents = file_get_contents(__DIR__ . '/index.json');
    $data = json_decode($contents, true);       // ✅ json_decode

    var_dump($contents); // it will return data sae as store in actual file

    var_dump($data); // o/t of json_decode is shown in associate array of php, see on webpage and 👉 select "view page source" option

    var_dump($data[0]['city']);

// -------------------------------------------------------------------------------------------

    echo filesize(__DIR__ . '/index.json');

// -------------------------------------------------------------------------------------------
    
    phpinfo();

// -------------------------------------------------------------------------------------------

    // $data = json_decode(file_get_contents('compress.bzip2://' . __DIR__ . '/../data/singapore.json.bz2'), true);
    // var_dump($data);

//  this above commented line is not to useful currently

?>


