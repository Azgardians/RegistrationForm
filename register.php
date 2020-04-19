<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./static/styles.css"/>
    <title>Currency Converter</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" action="register.php">
                <div id="error">
                    <?php include('errors.php'); ?>
                </div>
                <h1>Create Account</h1>
                
                <span>Use your email for registration</span>
                <input type="text" placeholder="Name" name="username" value="<?php echo $username; ?>" />
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" />
                <input type="password" placeholder="Password" name="password_1" />
                <input type="password" placeholder="Confirm Your Password" name="password_2" />
                <button type="submit" name="reg_user">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post" action="register.php">
                <div id="error">
                    <?php include('errors.php');?>
                </div>
                <h1>Sign in</h1>
                <span>Use your account</span>
                <input type="text" placeholder="Name" name="username" />
                <input type="password" placeholder="Password" name="password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="login_user">Sign In</button>
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

</body>
<script src="https://kit.fontawesome.com/c4be078159.js" crossorigin="anonymous"></script>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</html>
