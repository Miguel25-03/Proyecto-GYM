create database GYM;

use GYM;

create table usuario(
id_usuario tinyint auto_increment primary key,
usuario varchar(20),
contrasena varchar(20)
);

insert into usuario (usuario,contrasena)
value ("admin","admin123");

create table categoria(
id_categoria tinyint auto_increment primary key,
nombre varchar(20),
estado enum("Activo","Inactivo") default "Activo"
);

insert into categoria (nombre,estado)
value 
("Suplementos","Activo"), 
("Accesorios","Activo"), ("Equipos pequeños","Activo") ;

create table producto (
id_producto tinyint auto_increment primary key,
nombre varchar(30),
precio int,
stock int,
estado enum("Activo","Inactivo") default "Activo",
categoria_id tinyint,
foreign key (categoria_id) references categoria(id_categoria)
);

insert into producto (nombre,precio,stock,categoria_id)
value 
("Polvos de proteínas","50000","12","1"),
("Barritas energéticas","6000","22","1"), 
("Multivitaminas","21000","50","1"), 
("Muñequeras","10000","42","2"), 
("pre-entrenamiento","45000","20","1"),
("Bandas de resistencia","35000","30","2"),
("colchonetas de yoga","75000","80","3"),
("Cinturones de levantamiento","55000","20","2")
;
