<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if($_SESSION['login'] == false) { 
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div class="logout">
    <a href="login.php?cmd=logout">Logout aqui</a>
</div>    <br><br><br>
    <h1> Welcome  <?php echo $_SESSION['name'];?> </h1>  
</body>
</html>