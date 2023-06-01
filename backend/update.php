<?php

$userName = $_POST['userName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$passWord = $_POST['passWord'];
$conPass = $_POST['conPass'];
 
require_once 'dbcon.php';
require_once 'functions.php';

if (emptyInputUpdate($email, $phone, $passWord, $conPass) !== false) {
    header("Location: ../frontend/update.php?error=emptyinput");
    exit();
}
if (pwdMatch( $passWord, $conPass) !== false) {
    header("Location: ../frontend/update.php?error=passwordnotmatch");
    exit();
}
if (uidExistsUpdate($conn, $userName) !== false) {
    header("Location: ../frontend/update.php?error=usernamedoesnotexist");
    exit();
}

updateUser($conn, $userName, $email, $phone, $passWord);