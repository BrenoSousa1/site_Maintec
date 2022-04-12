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
<?php  echo $navbar; ?>
    <div class="jumbotron text-white bg-dark rounded-0" style="background-image:url('ti.jpg'), url('bgti.jpg'); background-repeat: no-repeat, repeat; background-position: 0% top, center;  width: auto; height: 450px;">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic align text-center">Carreira de TI</h1>
        </div>
      </div>

    <div class="blog-post mx-5 px-5">
        <p>A Tecnologia da Informação e uma área muito grande que abrange diversas profissões, são diversas oportunidades nesse ramo.</p>
        <P>A área da tecnologia está sempre evoluindo, abrindo diversas vagas no mercado de trabalho, então e esperado que essa área cresça cada vez mais e mais. Porem há muitas dificuldades para seguir nessa área, muitos profissionais acabam não planejando a sua carreira e acabam não conseguindo acompanhar as evoluções do mundo do TI, dificultando a sua ingressão no mercado de trabalho.</P>
        <h4 class="px-1">O que seguir?</h4>
        <p>Isso depende muito de cada pessoa, na área de TI há diversas profissões, e cada uma delas tem uma certa diferença.</p>
        <p>De acordo com a “impacta.com.br”, há 5 profissões que estão crescendo muito e que vão continuar crescendo, que são:</p>
        <ul class="px-5">
            <li><strong>Desenvolvedor de Aplicativos Móveis</strong></li>
            <p>Diversas pessoas possuem um Smarphone e a demanda por novos aplicativos e cada vez mais alta. o Desenvolvedor de aplicativos além de desenvolver um app pode fornecer suporte ao usuário. </p>
            <li><strong>Administrador de Databases</strong></li>
            <p>As empresas necessitam cada vez mais de profissionais que tenham a capacidade de tratar os dados, analisar, armazenar e proteger as informações corporativas em servidores modernos ou em sistemas de cloud computing.</p>
            <li><strong>Engenheiro de Software</strong></li>
            <p>O mercado de TI se atualiza a cada dia, por isso e necessário de um profissional que consiga seguir esse ritmo e construa algoritmos modernos, programas inovadores e saiba trabalhar com grandes equipes de desenvolvimento. Nessa área você precisa ter domino sobre desenvolvimento de software complexos e arquitetura de software.</p>
            <li><strong>Desenvolvedor de Jogos</strong></li>
            <p>Esse é um mercado que tem uma demanda enorme e que sempre está em alta, seja para PC ou celular. Essa é uma boa opção para profissionais que trabalham com programação e design.</p>
            <li><strong>Especialista em Segurança da informação</strong></li>
            <p>Todas as empresas necessitam de proteção ao seu sistema, fazendo essa profissão ter uma alta demandam e assim tendo um dos maiores salários na área de TI</p>
        </ul>
        <p>Além dessas profissões citadas, há muitas outras que você poderá seguir na sua carreira como TI, oportunidades é o que não falta nessa área!</p>
        <p>Vale destacar que é muito importante você decidir entre ser um generalista ou especialista!</p>
        <p>“Ser especialista te lançará para o fato de que você terá de ser o melhor naquilo que você faz. Se você é bom em banco de dados, você tem que ser bom o suficiente para suprir as necessidades de uma empresa e de aumentar a produtividade da equipe em função da sua supremacia em banco de dados. Mas, se você é um generalista, você tem a possibilidade de abraçar muitas oportunidades ao mesmo tempo, podendo ser um potencial aos olhos dos seus chefes, podendo assumir posições distintas ao longo da sua permanência nas equipes de desenvolvimento.”</p>
        <h4 class="px-1">Dicas</h4>
        <ul class="px-5">
            <li>Como o mercado de TI está sempre se atualizando, e importante sempre ir atrás de novas informações.</li>
            <li><strong>Saber inglês é fundamental em todas as áreas, principalmente no TI,</strong> pois as principais matérias de estudos estão disponíveis em inglês, a chance de fazer intercâmbios é maior, mais opções de empresas e principalmente a facilitação na hora de programar, pois te ajuda a entender melhor o código!</li>
            <li>Conheça todos os tipos de linguagem, é importante não se limitar apenas a uma, isso te ajudara na busca por emprego pois você saberá qualquer linguagem requisitada.</li>
            <li>Busque sempre por certificações, isso sempre será útil para o profissional de TI, pois te entrega conhecimento e te das mais oportunidades de ser contratado por uma empresa.</li>
            <li>Estude, Pratique, Participe de eventos, Interaja em grupos nas redes socias e busque estagio, tudo isso te dará muita experiencia e te ajudara a seguir na carreira de TI.</li>
        </ul>
    </div>
    <br>
</section>
<?php 
   echo $footer;
  ?>
  </body>
</html>
       