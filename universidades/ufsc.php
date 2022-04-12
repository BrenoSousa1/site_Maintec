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
    <title>UFSC</title>
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
      <small>UFSC – Universidade Federal de Santa Catarina </small></h1>
        </center>
        <center>
        <img src = "ufsc.png">
        <hr><br>
    </center>
      <p>A Universidade Federal de Santa Catarina (UFSC) é uma universidade pública, situada em Santa Catarina e sediada em Florianópolis, mantida pelo Governo Federal para a oferta de ensino superior gratuito e de atividades complementares de pesquisa e extensão que auxiliem na formação do profissional. A UFSC é uma instituição formada por cerca de 60 mil pessoas, entre docentes, servidores técnico-administrativos e estudantes.</p>      
      <p>A UFSC é gratuita, reconhecida pelo Ministério da Educação e considerada uma das melhores instituições públicas de ensino do Brasil, com nota 4 no Índice Geral de Cursos Avaliados (IGC) do MEC, entre cinco pontos possíveis. No Ranking Universitário da Folha de 2017, a UFSC foi considerada a 6ª melhor universidade do país entre as 195 instituições avaliadas – e, entre as universidades federais, foi a 4ª colocada.</p>
        <p>Desde os anos 80 a UFSC amplia a sua oferta de cursos, expandindo as pós-graduações e linhas de pesquisa. Atualmente, tem mais de 30 mil estudantes matriculados em 14 cursos EAD e mais de 100 cursos presenciais. A pós-graduação UFSC dispõe de mais de sete mil vagas em diversas áreas do conhecimento, o Diretório de Grupos de Pesquisa (DGP) reúne professores, servidores e estudantes em aproximadamente 600 grupos de pesquisa certificados pelo CNPQ (Conselho Nacional de Desenvolvimento Científico e Tecnológico). A maioria dos estudantes encontra-se na pós-graduação EAD (2.891) e uma outra fatia, nos cursos presenciais (179).</p>
        <p>A fim de fomentar o desenvolvimento das comunidades locais do estado, a Universidade Federal de Santa Catarina mantém o Colégio Aplicação, que oferece cursos de educação básica à comunidade, e o Núcleo de Desenvolvimento Infantil (NDI) que atende mais de 200 crianças com idade até 5 anos e 11 meses.</p>
        
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>