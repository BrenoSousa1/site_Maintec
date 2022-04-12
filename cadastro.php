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
    <title>Cadastro</title>
  </head>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="form-validation.css" rel="stylesheet">
  </head>
 
  <body class="bg-light">
  <?php echo $navbarCadastro; ?>
    <div class="container">
  <div class="py-1 text-center">
    <a href="index.php"><img class="d-block mx-auto mb-4" src="mainteclogo2.png" width="100" height="90"></a>
    <h2>Cadastro</h2>
  </div> 
    </div>
    <div class="col mx-auto w-50 order-md-1 ">
      <h4 class="mb-3"> Informações Básicas</h4>
      <form class="needs-validation" action="./php/cadastro.php" novalidate method="POST">
          <div class="mb-3">
            <label for="firstName">Nome Completo</label>
            <input type="text" name="nome" class="form-control" id="firstName" required>
            <div class="invalid-feedback">
              Um nome válido é obrigatório.
            </div>
          </div>
          <div class="mb-3">
            <label for="birthday">Data de Nascimento</label>
            <input type="date" name="dtnascimento" class="form-control" id="birthday" required>
            <div class="invalid-feedback">
              Uma data válida é obrigatório.
            </div>
          </div>

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" name="email" class="form-control" id="email" placeholder="exemplo@exemplo.com">
		  <div class="invalid-feedback">
            Por favor insira um email válido.
          </div>
        </div>
		
		<div class="mb-3">
          <label for="password">Senha</label>
         <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
         <label for="password">Recomenda-se utilizar Letras Maiusculas, Números e Simbolos</label>
    </div>
    <div class="mb-3">
      <label for="password">Confirme sua senha</label>
     <input type="password" name="confirm" id="inputPassword" class="form-control" placeholder="Confirme sua senha" required>
</div>        
        <hr class="mb-4">
        <h4 class="mb-3">Endereço</h4>

		        <div class="mb-3">
          <label for="cep">CEP</label>
          <input type="text" name="cep" class="form-control" id="country" maxlength="9" placeholder="01234-567" text required>
          <div class="invalid-feedback">
            Por favor insira informações válidas.
          </div>
        
            </div>
		<div class="mb-3">
          <label for="state">Estado</label>
          <select type="text" name="estado" class="form-control" id="state" required> 
              <option value="estado">Selecione o Estado</option> 
              <option value="ac">Acre</option> 
              <option value="al">Alagoas</option> 
              <option value="am">Amazonas</option> 
              <option value="ap">Amapá</option> 
              <option value="ba">Bahia</option> 
              <option value="ce">Ceará</option> 
              <option value="df">Distrito Federal</option> 
              <option value="es">Espírito Santo</option> 
              <option value="go">Goiás</option> 
              <option value="ma">Maranhão</option> 
              <option value="mt">Mato Grosso</option> 
              <option value="ms">Mato Grosso do Sul</option> 
              <option value="mg">Minas Gerais</option> 
              <option value="pa">Pará</option> 
              <option value="pb">Paraíba</option> 
              <option value="pr">Paraná</option> 
              <option value="pe">Pernambuco</option> 
              <option value="pi">Piauí</option> 
              <option value="rj">Rio de Janeiro</option> 
              <option value="rn">Rio Grande do Norte</option> 
              <option value="ro">Rondônia</option> 
              <option value="rs">Rio Grande do Sul</option> 
              <option value="rr">Roraima</option> 
              <option value="sc">Santa Catarina</option> 
              <option value="se">Sergipe</option> 
              <option value="sp">São Paulo</option> 
              <option value="to">Tocantins</option> 
          </select>
          <div class="invalid-feedback">
            Por favor insira informações válidas.
          </div>
		  <br>
		<label for="state">Cidade</label>
          <input type="text" name="cidade" class="form-control" id="city" required>
          <div class="invalid-feedback">
            Por favor insira informações válidas.
          </div>
		  <br>
		  <label for="state">Bairro</label>
          <input type="text" name="bairro" class="form-control" id="state" required>
          <div class="invalid-feedback">
            Por favor insira informações válidas.
          </div>
          <div class="mb-3">
            <label for="address">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="address" placeholder="Nome da Rua 123" required>
            <div class="invalid-feedback">
              Por favor insira informações válidas.
            </div>
          </div>
          </div>
        </div>
        <div class="text-center">
    <button class="btn btn-primary btn-lg" type="submit" name="cadastro">Concluir</button>
    </div>
	   
	  </form>
    </div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>