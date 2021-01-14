<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomePage.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
            <form class="register-form" id="form">
                <h1>Register</h1>
                <p class="pp1">Create your account.It's free and only takes a minute</p>
                <h4>Username</h4>
                <input type="text" placeholder="username">
                <h4>Email</h4>
                <input id="register-email" type="email" placeholder="enter">
                <h4>Password</h4>
                <input type="password" placeholder="password">
                <h4>Confirm Pswword</h4>
                <input id="confirm-password" type="Password" placeholder="Confirm Password">
                <button class="login-button">Register</button>
                <p >Have alredy an account?<a href="Login.html"><em class="pp2"style="font-size: medium;">Login here</em></a></p>
                <p id="register-error"></p>
            </form>
    </div>
   <script src="register.js"> </script>
</body>

</html>