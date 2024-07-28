create database Rv_Dental;
use Rv_Dental;

create table cliente (
idCliente int primary key auto_increment,
nombre varchar(45) not null,
correo varchar(45) not null,
telefono varchar(45) null,
password varchar(100) not null
);

create table usuario (
idUsuario int primary key auto_increment,
tipo varchar(45) not null,
nombre varchar(45) null,
password varchar(45) null,
estado varchar(45) NULL
);

create table tratamiento (
idTratamiento int primary key auto_increment,
nombre varchar(45) not null,
descripcion varchar(45) not null,
tratamiento varchar(45) not null,
idUsuario int not null,
FOREIGN key (idUsuario) references usuario(idUsuario)
);

create table comentarios(
idComentario int primary key auto_increment,
texto text not null,
fecha datetime not null,
calificacion TINYINT(1) null,
idCliente int not null,
FOREIGN key (idCliente) references cliente(idCliente),
idTratamiento int not null,
FOREIGN key (idTratamiento) references tratamiento(idTratamiento)
);

/*Drop database Rv_Dental*/

/* insert into cliente(nombre, correo,telefono, password) values ();*/
/* insert into usuario(tipo, nombre, password,estado) values */
/* insert into tratamiento(nombre,descripcion,tratamiento,idUsuario) values */
/* insert into comentarios(idComentario, texto,calificacion,idCliente,idTratamiento) values */
