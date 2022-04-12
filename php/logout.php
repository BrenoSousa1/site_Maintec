<?php

session_start();

//TODAS as variaveis declaradas anteriormente devem ser apagadas com Unset
    unset($_SESSION['nome']);

    if(isset($_SESSION['Foto'])){
        unset($_SESSION['Foto']);
    }
    
    if(isset($_SESSION['id'])){
        unset($_SESSION['id']);
    }

    if(isset($_SESSION['idADM'])){
        unset($_SESSION['idADM']);
        unset($_SESSION['sobrenome']);
    }

    echo "<script language='javascript' type='text/javascript'>
    alert('Deslogado.');
    window.location.href='../index.php';</script>";

session_destroy();

?>