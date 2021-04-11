<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registrtion</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

        <!--    forma avtoritation-->

        <form action="vendor/signin.php" method="post">
            <lebel>Login</lebel>
            <input type="text" name="login" placeholder="enter your login" >
            <lebel>parol</lebel>
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit" >Sent</button>
            <p>
                you do not have an account <a href="/registor.php">Sign in</a>
            </p>
            <?php
                if ($_SESSION['message']){
                    echo '<p class="msg"> '.  $_SESSION['message'] .'</p>';
                }

                unset($_SESSION['message']);


            ?>
        </form>


</body>
</html>
