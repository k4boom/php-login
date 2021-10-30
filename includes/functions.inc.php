<?php

function emptyInputSignup($name,$email,$username,$password,$repeat){

    if( empty($name) || empty($email) || empty($username) || empty($password) || empty($repeat)){
        return true;
    }
    return false;
}

function invalidUid($username){
    if(!preg_match("/^[a-zA-z0-9]*$/", $username)){
        return true;
    }
    return false;
}

function invalidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}

function pwdMatch($password,$repeat){
    if($password !== $repeat){
        return true;
    }
    return false;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE `usersUid` = ? OR `usersemail` = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location: ../signup.php?error=stmtfaileduid ');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $data = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($data)){
        return $row;
    }else{
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$name, $email,$username,$password ){
    $sql = "INSERT INTO users(usersName,usersEmail,usersUid, usersPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location: ../signup.php?error=stmtfailedcreate');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $username, password_hash($password,PASSWORD_DEFAULT));
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../login.php?error=none');
        exit();
}