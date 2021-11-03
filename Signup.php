<?php
    session_start();
        include("Connection.php");
        include("Function.php");

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            if(!empty($user_name) && !empty($password)){
                $query = "Insert into users (user_name, password) values('$user_name', '$password')";
                mysqli_query($con, $query);
                header("Location: Login.php");
                die;
            }else{
                echo "please valid address!";
            }
        }
?>

<html>
    <head>
        <title>SignIn Page</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/dee4ebf33c.js" crossorigin="anonymous"></script>
    </head>
    <body>
            <form id="work" action="" method="post">
                <h2>SignIn</h2><br><br>
                <input type="text" name="user_name" placeholder="Username"><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="submit" value="Sign Up">
            </form>
    </body>
</html>