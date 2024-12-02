<?php
    session_start();
    require_once "function.class.php";

    $obj = new User;
    $view = $obj->view();

    $username = $password = " ";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
    if (empty($username) || ($password)){
        echo "Please Input all fields!";
    }
    }
?>

<form action="" method = "post">
    <label for="username">Username</label>
    <input type="text" name="username" id="">
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="">
    <input type="button" value="btnLogin">
</form>