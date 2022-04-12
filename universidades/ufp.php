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
    <title>UFP</title>
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
      <small>UFPR – Universidade Federal do Paraná </small></h1>
        </center>
        <center>
        <img src = "ufp.png">
        <hr><br>
    </center>
      <p>A UFPR - Universidade Federal do Paraná é uma instituição pública, sediada em Curitiba, mantida pelo Governo Federal para ofertar ensino superior gratuitamente. Presente na capital e no interior do Paraná, a instituição foi criada para fomentar, construir e disseminar o conhecimento a fim de contribuir para a formação do cidadão e desenvolvimento humano sustentável.</p>      
      <p>A UFPR é reconhecida pelo MEC e é uma das principais universidades do país. A UFPR tem origem em 1913, com a Universidade do Paraná, ainda enquanto uma instituição de ensino privado. Os cursos pioneiros foram Ciências Jurídicas e Sociais; Engenharia; Medicina e Cirurgia; Comércio; Odontologia; Farmácia e Obstetrícia.</p>
        <p>Aproximadamente em 1950, a instituição foi federalizada e tornou-se a Universidade Federal do Paraná, vinculada o Governo Federal através do MEC. O ensino tornou-se público e gratuito. O ensino, a pesquisa e a extensão são princípios indissociáveis da universidade que guiam a política pedagógica e as respectivas iniciativas.</p>
        <p>A federalização da UFPR incluiu também a expansão das suas unidades. Houve a construção do Hospital de Clínicas (1953), do Complexo da Reitoria (1958) e do Centro Politécnico (1961). Atualmente, a UFPR possui também a Maternidade Victor Ferreira do Amaral, Centro da Visão, Jardim Botânico, Centro de Estudos do Mar (CEM). A estrutura é multicampi, formada pelos campus UFPR Curitiba, UFPR Jandaia do Sul, UFPR Matinhos, UFPR Palotina, UFPR Pontal do Paraná e UFPR Toledo. </p>
        
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>