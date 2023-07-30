<?php

if(!isset($_SESSION)){
    session_start();
}

function verifyAccess(){
    if(!isset($_SESSION['id'])){
        session_destroy();
        header("location:../login.php");
        exit;
    }
} 

function login ($id, $nome, $tipo) {
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo'] = $tipo;
}

function logout() {
    session_start();
    session_destroy();
    header("location:../login.php?logout");
    exit;
} 