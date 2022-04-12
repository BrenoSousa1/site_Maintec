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
	  
	  <!-- Primeira universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/usp.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/usp.png" >
          </a>
        </div>
        <div class="col-md-5">
          <h3>USP – Universidade de São Paulo</h3>
          <p>Esta é a melhor universidade pública do Brasil segundo o RUF. Também está entre as mais sustentáveis do mundo. Recebeu a maior nota no quesito pesquisa e mercado. Segundo o relatório mundial de 2012 (SIR World Report) da SCImago Institutions Rankings, a USP está classificada na oitava segunda posição mundial entre as 3290 instituições de ensino e pesquisa internacionais classificadas.</p>
          <a class="btn btn-primary" href="universidades/usp.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Segunda universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/uni.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/unicamp.png" >
          </a>
        </div>
        <div class="col-md-5">
          <h3>UNICAMP – Universidade Estadual de Campinas </h3>
          <p>A segunda melhor universidade pública do Brasil também está localizada em São Paulo. Ela foi fundada em 1966 e está sediada na cidade de Campinas. Além disso, possui campi nas cidades de Limeira, Piracicaba e Paulínia. Teve as segundas maiores notas em ensino, pesquisa e inovação.</p>
          <a class="btn btn-primary" href="universidades/unicamp.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Terceira universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/ufrj.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/ufrj.png">
          </a>
        </div>
        <div class="col-md-5">
          <h3>UFRJ – Universidade Federal do Rio de Janeiro</h3>
          <p>Fundada em 1920, está sediada na cidade do Rio de Janeiro e é a terceira melhor universidade pública do Brasil também no Sudeste. Teve a maior nota em inovação. Além disso, possui campi nas cidades de Angra dos Reis, Duque de Caxias, Itaperuna e Macaé.</p>
          <a class="btn btn-primary" href="universidades/ufrj.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Quarta Universidade -->
      <div class="row">

        <div class="col-md-7">
          <a href="universidades/ufmg.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/ufmg.png">
          </a>
        </div>
        <div class="col-md-5">
          <h3>UFMG – Universidade Federal de Minas Gerais </h3>
          <p>A UFMG é a melhor instituição mineira e possui 75 cursos de Graduação. Dentre as melhores universidades públicas do Brasil, foi a que obteve a maior pontuação no quesito ensino. A universidade é uma das mais tradicionais do país e existe desde 1927, com campi em Belo Horizonte, Tiradentes e Montes Claros.</p>
          <a class="btn btn-primary" href="universidades/ufmg.php">Ver Detalhes</a>
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