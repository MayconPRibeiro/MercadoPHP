create database MercadoCrud;

use MercadoCrud;

create table produtos(
codigo int not null primary key auto_increment,
nome varchar(50) not null,
preco decimal(10,5) not null,
quantidade int not null
)Engine=InnoDB;

create table cadastro(
id int not null primary key auto_increment,
nome varchar(50) not null,
cpf bigint not null,
telefone varchar(15) not null
) Engine = InnoDB;

create table endereco(
id int not null primary key auto_increment,
logradouro varchar(20) not null,
numero int not null,
complemento varchar(20) not null,
bairro varchar(20) not null,
cidade varchar(20) not null,
estado varchar(20) not null,
uf varchar(2) not null,
pais varchar(20) not null,
cep varchar(9) not null
) Engine = InnoDB;

create table funcionario(
id int not null primary key auto_increment,
sexo varchar(20) not null,
funcao varchar(20) not null,
salario decimal(10,5) not null
) Engine = InnoDB;

create table compra(
id int not null primary key auto_increment,
dataCompra date not null,
informacoes varchar(20) not null,
valorTotal decimal(10,5) not null
) Engine = InnoDB;

select * from cadastro;