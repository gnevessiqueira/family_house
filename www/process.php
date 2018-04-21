<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    session_start();

/*
    $DB_HOSTNAME = "172.17.0.2"; //IP DOCKER MYSQL
    $DB_USER = "root";
    $DB_PASSWORD = "biel";
    $DB_NAME = "login";
*/

    $DB_HOSTNAME = getenv("DB_HOSTNAME"); //IP DOCKER MYSQL
    $DB_USER = getenv("DB_USER");
    $DB_PASSWORD = getenv("DB_PASSWORD");
    $DB_NAME = getenv("DB_NAME");

    // Get values passe from form in login.php file
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the server and select database
    $con = mysqli_connect($DB_HOSTNAME, $DB_USER, $DB_PASSWORD, $DB_NAME, 3306);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // To prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    // Query the database for user
    $query = "select * from users where username = '$username' and password = '$password'";
    //echo $query;
    
    $result = mysqli_query($con, $query)
                    or die("Failed to query database".mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row ['password'] == $password){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        header("Location: home.php");
        
    } else {
        $_SESSION['login'] = false;
        header("Location: login.php?error=1");
    }

    if ($row['username'] == "" && $row['password'] == "")
    {
        $_SESSION['login'] = false;
        header("Location: login.php?error=1");
    }

    mysqli_close($con);
    exit();
?>