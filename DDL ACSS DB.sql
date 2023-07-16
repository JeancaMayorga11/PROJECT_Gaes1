DROP DATABASE IF EXISTS ACSS;
CREATE DATABASE ACSS;

USE ACSS;


CREATE TABLE Habilitado(
ID_habilitado int(2) not null primary key,
Estado varchar(10) not null);
 

CREATE TABLE Perfil (
ID_perfil int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
Cargo varchar(15) NOT NULL,
fk_ID_habilitado int(2) NOT NULL,
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Usuario (
ID_usuario bigint(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
Email varchar(30) NOT NULL,
Contrasena varchar(32) NOT NULL,
Nombres varchar(30) NOT NULL,
Apellidos varchar(30) NOT NULL,
Telefono int(15) NOT NULL,
Tipoidentificacion varchar(30) NOT NULL,
fk_ID_habilitado int(2) NOT NULL,
fk_ID_perfil int(5) NOT NULL,
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado),
foreign key (fk_ID_perfil) references Perfil (ID_perfil));


CREATE TABLE Cita(
ID_cita int(5) not null primary key auto_increment,
Ciudad varchar(12) not null,
Direccion varchar(25) not null,
FechaVisita date,
HoraVisita time,
tipo_servicio varchar(15) not null,
fk_ID_usuario bigint(12),
fk_ID_habilitado int(2),
foreign key(fk_ID_usuario) references Usuario (ID_usuario),
foreign key(fk_ID_habilitado) references Habilitado (ID_habilitado));



CREATE TABLE Servicio(
ID_servicio int(5) not null primary key AUTO_INCREMENT,
Descripcion text null,
Estado varchar(10) not null,
fk_ID_usuario bigint(12),
fk_ID_cita int(5),
fk_ID_habilitado int(5),
Foreign key(fk_ID_usuario) references Usuario (ID_usuario),
Foreign key(fk_ID_cita) references cita (ID_cita),
foreign key(fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Elemento(
COD_elemento int(5) not null primary key auto_increment,
Nombre varchar(15) not null,
Cantidad int(5) not null,
Precio Float(12) not null,
Categoria varchar(15),
fk_ID_habilitado int(2),
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Factura(
ID_factura int(5) not null primary key,
Equipo varchar(12),
Marca varchar(12),
Duracion int(5) not null,
fk_ID_servicio int(5),
fk_COD_elemento int(5),
foreign key(fk_ID_servicio) references Servicio (ID_servicio),
foreign key(fk_COD_elemento) references Elemento (COD_elemento));


CREATE TABLE Inventario(
ID_inventario int (5) not null primary key,
Movimiento varchar (12) not null,
CantidadExistente int (5) not null,
CantidadSalida int (5) not null,
CantidadEntrada int (5) not null,
Saldo Float (12) not null,
ValorEntrada float(12) not null,
ValorSalida float(12),
fk_ID_perfil int(5),
fk_COD_elemento int (5) not null,
fk_ID_habilitado int(2),
foreign key (fk_ID_perfil) references Perfil (ID_perfil),
foreign key (fk_COD_elemento) references Elemento (COD_elemento),
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Entrada(
ID_Entrada int(5) not null primary key, 
FechaEntrada datetime null, 
fk_ID_perfil int(5) not null, 
fk_COD_elemento int(10) not null, 
foreign key(fk_ID_perfil) references Perfil (ID_perfil), 
foreign key(fk_COD_elemento) references Elemento (COD_elemento));


CREATE TABLE Salida(
ID_Salida int(5) not null primary key, 
FechaSalida datetime null, 
fk_ID_perfil int(5) not null, 
fk_COD_elemento int(5) not null,
foreign key(fk_ID_perfil) references Perfil (ID_perfil), 
foreign key(fk_COD_elemento) references Elemento (COD_elemento));
