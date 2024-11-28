create database bdestoque;
use bdestoque;

create table tbcliente(
cod int primary key auto_increment,
cliente varchar(90),
email varchar(100),
idade int,
cep char(8),
rua varchar(60),
cidade varchar(30),
bairro varchar(20),
uf char(2)
);

drop database bdestoque;

select * from tbcliente;

create table tbfornecedor(

);