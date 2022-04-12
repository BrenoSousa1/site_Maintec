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
	  
	  <!-- Nona universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/unb.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/unb.png" >
          </a>
        </div>
        <div class="col-md-5">
          <h3>UNB – Universidade de Brasília  </h3>
          <p>A Universidade de Brasília é uma universidade pública federal brasileira, com sede em Brasília, no Distrito Federal. A instituição possui 4 campi, sendo estes em Brasília, em Planaltina, em Gama, em Ceilândia e no Paraná.</p>
		  <p>É referência no Brasil e no exterior nos cursos: Relações Internacionais, Ciência Política, Economia, Direito e Antropologia.</p>
          <a class="btn btn-primary" href="universidades/unb.php">Ver Detalhes</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Décima universidade -->
      <div class="row">
        <div class="col-md-7">
          <a href="universidades/ufpe.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="universidades/ufpe.png" >
          </a>
        </div>
        <div class="col-md-5">
          <h3>UFPE – Universidade Federal de Pernambuco</h3>
          <p>A UFPE possui ao total 100 cursos de Graduação, 56 cursos de Pós-graduação lato sensu (especializações) e 133 cursos de Pós-graduação stricto sensu, 73 Mestrados acadêmicos, 11 Mestrados profissionais, 51 Doutorados e 5 cursos de Graduação a distância.</p>
		<p>Ciências Econômicas, Psicologia, Turismo, Jornalismo, Design, Administração, Direito, Serviço Social e Publicidade e Propaganda são os principais cursos.</p>
		<a class="btn btn-primary" href="universidades/ufpe.php">Ver Detalhes</a>
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