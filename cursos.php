<?php
session_start();
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
  <title>Cursos</title>
</head>

<body>
  <?php echo $navbar; ?>
  <!-- Div com informações da area de TI-->
  <div class="jumbotron text-white bg-dark rounded-0" style="background-image:url('ti2.jpg'), url('bgti2.jpg'); width:auto; height:400px; background-repeat: no-repeat, repeat; background-position: 100%, center;">
    <div class="col-md-6">
      <h1 class="display-4 font-italic">Carreira de TI</h1>
      <p class="lead my-3">Tecnologia da Informação (TI) é um conjunto de todas as atividades e soluções providas por recursos de computação que visam a produção, o armazenamento, a transmissão, o acesso, a segurança e o uso das informações.</p>
      <p class="lead mb-0"><a href="carreirati.php" class="text-white font-weight-bold">Continue lendo...</a></p>
    </div>
  </div>


  <div class="py-5 bg-light">
    <div class="container">

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
  <?php
  echo $footer;
  ?>
</body>

</html>