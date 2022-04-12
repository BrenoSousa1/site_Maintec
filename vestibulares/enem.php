<?php
session_start();
include '../head.php';
include '../navbar.php';
include '../footer.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Enem</title>
  </head>
  <?php 
   echo $metadatas;
  ?>
  <body>
  <?php 
   echo $navbarVest;
  ?>
  <div class="container">
  <div class="row">

    <div class="col-md-8">
	<br><br>
      <img class="img-fluid" src="enem.png" >
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Enem</h3>
      <p>O Exame Nacional do Ensino Médio (Enem) é a maior prova do Brasil e funciona como um vestibular na maioria das universidades e institutos federais. As notas obtidas no Enem podem ser usadas para conseguir uma vaga gratuita pelo SiSU, uma bolsa de estudo pelo ProUni ou financiamento pelo FIES.</p>
      <p>As provas do Enem são aplicadas em dois domingos consecutivos, geralmente em novembro. Em cada um dos dias, os estudantes respondem 180 questões objetivas de múltipla escolha. No primeiro dia há também uma prova de redação. Veja a divisão das provas:</p>
      <ul>
        <li><strong>1º dia:</strong> Linguagens, Códigos e suas Tecnologias; Ciências Humanas e suas Tecnologias; Redação.</li>
        <li><strong>2º dia:</strong> Ciências da Natureza e suas Tecnologias; Matemática e suas Tecnologias.</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- pdf das ultimas provas -->
  <h3 class="my-4">PDF das Provas de 2019</h3>
<h4>1° dia</h4>
  <div class="row">
<!--Prova Azul-->
    <div class="col-md-3 col-sm-6 mb-4">
	<h5>Prova Azul</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_1_dia_caderno_1_azul_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/azul.png">
          </a>
		  <br>
		  <p>
		  <h5>Gabarito</h5>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_1_azul_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
	
<!--Prova Amarela-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h5>Prova Amarela</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_1_dia_caderno_2_amarelo_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/amarela.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_2_amarelo_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
	
<!--Prova Branca-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h5>Prova Branca</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_1_dia_caderno_3_branco_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/branca.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_3_branco_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
<!--Prova Rosa-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h4>Prova Rosa</h4>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_1_dia_caderno_4_rosa_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/rosa.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_4_rosa_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
  </div>
  <h4>2°dia</h4>
  <div class="row">
  <!--Prova Amarela-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h5>Prova Amarelo</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes%20_2_dia_caderno_5_amarelo_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/amarela2.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_5_amarelo_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
	<!--Prova Cinza-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h5>Prova Cinza</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_2_dia_caderno_6_cinza_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/cinza.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_6_cinza_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
<!--Prova Azul-->
    <div class="col-md-3 col-sm-6 mb-4">
	<h5>Prova Azul</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/ppl/2019/provas/BAIXA_PPL_2_DIA_CADERNO_7_AZUL.pdf">
            <img  class="img-fluid" src="enem/azul2.png">
          </a>
		  <br>
		  <p>
		  <h5>Gabarito</h5>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/ppl/2019/gabaritos/gabarito_2_dia_caderno_7_azul_2_aplicacao.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
<!--Prova Rosa-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h4>Prova Rosa</h4>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_2_dia_caderno_8_rosa_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/rosa2.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_8_rosa_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
  </div>
 <h3 class="my-4">PDF das Provas Especiais de 2019</h3>
<h4>1° dia</h4>
  <div class="row">
<!--Prova Laranja-->
    <div class="col-md-3 col-sm-6 mb-4">
	<h5>Prova Laranja</h5>
	<h5>(Braile e Ledor)</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_1_dia_caderno_9_laranja_braile_e_ledor_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/laranja.png">
          </a>
		  <br>
		  <p>
		  <h5>Gabarito</h5>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_9_laranja_braile_e_ledor_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
<!--Prova Verde-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h5>Prova Verde</h5>
	 <h5>(Libra)</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_1_dia_caderno_10_verde_libras_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/verde.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_1_dia_caderno_10_verde_libras_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
</div>

<h4>2° dia</h4>
  <div class="row">
<!--Prova Laranja-->
    <div class="col-md-3 col-sm-6 mb-4">
	<h5>Prova Laranja</h5>
	<h5>(Braile e Ledor)</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_2_dia_caderno_11_laranja_braile_e_ledor_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/laranja2.png">
          </a>
		  <br>
		  <p>
		  <h5>Gabarito</h5>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_11_laranja_braile_e_ledor_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
<!--Prova Verde-->
    <div class="col-md-3 col-sm-6 mb-4">
     <h5>Prova Verde</h5>
	 <h5>(Libra)</h5>
      <a  target="_blank"  href="http://download.inep.gov.br/educacao_basica/enem/provas/2019/caderno_de_questoes_2_dia_caderno_12_verde_libras_aplicacao_regular.pdf">
            <img  class="img-fluid" src="enem/verde2.png">
          </a>
		  <br>
		  <p>
		  <h4>Gabarito</h4>
		   <a target="_blank" href="http://download.inep.gov.br/educacao_basica/enem/gabaritos/2019/gabarito_2_dia_caderno_12_verde_libras_aplicacao_regular.pdf">
            <img class="img-fluid" src="enem/gabarito.png">
          </a>
    </div>
</div>
  </div>

		<h5 class="font-weight-light">Saiba mais: <a href="https://enem.inep.gov.br/">https://enem.inep.gov.br/</a></h5>
    <?php 
   echo $footer;
  ?>
  </body>
</html>