<?php

require 'conn.php';

session_start();

if (isset($_POST['editNome'])) {
    $Nome = $_POST['Nome'];
    $Nome = trim($Nome);

    $query = "UPDATE Usuario SET NomeCompleto = '$Nome' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editSenha'])) {
    $senha = $_POST['senha'];
    $confirm = $_POST['confirm'];
    $senha = trim($senha);
    $confirm = trim($confirm);

    if ($senha === $confirm) {
        $senha = md5($senha);

        $query = "UPDATE Usuario SET senha_usuario = '$senha' WHERE id_usuario = " . $_SESSION['id'] . ";";
        mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
        mysqli_close($conn);
        header('location:../user_home.php');
    } else {
        "<script>alert('As senhas não iguais'); window.location.href='../user_home.php';</script>";
    }
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editNascimento'])) {
    $Nascimento = $_POST['Nascimento'];
    $Nascimento = trim($Nascimento);

    $query = "UPDATE Usuario SET dtNascimento = '$Nascimento' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editEndereco'])) {
    $Endereco = $_POST['Endereco'];
    $Endereco = trim($Endereco);

    $query = "UPDATE Usuario SET Endereco = '$Endereco' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editCEP'])) {
    $CEP = $_POST['CEP'];
    $CEP = trim($CEP);

    $query = "UPDATE Usuario SET cep = '$CEP' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editCidade'])) {
    $Cidade = $_POST['Cidade'];
    $Cidade = trim($Cidade);

    $query = "UPDATE Usuario SET Cidade = '$Cidade' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editBairro'])) {
    $Bairro = $_POST['Bairro'];
    $Bairro = trim($Bairro);

    $query = "UPDATE Usuario SET Bairro = '$Bairro' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editEstado'])) {
    $Estado = $_POST['Estado'];
    $Estado = trim($Estado);

    $query = "UPDATE Usuario SET Estado = '$Estado' WHERE id_usuario = " . $_SESSION['id'] . ";";
    mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
    mysqli_close($conn);
    header('location:../user_home.php');
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editEstadoCivil'])) {
    $EstadoCivil = $_POST['EstadoCivil'];
    $EstadoCivil = trim($EstadoCivil);

    $verify = "SELECT estadocivil FROM tb_dadospessoais WHERE id_usuario = " . $_SESSION['id'] . ";";
    $result = mysqli_query($conn, $verify);

    if (mysqli_num_rows($result) > 0) {
        $query = "UPDATE tb_dadospessoais SET estadocivil = '$EstadoCivil' WHERE id_usuario = " . $_SESSION['id'] . ";";
        mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
        mysqli_close($conn);
        header('location:../user_home.php');
    } else {
        $query = "INSERT INTO tb_dadospessoais(estadocivil, id_usuario) VALUES('$EstadoCivil', " . $_SESSION['id'] . ")";
        mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
        mysqli_close($conn);
        header('location:../user_home.php');
    }
} else {
    header('location:../user_home.php');
}

if (isset($_POST['editNacionalidade'])) {
    $Nacionalidade = $_POST['Nacionalidade'];
    $Nacionalidade = trim($Nacionalidade);

    $verify = "SELECT * FROM tb_dadospessoais WHERE id_usuario = " . $_SESSION['id'] . ";";
    $result = mysqli_query($conn, $verify);

    if (mysqli_num_rows($result) > 0) {
        $query = "UPDATE tb_dadospessoais SET nacionalidade = '$Nacionalidade' WHERE id_usuario = " . $_SESSION['id'] . ";";
        mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
        mysqli_close($conn);
        header('location:../user_home.php');
    } else {
        $query = "INSERT INTO tb_dadospessoais(nacionalidade, id_usuario) VALUES('$Nacionalidade'," . $_SESSION['id'] . ")";
        mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado');</script>");
        mysqli_close($conn);
        header('location:../user_home.php');
    }
} else {
    header('location:../user_home.php');
}
