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

function login ($id, $email, $tipo) {
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = $tipo;
}

function logout() {
    session_start();
    session_destroy();
    header("location:login.php?logout");
    exit;
} 
