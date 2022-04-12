<?php

require 'conn.php';

session_start();

if (isset($_POST['addTelefone'])) {

    $ddd = $_POST['ddd'];
    $numero = $_POST['numero'];

    $ddd = trim($ddd);
    $numero = trim($numero);

    $query = "INSERT INTO Telefones(ddd, numero, id_usuario) values ('$ddd', '$numero', " . $_SESSION['id'] . ");";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['delTelefone'])) {

    $id = $_POST['idtelefone'];

    $query = "DELETE FROM Telefones WHERE id_Telefone = '$id';";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}
