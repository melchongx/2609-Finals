<?php

    if (isset($_POST['submit'])) {

        $userName = $_POST['userName'];
        $passWord = $_POST['passWord'];

        require_once 'dbcon.php';
        require_once 'functions.php';

        if (emptyInputLogin($userName, $passWord) !== false) {
            header("Location: ../frontend/login.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $userName, $passWord);

    } else {
        header("Location: ../frontend/login.php");
        exit();
    }