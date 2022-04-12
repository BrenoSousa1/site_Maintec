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
    <title>UFMG</title>
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
      <small>UFMG – Universidade Federal de Minas Gerais </small></h1>
        </center>
        <center>
        <img src = "ufmg.png">
        <hr><br>
    </center>
      <p>A Universidade Federal de Minas Gerais (UFMG) é uma instituição de ensino superior pública federal brasileira, sediada na cidade de Belo Horizonte, no estado de Minas Gerais.</p>      
      <p>Universidade Federal de Minas Gerais foi fundada em 7 de setembro de 1927, por iniciativa do governo de Minas Gerais, a partir da reunião de quatro instituições de ensino superior: as Faculdades de Direito e Medicina, e as Escolas de Engenharia e de Odontologia e Farmácia. 
        Além de desenvolver programas e projetos de ensino, nos níveis de graduação e pós-graduação, pesquisa e extensão, sob a forma de atividades presenciais, e a distância, em oito áreas do conhecimento, a Universidade oferece, também, na Escola Fundamental, no Colégio Técnico, no Núcleo de Ciências Agrárias e no Teatro Universitário, cursos de educação básica e profissional de nível médio. </p>
        <p>Segundo o Ministério da Educação - MEC, a UFMG é a segunda universidade que mais recebe recursos do governo federal, uma vez que é uma das que mais oferecem cursos e programas para ensino de graduação, pós-graduação, pesquisa e extensão.</p>
        <p>Dentre vários indicadores internacionais e nacionais que avaliam as universidades, a UFMG tem se destacado como uma das mais importantes universidades no Brasil, particularmente com crescente presença internacional como apontado pelo Academic Ranking of World Universities (ARWU).</p>
       
      
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>