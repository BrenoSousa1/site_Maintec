<?php
session_start();
include 'head.php';
include 'navbar.php';
include 'footer.php';
?>
<!doctype html>
  <html lang="pt-br">
    <head>
      <?php
      echo $metadatas;
      ?>
      <title>MainTEC</title>
    </head>
<body>
  <?php
  echo $navbar;
  ?>
  <?php
   if(isset($_SESSION['Mensagem'])){
    echo $_SESSION['Mensagem'];
    unset($_SESSION['Mensagem']);
   }
  ?>
  <div class="container-fluid" style="max-height: 400px; height: 35vh;background-image: url('estudante.jpg'); background-size: 100%; background-position: 100% 20%;">
    <img class="pb-5 align-self-center" src="mainteclogo1.png" alt="MainTec" style="min-height: 75px; max-height: 177px; max-width: 50%; filter: drop-shadow(1px 1px 2px black);">
  </div>
    <div class="align-items-start">
    <div class="ml-5 col-6">
      <h1 class="display-3">
        Maintec
        <h2 class="lead">
          Maintec foi idealizado com o objetivo de ajudar aqueles que querem começar em algum carreira e não se decidiu ainda por onde começar
        </h2>
      </h1>
      <p class="font-weight-light">
          Através deste site nós iremos te ajudar a conhecer melhor alguns dos cursos disponivéis em universidades, com informações completas e verídicas
      </p>
      <p class="font-weight-light">
        Por enquanto decidimos colocar sobre a nossa área de estudo, TI, porém nossa equipe ainda pretende ampliar para outras areas
        para ajudar a todos a encontrar a sua carreira ideal, e claro, sempre da forma mais direta possivel
        </p>
        <p class="font-weight-light">
          Nosso site também conta com uma área de usuário simples e de facil acesso com algumas funções exclusivas disponivéis.<br>
          Cadastre-se e experimente nossa ferramenta de Geração de Curriculo.
      </p>
        <div class="display-4 h1">
          Objetivo do Site
        </div>
          <ul>
            <li>Apresentar Informações Verídicas e Diretas.</li>
            <li>Clareza sobre os cursos.</li>
            <li>e principalmente, ajudar <span class="font-weight-bold">você</span> a encontrar uma carreira de sucesso</li>
          </ul>
        </div>
    </div>
    <?php
    echo $footer;
    ?>
  </body>
</html>