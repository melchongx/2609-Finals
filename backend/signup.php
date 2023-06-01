<?php

$userName = $_POST['userName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$passWord = $_POST['passWord'];
$conPass = $_POST['conPass'];
 
require_once 'dbcon.php';
require_once 'functions.php';

if (emptyInputSignup($userName, $email, $phone, $passWord, $conPass) !== false) {
    header("Location: ../frontend/signup.php?error=emptyinput");
    exit();
}
if (pwdMatch( $passWord, $conPass) !== false) {
    header("Location: ../frontend/signup.php?error=passwordnotmatch");
    exit();
}
if (uidExists($conn, $userName) !== false) {
    header("Location: ../frontend/signup.php?error=usernametaken");
    exit();
}

createUser($conn, $userName, $email, $phone, $passWord);