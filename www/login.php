<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$error = "";

if(isset($_GET['cmd']) && $_GET['cmd']== "logout") {
    $_SESSION["login"] = false;
}
if(isset($_GET['error']) && $_GET['error']== "1") {
    $error = "Invalid user or password.";
}

?>
<html>
    <head>
        <title>Login | Family House</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="login-box">
            <img src="Avatar.png" class="avatar">
             <h1>Login</h1>
               <?php if($error != "") { ?> 
                    <h2 class="login-error"><?php echo $error;?></h2>
               <? } ?>
                <form action="process.php" method="POST">
                    <p>Username</p>
                    <input type="text" id="user" name="username" placeholder="Enter Username">
                    <p>Password</p>
                    <input type="password" id="user" name="password" placeholder="Enter password">
                    <input type="submit" id="btn" name="submit" value="Login">
                    <br>
                    <a href="#">Forget Password</a>
                    <br><br>
                    Dont have an account? 
                    <a href="sign up.php">Sign up</a>
                </form>

        </div>

    </body>
</html>