



<!-- Here in php we need to create an ERROR ❌ code 404 manually
     VERY IMP because if we don't create it it will show ✅ Success code
     200 ✅ 
-->

<?php
  http_response_code(404);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Not Found</title>
  <link rel="stylesheet" href="style.css" type="text/css"> <!-- ✅ style file-->
</head>
<body>

<div class="container">
  <div class="label">404</div>
  <h1 class="title">You have found a secret place.</h1>
  <p class="description">
    Unfortunately, this is only a 404 page. You may have mistyped the address, or the page has
    been moved to another URL.
  </p>
  <div class="group">
    <a href="/Learnphp/38_build_own_404_page/index.php" class="button">Take me back to home page</a>
  </div>
</div>

</body>
</html>
