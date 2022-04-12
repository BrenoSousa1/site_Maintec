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
    <title>Vestibulares</title>
  </head>

  <body>
  <?php 
   echo $navbarVestibular;
  ?>
	   <div class="container">     
	   <!-- Titulo -->  
      <h1 class="my-4"> 
	  <small>Melhores Universidades Públicas do Brasil</small></h1>
	  
	  <!-- Quinta universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/ufrgs.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/ufrgs.png" >
          </a>
        </div>
        <div class="col-md-5">
          <h3>UFRGS – Universidade Federal do Rio Grande do Sul </h3>
          <p>Esta é a melhor universidade pública do Brasil segundo o RUF. Também está entre as mais sustentáveis do mundo. Recebeu a maior nota no quesito pesquisa e mercado. Segundo o relatório mundial de 2012 (SIR World Report) da SCImago Institutions Rankings, a USP está classificada na oitava segunda posição mundial entre as 3290 instituições de ensino e pesquisa internacionais classificadas.</p>
          <a class="btn btn-primary" href="universidades/ufrgs.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Sexta universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/unesp.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/unesp.png" >
          </a>
        </div>
        <div class="col-md-5">
          <h3>UNESP – Universidade Estadual Paulista Júlio de Mesquita Filho </h3>
          <p>A Universidade Estadual Paulista Júlio de Mesquita Filho é uma universidade pública brasileira, com atuação no ensino, na pesquisa e na extensão de serviços à comunidade. </p>
		  <p>Psicologia, Design, Jornalismo, Direito, Serviço Social, Relações Internacionais, Administração e Turismo são os cursos mais bem pontuados.</p>
          <a class="btn btn-primary" href="universidades/unesp.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Sétima universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/ufsc.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/ufsc.png">
          </a>
        </div>
        <div class="col-md-5">
          <h3>UFSC – Universidade Federal de Santa Catarina </h3>
          <p>A Universidade Federal de Santa Catarina é uma instituição de ensino superior pública federal brasileira, sendo a maior universidade do estado de Santa Catarina e uma das principais da Região Sul do Brasil.</p>
          <a class="btn btn-primary" href="universidades/ufsc.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Oitava Universidade -->
      <div class="row">

        <div class="col-md-7">
          <a href="universidades/ufp.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/ufp.png">
          </a>
        </div>
        <div class="col-md-5">
          <h3>UFPR – Universidade Federal do Paraná</h3>
          <p>A Universidade Federal do Paraná é a mais antiga instituição de ensino com concepção de universidade do Brasil, fundada em 19 de dezembro de 1912, inicialmente com o nome de Universidade do Paraná.</p>
          <a class="btn btn-primary" href="universidades/ufp.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Paginação -->
      <ul class="pagination justify-content-center">
      
        <li class="page-item">
          <a class="page-link" href="vestibulares.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="vestibularesII.php">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="vestibularesIII.php">3</a>
        </li>

      </ul>

    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>