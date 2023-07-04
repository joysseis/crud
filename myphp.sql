create table estoque (
    id_estoque int AUTO_INCREMENT,
    numero_produto int not null, 
    nome_produto varchar(100) not null,
    categoria varchar(100) not null,
    quantidade int not null,
    fornecedor varchar(100) not null,
	PRIMARY KEY(id_estoque))

INSERT INTO `estoque`(`numero_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$numero_produto','$nome_produto','$categoria','$quantidade','$fornecedor')


CREATE TABLE categoria (
	id_categoria int AUTO_INCREMENT,
	nome_categoria varchar(200) not null,
	PRIMARY KEY (id_categoria))

CREATE TABLE fornecedor(
	id_fornecedor int AUTO_INCREMENT,
	nome_fornecedor varchar(200) not null,
	PRIMARY KEY (id_fornecedor))

CREATE TABLE usuarios (
	id_usuario int AUTO_INCREMENT,
	nome_usuario varchar (200) not null,
	mail_usuario varchar(200) not null,
	senha_usuario varchar(15) not null,
	nivel_usuario int(2) not null,
	primary key(id_usuario))









