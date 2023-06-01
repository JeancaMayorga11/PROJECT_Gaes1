DROP DATABASE ACSS;
CREATE DATABASE ACSS;
USE ACSS;

CREATE TABLE Habilitado(
ID_habilitado bigint(12) not null primary key,
Nombre varchar(10) not null);

CREATE TABLE Usuario(
ID_usuario bigint (12) not null primary key,
Email varchar (30) not null,
Clave varchar (32) not null,
Nombres varchar(30) not null,
Apellidos varchar (30) not null,
Telefono bigint (15) not null,
Tipoidentificacion  varchar (15) not null,
fk_ID_habilitado bigint (12) not null,
foreign key(fk_ID_habilitado) references Habilitado(ID_habilitado));


CREATE TABLE Perfil(
ID_perfil bigint(12) not null primary key,
Nombre varchar(15) not null,
fk_ID_usuario bigint(12) not null,
fk_ID_habilitado bigint(12)not null,
foreign key(fk_ID_usuario) references Usuario(ID_usuario),
foreign key(fk_ID_habilitado) references Habilitado(ID_habilitado));


CREATE TABLE Cita(
ID_cita bigint (12) not null primary key,
Ciudad varchar(12) not null,
Direccion varchar (25) not null,
FechaVisita datetime(6) null,
HoraVisita time(6) null,
TipoServicio varchar(25) not null,
fk_ID_perfil bigint (12),
fk_ID_habilitado bigint(12),
foreign key(fk_ID_perfil) references Perfil(ID_perfil),
foreign key(fk_ID_habilitado) references Habilitado(ID_habilitado));


CREATE TABLE Instalacion(
ID_instalacion bigint(12) not null primary key,
Descripcion text null,
Estado varchar(12),
FechaInicio datetime(6) null,
FechaFin datetime(6) null,
Precio float(6) not null, 
fk_ID_cita bigint(12),
fk_ID_perfil bigint (12),
fk_ID_habilitado bigint(12),
foreign key(fk_ID_cita) references Cita(ID_cita),
foreign key(fk_ID_perfil) references Perfil(ID_perfil),
foreign key(fk_ID_habilitado) references Habilitado(ID_habilitado));


CREATE TABLE Equipo(
Numero_referencia bigint(12) not null primary key,
Nombre varchar(10) null,
Estado varchar(10) not null,
Marca varchar(10) not null,
fk_ID_perfil bigint(12),
fk_ID_mantenimiento bigint(12),
fk_ID_habilitado bigint(12),
foreign key(fk_ID_perfil) references perfil (ID_perfil),
foreign key(fk_ID_habilitado) references habilitado (ID_habilitado));


CREATE TABLE Mantenimiento(
ID_mantenimiento bigint(12) not null primary key,
Descripcion text null,
Tipo varchar(30) not null,
Estado varchar(10) not null,
Precio int(10) not null,
fk_ID_perfil bigint(12),
fk_ID_cita bigint(12),
fk_ID_Numero_referencia bigint(12),
fk_ID_habilitado bigint(12),
Foreign key(fk_ID_Perfil) references perfil (ID_perfil),
Foreign key(fk_ID_cita) references cita (ID_cita),
Foreign key(fk_ID_numero_referencia) references equipo (Numero_referencia),
foreign key(fk_ID_habilitado) references Habilitado(ID_habilitado));


CREATE TABLE Inventario(
ID_inventario bigint (12) not null primary key,
Movimiento varchar (12) not null,
CantidadExistente int (4) not null,d varchar(20) not null,
CantidadSalida int (4) not null,
CantidadEntrada int (4) not null,
Saldo Float (12) not null,
ValorEntrada float(12) not null,
ValorSalida float(12),
fk_ID_perfil bigint(10),
fk_ID_habilitado bigint(12),
foreign key (fk_ID_perfil) references Perfil (ID_perfil),
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Elemento(
COD_elemento bigint (12) not null primary key,
Nombre varchar (12),
Cantidad int(4),
Precio Float(12) not null,
fk_ID_perfil bigint(10),
fk_ID_habilitado bigint(12),
fk_ID_inventario bigint(12),
foreign key (fk_ID_perfil) references Perfil (ID_perfil),
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado),
foreign key (fk_ID_inventario) references Inventario (ID_inventario));


CREATE TABLE Categoria(
ID_Categoria bigint(12) not null primary key, 
NombreCategoria varchar(15) not null, 
fk_ID_perfil bigint(12) , 
fk_COD_elemento bigint(12) ,
fk_ID_habilitado bigint(12),
foreign key(fk_ID_perfil) references Perfil(ID_perfil), 
foreign key(fk_COD_elemento) references Elemento(COD_elemento),
foreign key(fk_ID_habilitado) references Habilitado(ID_habilitado));


CREATE TABLE Entrada(
ID_Entrada bigint(12) not null primary key, 
FechaEntrada datetime(6) null, 
fk_ID_perfil bigint(10) not null, 
fk_COD_elemento bigint(10) not null, 
foreign key(fk_ID_perfil) references Perfil(ID_perfil), 
foreign key(fk_COD_elemento) references Elemento(COD_elemento));


CREATE TABLE Salida(
ID_Salida bigint(12) not null primary key, 
FechaSalida datetime(6) null, 
fk_ID_perfil bigint(10) not null, 
fk_COD_elemento bigint(10) not null,
foreign key(fk_ID_perfil) references Perfil(ID_Perfil), 
foreign key(fk_COD_elemento) references Elemento(COD_elemento));












