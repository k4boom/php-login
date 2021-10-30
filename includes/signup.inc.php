<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $repeat = $_POST['pwdrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name,$email,$username,$password,$repeat) !== false){
        header('location: ../signup.php?error=emptyinput');
        exit();
    }
    if(invalidUid($username) !== false){
        header('location: ../signup.php?error=invaliduid');
        exit();
    }
    if(invalidEmail($email) !== false){
        header('location: ../signup.php?error=invalidemail');
        exit();
    }
    if(pwdMatch($password,$repeat) !== false){
        header('location: ../signup.php?error=pwdfalsematch');
        exit();
    }
    if(uidExists($conn, $username , $email) !== false){
        header('location: ../signup.php?error=alreadyuser');
        exit();
    }

    createUser($conn,$name, $email,$username,$password );
}else{
    header('location: ../signup.php');
    exit();
}