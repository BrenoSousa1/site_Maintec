<?php
session_start();
require_once 'php/verificaUSER.php';
include 'head.php';
include 'navbar.php';
include 'footer.php';

include 'php/conn.php';

$query = "SELECT * FROM Usuario WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $query);
$dados = mysqli_fetch_array($result);

$idade = floor(((((time() - strtotime($dados['dtnascimento'])) / 60) / 60) / 24) / 365.25);

$query = "SELECT * FROM tb_dadospessoais WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $query);
$dadospessoais = mysqli_fetch_array($result);

$selectTelefone = "SELECT id_Telefone, ddd, numero FROM telefones WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectTelefone);
while ($row = mysqli_fetch_array($result)) {
  $telefone[] = $row;
}

$selectformacao = "SELECT * FROM tb_formacao WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectformacao);
while ($row = mysqli_fetch_array($result)) {
  $formacao[] = $row;
}

$selectidiomas = "SELECT * FROM tb_idiomas WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectidiomas);
while ($row = mysqli_fetch_array($result)) {
  $idiomas[] = $row;
}

$selectinfousuario = "SELECT objetivo, info FROM tb_infousuario WHERE id_usuario =" . $_SESSION['id'];
$result = mysqli_query($conn, $selectinfousuario);
$infousuario = mysqli_fetch_array($result);

$fotoverify = "SELECT imagem FROM Fotos WHERE id_usuario =" . $_SESSION['id'] . ";";
$result = mysqli_query($conn, $fotoverify);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);
  $_SESSION['Foto'] = "data:image/jpeg;base64," . base64_encode($row['imagem']);
} else {
  $_SESSION['Foto'] = "fotos/placeholder.jpg";
}

mysqli_close($conn);
?>

<!doctype html>
<html lang="pt-br">

<head>
  <link href="user_home.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <?php
  echo $metadatas;
  ?>
  <title>Usuario</title>
</head>

