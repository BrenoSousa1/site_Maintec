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
    <title>UNB</title>
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
      <small>UNB – Universidade de Brasília</small></h1>
        </center>
        <center>
        <img src = "unb.png">
        <hr><br>
    </center>
      <p>A Universidade de Brasília (UNB) é uma instituição de ensino superior pública e gratuita, sediada na UnB em Brasília, capital do Distrito Federal, criada em 1962 pelo antropólogo Darcy Ribeiro, pelo educador Anísio Teixeira e pelo arquiteto Oscar Niemeyer. A missão da Universidade de Brasília é ser uma instituição de ensino inovadora, comprometida com a excelência acadêmica, científica e tecnológica a fim de formar cidadãos conscientes do papel transformador na sociedade.</p>      
      <p>A UNB é reconhecida pelo MEC e possui nota máxima no Índice Geral de Cursos (IGC) do Ministério da Educação. Os cursos da universidade são ministrados nos quatro campi e também no ensino EAD, com o uso de tecnologias de informação e comunicação além de recursos multimídia. Com a sua estrutura, e sua política pedagógica executada nos cursos de graduação e de pós-graduação, a UNB visa posicionar-se entre as melhores universidades do Brasil e do mundo, com excelência em gestão do ensino, da pesquisa e da extensão. </p>
      <p>A UNB tornou-se multicampi em 2006 com a expansão da sua estrutura para locais externos ao plano piloto e ao campus Darcy Ribeiro. A Faculdade UNB Planaltina (FUP) foi reformulada nos anos seguintes, transformando-se em campus UNB Planaltina. Posteriormente, as faculdades de Ceilândia e do Gama tornaram-se os campi UNB Ceilândia e UNB Gama a partir do Programa de Apoio a Planos de Reestruturação e Expansão das Universidades Federais (Reuni).</p>
      <p>Uma características dos campis da UNB é o ensino focado em áreas especificas. O campus UNB Ceilândia oferta cursos específicos para a área de saúde; o campus UNB Planaltina, em ciências naturais e agrárias; o campus UNB Gama oferta cursos de engenharia.</p>
   
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>