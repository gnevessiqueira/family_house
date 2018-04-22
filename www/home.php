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
<?php if($_SESSION['roles'] == 'admin') { ?>
    <h1> Welcome my Administrator!! Your name is <?php echo ucwords($_SESSION['name']);?> </h1>  
<?php } else { ?>
    <h1> Welcome  <?php echo ucwords($_SESSION['name']);?> </h1>  
<?php } ?>
</body>
</html>