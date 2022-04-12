<?php
session_start();

$email = trim($_POST['email']);
$senha = md5(trim($_POST['senha']));

include 'conn.php';

$query = "SELECT * FROM Administrador WHERE email_adm = '$email' and senha_adm = '$senha'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    $dados = mysqli_fetch_array($result); //Separando os dados da query em vetores
    
    //Setando informações de autenticação do ADM
    $_SESSION['nome'] = $dados['primeiro_nome'];
    $_SESSION['sobrenome'] = $dados['sobrenome'];
    $_SESSION['idADM'] = $dados['id_administrador'];

    echo "
    <script language='javascript' type='text/javascript'>
    alert('Login efetuado com sucesso.');
    </script>";
    mysqli_close($conn);
    header('Location:../adm_home.php'); //Pagina do ADM
}
else{
    $query = "SELECT * FROM Usuario WHERE email_usuario = '$email' and senha_usuario = '$senha'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $dados = mysqli_fetch_array($result); //Separando os dados da query em vetores
        
        //Setando informações de autenticação do usuario
        $_SESSION['nome'] = $dados['NomeCompleto'];
        $_SESSION['id'] = $dados['id_usuario'];
    
        echo "
        <script language='javascript' type='text/javascript'>
        alert('Login efetuado com sucesso.');
        </script>";
        mysqli_close($conn);
        header('Location:../user_home.php'); //Pagina do Usuario
    }else{
        mysqli_close($conn);
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuario não Existe.');
        window.location.href='../login.php';</script>";
    }
}

?>