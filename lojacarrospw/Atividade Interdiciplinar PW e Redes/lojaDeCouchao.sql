drop database lojaDeCouchao;
create database lojaDeCouchao; 
use lojaDeCouchao;

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

/*insert into Cliente Values (null, 'Lucas', 'Fernanades de Lima', '1999-07-07', 'Masculino', '138157', '93124368215', 'Joaquim F. de Oliveira', '1997',
'Nossa S. de Fátima', 'Ji-paraná', 'RO');*/
insert into Cliente Values (null, 'Lucas', 'Fernanades de Lima', '1999-07-07', 'Masculino', '138157', '93124368215', 'Joaquim F. de Oliveira', '1997',
'Nossa S. de Fátima', 'Ji-paraná', 'RO');
select * from Cliente;