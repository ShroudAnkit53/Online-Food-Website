<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodielicious - Login/Signup</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="images/diet.png" type="image/x-icon">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <div class="social-icons">
                <p>Log In through these options:</p>
                <a href=""><img src="login-images/fb.png" alt=""></a>
                <a href=""><img src="login-images/gp.png" alt=""></a>
                <a href=""><img src="login-images/tw.png" alt=""></a>
            </div>
            <form id="login" action="login.php" method="POST" class="input-group">
                <input type="text" name="username" class="input-field" placeholder="Enter UserName">
                <input type="password" name="password" class="input-field" placeholder="Enter Password">
                <button type="submit" class="submit-btn">Log In</button>
            </form>

            <form id="register" action="register.php" method="POST" class="input-group">
                <input type="text" name="username" class="input-field" placeholder="Enter UserName">
                <input type="email" name="email" class="input-field" placeholder="Enter Email">
                <input type="password" name="password" class="input-field" placeholder="Enter Password">
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px"
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px"
        }
    </script>
</body>

</html>