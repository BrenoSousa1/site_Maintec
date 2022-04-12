<?php

require 'conn.php';

session_start();

if(isset($_POST['editInfo'])){

    $texto = $_POST['info'];

    $texto = trim($texto);

    $texto = str_replace("\r", '<br>', trim($texto));
    $texto = str_replace("\n", '', $texto);
    
    $verify = "SELECT info FROM tb_infousuario WHERE id_usuario =" . $_SESSION['id'] . ";";
    $result = mysqli_query($conn, $verify);
    
    if (mysqli_num_rows($result) > 0) {
    $query = "UPDATE tb_infousuario SET info = '$texto' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    $query = "INSERT INTO tb_infousuario(info, id_usuario) VALUES('$texto'," . $_SESSION['id'] . ");";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
}

}else{
header('location:../user_home.php');
}

if(isset($_POST['editObjetivo'])){

    $texto = $_POST['objetivo'];

    $texto = trim($texto);

    $texto = str_replace("\r", '<br>', trim($texto));
    $texto = str_replace("\n", '', $texto);
    
    $verify = "SELECT objetivo FROM tb_infousuario WHERE id_usuario =" . $_SESSION['id'] . ";";
    $result = mysqli_query($conn, $verify);
    
    if (mysqli_num_rows($result) > 0) {
    $query = "UPDATE tb_infousuario SET objetivo = '$texto' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    $query = "INSERT INTO tb_infousuario(objetivo, id_usuario) VALUES('$texto'," . $_SESSION['id'] . ");";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
}

}else{
header('location:../user_home.php');
}