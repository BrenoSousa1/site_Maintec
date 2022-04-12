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
    <title>Prouni</title>
  </head>

  <body>
    <?php 
       echo $navbarVest;
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img class="img-fluid" src="prouni.png" height=500 width=750>
      </div>
    <div class="col-md-4">
        <h3 class="my-3">ProUni</h3>
        <p>O Programa Universidade para Todos  (ProUni) é uma iniciativa do governo Brasileiro que oferece bolsas de estudos em faculdades particulares para estudantes de baixa renda que ainda não tenham um diploma de nível superior.</p>
        <p>Para muitos, o ProUni é a única oportunidade de fazer uma graduação para um diploma de nível superior e assim poder competir no mercado de trabalho.</p>
    </div>
    </div>
    <h3 class="my-4">As bolsas do ProUni podem ser de dois tipos, dependendo da renda do candidato:</h3>
  <div class="row">
      <ul>
<li><strong>Bolsas integrais:</strong> são de 100%, cobrindo o valor total das mensalidades. Ou seja, o aluno não paga nada para estudar na faculdade particular. Esse tipo de bolsa é reservado para quem tem renda familiar mensal de até um salário e meio por pessoa.</li>
<li><strong>Bolsas parciais:</strong> são de 50%, cobrindo a metade do valor das mensalidades. A outra metade deve ser paga pelo estudante, que pode conciliar a bolsa parcial com o programa de Financiamento Estudantil do Governo Federal, o FIES (é preciso atender alguns requisitos para usar os dois benefícios juntos). Esse tipo de bolsa é para quem renda familiar mensal de até três salários mínimos por pessoa.</li>
        </ul>
        <p>O ProUni classifica os candidatos a uma bolsa usando como critério o desempenho dos candidatos no Exame Nacional do Ensino Médio (Enem). Quanto maior a nota do Enem, maiores as chances de conseguir uma bolsa.</p>
        <p>As inscrições são abertas duas vezes por ano, no primeiro e no segundo semestre. Os interessados devem se inscrever gratuitamente pela Internet, no site oficial do Programa.</p>
<br>
        <h3 class="my-4">Quem pode se inscrever no ProUni?</h3>
<p>Para participar do ProUni, é necessário ter feito a edição do Enem do ano imediatamente anterior (ou seja, a edição mais recente), não ter diploma superior e ter renda familiar mensal de até três salários mínimos por pessoa.</p>
<p>O ProUni exige um desempenho mínimo no Enem: pelo menos 450 pontos nas média das provas e nota maior do que zero na redação.</p>
    <p>Além desses critérios, o candidato precisa se encaixar em um destes perfis:</p>
    <ul>
        <li><strong>Perfil 1: </strong>Ter cursado o ensino médio inteiramente em escolas públicas.</li>
        <li><strong>Perfil 2: </strong>Ter cursado o ensino médio inteiramente em escolas particulares com bolsa integral.</li>
        <li><strong>Perfil 3: </strong>Ter cursado parte do ensino médio em escolas públicas e parte do ensino médio em escolas particulares como bolsista integral.</li>
        <li><strong>Perfil 4: </strong>Ser portador de necessidades especiais.</li>
        <li><strong>Perfil 5: </strong>Ser professor contratado de escola pública, neste caso o professor pode concorrer a bolsas nos cursos de licenciatura, normal superior ou então pedagogia. No caso dos professores, o critério de renda não é considerado (pode ganhar mais de 3 salários mínimos).</li>
    </ul>
    <h3 class="my-4">Como é feita a inscrição para o ProUni</h3>
    <p>As inscrições do ProUni devem feitas somente pela internet, acessando o  site oficial do ProUni.</p>
    <p>Para poder efetuar seu cadastro, você deverá informar o seu número de inscrição e senha do Enem do ano imediatamente anterior (edição mais recente do Enem). Em seguida, basta preencher as informações solicitadas e escolher duas opções de curso entre as vagas disponíveis.</p>
    <h3 class="my-4">Como funciona o ProUni</h3>
    <p>Enquanto as inscrições estiverem abertas, você pode entrar no sistema quantas vezes quiser para consultar as notas de corte e modificar suas opções de curso, se quiser. A nota de corte é a menor nota possível para conseguir uma vaga do ProUni em determinado curso, turno, faculdade e modalidade de concorrência.</p>
    <p>Quando o prazo das inscrições é encerrado, o sistema do ProUni faz o cálculo e seleciona os candidatos com as melhores notas do Enem concorrendo a uma mesma vaga. O resultado sai em poucos dias.</p>
    <p>O candidato selecionado pelo ProUni tem alguns dias para fazer sua matrícula na faculdade, levando toda a documentação necessária. Quem não faz a matrícula, perde a vaga. São pelo menos duas chamadas e, caso as vagas não sejam todas preenchidas, o ProUni abre um processo de “Bolsas Remanescentes”. Dessa forma, se você não passar na primeira ou segunda chamada, ainda pode ter uma chance de conseguir a bolsa.</p>
    <p>O aluno beneficiado por uma bolsa integral do ProUni não precisa pagar a faculdade. Já aqueles que recebem bolsas parciais (50%) precisam pagar a outra metade das mensalidades para continuar a receber o benefício.</p>
    </div>
    <h5>Saiba mais:<a href="http://siteprouni.mec.gov.br/"> http://siteprouni.mec.gov.br/</a></h5>
    </div>
</div>
<?php 
   echo $footer;
  ?>
  </body>
</html>