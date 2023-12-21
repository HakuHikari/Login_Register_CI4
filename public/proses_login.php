<?php

$username = $_POST['your_name'];
$password = $_POST['your_pass'];



require_once '../Models/UserModel.php';

// Load UserModel
$userModel = new UserModel();


$user = $userModel->where('name', $username)->first();


if ($user && password_verify($password, $user['password'])) {
   
    header("Location: daftar.php"); 
    exit();
} else {
    header("Location: login.php?error=1"); 
    exit();
}
?>
