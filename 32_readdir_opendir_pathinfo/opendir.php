

<?php
    $dir = __DIR__.'/images/';
    $imageArray = [];

    // Open a directory, and read its contents
    if (is_dir($dir)){
    if ($dh = opendir($dir)){       // ✅  opendir()
        while (($file = readdir($dh)) !== false){       // ✅ here we store an value to the "$file" 👈 file
            if($file === '.' || $file === '..'){
                continue;
            }
            echo "filename:" . $file . "<br>";

            $imageArray[] = $file;      // store image from images folder into $imageArray[] array
            echo $imageArray;
            var_dump($imageArray);
        }
        closedir($dh);      // ✅  closedir()
    }
    }
?>

<pre>

    <?php foreach ($imageArray as $justImage): ?>
        <img src="images/<?php echo rawurldecode($justImage); ?>" alt="not found"/>
    <?php endforeach; ?>


</pre>