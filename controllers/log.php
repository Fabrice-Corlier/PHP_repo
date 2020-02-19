<?php
session_start();

// var_dump($_SESSION['name']); 
// die;
$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];
header('Location: /');
