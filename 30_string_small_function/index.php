<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>

    <?php 
        
        
        $text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sequi pariatur quos et doloremque quas reprehenderit quisquam dolore eveniet corporis! Delectus error expedita optio nisi quam incidunt rerum eum, earum commodi voluptatibus soluta nostrum modi repellat tenetur, iusto enim id amet dolores neque perferendis velit! Sint, totam reprehenderit! Dolore similique molestias incidunt at cum porro et inventore iure architecto, maiores culpa earum reprehenderit sunt placeat nulla numquam, pariatur dignissimos facilis minima quasi enim unde dolorem voluptatum corporis. Repudiandae voluptas ut dolor deleniti! Quis, inventore facere error natus dolore odio numquam fuga a repudiandae aspernatur, eius dicta atque beatae eum esse modi molestias est similique itaque! Iste dolores quaerat natus laudantium unde incidunt rem perspiciatis earum nemo aspernatur! Sapiente laudantium dolorum fugit, debitis ullam expedita, quos obcaecati tempore, aliquam eligendi amet veritatis alias voluptatem labore tenetur rerum autem et omnis. Ad ratione perferendis maxime neque molestiae quis, natus laborum quia cumque quod similique quibusdam omnis fuga aliquam aspernatur nam. Amet, eveniet quibusdam. Ea sit recusandae qui numquam culpa, officiis voluptatibus voluptas. Laudantium recusandae eligendi assumenda voluptatum quam dignissimos eum, nesciunt dicta unde quis sint facilis culpa voluptates perspiciatis! Animi quae sint laboriosam veniam repudiandae maxime laborum laudantium impedit dolore! Molestiae, nulla?
        ";
        //  ✅ "strlen" 
        var_dump(strlen($text));
        "<br>";

        //  ✅ "str_starts_with" 
        var_dump(str_starts_with($text,"Lorem"));
        "<br>";

        //  ✅ "str_ends_with" 
        var_dump(str_ends_with($text,"Lorem"));
        "<br>";
        
        // -------------------------------------------------------------------------------------

        //  ✅ "Convert text to lower case" 
        var_dump(strtolower($text));
        "<br>";
        
        //  ✅ "Convert text to Upper case" 
        var_dump(strtoupper($text));
        "<br>";
        
        //  ✅ "Convert 1st text to Uppper Case"
        var_dump(ucfirst($text));
        "<br>";

        //  ✅ "remove white space"
        var_dump(trim($text));   // here we can also trim an specific char from string 
        "<br>";

        var_dump(ltrim($text)); // ltrim
        var_dump(rtrim($text)); // rtrim
        "<br>";

        //  ✅ get an correct possition of specific character.
        var_dump(strpos($text,"dolor"));
        "<br>";






    ?>
        
    </body>
</html>