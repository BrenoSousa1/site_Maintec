<?php

require 'conn.php';

session_start();

if (isset($_POST['addidiomas'])) {

    $titulo = $_POST['titulo'];
    $nivel = $_POST['nivel'];
    $instituicao = $_POST['instituicao'];
    $comeco = $_POST['comeco'];
    $fim = $_POST['fim'];

    $titulo = trim($titulo);
    $instituicao = trim($instituicao);
    $nivel = trim($nivel);
    $comeco = trim($comeco);
    $fim = trim($fim);

    $query = "INSERT INTO tb_idiomas(nome, nivel, instituicao, comeco, fim, id_usuario)
    VALUES('$titulo', '$nivel','$instituicao', '$comeco', '$fim'," . $_SESSION['id'] . ");";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['delidiomas'])) {

    $id = $_POST['idIdioma'];

    $query = "DELETE FROM tb_idiomas WHERE id_idiomas = '$id';";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}
