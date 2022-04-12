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
      <?php 
      $arquivo = $_GET['profissao'];

      $nome = str_replace('_', " ", $arquivo);
      
      $texto = file("textocursos/".$arquivo.".txt");

      ?>
      
  </head>

  <body>
  <?php 
   echo $navbar;
  ?>
    <div class="container">
    
	<!-- Div com informações da area de TI-->
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="background-image:url('ti2.jpg'); width:auto; height:400px;">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Carreira de TI</h1>
          <p class="lead my-3">Tecnologia da Informação (TI) é um conjunto de todas as atividades e soluções providas por recursos de computação que visam a produção, o armazenamento, a transmissão, o acesso, a segurança e o uso das informações.</p>
          <p class="lead mb-0"><a href="carreirati.php" class="text-white font-weight-bold">Continue lendo...</a></p>
        </div>
      </div>

<!-- Inicio das informções-->

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-arial-Black border-bottom">
            </h3>
            <div class="blog-post">
                <h2 class="blog-post-title text-capitalize"><?php echo $nome; ?></h2>
                <h4>Do que se trata?</h4>
				<p> <?php echo $texto['0'];?>     </p>

                <h4>Mercado</h4>
				<p><?php echo $texto['1']; ?>     </p>
            </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->
		<!--Fim da informações-->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Base Salarial</h4>
            <p class="mb-0"><?php echo $texto['2']; ?></p>
          </div>

          <div class="p-3">
            <h4 class="font-arial-black">Onde nos encontrar, por aí:</h4>
            <ol class="list-unstyled">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
</div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>