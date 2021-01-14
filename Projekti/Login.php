<?php
    $name='bledon';
    echo name;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
        <link rel="stylesheet" href="HomePage.css"/>
    <title>Document</title>
</head>
<body>
   <div class="form-container">
    <form class="login-form" id="login-form">
        <h1 class="log-h1">Login</h1>
        <h3>Email</h3>
        <input id="login-email" type="email" placeholder="enter">
        <h3>Password</h3>
        <input id="login-password" type="password" placeholder="password">
            <button class="login-button">Login</button>
            <p>Dont have an account?<a href="Register.html" style="border-bottom: 1px solid black; justify-content: space-around;">Register here.</a></p>
            <p id="login-error"></p>
            <?php $name ?>
    </form>
   </div>
   <script src="login.js"></script>
</body>

</html>