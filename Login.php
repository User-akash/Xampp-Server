<?php
    session_start();
    include("Connection.php");
    include("Function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password)){
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password){
                        $_SESSION['user_id'] = $user_data['user_id'];

                        header("Location: Index.php");
                        die;
                    }
                }
            }echo "Access Denied!";
        }else{
            echo "please valid address!";
        }
    }
?>

<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form id="work" action="" method="post">
            <h2>Login</h2><br><br>
            <input type="text" name="user_name"><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>