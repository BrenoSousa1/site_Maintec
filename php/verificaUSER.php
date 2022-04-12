<?php

    if(!isset($_SESSION['id'])){
            //Verificar se não existe um login de Usuario
            header('Location: index.php');
            $_SESSION['Mensagem'] = 
'<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
    <strong>Não é possível prosseguir!</strong> É necessario estar logado para acessar esta área.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
    }
?>