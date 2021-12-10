drop database sleepWellColchoes;
create database sleepWellColchoes; 
use sleepWellColchoes;

create table Cliente(
id int primary key auto_increment not null,
nome varchar(300) not null, 
sobrenome varchar(300),
nascimento date, 
sexo varchar(300),
rg varchar(300), 
cpf varchar(300) not null,
rua varchar(300),
numero varchar(300),
bairro varchar(300),
cidade varchar(300),
estado varchar(300)
);

select * from Cliente;