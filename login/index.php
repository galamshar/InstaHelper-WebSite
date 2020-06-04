<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/loginresponsive.css">
</head>
<body>
<a href="../index.php"><h2>INSTAHELPER</h2></a>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="post" id="registerform">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Username" id="username" name="username" min="3" max="16"/>
            <input type="email" placeholder="Email" id="email" name="email" min="3" max="32"/>
            <input type="password" placeholder="Password" id="password" name="password" min="3" max="16"/>
            <button id="signup" type="button" name="signup" onclick="registerSubmit()">Sign Up</button>
            <br>
            <span id="register-errormsg"></span>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="post" id="login-form">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="text" placeholder="Email or Login" id="login" name="login" min="3" max="32"/>
            <input type="password" placeholder="Password" id="password" name="password" min="3" max="16"/>
            <a href="#">Forgot your password?</a>
            <button id="signin" type="button" name="signin" onclick="loginSubmit()">Sign In</button>
            <br>
            <span id="login-errormsg"></span>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<footer>
    <p style="padding: 0.3rem;font-weight: 500;">© Copyrights 2020, InstaHelper. All rights reserved.</p>
</footer>
<script src="https://kit.fontawesome.com/b965d4452c.js" crossorigin="anonymous"></script>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/login/login.js"></script>
</body>
</html>