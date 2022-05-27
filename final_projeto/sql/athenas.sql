create schema if not exists athenas;
/*criar*/

use athenas; 
/*selecionar*/

create table cadastros(
	id			       int primary key auto_increment,
	nome 			   varchar(80),
	email  			   varchar(255),
    telefone  		   varchar(30),
	password		   varchar(100)
);
/*criar tabela*/