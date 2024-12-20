<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Statement</title>
</head>
<body>

    <pre>
        <?php 
            $ServerStatus = "error";

            if($ServerStatus === "ok"){
                echo "🟢 Welcome to website !!!!";
            }
            else if($ServerStatus === "error") {
                echo "❌ We got an error...";
            }  
            else{
                echo "🔴 We'\re currently in maintenance !!! ";
            } 
        ?>
    </pre>
    
</body>
</html>