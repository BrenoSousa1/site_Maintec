<?php

require 'conn.php';

session_start();

if (isset($_POST['addFormacao'])) {

    $titulo = $_POST['titulo'];
    $instituicao = $_POST['instituicao'];
    $local = $_POST['local'];
    $comeco = $_POST['comeco'];
    $fim = $_POST['fim'];

    $titulo = trim($titulo);
    $instituicao = trim($instituicao);
    $local = trim($local);
    $comeco = trim($comeco);
    $fim = trim($fim);

    $query = "INSERT INTO tb_formacao(nomecurso, instituicao, localizacao, comeco, fim, id_usuario)
    VALUES('$titulo', '$instituicao','$local', '$comeco','$fim'," . $_SESSION['id'] . ");";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['delFormacao'])) {

    $id = $_POST['idformacao'];

    $query = "DELETE FROM tb_formacao WHERE id_formacao = '$id';";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}
