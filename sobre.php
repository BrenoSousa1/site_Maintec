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
    <title>Quem Somos</title>
  </head>
  <body>
  <?php 
     echo $navbar;
  ?>
<!-- Fim do Conteúdo -->
<div class="align-items-start" style="font-size: 1rem;">
    <div class="ml-5 px-5 col-6 my-4">
      <h1 class="font-weight-light">
        Quem Somos?
        <h2 class="lead">
          Apresentação
        </h2>
      </h1>
      <p class="font-weight-light">
          Alunos do curso técnico de Desenvolvimento de Sistemas com o intuito de ajudar a aqueles que assim como nós, tiveram dificuldades de escolher a carreira que seguir
      </p>
    </div>
</div>
<!-- Conteúdo da página -->
<div class="container my-2">
  <div class="row">
    <!-- Gui -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="Fotos/Gui.png" class="card-img-top" alt="Guilherme">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Guilherme Lima</h5>
          <div class="card-text text-black-50">Administrador Banco de Dados</div>
        </div>
      </div>
    </div>
    <!-- Carol -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="Fotos/Carol.jpg" class="card-img-top" alt="Carol">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Caroline Vitória</h5>
          <div class="card-text text-black-50">Desenvolvedora Web</div>
        </div>
      </div>
    </div>
    <!-- Gelson -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="Fotos/Gelson.jpg" class="card-img-top" alt="Gelson">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Vitor Gelson</h5>
          <div class="card-text text-black-50">Manutenção Web</div>
        </div>
      </div>
    </div>
	<!-- Lucas -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="Fotos/Lucas.jpg" class="card-img-top" alt="Lucas">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Lucas Rodrigues</h5>
          <div class="card-text text-black-50">Responsavél pela pesquisa</div>
        </div>
      </div>
    </div>
	<!-- Breno -->
	<div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="Fotos/Breno.png" class="card-img-top" alt="Breno">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Breno Oliveira</h5>
          <div class="card-text text-black-50">Programador em PhP</div>
        </div>
      </div>
    </div>
	<!-- Halt -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="Fotos/Halt.jpg" class="card-img-top" alt="Halt">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Gabriel Halt</h5>
          <div class="card-text text-black-50">Responsavél pela pesquisa</div>
        </div>
      </div>
    </div>
	<!-- Igor -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="Fotos/Igor.jpg" class="card-img-top" alt="Igor">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Igor Martins</h5>
          <div class="card-text text-black-50">Documentação</div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>
