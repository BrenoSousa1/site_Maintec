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
    <title>UFRJ</title>
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
      <small>UFRJ – Universidade Federal do Rio de Janeiro</small></h1>
        </center>
        <center>
        <img src = "ufrj.png">
        <hr><br>
    </center>
      <p>A Universidade Federal do Rio de Janeiro (UFRJ), também denominada Universidade do Brasil, é uma universidade federal do Brasil e um centro de excelência em ensino e pesquisa no país e na América Latina. </p>      
      <p>Em termos de produção científica, artística e cultural, é reconhecida nacional e internacionalmente, mercê do desempenho dos pesquisadores e das avaliações levadas a efeito por agências externas. </p>
        <p>Em 2015 o QS World University Rankings classificou a UFRJ como a melhor universidade federal brasileira, bem como a terceira melhor universidade do país, a quinta entre as instituições da América Latina e a 25ª melhor instituição universitária dos BRICS e de outros países em desenvolvimento. </p>
        <p>Primeira instituição oficial de ensino superior do Brasil, possui atividades ininterruptas desde 1792, com a fundação da Real Academia de Artilharia, Fortificação e Desenho, da qual descende a atual Escola Politécnica.</p>
        <p>Além dos 179 cursos de graduação e 345 de pós-graduação, compreende e mantém sete museus, com destaque para o Palácio de São Cristóvão, nove unidades hospitalares, uma editora, centenas de laboratórios e 43 bibliotecas. </p>
      
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>