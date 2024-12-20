<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>

<!-- Here Server side scripting mainly we used to prevent an website malicious access. We use 👉 "htmlspecialchars" for prevent from such things.-->
    <pre>
        <?php
            var_dump($_POST);

            function mySafety($value)   // ✅ IMP validation funct
            {
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');// 👈 "htmlspecialchars"
            }
        ?>
    </pre>

        <!-- "htmlspecialchars" 👈 here
          ✅ "$value" is
          Example: If $value = "<script>alert('Hi');</script>";, the htmlspecialchars() function will convert the HTML tags into harmless text.
          
          ✅ ENT_QUOTES:
            ENT_QUOTES means both single (') and double (") quotes are converted to their HTML entities:
            Single quote (') → &#039;
            Double quote (") → &quot;

          ✅ 'UTF-8':
            Using 'UTF-8' ensures that the input is processed correctly in modern web standards and avoids encoding-related vulnerabilities.

          -->

    <h1>
        <?php if (!empty($_POST['firstname'])) echo mySafety($_POST['firstname']); ?> <!--Here we used that funct "mySafety()"--->
    </h1>

    <form action="xss(Cross-Site Scripting).php" method="POST">
        <input type="text" name="firstname" 
            value="<?php if (!empty($_POST['firstname'])) echo mySafety($_POST['firstname']); ?>"
        />
        <input type="submit" value="Submit!" />
    </form>

    <h2>
        <?php if (!empty($_GET['book'])) echo mySafety($_GET['book']); ?>
    </h2>

    <?php $course = 'PHP course'; ?>

    <p>
        <?php echo mySafety($course); ?>
    </p>

</body>

</html>