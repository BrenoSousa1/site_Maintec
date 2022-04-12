<?php

$nav = '<header>
<!-- Navbar Fixado -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-lg ">
<a class="navbar-brand" href="index.php"><img src="mainteclogo3.png" width=auto height=40px></a>
  <div class="navbar-expand navbar-collapse container-fluid">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cursos.php">Cursos</a>
      </li>
   <li class="nav-item">
        <a class="nav-link" href="vestibulares.php">Vestibulares</a>
      </li>
   <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
    </ul>
';
if(isset($_SESSION['id'])){
  $navbar = $nav.'
          <a href="user_home.php">
              <button class="btn btn-outline-success">Área do Usuário</button>
          </a>
      </div>
    </nav>
  </header>
  ';

}else{
  if(isset($_SESSION['idADM'])){
    $navbar = $nav.'
            <a href="adm_home.php">
                <button class="btn btn-outline-success my-2 my-sm-0">Área do ADM</button>
            </a>
        </div>
      </nav>
    </header>
    ';
  
  }else{
  $navbar = $nav.'
        <a href="login.php">
            <button class="btn btn-outline-success my-2 my-sm-0">Login</button>
        </a>
    </div>
  </nav>
</header>
';
  }
}
$navbarVestibular = '
<!-- Barra de Navegação-->

     <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><img src="mainteclogo1.png" width=auto height=50px></a>
        <div class="navbar-expand collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cursos.php">Cursos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vestibulares.php">Vestibulares</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
            </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="vestibulares/enem.php">Enem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vestibulares/sisu.php">Sisu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vestibulares/prouni.php">ProUni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vestibulares/fies.php">Fies</a>
          </li>
      </div>
      
</nav>
';

$navbarVest = '
<!-- Barra de Navegação-->

     <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="../index.php"><img src="../mainteclogo1.png" width=auto height=50px></a>
        <div class="navbar-expand collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../cursos.php">Cursos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../vestibulares.php">Vestibulares</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../sobre.php">Sobre</a>
                </li>
            </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="enem.php">Enem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sisu.php">Sisu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prouni.php">ProUni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fies.php">Fies</a>
          </li>
      </div>
      
</nav>
';

$navbarADM = '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="adm_home.php"> Área do ADM </a>
  <div class="collapse navbar-collapse" id="navbarText">
  <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
        </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="php/logout.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
';

$navbarUsuario = '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="user_home.php"> Área do Usuário </a>
  <div class="collapse navbar-collapse" id="navbarText">
  <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#modalAlterar">Mudar dados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/gerarCurriculo.php">Gerar curriculo</a>
          </li>
        </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="php/logout.php">Sair</a>
      </li>
    </ul>
        
        </div>
</nav>
      ';

      $navbarCadastro = '<header>
      <!-- Navbar Fixado -->
      <nav class="navbar navbar-expand-sm navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="btn btn-outline-dark" href="index.php">Home</a>
            </li>
            </ul>
        <a href="login.php">
            <button class="btn btn-outline-dark">Login</button>
        </a>
    </div>
  </nav>
</header>
      ';

?>