# Maintec
Site montado para o Trabalho de Conclusão de Curso para o curso de Análise e Desenvolvimento de Sistemas na ETEC. E mostra o resultado de 3 Semestres de Curso, e praticamente apenas 1 semestre de desenvolvimento. Este projeto atingiu a nota MB(Muito Bom) que é a nota máxima.
<br><br>
Este site nunca foi hospedado ou utilizado em negócio real, apesar de toda a construção e documentação(Salva em Google Drive) ter sido feita.<br>
Foi apenas testado localmente utilizando XAMPP (https://www.apachefriends.org/pt_br/index.html) como servidor.

<h2>Sobre este repositório</h2>
Este repositório contém os arquivos do site da forma em que foi terminado na época entre 2019 e primeiro semestre de 2020, onde não foi utilizado Github ou outras formas de desenvolvimento colaborativo. Disto isso, <br>
DISCLAIMER: A perspectiva de desenvolvimento deste projeto apresentada neste README é somente minha e não deve refletir os outros integrantes do grupo.

![image](https://user-images.githubusercontent.com/58536403/163075359-75fccfad-14cd-4e03-ba87-edab8f6c5661.png)

<h2>Qual era a ideia do projeto:</h2>
"O site MainTec tem como foco ajudar estudantes a conhecerem melhor cursos e profissões, mostrando diversas informações úteis sobre os cursos. <br>
Inicialmente o site conta apenas com informações sobre a área de TI, porém futuramente, o site contará com áreas diferentes e diversos outros cursos."
<br><br>
Inicialmente o site também tinha a ideia de direcionar os estudantes com dicas de profissionais que ja estavam na área em que os estudantes se interessarem e listaria formas de ingressar nas faculdades próximas de acordo com a localização do usuário, mas acabou que essas ideias foram descartadas devido ao tempo de entrega e falta de conhecimento dos integrantes.

<h2>Tecnologias Utilizadas:</h2>
A aplicação Web foi feita com o uso de linguagens estudadas ao longo dos módulos do curso como: PHP, HTML, CSS e Javascript.<br>
Para o banco de dados, utilizou-se o MySQL e, consequentemente, a linguagem SQL para inserir, acessar e gerenciar o conteúdo armazenado. <br>
A fim de tornar o site responsivo, foi utilizado o Bootstrap. Ademais, o mesmo serviu de base no design com alguns templates, para tornar o site mais agradável e prático para os usuários. Apesar de ter sido alternado bastante posteriormente. <br>

![image](https://user-images.githubusercontent.com/58536403/163075249-6fcd45a8-d359-4d24-acb6-4b42a80201b4.png)

<h2>Minha participação no projeto</h2>
Eu tive a responsabilidade de programar o Back-End utilizando PHP tendo a principal função de fazer o sistema de Cadastro e Login e qualquer função lógica como inserção e alteração de dados para o banco. Porém na época o projeto não teve um desenvolvimento colaborativo, as alterações do site eram comprimidas e enviados por WhatsApp ou pendrive para ser extraídas no computador da pessoa que continuaria depois.<br>
Devido a isso eu fui praticamente a última pessoa a revisar o projeto o que acabou fazendo que eu fizesse grandes alterações no Front-End e no Banco de Dados, então o projeto foi quase um aprendizado Full-Stack sendo colocado em prática.
<br><br>
Tudo que foi programado na pasta "php" foi feito por mim através de estudos tanto em sala de aula quanto em pesquisas por mim mesmo na documentação do PHP (https://www.php.net/docs.php) e outros sites como a W3Schools(https://www.w3schools.com/) entres outros, EXCETO o que está na pasta "PDF" que contém uma biblioteca chamada <a href="https://github.com/mpdf/mpdf">mPDF</a>(Créditos: https://github.com/mpdf/mpdf) que converte código HTML em PDF, pois foi uma solução mais simples de utilizar após diversas tentativas de gerar um bom resultado com a própria função de Imprimir embutidas em quase todos os navegadores atualmente.
<br><br>
Além disso muitas alterações e "gambiarras" foram feitas por mim na parte visual do site como por exemplo:<br> Inserção de código HMTL utilizando PHP, para poder reutilizar códigos como a de Navbar e footer, códigos estes que antes eram repetidos em cada página, além disso dava a possibilidade de aplicar lógica para alterar elementos de acordo com usuário logado, utilizado principalmente na navbar onde o botão "Login" é alterado para "Área do Usuário" ou "Área do ADM" dependendo do tipo de usuário logado.
<br><br>
Ou então para utilizar uma página como "template" e seu conteúdo é alterado dinamicamente, como por exemplo a página "profissao.php" onde quando acessada através da página cursos.php, recebe em seu URL o valor correspondente ao nome do curso, este valor é adquirido por um GET, e utilizado para buscar por um arquivo de texto com nome deste valor na pasta "textocursos", este arquivo é aberto pelo php, pega o conteúdo deste arquivo, separa as quebras de linha em arrays e exibe na página. Estes arquivos de texto são gerados ou deletados na página de administrador
<br><br>
Posteriormente descobri que isso era muito parecido com o conceito MVC (Model-View-Controller) que são base em frameworks como CodeIgniter, porém na época que foi desenvolvido eu não sabia e foi algo que fui fazendo por ser muito conveniente.

<h4>Por que armazenar as informações de cursos em arquivos .txt invés do Banco de Dados MySQL?</h4>
Como dito no início, o site nunca foi hospedado para uso real e foi apresentado a banca do TCC localmente usando o XAMPP, por conta disso eu decidi fazer um "banco de dados permanente" de algumas destas páginas salvando os textos em arquivos .txt localmente para caso o site fosse aberto sem o banco de dados MYSQL estar rodando ja que isso envolvia ligar o servidor no XAMPP e executar o database.sql, então fiz isso apenas para que não apresentasse erros inesperados para as pessoas que não estavam envolvidas no desenvolvimento. De fato, se eu não fizesse isso teria sido extremamente mais fácil no desenvolvimento, já que só seria necessário fazer um simples Select numa Table, invés de todo tratamento de arquivo e texto que tive que fazer, mas isso também foi ótimo para aprender a lidar os arquivos no PHP.

<h3>Página de Administrador</h3>

Como este site nunca teve um uso real não procurei nenhuma solução mais conveniente para cadastrar um administrador no sistema. Os Administradores são cadastrados fazendo um insert diretamente no banco de dados, por isso o arquivo de criação de banco .sql do projeto já possui o comando:<br>
```SQL
insert into Administrador(primeiro_nome, sobrenome, email_adm, senha_adm)
values ("Admin", "Padrao", "Admin@Admail.com", md5('Admin'));
```
<br>que cria um admin padrão fictício puramente para testes, inserindo este Email e senha no login dá acesso a pagina de Admin

![image](https://user-images.githubusercontent.com/58536403/163088583-20ea7e1b-0160-4f83-a3ed-edf8fdb699e4.png)

Como já diz na página, esta área serve para que o administrador delete ou adicione uma página de curso ao site.

Para adicionar, o código php faz alterações no arquivo "colunascursos.html" e cria um novo arquivo de texto na pasta "textocursos", sempre mantendo palavras chaves que são usados posteriormente para encontrar e separar esses arquivos<br>
Para deletar, o código faz o inverso, ele procura essas palavras chaves e deleta os arquivos onde há as ocorrências delas.
Também havia planejado uma função para alterar conteúdo, mas o tempo de entrega já estava apertado.

<h3>Página de Usuário</h3>

A lógica é mesma só que aumentada em 100x pois é uma área completamente customizada pelo Usuário, ou seja, quase tudo que está nela é basicamente o CRUD (Create, Read, Update, Delete).

![image](https://user-images.githubusercontent.com/58536403/163092258-d310f0fe-67e7-4da4-9173-aa02d1228945.png)

Diferentemente do resto do site, essa área os dados são armazenados principalmente no banco de dados por ser mais rápido, fácil e seguro, além de serem dados que só podem ser acessados obrigatoriamente tendo um login ativo. Algumas informações que já foram dadas no cadastro, como nome e endereço, são mostradas e também tem diversos campos de informações que podem ser adicionadas, editadas e deletadas, que posteriormente são usados para gerar um currículo. Existe um pequeno script em Javascript e CSS feito para alternar a cor do fundo do perfil para está página.
