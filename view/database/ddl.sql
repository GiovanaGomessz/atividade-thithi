create database produtos_adm_thiago;
use produtos_adm_thiago;

create table categoria(
	id int primary key auto_increment not null,
    nome varchar(40) NOT NULL
    );
    
create table usuario(
	id int primary key auto_increment not null,
    nome varchar(40) NOT NULL,
    email varchar(70) NOT NULL,
    telefone varchar(70),
    dt_nascimento date NOT NULL,
    cpf varchar(70)
    );

create table produto(
	id int primary key auto_increment not null,
    nome varchar(40) NOT NULL,
    descricao varchar(20) NOT NULL,
    id_categoria INT NOT NULL,
    preco float NOT NULL,
	FOREIGN KEY (categoria) REFERENCES categoria (id)
    );


select * from categoria;
select * from produto;
select * from usuario;

