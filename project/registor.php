<?php
    session_start();
if (!$_SESSION['user']){
//    header('location: index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registrtion</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<!--    form registration-->

<form action="vendor/sinup.php" method="post" enctype="multipart/form-data">
    <lebel>F.I.O</lebel>
    <input type="text" name="full_name" placeholder="enter your name"  >

    <lebel>Login</lebel>
    <input type="text" name="login" placeholder="enter your login" >

    <lebel>Pochta</lebel>
    <input type="email" name="email" placeholder="enter your email" >

    <lebel>Add a picture to your profile</lebel>
    <input type="file" name="avatar">

    <lebel>parol</lebel>
    <input type="password" name="password" placeholder="Enter your password">

    <lebel>re-enter</lebel>
    <input type="password" name="password_confirm" placeholder="re-enter your password">

    <button type="submit" >Sent</button>
    <p>

        Please log in again if you have an account <a href="/">Sign in</a>

    </p>
    <?php
            if ($_SESSION['message']){
                echo '<p class="msg"> '.  $_SESSION['message'] .'</p>';
            }

            unset($_SESSION['message']);


            ?>

    <style>
        .msg{
            border: 2px solid #ffa908;
            border-radius: 3px;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
    </style>


</form>


</body>
</html>
