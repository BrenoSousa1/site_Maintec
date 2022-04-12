<?php
session_start();
require_once 'php/verificaADM.php';
include 'head.php';
include 'navbar.php';
include 'footer.php';
?>

<!doctype html>
<html lang="pt-br">

<head>
  <?php
  echo $metadatas;
  ?>
  <title>Administrador</title>
</head>

<body>
  <?php
  echo $navbarADM;
  ?>
  <div class="d-flex overflow-hidden">

    <div class="bg-light text-primary" role="tablist" style="width: 110px;">
      <!-- Nav tabs -->
      <ul class="nav nav-pills" id="navId" style="width: 120px;">
        <li class="nav-item">
          <a data-target="#tab1Id" data-toggle="pill" class="nav-link active" style="width: 110px;">Bem Vindo</a>
        </li>
        <li class="nav-item">
          <a data-target="#tab2Id" data-toggle="pill" class="nav-link" style="width: 110px;">Adicionar Curso</a>
        </li>
        <li class="nav-item">
          <a data-target="#tab3Id" data-toggle="pill" class="nav-link" style="width: 110px;">Deletar Curso</a>
        </li>
      </ul>

    </div>

    <!-- Tab panes -->
    <div class="tab-content flex-grow-1 ">

      <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
        <div class="font-weight-light" style="font-size: 4rem">Bem Vindo, <?php echo $_SESSION['nome'] . " " . $_SESSION['sobrenome'] ?></div>
        <div class="container-fluid">
          <span class="font-weight-light" style="font-size: 2rem">
          Neste ambiente é possível adicionar novas páginas de Cursos ou deletar as atuais.<br>
          Cursos Atuais
        </span> 
          <div class="row">
          <?php
        // lê o conteúdo do arquivo para uma string
        $filename = "colunascursos.html";
        $handle = fopen($filename, "r");
        $conteudo = fread($handle, filesize($filename));
        fclose($handle);

        $arrayColunas = explode("SepararColunas", $conteudo);

        foreach($arrayColunas as $colunas){
          echo $colunas;
        }
        ?>
        </div>
        </div>
      </div>

      <div class="tab-pane fade" id="tab2Id" role="tabpanel">
        <div class="font-weight-light" style="font-size: 4rem">Adicionar Curso</div>
        <div class="container-fluid">
          <form enctype="multipart/form-data" class="needs-validation m-0" action="php/addCurso.php" novalidate method="POST">
            <div class="form-group">
              <label>Titulo</label>
              <input class="form-control" type="text" name="titulo" />
            </div>
            <div class="form-group">
            <label>Imagem</label><br>
                <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                <input type="file" name="imagem" id="fotoUpload" onchange="medir();" />
                <div class="font-weight-light"> Apenas jpeg, jpg, png, Menores que 2MB</div>
            </div>
            <div class="form-group">
              <label>Resumo do Curso</label>
              <small>
                <div class="text-muted">Será mostrado no Card da página Cursos</div>
              </small>
              <textarea class="form-control" rows="3" name="resumo"></textarea>
            </div>
            <div class="form-group">
              <label>Assunto</label>
              <textarea class="form-control" rows="10" name="assunto"></textarea>
            </div>
            <div class="form-group">
              <label>Mercado</label>
              <textarea class="form-control" rows="4" name="mercado"></textarea>
            </div>
            <div class="form-group">
              <label>Base Salarial</label>
              <textarea class="form-control" rows="3" name="salario"></textarea>
            </div class="form-group">
            <div class="text-center my-1">
              <button class="btn btn-primary btn-lg" type="submit" name="addSubmit">Concluir</button>
              <button class="btn btn-primary btn-lg" type="reset" name="limpar">Limpar</button>
            </div>
          </form>
        </div>
      </div>

      <div class="tab-pane fade" id="tab3Id" role="tabpanel">
        <div class="font-weight-light" style="font-size: 4rem">Deletar Curso</div>
        <div class="container-fluid">
        <form class="needs-validation p-1" action="php/delCurso.php" novalidate method="POST">
          <?php
            $pasta = "TextoCursos";
            $arquivos = scandir($pasta);

            foreach($arquivos as $chave => $arquivo){
              if ('.' !== $arquivo && '..' !== $arquivo){
              $titulo = explode(".", $arquivo);
              $tituloExibir = str_replace('_', ' ', $titulo);
              echo "<input name='titulo' type='radio' value='" . $titulo[0] . "'>" . ucwords($tituloExibir[0]) . "</input>" . "<br>";
              }
            }
          ?>
          <button class="btn btn-primary btn-lg" type="submit" name="delSubmit">Concluir</button>
        </form>
        </div>
      </div>
      
    </div>

  </div>

  <script>
  const imagem = document.getElementById("fotoUpload"); //Input imagem

function medir() {
  if (imagem.files[0].size > 2 * 1024 * 1024) {
    alert("Arquivo muito grande!!");
    imagem.value = "";
  }
};
  </script>
  <?php
  echo $footer;
  ?>

</body>

</html>