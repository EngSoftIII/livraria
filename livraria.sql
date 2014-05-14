CREATE TABLE IF NOT EXISTS carrinho(
codigo int NOT NULL AUTO_INCREMENT PRIMARY KEY,

cod int NOT NULL,
quant int NOT NULL,

sessao varchar(64) NOT NULL)





CREATE TABLE IF NOT EXISTS livros (

codigo int NOT NULL AUTO_INCREMENT primary key UNIQUE,
titulo varchar(50) DEFAULT NULL,
editora varchar(20) DEFAULT NULL,
autor varchar(30) DEFAULT NULL,
quantidade int DEFAULT NULL,
preco float DEFAULT NULL,
capa blob,
sinopse varchar(9000) 
)

CREATE TABLE pedidos(
codigo int NOT NULL AUTO_INCREMENT primary key UNIQUE,
data_compra date,
endereco varchar(100),
usuario int,
FOREIGN KEY (usuario) references usuarios(codigo) 

) 






CREATE TABLE IF NOT EXISTS usuarios (

codigo int NOT NULL AUTO_INCREMENT primary key,

nome varchar(40) DEFAULT NULL,
 
login varchar(30) DEFAULT NULL,

senha varchar DEFAULT NULL,
 
nivel_acesso int(11) NOT NULL,
 
email varchar(80) DEFAULT NULL,
 
endereco varchar(1000) DEFAULT NULL)

insert into usuarios(nome, login, senha, nivel_acesso) values("Adm", "Adm","12345",2);