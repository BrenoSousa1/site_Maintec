<?php
include('pdf/mpdf.php');

session_start();

require_once 'conn.php';

$query = "SELECT * FROM Usuario WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $query);
$dados = mysqli_fetch_array($result);

$dtnascimento = date("d/m/Y", strtotime($dados['dtnascimento']));

$query = "SELECT * FROM tb_dadospessoais WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $query);
$dadospessoais = mysqli_fetch_array($result);

$selectTelefone = "SELECT id_Telefone, ddd, numero FROM telefones WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectTelefone);
while ($row = mysqli_fetch_array($result)) {
    $telefone[] = $row;
}

$selectformacao = "SELECT * FROM tb_formacao WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectformacao);
while ($row = mysqli_fetch_array($result)) {
    $formacao[] = $row;
}

$selectidiomas = "SELECT * FROM tb_idiomas WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectidiomas);
while ($row = mysqli_fetch_array($result)) {
    $idiomas[] = $row;
}

$selectinfousuario = "SELECT objetivo, info FROM tb_infousuario WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectinfousuario);
$infousuario = mysqli_fetch_array($result);

mysqli_close($conn);
if (isset($telefone)) {
    foreach ($telefone as $telusuario) {
        $tele .= "(" . $telusuario['ddd'] . ")" . $telusuario['numero'] . " ";
    }
}

if (isset($infousuario['objetivo'])) {
    $objetivo = $infousuario['objetivo'];
  }

  if (isset($formacao)) {
    foreach ($formacao as $graduacoes) {
        $lista = "<li>".$graduacoes['nomecurso'] . "<br>";
      if ($graduacoes['instituicao'] !== '' || $graduacoes['localizacao'] !== '') {
        $lista .= $graduacoes['instituicao'] . "<br>";
        $lista .= $graduacoes['localizacao'] . "<br>";
      }
      if ($graduacoes['comeco'] !== '' && $graduacoes['fim'] !== '') {
        $lista .= $graduacoes['comeco'] . " a " . $graduacoes['fim'] . "<br>";
      }
      $listaformacao .= $lista."</li>";
    }
  }

  if (isset($idiomas)) {
    foreach ($idiomas as $linguas) {
      $lista = "<li>".$linguas['nome'] . " " . $linguas['nivel'] . "<br>";
      if ($linguas['instituicao'] !== '') {
        $lista .= $linguas['instituicao'] . "<br>";
      }
      if ($linguas['comeco'] !== '' && $linguas['fim'] !== '') {
        $lista .= $linguas['comeco'] . " a " . $linguas['fim'] . "<br>";
      }
      $listaidioma .= $lista."</li>";
    }
  }

  if (isset($infousuario['info'])) {
    $info = $infousuario['info'];
  }

  if (isset($dadospessoais['nacionalidade'])) {
    $nacionalidade = $dadospessoais['nacionalidade'];
  }

  if (isset($dadospessoais['estadocivil'])) {
    $estadocivil = $dadospessoais['estadocivil'];
  }


$page = '
    <head>
        <meta charset="UTF-8">
            <title>Currículo</title>
    <style>
        body, p, a, span, td {
            font-size: 12pt;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<html>
    <body>
        <span style="font-size: 20pt;">' . $dados['NomeCompleto'] . '</span>
        <hr>
        <span>' . $dados['Endereco'] . '</span> - <span>' . $dados['Cidade'] . '</span>-<span>' . strtoupper($dados['Estado']) . '</span> - CEP <span>' . $dados['cep'] . '</span>
        <br>
        <span>Email: ' . $dados['email_usuario'] . '</span>
        <br>
        <span>Telefone: ' . $tele . '</span>
        <br>
        <span>Data de Nascimento: ' . $dtnascimento . ' </span> - <span>' . $nacionalidade . '</span> - <span>'.$estadocivil.'</span>
        <br>
        <br><hr>
        <span style="font-size: 16pt;">Objetivo</span>
            <p>'.$objetivo.'</p>
        <hr>
        <span style="font-size: 16pt;">Formação</span>
            <ul>'.$listaformacao.'
            </ul>
        <hr>
        <span style="font-size: 16pt;">Idiomas</span>
            <ul>'.$listaidioma.'
            </ul>
        <hr>
        <span style="font-size: 16pt;">Informações Adicionais</span>
            <div>'.$info.'</div>
    </body>
</html>
    ';

$arquivo = "gerandoPDF.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($page);
$mpdf->Output($arquivo, 'I');

    // I -> Abrir no navegador
    // F -> Salvar o aruivo no servidor
    // D -> Salvar o arquivo no computador do usuário
