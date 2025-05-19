<?php
session_start();
require_once "../Model/users.php";

function loginController(){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user = [
        "username" => $username,
        "password" => $password
    ];

    $status = loginUser($user);

    if($status){
        $_SESSION['username'] =  $status['username'];
        $_SESSION['email'] =  $status['email'];
        $_SESSION['password'] = $status['password'];
        $_SESSION['logged_in'] = true;

        //print_r($_SESSION);

        header('location:../view/dashboard.php');
        exit();
    }else{
        echo "Invalid Credentitals";
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    loginController();
} else{
    echo"Invalid";
}
?>