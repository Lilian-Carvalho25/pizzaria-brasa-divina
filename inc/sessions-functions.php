<?php

if(!isset($_SESSION)){
    session_start();
}

function verifyAccess(){
    if(!isset($_SESSION['id'])){
        session_destroy();
        header("location:login.php");
        exit;
    }
} 

function login ($id, $email) {
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
}

function logout() {
    session_start();
    session_destroy();
    header("location:login.php?logout");
    exit;
} 

function isLogged() {
    return isset($_SESSION['id']);
}