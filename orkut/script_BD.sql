CREATE DATABASE cadastro;
USE cadastro;

create table cadastro(
id integer primary key auto_increment,
email varchar(100),
senha varchar(20)
);

select * from cadastro;
drop database cadastro;