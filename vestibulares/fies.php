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
    <title>SiSU</title>
  </head>

  <body>
  <?php 
   echo $navbarVest;
  ?>
  <div class="container">
  <div class="row">

    <div class="col-md-8">
	<br><br>
      <img class="img-fluid" src="fies.png" height=500 width=750>
    </div>

    <div class="col-md-4">
    
    <h3 class="my-3">Fies</h3>
      <p>Criado pelo governo federal em 1999, o Fundo de Financiamento Estudantil (Fies) é um programa do Ministério da Educação (MEC) que viabiliza o ingresso ao ensino superior. Destinado ao financiamento da graduação de estudantes que não têm condições de pagar as mensalidades das faculdades da rede de ensino privada. Como se trata de um empréstimo, ao concluir o curso, o estudante beneficiário terá de pagar a dívida. </p>
     <p>O programa de financiamento passou por diversas reformulações ao longo dos anos e, em uma das suas últimas mudanças, passou a ser conhecido como o Novo Fies. Intitulando-se como um financiamento mais moderno.</p>
    </div>
    <p>Com isso, alguns pontos do projeto foram reajustados. O programa passou a ser dividido em três diferentes modalidades a modalidade Fies (ou modalidade I) e a modalidade P-Fies ou (modalidade II e III). Na categoria I o financiamento é ofertado diretamente do governo ao estudante, tendo, por isso, um baixo custo. Já na categoria P-Fies o financiamento é ofertado pelas instituições financeiras, mas com recursos públicos. Por isso, são capazes de ofertar um financiamento mais barato que o mercado, no entanto, mais caro que o da modalidade I.</p>
    <h3 class="my-4">Quem pode participar</h3>
  <div class="row">
      <p>Podem participar do Fies candidatos que tenham realizado a prova do Enem a partir de 2010 e obtido uma pontuação mínima de 450 (quatrocentos e cinquenta) pontos na soma das provas objetivas e nota maior que zero na redação. O curso da instituição de ensino para qual o candidato pretende obter o financiamento deve ter uma avaliação positiva pelo Ministério da Educação (MEC).</p>
      <p>Os estudantes contemplados com uma bolsa parcial (50%) do Programa Universidade Para Todos (Prouni), e que não tenham condições de arcar com a outra metade das mensalidades do curso também podem solicitar o financiamento do Fies.</p>
      <p>Além desses requisitos, existe o critério socioeconômico para cada uma das categorias do programa, se estabelecendo da seguinte forma:</p>
      <ul>
          <li><strong>Modalidade Fies (ou modalidade I): </strong>estudantes que tenham renda per capita mensal familiar de até três salários mínimos;</li>
          <li><strong>Modalidade P-Fies: </strong>estudantes que tenham renda per capita mensal familiar de até cinco salários mínimos;</li>
      </ul>
      <h3 class="my-4">O que muda no Fies em 2020?</h3>
      <p>As pontuações exigidas no Exame Nacional do Ensino Médio (Enem) passam por mudanças, mais precisamente a nota da redação. Atualmente, com qualquer nota superior a zero na redação Enem é possível participar da seletiva, juntamente com um mínimo de 450 pontos na soma das provas objetivas. Com a reformulação, os participantes terão uma nota de corte mínima de 400 pontos no texto para poder se candidatar a uma vaga.</p>
      <p>Também foi aprovada pelo comitê gestor do financiamento a possibilidade de redução de vagas. Passarão de 100 mil em 2020 para 54 mil em 2021 e 2022, se não houver mudanças nos parâmetros econômicos atuais.</p>
      <p>A inadimplência também foi pauta. Foi estabelecida a possibilidade de cobrança judicial dos contratos firmados até o segundo semestre de 2017 com dívida mínima de R$ 10 mil. O ajuizamento deverá ser feito após 360 dias de inadimplência na fase de amortização.</p>
      <p>Além disso, em caso de transferências de cursos em instituições de ensino, será necessário obter no Enem resultado igual ou superior à nota de corte do curso de destino desejado.</p>
      <h3 class="my-4">O que muda no P-Fies em 2020?</h3>
      <p>O P-Fies, ofertado por bancos privados, mas com recursos públicos, não terá mais limitações em relação a renda familiar bruta do candidato, que atualmente não pode ser maior que cinco salários mínimos. O Enem também não será mais critério de seleção.</p>
    </div>
    <h5>Saiba mais:<a href="http://fies.mec.gov.br/"> http://fies.mec.gov.br/</a></h5>
    </div>
</div>
    <?php 
   echo $footer;
  ?>
  </body>
</html>