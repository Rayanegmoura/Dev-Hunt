create database dev_hunt;

use dev_hunt;

create table freelance (
id_freelancer int primary key auto_increment not null,
tipo ENUM('empresa', 'freelancer'),
nome  varchar(50) not null,
cpf varchar(11) not null,
dat_nasc date,
sexo enum('F', 'M'),
celular varchar(11) not null,
telefone varchar(11) not null,
mae  varchar(50) not null,
cep varchar(11) not null,
endereco varchar(50) not null,
numero varchar(10) not null,
complemento varchar(110) not null,
bairro varchar(11) not null,
cidade varchar(50) not null,
estado varchar(3) not null,
usuario varchar(50) not null,
email varchar(110) not null,
senha varchar(50) not null
);

create table empresa (
id_empresa int primary key auto_increment not null,
tipo ENUM('empresa', 'freelancer'),
social  varchar(110) not null,
fantasia  varchar(110) not null,
cnpj varchar(18) not null,
empresa enum ('mei', 'ltda', 's/a', 'Outros'),
tel varchar(11) not null,
cel varchar(11) not null,
cep varchar(11) not null,
ende varchar(50) not null,
numero varchar(10) not null,
bairro varchar(11) not null,
cidade varchar(50) not null,
estado varchar(3) not null,
usuario varchar(50) not null,
email varchar(110) not null,
senha varchar(50) not null
);

create table admin (
id_admin int auto_increment not null primary key,
nome varchar (50),
mae varchar (50),
celular varchar (11),
usuario varchar(20),
senha varchar(50)
);

insert into admin (usuario, senha) values 
('Lucas', '12345678'); 

select * from admin;
select * from freelance;
select * from empresa;