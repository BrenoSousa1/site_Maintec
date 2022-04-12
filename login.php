<?php
session_start();
include 'head.php';
include 'footer.php';

    if(isset($_SESSION['id'])){
            //Verificar se existe um login de Usuario, caso sim, ir direto a area
            header('location: user_home.php');
    }
    if(isset($_SESSION['idADM'])){
      //Verificar se existe um login de Usuario, caso sim, ir direto a area
      header('location: adm_home.php');
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
  <?php 
   echo $metadatas;
  ?>
    <title>Login</title>
    <style>
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
body {
 background-color:#083b66;
}
.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}
.card-signin .card-body {
  padding: 2rem;
}
.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}
.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}
.form-label-group input {
  height: auto;
  border-radius: 2rem;
}
.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}
.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}
.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}
@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>
<body>
  <div class="container">
  <div class="text-center mx-auto"> <img class="fluid" src="mainteclogo4.png"> </div>
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-1">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="POST" action="php/Login.php">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <label for="inputEmail">Email</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                <label for="inputPassword">Senha</label>
              </div>
              <div class="text-center mx-auto form-label-group"> 
              <button class="btn btn-lg btn-primary text-uppercase my-1 px-5" style="background-color:#083b66;" type="submit">Entrar</button>
              </div>
			    </form>
              <div class="text-center mx-auto"> 
                <a class="btn btn-sm btn-light text-uppercase my-1" role="button" href="index.php">Voltar</a>
                <a class="btn btn-sm btn-light text-uppercase my-1" role="button" href="cadastro.php">Cadastro</a>
              </div>
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
