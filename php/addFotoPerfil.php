<?php

session_start();

include 'Conn.php';

if (isset($_POST['submit'])) {
    $foto = $_FILES['imagem'];
    $nome = $foto['name'];
    $nometemp = $foto['tmp_name'];
    $tamanho = $foto['size'];
    $erro = $foto['error'];

    $exten = explode('.', $nome);
    $extensao = strtolower(end($exten));

    $extPermitidas = array('jpg', 'jpeg', 'png');

    if (in_array($extensao, $extPermitidas)) {
        if ($erro === 0) {
            if ($tamanho < (2 * 1024 * 1024)) {
                $placeholdername = time() . ".jpg";
                if (move_uploaded_file($nometemp, $placeholdername)) {
                    $tamanhoImg = filesize($placeholdername);
                    $mysqlImg = addslashes(fread(fopen($placeholdername, "r"), $tamanhoImg));
                    unlink($placeholdername);

                    $verify = "SELECT imagem FROM Fotos WHERE id_usuario =" . $_SESSION['id'] . ";";
                    $result = mysqli_query($conn, $verify);

                    if (mysqli_num_rows($result) > 0) {
                        $query = "UPDATE Fotos SET imagem = '$mysqlImg' WHERE id_usuario = " . $_SESSION['id'] . ";";
                        mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado'); window.location.href = '../user_home.php';</script>");
                        mysqli_close($conn);
                        header('location:../user_home.php');
                    } else {
                        $query = "INSERT INTO Fotos(imagem, id_usuario) VALUES('$mysqlImg'," . $_SESSION['id'] . ");";
                        mysqli_query($conn, $query) or die("<script>alert('Houve um erro Inesperado'); window.location.href = '../user_home.php';</script>");
                        mysqli_close($conn);
                        header('location:../user_home.php');
                    }
                } else {
                    echo "<script>alert('Houve um erro Inesperado'); window.location.href = '../user_home.php';</script>";
                }
            } else {
                echo "<script>alert('Arquivo é muito grande'); window.location.href = '../user_home.php';</script>";
            }
        } else {
            echo "<script>alert('Houve um erro ao enviar o arquivo'); window.location.href = '../user_home.php';</script>";
        }
    } else {
        echo "<script>alert('Não é uma extensão válida de imagem'); window.location.href = '../user_home.php';</script>";
    }
} else {
    echo "<script>alert('Não foi um houve um envio pelo Formulário'); window.location.href = '../user_home.php';</script>";
}
