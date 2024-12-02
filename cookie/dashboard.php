<h1>Welcome <?php echo $_SESSION["user"]["username"]?>!</h1><h1>Welcome <?php echo $_SESSION["user"]["username"]?>!</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<?php
    echo "<pre>";
    print_r($_SESSION["user"]);
    echo "</pre>";
?>
    <h1>Welcome <?php echo $_SESSION["user"]["username"]?>!</h1>
    <?php if (!($_SESSION["user"]["role"] == "customer")){?>
    <button>ADD</button>
    <?php if ($_SESSION["user"]["role"] == "admin"){ ?>
        <button>Edit</button> 
        <button>Delete</button>
    <?php
    }
}
    ?>
    <a href="logout.php">Logout</a>
    
   

</body>
</html>