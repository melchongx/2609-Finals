<?php

function emptyInputSignup($userName, $email, $phone, $passWord, $conPass) {
    $result;
    if (empty($userName)||empty($email)||empty($phone)||empty($passWord)||empty($conPass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pwdMatch($passWord, $conPass) {
    $result;
    if ($passWord !== $conPass) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $userName) {
    $sql = "SELECT * FROM students WHERE userName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../frontend/signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $userName);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function emptyInputLogin($userName, $passWord) {
    $result;
    if (empty($userName)||empty($passWord)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $userName, $passWord) {
    $uidExists = uidExists($conn, $userName);

    if ($uidExists === false) {
        header("Location: ../frontend/login.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $uidExists["pwd"];
    $checkPwd = password_verify($passWord, $pwdHashed);

    if ($checkPwd === false) {
        header("Location: ../frontend/login.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION['useruid'] = $uidExists["userName"];
        header("Location: ../frontend/home.php");
        exit();
    }
}
function createUser($conn, $userName, $email, $phone, $passWord) {
    $sql = "INSERT INTO students (userName, email, phone, pwd) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../frontend/signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($passWord, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssis", $userName, $email, $phone, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../frontend/login.php?error=none");
    exit();
}
function updateUser($conn, $userName, $email, $phone, $passWord) {
    $sql = "UPDATE students SET email = ?, phone = ?, pwd = ? WHERE userName = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../frontend/update.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($passWord, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "siss", $email, $phone, $hashedPwd, $userName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: logout.php");
    exit();
}
function emptyInputUpdate($email, $phone, $passWord, $conPass) {
    $result;
    if (empty($email)||empty($phone)||empty($passWord)||empty($conPass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function uidExistsUpdate($conn, $userName) {
    $sql = "SELECT * FROM students WHERE userName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../frontend/signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $userName);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        $result = false;
        return $result;
    } else {
        return $row;
    }
    mysqli_stmt_close($stmt);
}