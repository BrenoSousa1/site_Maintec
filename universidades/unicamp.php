<?php
session_start();
include '../head.php';
include '../navbar.php';
include '../footer.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
  <?php 
   echo $metadatas;
  ?>
    <title>UNICAMP</title>
  </head>

  <body>
  <?php 
   echo $navbarVest;
  ?>
	   <div class="container">     
	   <!-- Titulo -->  
	  <br><br><br>
      <h1 class="my-4"> 
        <center>
      <small>UNICAMP – Universidade Estadual de Campinas</small></h1>
        </center>
        <center>
        <img src = "unicamp.png">
        <hr><br>
    </center>
      <p>Universidade Estadual de Campinas (Unicamp) é uma universidade pública do estado de São Paulo, Brasil, considerada uma das melhores universidades do país e da América Latina. </p>      
      <p>Fundada em 1962, a Unicamp foi projetada do zero como um sistema integrado de centros de pesquisa, ao contrário de outras universidades brasileiras, geralmente criadas pela consolidação das escolas e institutos anteriormente existentes.</p>
        <p>Seu foco em pesquisa reflete que quase metade de seus estudantes são alunos de pós-graduação, a maior proporção entre todas as grandes universidades no Brasil.</p>
        <p>Ela também se destaca no grande número de cursos de pós-graduação oferecidos (153, comparados aos 70 cursos de graduação), além de oferecer vários cursos para cerca de 8 mil estudantes por meio de sua escola de extensão.</p>
        <p>Seu principal campus ocupa 3,5 quilômetros quadrados e está localizado no distrito de Barão Geraldo, uma área suburbana a 12 km do centro de Campinas, construída logo após a criação da universidade.</p>
        <p>Em 2015, o QS a classificou como a 195ª melhor universidade do mundo, além da 11ª melhor universidade com menos de 50 anos de existência do planeta e como a 24ª melhor instituição universitária dos BRICS e de outros países em desenvolvimento.</p>
    
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>