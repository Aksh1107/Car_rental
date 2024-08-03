<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login-form-container">
      <span class="fas fa-times" id="close-login-form"></span>
      <form action="">
        <h3>User Login</h3>
        <input type="email" placeholder="email" class="box" />
        <input type="password" placeholder="password" class="box" />
        <p>Forget your passsword? <a href="#">Click here</a></p>
        <input type="submit" value="Login Now" class="btn" />
        <p>Or login with</p>
        <div class="buttons">
          <a href="https://google.com" class="btn">Google</a>
          <a href="https://facebook.com" class="btn">Facebook</a>
        </div>
        <p>Don't have an account? <a href="#">Create one</a></p>
      </form>
    </div>
<?php
$con=mysqli_connect('localhost','root','')
?>    
</body>
</html>