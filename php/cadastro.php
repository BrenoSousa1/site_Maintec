<?php

include 'conn.php';

if (isset($_POST['cadastro'])) {
    $nome = trim($_POST['nome']);
    $dtnascimento = trim($_POST['dtnascimento']);
    $email = trim($_POST['email']);
    $senha = md5(trim($_POST['senha']));
    $confirm_senha = md5(trim($_POST['confirm']));
    $cep = trim($_POST['cep']);
    $estado = trim($_POST['estado']);
    $cidade = trim($_POST['cidade']);
    $bairro = trim($_POST['bairro']);
    $endereco = trim($_POST['endereco']);


    $emailverify = "SELECT email_usuario FROM Usuario WHERE email_usuario = '$email'";
    $result = mysqli_query($conn, $emailverify);
    if (mysqli_num_rows($result) > 0) {
        mysqli_close($conn);
        echo "<script language='javascript' type='text/javascript'>
    alert('Este email ja foi utilizado.');
    window.location.href='../index.php';</script>";
    } else {

        if ($senha == $confirm_senha) {

            $query = "INSERT INTO Usuario (NomeCompleto, dtnascimento, email_usuario, senha_usuario, cep, Estado, Cidade, Bairro, Endereco) VALUES
('$nome', '$dtnascimento', '$email', '$senha', '$cep', '$estado', '$cidade', '$bairro', '$endereco')";
            mysqli_query($conn, $query);

            $query2 = "SELECT * FROM Usuario WHERE email_usuario = '$email'";
            $result = mysqli_query($conn, $query2);

            if (mysqli_num_rows($result) > 0) {
                mysqli_close($conn);
                echo "<script language='javascript' type='text/javascript'>
    alert('Cadastro realizado com sucesso.');
    window.location.href='../index.php';</script>";
            } else {
                mysqli_close($conn);
                echo "<script language='javascript' type='text/javascript'>
    alert('Erro ao cadastrar.');
    window.location.href='../cadastro.php';</script>";
            }
        } else {
            mysqli_close($conn);
            echo "<script language='javascript' type='text/javascript'>
    alert('Confirmação de senha falhou.');
    window.location.href='../cadastro.php';</script>";
        }
    }
} else {
    echo "<script>alert('Não foi um houve um envio pelo Formulário'); window.location.href = '../index.php';</script>";
}
