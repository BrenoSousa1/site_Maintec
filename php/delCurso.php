<?php

if (isset($_POST['delSubmit'])) {

    $titulo = $_POST['titulo'];

    $pastaTextos = "../textocursos";
    $pastaImagens = "../imagens";
    $colunascursos = "../colunascursos.html";

    $arquivosTexto = scandir($pastaTextos);
    $arquivosImagem = scandir($pastaImagens);

    $imagem = $titulo . ".jpg";
    $texto = $titulo . ".txt";

    $file = fopen($colunascursos, "r");
    $conteudo = fread($file, filesize($colunascursos));
    fclose($file);

    $conteudoDividido = explode("SepararColunas", $conteudo);

    $verificacao = '<div class="col-md-4">';

    // Acessando cada coluna
    foreach($conteudoDividido as $chave => $profissao){
        //Se esta coluna não tiver algo previsto que tenha na coluna, a coluna será deletada
        if(strpos($profissao, $verificacao)){
            // Será verificado se existe o titulo da profissao e os arquivos de imagem e texto
            if(strpos($profissao, $titulo) && in_array($texto, $arquivosTexto) && in_array($imagem, $arquivosImagem)){
        
            // e então serao deletados e o arquivo de coluna será reescrito
            unlink($pastaTextos."/".$texto);
            unlink($pastaImagens."/".$imagem);
            unset($conteudoDividido[$chave]);

            $separarcolunas = "SepararColunas" . PHP_EOL;
            $file = fopen($colunascursos, "w");
            foreach($conteudoDividido as $cards){
                    fwrite($file, $separarcolunas . trim($cards));
            }
            fclose($file);
            
            //e o loop do foreach será quebrado "retornando" uma variavel de sucesso
            $success = TRUE;
        break;     
        }
    }else{
        unset($conteudoDividido[$chave]);
    }
}
    //se a variavel success existir será exibido uma mensagem
    if($success){
        echo "<script>alert('Arquivo Deletado'); window.location.href = '../adm_home.php';</script>";
    }else{
        echo "<script>alert('Houve uma Falha Inesperada'); window.location.href = '../adm_home.php';</script>";
    }
}else{
    echo "<script>alert('Não houve um envio pelo Formulário'); window.location.href = '../adm_home.php';</script>";
}

