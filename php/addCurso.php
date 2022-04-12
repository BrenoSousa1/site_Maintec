<?php

if (isset($_POST['addSubmit'])) {

    $tituloPost = $_POST['titulo'];
    $resumo = $_POST['resumo'];
    $salario = $_POST['salario'];
    $mercado = $_POST['mercado'];
    $assunto = $_POST['assunto'];
    $Imagem = $_FILES['imagem'];

    //remove espaços no comeco e inicio da linha
    $tituloExibir = trim($tituloPost);
    //troca espaco por underline
    $titulo = str_replace(' ', '_', $tituloExibir);

    // Daqui para baixo a variavel Titulo será/foi formatada para nomeação de arquivo

    $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');
    $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');

    //troca caracteres com acento pra sem acento
    $titulo = str_replace($comAcentos, $semAcentos, $titulo);

    //coloca tudo em minusculo
    $titulo = strtolower($titulo);

    //------------------------------------------Começo da adição da imagem--------------------------------------------
    $nome = $Imagem['name'];
    $nometemp = $Imagem['tmp_name'];
    $tamanho = $Imagem['size'];
    $erro = $Imagem['error'];

    $exten = explode('.', $nome);
    $extensao = strtolower(end($exten));

    $extPermitidas = array('jpg', 'jpeg', 'png');

    if (in_array($extensao, $extPermitidas)) {
        if ($erro === 0) {
            if ($tamanho < (2 * 1024 * 1024)) {
                $nomeImagem = $titulo . ".jpg";
                //Se a imagem for criada com sucesso
                if (move_uploaded_file($nometemp, "../imagens/" . $nomeImagem)) {
                    //------------------------------------------Começo da adição de textos--------------------------------------------

                    //Tirando quebras de linhas de cada texto e substituindo por <br>(MUITO IMPORTANTE)
                    $salario = str_replace("\r", '<br>', trim($salario));
                    $salario = str_replace("\n", '', $salario);

                    $mercado = str_replace("\r", '<br>', trim($mercado));
                    $mercado = str_replace("\n", '', $mercado);

                    $assunto = str_replace("\r", '<br>', trim($assunto));
                    $assunto = str_replace("\n", '', $assunto);

                    $resumo = str_replace("\r", '<br>', trim($resumo));
                    $resumo = str_replace("\n", '', $resumo);
                    

                    // monta o nome do arquivo de pagina
                    $arquivotxt = $titulo . ".txt";

                    //Cria o arquivo contendo os texto separados em strings na ordem de execução (MUITO IMPORTANTE)
                    $file = fopen($arquivotxt, "a");
                    fwrite($file, $assunto . PHP_EOL);
                    fwrite($file, $mercado . PHP_EOL);
                    fwrite($file, $salario . PHP_EOL);
                    fclose($file);

                    //move os arquivos para a pasta anterior
                    rename($arquivotxt, "../textocursos/" . $arquivotxt);

                    $colunascursos = "../colunascursos.html";

                    //Prepara uma nova coluna para pagina cursos
                    $novaColuna = 
'<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="profissao.php?profissao=' . $titulo . '"><img class="card-img-top" src="imagens/' . $titulo . '.jpg" height=175 widht=195></a>
        <div class="card-body">
            <h3>' . $tituloExibir . '</h3>
            <p class="card-text">' . $resumo . '</p>
        </div>
     </div>
</div>';
                    //Escreve a nova coluna no arquivo contendo todas as colunas ja existente
                    $separarcolunas = "SepararColunas" . PHP_EOL;

                    $file = fopen($colunascursos, "a");
                    fwrite($file, $separarcolunas . trim($novaColuna));
                    fclose($file);

                    echo "<script>alert('Curso cadastrado.'); window.location.href='../adm_home.php';</script>";
                } else {
                   echo "<script>alert('Houve um erro Inesperado'); window.location.href = '../adm_home.php';</script>";
                }
            } else {
              echo "<script>alert('Arquivo é muito grande'); window.location.href = '../adm_home.php';</script>";
            }
        } else {
         echo "<script>alert('Houve um erro ao enviar o arquivo'); window.location.href = '../adm_home.php';</script>";
        }
    } else {
     echo "<script>alert('Não é uma extensão válida de imagem'); window.location.href = '../adm_home.php';</script>";
    }
}else{
  echo "<script>alert('Não houve um envio pelo Formulário'); window.location.href = '../adm_home.php';</script>";
}


