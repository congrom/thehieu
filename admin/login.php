<?php
    session_start();
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        include('../inc/conn.php' );
        $username = $_POST['name'];
        $password = $_POST['pass'];
        $user = mysqli_fetch_assoc( mysqli_query( $conn , "SELECT * FROM user WHERE username= '{$username}' AND password='{$password}'"));
        if($user){
            $_SESSION['user'] = $user['username'];
            header('location:index.php');
            die;
        }
        else{
            echo "sai thong tin tai khoan";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Login system </title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
    <h2>Login system</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="name"> <br>
        <label>Password:</label>
        <input type="password" name="pass">
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>