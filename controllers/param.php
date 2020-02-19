<?php

session_start();
$_SESSION['img'] = $_POST['img'];
$_SESSION['info'] = $_POST['info'];
header('location: /');
