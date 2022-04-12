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
    <title>USP</title>
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
      <small>USP – Universidade de São Paulo</small></h1>
        </center>
        <center>
        <img src = "usp.png">
        <hr><br>
    </center>
      <p>A Universidade de São Paulo (USP) é uma das quatro universidades públicas mantidas pelo governo do estado brasileiro de São Paulo, juntamente com a Universidade Estadual de Campinas (Unicamp), Universidade Estadual Paulista (UNESP) e a Universidade Virtual do Estado de São Paulo (Univesp).</p>      
      <p>É a maior universidade pública brasileira e a universidade mais importante do país, e uma das mais importantes da Ibero-América, do mundo lusófono e uma das mais prestigiadas em todo o mundo. 
        Somando todos os Campi, a USP possui um total de 246 cursos de graduação, 229 cursos de pós-graduação, 5,8 mil professores e 93 mil alunos matriculados entre graduação e pós-graduação (2012). </p>
        <p>Segundo o relatório mundial de 2012 (SIR World Report) da SCImago Institutions Rankings, a USP está classificada na oitava segunda posição mundial entre as 3 290 instituições de ensino e pesquisa internacionais classificadas.</p>
        <p>Entre as universidades públicas brasileiras tem o maior número de vagas de graduação e de pós-graduação, sendo responsável também pelo maior número de mestres e doutores do mundo, bem como responsável por metade de toda a produção científica do estado de São Paulo e mais de 25% da brasileira. </p>
        <p>Criada em 1934, a contribuição desta universidade para a história brasileira é bastante relevante: na instituição se formaram no ensino superior treze dos quarenta e três presidentes brasileiros, como o sociólogo Fernando Henrique Cardoso e o advogado Jânio Quadros — este último e outros dez apenas na Faculdade de Direito, que também formou 53 ministros na história do Supremo Tribunal Federal (STF) e cuja fundação precede em 108 anos a da própria universidade.</p>
      
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>