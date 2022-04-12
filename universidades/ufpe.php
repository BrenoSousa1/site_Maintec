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
    <title>UFPE</title>
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
      <small>UFPE – Universidade Federal de Pernambuco</small></h1>
        </center>
        <center>
        <img src = "ufpe.png">
        <hr><br>
    </center>
      <p>A Universidade Federal de Pernambuco (UFPE) é uma instituição pública mantida pelo Governo Federal, através do Ministério da Educação, para ofertar ensino superior gratuito de qualidade. A UFPE tem como missão a promoção de um ambiente adequado ao desenvolvimento de pessoas e à construção de conhecimentos e competências que contribuam para a sustentabilidade da sociedade, através do ensino, pesquisa, extensão e gestão.</p>      
      <p>A UFPE é uma boa universidade, com conceito institucional 4, em ranking de 1 a 5 do MEC; no Ranking de Universidades da Folha (RUF) 2017, está situada em 11º lugar de 195 universidades brasileiras pesquisadas; e, no The Word University Rankings 2018, está entre as mil melhores universidades do mundo. A universidade também é destaque no Índice Geral de Cursos (IGC) do MEC, com nota 4; em avaliações como o ENADE (Exame Nacional de Desempenho de Estudantes); e em titulação e produção científica dos professores da pós-graduação através da CAPES (Coordenação de Aperfeiçoamento de Pessoal de Nível Superior).</p>
      <p>A origem da UFPE data de 1946, a partir da fundação da Universidade do Recife (UR), que reunia a Faculdade de Direito do Recife (1827), a Escola de Engenharia de Pernambuco (1895), a Escola de Farmácia (1903), a Escola de Odontologia (1913), a Faculdade de Medicina do Recife (1915), a Escola de Belas Artes de Pernambuco (1932) e Faculdade de Filosofia do Recife (1940). Em 1967, a UR foi federalizada, vinculada ao Ministério da educação, e tornou-se a Universidade Federal de Pernambuco.</p>
      <p>Nos últimos anos, a UFPE foi expandida e passou a funcionar em três campi situados em Recife (sede), Caruaru e Vitória de Santo Antão. A universidade tem mais de 40 mil alunos, três mil professores e cinco mil servidores. Entre 2005 e 2016, através do REUNI, a UFPE implantou mais de 30 cursos de graduação - Cinema, Arqueologia, Museologia, Dança, Sistemas de Informação, Engenharia de Materiais, Engenharia de Energia e Engenharia Naval, entre outros.</p>
   
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>