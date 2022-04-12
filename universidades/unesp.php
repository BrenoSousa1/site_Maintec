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
    <title>UNESP</title>
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
      <small>UNESP – Universidade Estadual Paulista Júlio de Mesquita Filho </small></h1>
        </center>
        <center>
        <img src = "unesp.png">
        <hr><br>
    </center>
      <p>A UNESP - Universidade do Estado de São Paulo é uma instituição de ensino gratuita, mantida pelo governo estadual de São Paulo. A UNESP é pública e está presente em 24 cidades paulistas através de 34 unidades universitárias. Pautada no tripé “ensino, pesquisa e extensão”, a universidade soma aproximadamente 200 cursos de graduação e 150 programas de pós-graduação.</p>      
      <p>Criada em 1976, a UNESP é resultado da incorporação dos Institutos Isolados de Ensino Superior do Estado de São Paulo. As primeiras unidades foram a Faculdade de Filosofia, Ciências e Letras (com unidades em Assis, Araraquara, Franca, Marília, Presidente Prudente, Rio Claro e São José do Rio Preto). Em seguida, veio a Faculdade de Farmácia e Odontologia de Araraquara a Faculdade de Ciências Agrárias e Veterinárias de Jaboticabal, a de Engenharia de Guaratinguetá e a Medicina de Botucatu.</p>
        <p>Na década de 80, a UNESP passou por reestruturações que contribuíram para a ampliação atuação da universidade. Houve a criação da Fundunesp (1987), de uma Editora UNESP (1987), e do Jornal da UNESP. Em 2003, surgiram os Campus Experimentais, situados em Dracena, Itapeva, Ourinhos, Registro, Rosana, São Vicente, Sorocaba e Tupã.</p>
        <p>Atualmente, os estudantes podem ter acesso a uma série de materiais de apoio à graduação. O acervo bibliográfico pode ser consultado através da Rede de Bibliotecas UNESP, composta pela Coordenadoria Geral de Bibliotecas (São Paulo e Marília) e mais 39 unidades situadas nas Unidades Universitárias e Experimentais. A Iniciação Científica, que visa ao desenvolvimento de projetos de pesquisa, sob orientação de um professor, e o Programa de Educação Tutorial (PET) criar condições favoráveis para o desenvolvimento de atividades extracurriculares, entre outras iniciativas.</p>
        
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>