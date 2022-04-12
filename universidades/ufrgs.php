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
    <title>UFRGS</title>
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
      <small>UFRGS – Universidade Federal do Rio Grande do Sul</small></h1>
        </center>
        <center>
        <img src = "ufrgs.png">
        <hr><br>
    </center>
      <p>A UFRGS - Universidade Federal do Rio Grande do Sul é uma instituição de ensino superior pública, gratuita, vinculada ao Ministério da Educação. A instituição está sediada em Porto Alegre, capital do estado, e ministra cursos em todas as áreas do conhecimento desde a educação básica, através do Colégio Aplicação, até o nível de pós-graduação (mestrado e doutorado).</p>      
      <p>A UFRGS é uma boa faculdade. Segundo o MEC, a UFRGS possui Conceito Institucional 4 e, no Índice Geral de Cursos (IGC), tem conceito 5 em ranking de 1 a 5 do Ministério. A UFRGS é considerada a 5ª melhor universidade do país e a 4ª melhor no quesito ensino, segundo o Ranking Universidades da Folha (RUF) de 2017.  </p>
        <p>A origem da UFRGS data de 1895, com a fundação da Escola de Farmácia e Química, da Escola de Engenharia e, nos anos seguintes, da Faculdade de Direito e da Faculdade de Medicina de Porto Alegre. Em 1934, foi criada a Universidade de Porto Alegre, que agregou também diversos institutos como os Institutos de Astronomia, Eletrotécnica e Química Industrial; as Escolas de Odontologia e Farmácia; a Escola de Comércio; Faculdade de Agronomia e Veterinária, entre outras.</p>
        <p>Em 1947, a universidade passou a ser chamada Universidade do Rio Grande do Sul (URGS) agregando as Faculdades de Direito e de Odontologia de Pelotas e a Faculdade de Farmácia de Santa Maria. Apenas em 1950 a URGS foi federalizada e passou a ser chamada de Universidade Federal do Rio Grande do Sul, vinculada à União.
        </p>
        <p>O aluno da UFRGS tem acesso a uma infraestrutura composta por laboratórios, bibliotecas, assistência estudantil, intercâmbio (por meio da política de internacionalização da universidade), e também acesso a um corpo docente qualificado, formado por mestres e doutores.</p>
      
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>