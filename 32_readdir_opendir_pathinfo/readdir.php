


<?php
    $dir = __DIR__.'/images/';

    // Open a directory, and read its contents
    if (is_dir($dir)){
    if ($dh = opendir($dir)){                   // ✅   opendir()
        while (($file = readdir($dh)) !== false){       // ✅   readdir()
        echo "filename:" . $file . "<br>";
        }
        closedir($dh);
    }
    }
?>