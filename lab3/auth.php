<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $password= filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    

    $password = md5($password."fhgh");

    $mysqli = new mysqli('localhost','root','','User');
    
    $result = $mysqli->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if(count($user)==0) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    $mysqli->close();

    header('Location: /');
?>