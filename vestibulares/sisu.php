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
    <title>SISU</title>
  </head>
  <body>
  <?php
   echo $navbarVest;
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img class="img-fluid" src="sisu.png">
      </div>
    <div class="col-md-4">
      <h3 class="my-3">SiSU</h3>
      <p>O Sistema de Seleção Unificada (SiSU) é a plataforma do Ministério da Educação (MEC) que contém as vagas das universidades, institutos e centros federais e estaduais que utilizam o Enem como critério único de seleção. Para se inscrever no SiSU é preciso ter participado do Enem do ano anterior e ter conseguido nota acima de zero na redação.</p>
     <p>Muitos estudantes têm dúvidas para escolher o curso e a instituição da qual querem fazer parte. Pensando nisso, preparamos um resumo com instruções passo a passo de <strong>como funciona o SiSU</strong> e como concorrer com sucesso à vaga que você deseja.
    </div>
  </div>
    <!-- Como funciona -->
  <h3 class="my-4">Instruções baseadas no SiSU do 1º semestre de 2020</h3>
  <div class="row">
    <strong><p>1.</strong> O aluno terá que acessar o site do SiSU com o login e senha fornecidos no momento da inscrição do Enem 2019. O sistema estará disponível entre 0h do dia 21 de janeiro e 23h59 do dia 26 de janeiro.</p>
	<br>
	<strong><p>2.</strong> Ao acessar o SiSU, será aberta uma página para confirmação de dados. Verifique as informações e, caso note algum dado incorreto, altere-o e depois confirme os dados. <strong>Certifique-se que o e-mail informado é valido</strong>.</p>
    <br>
	<strong><p>3.</strong> Em seguida, pesquise seu curso por cidade e instituição de ensino. No sistema é possível também conferir a quantidade de vagas para ampla concorrência e sistema de cotas. </p>
	<br>
	<strong><p>4. Selecione a modalidade de concorrência.</strong> A maior parte das instituições possui sistema de cotas. Veja em qual modalidade você se encaixa e clique em "Escolher esta modalidade".</p>
	<br>
	<strong><p>5. Veja os documentos necessários para matrícula.</strong> Cada modalidade de concorrência possui uma relação de documentos exigidos para matrícula. Providencie todos os documentos até o dia da matrícula.<p>
	<br>
	<strong><p>6. Repita o procedimento para escolher o curso de segunda opção. </strong> Você pode alterar os cursos até o último dia de inscrição.</p>
	<br>
	<strong>ATENÇÃO: os candidatos aprovados para qualquer uma das opções de curso não poderão participar da lista de espera, mesmo que não façam matrícula. Portanto, se inscrevam apenas nos cursos que realmente desejam se matricular.</strong>
	
	<h3 class="my-3">Notas de corte SiSU</h3>
	<p>Exceto no primeiro dia de inscrições, durante a madrugada o sistema fará o cálculo e divulgará as <strong>notas de corte e a classificação parcial</strong> de cada um dos cursos registrados.
	<p>No dia seguinte,<strong> verifique se está abaixo ou acima do ponto de corte</strong> nos cursos que se inscreveu. Com essa informação você pode decidir se continua nesta opção de curso ou troca por outra. O ponto de corte varia a cada dia, de acordo com os candidatos que estão competindo às vagas. Pode acontecer de em um dia você estar acima do ponto de corte, mas em outro estar abaixo. Por isso, é aconselhável verificar sua posição todos os dias.</p>
	<p>As notas de corte são calculadas de acordo com o peso adotado por cada universidade. Por exemplo, a prova de Linaguagens e Códigos do Enem pode valer mais para a carreira de Jornalismo e menos para as de Engenharia. Os pesos também são diferentes para os concorrentes pelo sistema de cotas.</p>
	
	<h3 class="my-3">Resultado SiSU</h3>
	<p>A primeira lista de aprovados do SiSU 2019/1 será divulgada no dia <strong>28 de janeiro</strong>, com matrícula de <strong>29 de janeiro a 4 de fevereiro</strong> nas instituições de ensino.
	<p>Os candidatos não aprovados em nenhuma das opções de curso poderão participar da lista de espera do SiSU. O cadastro poderá ser feito entre os dias <strong>29 de janeiro e 4 de fevereiro</strong>. As chamadas baseadas na lista de espera são de responsabilidade de cada uma das instituições participantes do SiSU, que poderão divulgar quantas chamadas quiser entre os dias <strong>7 de fevereiro e 30 de abril de 2020</strong>.</p>
	<br>
	<p><strong>Observações: Em caso de empate nas notas, ficará mais bem posicionado o estudante que tiver tirado a nota mais alta na redação do Enem.</strong></p>
<br>
	<h5>Site do SiSU:<a href="sisu.mec.gov.br"> sisu.mec.gov.br</a></h5>
	
	</div>
	
  </div>
  <?php 
   echo $footer;
  ?>
  </body>
</html>