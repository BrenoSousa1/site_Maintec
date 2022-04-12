drop database Maintec;

create database MainTec;

use MainTec;

#Tabelas não utilizadas foram comentadas para caso de mudar de ideia, ou usar como referencia

#Change Log (pro amiguinho que ta documentando o banco de dados)

# Alterado o campo país do usuario por CEP e alterado o limite de caracteres para 9
# Alterado o limite de carateres do campo Estado para 2 para comportar apenas Siglas
# Alterado o limite de carateres do campos de email e senha dos usuarios e administradores para 128
# Deletado o campo sobreNome do usuario e alterado o nome do campo PrimeiroNome para NomeCompleto e o limite de carateres para 128
# Deletado a Table Conteudo
# Adicionado a Tabela Fotos
# Adicionado a Tabela Telefones
# Adicionado as Tabelas tb_infousuario, tb_dadospessoais, tb_formacao, tb_idiomas


create table Usuario(
id_usuario int not null auto_increment primary key,
NomeCompleto varchar(128) not null,
dtnascimento date,
email_usuario varchar(128) not null,
senha_usuario varchar(128) not null,
cep varchar(9) not null,
Estado varchar(2) not null,
Cidade varchar(50) not null,
Bairro varchar(80) not null,
Endereco varchar(80) not null
);

create table Fotos(
id_foto int not null auto_increment primary key,
imagem mediumblob,
id_usuario int not null,
foreign key(id_usuario) references Usuario(id_usuario)
);

create table Telefones(
id_Telefone int not null auto_increment primary key,
ddd varchar(2) not null,
numero varchar(10) not null,
id_usuario int not null,
foreign key(id_usuario) references Usuario(id_usuario)
);

create table tb_formacao(
id_formacao int not null auto_increment primary key,
nomecurso varchar(128) not null,
instituicao varchar(128),
localizacao varchar(128),
comeco varchar(10) not null,
fim varchar(10) not null,
id_usuario int not null,
foreign key(id_usuario) references Usuario(id_usuario)
);

create table tb_idiomas(
id_idiomas int not null auto_increment primary key,
nome varchar(128) not null,
nivel varchar(64) not null,
instituicao varchar(128),
comeco varchar(10),
fim varchar(10),
id_usuario int not null,
foreign key(id_usuario) references Usuario(id_usuario)
);

create table tb_dadospessoais(
id_dadospessoais int not null auto_increment primary key,
estadocivil varchar(20),
nacionalidade varchar(20),
id_usuario int not null,
foreign key(id_usuario) references Usuario(id_usuario)
);

create table tb_infousuario(
id_infousuario int not null auto_increment primary key,
objetivo text,
info text,
id_usuario int not null,
foreign key(id_usuario) references Usuario(id_usuario)
);

create table Administrador(
id_administrador int not null auto_increment primary key,
primeiro_nome varchar(20) not null,
sobrenome varchar(50) not null,
email_adm varchar(128) not null,
senha_adm varchar(128) not null
);

# Cadastro de ADM (Note o uso de MD5 para o não causar erros no login site) 
insert into Administrador(primeiro_nome, sobrenome, email_adm, senha_adm)
values ("Admin", "Padrao", "Admin@Admail.com", md5('Admin'));

/*
create table area_curso(
id_area int not null auto_increment primary key,
nm_area varchar(50) not null
);

create table Curso(
id_curso int not null auto_increment primary key,
nm_curso varchar(60) not null,
descricao_curso varchar(500) not null,
id_area int not null,
foreign key(id_area) references area_curso(id_area)
);

create table Universidade(
id_universidade int not null auto_increment primary key,
nm_universidade varchar(80) not null,
descricao varchar(500) not null,
Passo_passo varchar(500) not null
);

create table curso_universidade(
id_CursoUniversidade int not null auto_increment primary key,
id_curso int not null,
id_universidade int not null,
foreign key(id_curso) references Curso(id_curso),
foreign key(id_universidade) references Universidade(id_universidade)
);

create table Matricula(
id_matricula int not null auto_increment primary key,
id_usuario int not null,
id_universidade int not null,
foreign key(id_usuario) references Usuario(id_usuario),
foreign key(id_universidade) references Universidade(id_universidade)
);

create table Vestibular(
id_vestibular int not null auto_increment primary key,
nome_vestibular varchar(60) not null,
descricao_vestibular varchar(800) not null
);

create table Provas(
id_prova int not null auto_increment primary key,
nome_prova varchar(50) not null,
arquivo_prova varchar(120) not null,
dt_envio datetime not null
);
*/