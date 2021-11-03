<?php
    session_start();
        include("Connection.php");
        include("Function.php");

        $user_data = check_login($con);
?>


<html>
    <body>
        <a href="LogOut.php">Log Out</a>
        <h2>Hi Akash</h2>
    </body>
</html>