<body class="bg-light">
  <?php
  echo $navbarUsuario;
  ?>
  <!-- Principal -->
  <div class="m-0 p-0">
    <!-- Area bonitinha do Perfil -->
    <div id="capa" <?php if (isset($_COOKIE['capa'])) {
                      echo "class=" . $_COOKIE['capa'];
                    } else {
                      echo 'class="capa"';
                    } ?>></div>
    <div class="container-fluid media p-3">
      <a data-toggle="modal" data-target="#uploadFoto">
        <div class="perfil rounded-circle shadow" alt="Foto de Perfil" title="Foto de Perfil" style="background-image:url('<?php echo $_SESSION["Foto"]; ?>')">
        </div>
      </a>
      <div class="col media-body my-4 mx-1 font-weight-light">
        <h1 class="text-truncate font-weight-light" style="color: white;">
          <?php echo $dados['NomeCompleto']; ?>
          <small class="d-block font-weight-light">
            Dados Pessoais
          </small>
        </h1>
        <i class="fa fa-address-card" aria-hidden="true"></i> Email: <span class=""> <?php echo $dados['email_usuario']; ?></span> <br>
        <i class="fa fa-flag" aria-hidden="true"></i> Estado: <span class="text-uppercase"> <?php echo $dados['Estado']; ?></span> <br>
        <i class="fa fa-building" aria-hidden="true"></i> Cidade: <span class="text-capitalize"> <?php echo $dados['Cidade']; ?></span> <br>
        <i class="fa fa-phone" aria-hidden="true"></i> Telefone: <span class="text-capitalize"><?php if (isset($telefone)) {
                                                                                                  foreach ($telefone as $telusuario) {
                                                                                                    echo "(" . $telusuario['ddd'] . ")" . $telusuario['numero'] . " ";
                                                                                                  }
                                                                                                } else {
                                                                                                  echo "Não informado";
                                                                                                } ?></span>
        <a class="badge badge-primary" data-toggle="modal" data-target="#modalTelefone"><i class="fa fa-pencil text-light" aria-hidden="true"></i></a>
        <br>
        <strong>Idade: </strong><span class="text-capitalize"><?php echo $idade ?></span>
        <strong>Estado Civil: </strong><span class="text-capitalize"><?php if (isset($dadospessoais['estadocivil'])) {
                                                                        echo $dadospessoais['estadocivil'];
                                                                      } else {
                                                                        echo "Não informado";
                                                                      } ?></span>
        <strong>Nacionalidade: </strong><span class="text-capitalize"><?php if (isset($dadospessoais['nacionalidade'])) {
                                                                        echo $dadospessoais['nacionalidade'];
                                                                      } else {
                                                                        echo "Não informado";
                                                                      } ?></span>
        <br>
        <a class="btn btn-outline-primary m-1" data-toggle="modal" data-target="#modalCapa">Alterar Capa</a>
      </div>
    </div>

    <!-- Conteudo do Curriculo -->
    <div class="container align-middle">
      <!-- Fazendo uma Linha pra não bugar a coluna -->
      <div class="row">
        <!-- Fazendo uma Coluna pra fazer o conteudo fica com uma margem grande -->
        <div class="col-sm mx-5 px-5">
          <span class="font-weight-light" style="font-size: 3rem;">Informações</span><small class="font-weight-light"> Serão exibidas no currículo</small>
          <br>
          <!-- Objetivos -->
          <span class="font-weight-light" style="font-size: 2rem;">Objetivo </span><button type="button" class="btn badge badge-primary" data-toggle="modal" data-target="#modalObjetivo"><i class="fa fa-pencil text-light" aria-hidden="true"></i></button>
          <div class="container-fluid">
            <?php
            if (isset($infousuario['objetivo'])) {
              echo $infousuario['objetivo'];
            } else {
              echo "Ainda não há cadastro";
            }
            ?>
          </div>
          <hr>
          <!-- Formaçòes -->
          <span class="font-weight-light" style="font-size: 2rem;">Formação </span><button type="button" class="btn badge badge-primary" data-toggle="modal" data-target="#modalFormacao"><i class="fa fa-pencil text-light" aria-hidden="true"></i></button>
          <ul>
            <?php
            if (isset($formacao)) {
              foreach ($formacao as $graduacoes) {
                echo "<li>";
                echo $graduacoes['nomecurso'] . "<br>";
                if ($graduacoes['instituicao'] !== '' || $graduacoes['localizacao'] !== '') {
                  echo $graduacoes['instituicao'] . "<br>";
                  echo $graduacoes['localizacao'] . "<br>";
                }
                if ($graduacoes['comeco'] !== '' && $graduacoes['fim'] !== '') {
                  echo $graduacoes['comeco'] . " a " . $graduacoes['fim'] . "<br>";
                }
                echo "</li>";
              }
            } else {
              echo "<li>Ainda não há cadastro</li>";
            }
            ?>
          </ul>
          <hr>
          <!-- Idiomas -->
          <span class="font-weight-light" style="font-size: 2rem;">Idiomas </span><button type="button" class="btn badge badge-primary" data-toggle="modal" data-target="#modalIdioma"><i class="fa fa-pencil text-light" aria-hidden="true"></i></button>
          <ul>
            <?php
            if (isset($idiomas)) {
              foreach ($idiomas as $linguas) {
                echo "<li>";
                echo $linguas['nome'] . " " . $linguas['nivel'] . "<br>";
                if ($linguas['instituicao'] !== '') {
                  echo $linguas['instituicao'] . "<br>";
                }
                if ($linguas['comeco'] !== '' && $linguas['fim'] !== '') {
                  echo $linguas['comeco'] . " a " . $linguas['fim'] . "<br>";
                }
                echo "</li>";
              }
            } else {
              echo "<li>Ainda não há cadastro</li>";
            }
            ?>
          </ul>
          <hr>
          <!-- Informação Adicionais -->
          <span class="font-weight-light" style="font-size: 2rem;">Informações Adicionais </span><button type="button" class="btn badge badge-primary" data-toggle="modal" data-target="#modalInfosad"><i class="fa fa-pencil text-light" aria-hidden="true"></i></button>
          <div>
            <?php
            if (isset($infousuario['info'])) {
              echo $infousuario['info'];
            } else {
              echo "Ainda não há cadastro";
            }
            ?>
          </div>
        </div>
        <!--coluna-->
      </div>
      <!--linha-->
    </div>
    <!--Fim do Conteudo de Curriculo-->

    <!-- Modal Alterar dados de Cadastro -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAlterar">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title font-weight-light">Alterar Dados</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <div class="nav nav-pills" id="v-pills-tab" role="tablist">
              <a class="nav-link active" data-toggle="pill" data-target="#alterarNome" role="tab">Nome</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarSenha" role="tab">Senha</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarNascimento" role="tab">Nascimento</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarCEP" role="tab">CEP</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarEstado" role="tab">Estado</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarCidade" role="tab">Cidade</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarBairro" role="tab">Bairro</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarEndereco" role="tab">Endereco</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarEstadoCivil" role="tab">Estado Civil</a>
              <a class="nav-link" data-toggle="pill" data-target="#alterarNacionalidade" role="tab">Nacionalidade</a>
            </div>

            <div class="tab-content mb-3" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="alterarNome" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label for="firstName">Nome Completo</label>
                  <input type="text" name="Nome" class="form-control" id="firstName" required>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editNome">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarSenha" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <div class="mb-3">
                    <label for="password">Nova Senha</label>
                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                    <label for="password">Recomenda-se utilizar Letras Maiusculas, Números e Simbolos</label>
                  </div>
                  <div class="mb-3">
                    <label for="password">Confirme a senha</label>
                    <input type="password" name="confirm" id="inputPassword" class="form-control" placeholder="Confirme sua senha" required>
                  </div>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editSenha">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarNascimento" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando Nascimento</label>
                  <input type="date" name="Nascimento" class="form-control" required>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editNascimento">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarEndereco" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando Endereco</label>
                  <input type="text" name="Endereco" class="form-control" placeholder="Nome da Rua 123" required>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editEndereco">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarCEP" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando CEP</label>
                  <input type="text" name="CEP" class="form-control" placeholder="01234-567" required>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editCEP">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarEstado" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando Estado</label>
                  <select type="text" name="Estado" class="form-control" required>
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
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editEstado">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarCidade" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando Cidade</label>
                  <input type="text" name="Cidade" class="form-control" required>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editCidade">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarBairro" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando Bairro</label>
                  <input type="text" name="Bairro" class="form-control" required>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editBairro">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarEstadoCivil" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando Estado Civil</label>
                  <select type="text" name="EstadoCivil" class="form-control" required>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Solteira">Solteira</option>
                    <option value="Casado">Casado</option>
                    <option value="Casada">Casada</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Divorciada">Divorciada</option>
                    <option value="Viúvo">Viúvo</option>
                    <option value="Viúva">Viúva</option>
                    <option value="Separado">Separado</option>
                    <option value="Separada">Separada</option>
                  </select>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editEstadoCivil">Confirmar</button>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="alterarNacionalidade" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editDadosPessoais.php" method="post">
                  <label>Alterando Nacionalidade</label>
                  <input type="text" name="Nacionalidade" class="form-control" required>
                  <div class="text-center pt-3">
                    <button type="submit" class="btn btn-primary" name="editNacionalidade">Confirmar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Formação -->
    <div class="modal fade" id="modalFormacao" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editar Formação</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <nav class="nav nav-pills nav-stacked">
              <a class="nav-link active" data-toggle="tab" data-target="#addFormacao">Adicionar Formação</a>
              <a class="nav-link" data-toggle="tab" data-target="#delFormacao">Deletar Formação</a>
            </nav>
            <div class="tab-content py-1" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="addFormacao" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editFormacao.php" method="post">
                  <label for="titulo">Graduação</label>
                  <input class="form-control" type="text" name="titulo" id="formacao" placeholder="Técnico em Desenvolvimento de Sistemas" required><br>
                  <label for="instituicao">Instituição</label>
                  <input class="form-control" type="text" name="instituicao" id="formacao" placeholder="Etec de Guarulhos">
                  <small>Irrelevante se for ensino médio ou fundamental</small><br>
                  <label for="local">Localidade</label>
                  <input class="form-control" type="text" name="local" id="formacao" placeholder="Guarulhos - SP">
                  <small>Opcional. Somente se for relevante para empresa</small><br>
                  Periodo:<br>
                  <label for="comeco">Começo</label>
                  <input class="form-control d-inline" type="text" name="comeco" id="formacao" placeholder="01/01/2019" size="10" required>
                  <br>
                  <label for="fim">Fim</label>
                  <input class="form-control d-inline" type="text" name="fim" id="formacao" placeholder="01/01/2020" size="10" required>
                  <small>Não é necessario informar o dia ou mês, porém é recomendado caso você se lembre</small>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="addFormacao">Confirmar</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="delFormacao" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <form action="php/editFormacao.php" method="post">
                  <?php
                  if (isset($formacao)) {
                    foreach ($formacao as $chave => $formacao) {
                      echo '<div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="idformacao" value="' . $formacao['id_formacao'] . '" checked>
                    ' . $formacao['nomecurso'] . '
                  </label>
                </div>';
                    }
                  } else {
                    echo "Sem Registros<br>";
                  }
                  ?>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="delFormacao">Confirmar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Idioma -->
    <div class="modal fade" id="modalIdioma" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editar Idioma</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <nav class="nav nav-pills nav-stacked">
              <a class="nav-link active" data-toggle="tab" data-target="#addIdioma">Adicionar Idioma</a>
              <a class="nav-link" data-toggle="tab" data-target="#delIdioma">Deletar Idioma</a>
            </nav>
            <div class="tab-content py-1" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="addIdioma" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <form action="php/editIdioma.php" method="post">
                  <label for="titulo">Idioma</label>
                  <input class="form-control" type="text" name="titulo" id="Idioma" placeholder="Inglês" required><br>
                  <label for="nivel">Nível</label>
                  <select id="nivel" class="form-control" name="nivel" required>
                    <option value="Básico (Leitura, Escrita e Conversação)">Básico (Leitura, Escrita e Conversação)</option>
                    <option value="Intermediário (Leitura, Escrita e Conversação)">Intermediário (Leitura, Escrita e Conversação)</option>
                    <option value="Avançado (Leitura, Escrita e Conversação)">Avançado (Leitura, Escrita e Conversação)</option>
                    <option value="Fluente (Leitura, Escrita e Conversação)">Fluente (Leitura, Escrita e Conversação)</option>
                  </select><br>
                  <label for="instituicao">Instituição</label>
                  <input class="form-control" type="text" name="instituicao" id="Idioma" placeholder="Etec de Guarulhos">
                  <small>Opcional</small><br>
                  Periodo:<br>
                  <label for="comeco">Começo</label>
                  <input class="form-control d-inline" type="text" name="comeco" id="Idioma" placeholder="01/01/2019" size="10">
                  <br>
                  <label for="fim">Fim</label>
                  <input class="form-control d-inline" type="text" name="fim" id="Idioma" placeholder="01/01/2020" size="10">
                  <small>Opcional. Não é necessario informar o dia ou mês, porém é recomendado caso você se lembre</small>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="addidiomas">Confirmar</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="delIdioma" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <form action="php/editIdioma.php" method="post">
                  <?php
                  if (isset($idiomas)) {
                    foreach ($idiomas as $chave => $idiomas) {
                      echo '<div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="idIdioma" value="' . $idiomas['id_idiomas'] . '" checked>
                    ' . $idiomas['nome'] . '
                  </label>
                </div>';
                    }
                  } else {
                    echo "Sem Registros<br>";
                  }
                  ?>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="delidiomas">Confirmar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Infosad -->
    <div class="modal fade" id="modalInfosad" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editar Infos Adicionais</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="php/editInfo.php" method="post">
              <div class="form-group">
                <label for="info">Escreva informações sobre você, conhecimentos adicionais e etc, que sejam revelantes para a vaga</label>
                <textarea class="form-control" name="info" id="info" rows="3" required><?php if (isset($infousuario['info'])) {
                                                                                          echo str_replace("<br>", "\r\n", $infousuario['info']);
                                                                                        } else {
                                                                                          echo "Ainda não há cadastro";
                                                                                        } ?></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="editInfo" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Objetivo -->
    <div class="modal fade" id="modalObjetivo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Editar Objetivo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="php/editInfo.php" method="post">
              <div class="form-group">
                <label for="objetivo">Escreva a área que desejas dentro da empresa e seus objetivos</label>
                <textarea class="form-control" name="objetivo" id="objetivo" rows="3" required><?php if (isset($infousuario['objetivo'])) {
                                                                                                  echo str_replace("<br>", "\r\n", $infousuario['objetivo']);
                                                                                                } else {
                                                                                                  echo "Ainda não há cadastro";
                                                                                                } ?></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="editObjetivo" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Telefone -->
    <div class="modal fade" id="modalTelefone" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog modal-large" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Telefone</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <ul class="nav nav-pills" id="navTelefone">
              <li class="nav-item">
                <a data-toggle="pill" data-target="#addtelefone" class="nav-link active">Adicionar Telefone</a>
              </li>
              <li class="nav-item">
                <a data-toggle="pill" data-target="#deltelefone" class="nav-link">Deletar Telefone</a>
              </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane fade show active" id="addtelefone" role="tabpanel">
                <form method="post" action="php/editTelefone.php">
                  <div class="form-group">
                    <label for="DDD">DDD</label>
                    <input type="text" class="form-control" name="ddd" id="DDD" placeholder="11">
                  </div>
                  <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" name="numero" id="numero" placeholder="1234-5678 ou 91234-5678">
                  </div>
                  <button type="submit" class="btn btn-primary" name="addTelefone">Enviar</button>
                </form>
              </div>

              <div class="tab-pane fade" id="deltelefone" role="tabpanel">
                <form method="post" action="php/editTelefone.php">
                  <?php
                  if (isset($telefone)) {
                    foreach ($telefone as $chave => $telefone) {
                      echo '<div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="idtelefone" value="' . $telefone['id_Telefone'] . '" checked>
              (' . $telefone['ddd'] . ')' . $telefone['numero'] . '
            </label>
          </div>';
                    }
                  } else {
                    echo "Sem Registros<br>";
                  }
                  ?>
                  <button type="submit" class="btn btn-primary" name="delTelefone">Enviar</button>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Alterar Foto -->
    <div class="modal fade" id="uploadFoto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title font-weight-light">Enviar Foto</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form enctype="multipart/form-data" action="php/addFotoPerfil.php" method="POST">
              <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
              <input type="file" name="imagem" id="fotoUpload" onchange="medir();" />
              <div class="font-weight-light"> Apenas jpeg, jpg, png, Menores que 2MB</div>
          </div>
          <div class="modal-footer">
            <input type="submit" name="submit" value="Enviar" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Capa -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalCapa">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title font-weight-light">Escolha a cor da capa</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="color1  d-inline-block" id="cor1"></div>
            <div class="color2  d-inline-block" id="cor2"></div>
            <div class="color3  d-inline-block" id="cor3"></div>
            <div class="color4  d-inline-block" id="cor4"></div>
            <div class="color5  d-inline-block" id="cor5"></div>
          </div>
          <div class="modal-footer">
            <form method="POST" action="php/confirmarcapa.php">
              <input type="radio" class="form-check-input invisible" name="ApplyCapa" id="corCapa1" value="capa">
              <input type="radio" class="form-check-input invisible" name="ApplyCapa" id="corCapa2" value="capa2">
              <input type="radio" class="form-check-input invisible" name="ApplyCapa" id="corCapa3" value="capa3">
              <input type="radio" class="form-check-input invisible" name="ApplyCapa" id="corCapa4" value="capa4">
              <input type="radio" class="form-check-input invisible" name="ApplyCapa" id="corCapa5" value="capa5">
              <button type="submit" class="btn btn-outline-primary">Aplicar Capa</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="user_home.js"> </script>
    <?php echo $footer; ?>
</body>
</html>