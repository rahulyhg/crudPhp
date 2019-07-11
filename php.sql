create database cadastro;
use cadastro;

create table cliente(
idCliente int primary key not null auto_increment,
nome varchar (100),
email varchar(50),
dia int,
mes varchar (14),
ano int, 
rg int, 
sexo varchar (2));

select*from cliente;