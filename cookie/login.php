<?php 
    session_start();
    if (!empty($_SESSION["user"])){
        header("location:dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    require_once "account.class.php";
    $objAccount = new Account;

    // echo "<pre>";
    // print_r($objAccount->showAll());
    // echo "</pre>";

    // $user = [
    //     ["un"=> "admin", "pass" => "admin123", "role" => "admin"],
    //     ["un"=> "pau", "pass" => "pau", "role" => "customer"],
    //     ["un"=> "user", "pass" => "user123", "role" => "stuff"]
    // ];

    // if($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["btnLogin"])){
        // foreach ($user as $us){
        //     if ($us["un"] == $_POST["username"] && $us["pass"] == $_POST["password"]){
        //         $_SESSION["user"] = $us;
        //         header("location: dashboard.php");
        //         exit();
        //     }
        // }
        

        if($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["btnLogin"])){
            $user = $objAccount->autUser($_POST["username"], $_POST["password"]);
            if ($user){ 
                $_SESSION["user"] = $user;
                header("location: dashboard.php");
            }


            echo "Wrong Credentials";  
    }
//         if($_SERVER['REQUEST_METHOD'] == 'POST'){
//             $username = $_POST['username'];
//             $password = $_POST['password'];
        
//         if($user["un"] == "admin" && $user["pass"] == "admin123"){
//             header("location: dashboard.php");
//         }
//         if ($username == "admin" && $password == "admin123"){
//             $_SESSION["name"] = $username;
//             header("location: dashboard.php");
//         }

//         else{
//             echo "Wrong Credentials!";
//         }
            
        
//}   
?>

<form action="" method="post">
    <h1>Login</h1>
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="">
    <input type="submit" value="Submit" name = "btnLogin">
</body>
</html> 