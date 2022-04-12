<?php

    if(!isset($_SESSION['idADM'])){
            //Verificar se existe um login de ADM
            header('Location:index.php');
            $_SESSION['Mensagem'] = 
'<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
    <strong>ACESSO RESTRITO!</strong> Esta área é apenas para Administradores.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
    }
    
?>