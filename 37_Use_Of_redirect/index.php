<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {    // here ✅ $_SERVER is an array containing all the "REQUEST_METHOD" all this elements
    echo '<pre>';
    echo "Form Data Submitted:\n";
    print_r($_POST);
    echo '</pre>';
  }

  var_dump($_SERVER); // it will show us an "$_SERVER" 👈 content
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentication Form</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<div class="paper">
  <h2>Welcome to Mantine, <span id="form-type-text">login</span> with</h2>

  <div class="group">
    <button class="btn" type="button">Google</button>
    <button class="btn" type="button">Twitter</button>
  </div>

  <div class="divider">
    <span>Or continue with email</span>
  </div>

  <form id="auth-form" method="POST" action="">
    <div class="stack">
      <div id="name-field" style="display: none;">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name">
      </div>

      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="hello@example.com" required>
        <small id="email-error" style="color: red; display: none;">Invalid email</small>
      </div>

      <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password" required>
        <small id="password-error" style="color: red; display: none;">Password should include at least 6 characters</small>
      </div>

      <div id="terms-field" class="checkbox" style="display: none;">
        <input type="checkbox" id="terms" name="terms">
        <label for="terms">I accept terms and conditions</label>
      </div>
    </div>

    <div class="group" style="margin-top: 1.5rem;">
      <span class="dimmed" id="toggle-link">Don't have an account? Register</span>
      <button type="submit" class="btn" id="submit-button">Login</button>
    </div>
  </form>
</div>

<script src="index.js"></script>

</body>
</html>
