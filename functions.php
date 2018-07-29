<?php
session_start();
session_register_shutdown();
require_once ("config.php");

function isLoggedIn(){
    return isset($_SESSION['username']);
}

function loginRequired(){
    if(!isLoggedIn()){
        header("Location: /login.php");
        die;
    }
}

function adminRequired(){
    if(!isAdmin()){
        header("Location: /login.php")
        die;
    }
}

function isAdmin(){
    if(isset($_SESSION['userType'])){
        return $_SESSION['userType'] == 'administrator' or $_SESSION['userType'] == 'vet';
    }
    return false;
}

function login($username, $password){
    global $db;
    $q = $db->prepare('SELECT users.username, users.pass, userType.type FROM users LEFT JOIN userType ON users.user_type_id = userType.id WHERE username LIKE ? LIMIT 1');
    $q->bind_param("s", $username);
    $q->execute();
    $q->store_result();
    $q->bind_result($dbUsername, $dbPassword, $dbUserType);
    $q->fetch();
    if(password_verify($password, $dbPassword)){
        $_SESSION["username"] = $dbUsername;
        $_SESSION["userType"] = $dbUserType;
        header("Location: /");
        die;
    }
    else{
        return null;
    }
}

function logout(){
    $_SESSION = array();
    header("Location: /");
    die;
}