<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    if ($password === $password_confirm){

//        $_FILES['avatar']['name'];
        $path = 'uploads/'. time() .$_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'],'../'. $path)){
            $_SESSION['message'] ="this is error !";
            header('Location: ../registor.php');
        }


            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
            echo mysqli_error($connect);


        $_SESSION['message'] ="You have successfully registered!";
        header('Location: ../index.php');

    }else{
        $_SESSION['message'] ="this is a password error !";
        header('Location: ../registor.php');
    }

?>
<pre>
    <?php

    print_r($_FILES);

    ?>
</pre>

