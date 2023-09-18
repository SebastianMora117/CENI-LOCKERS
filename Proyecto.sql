CREATE DATABASE Proyecto;

Use Proyecto;


create table preguntas(
    id_Preguntas int AUTO_INCREMENT PRIMARY KEY not null,
    nombre varchar(60) not null,
    inquietud varchar(200) not null,
    correo varchar(60) not null
);

CREATE TABLE cancelacion(
    razon varchar(100) not null,
    nombreest varchar(30) not null,
    numeroloker int(11)not null
);

CREATE TABLE usuarios (
    id_usuarios VARCHAR(30) PRIMARY KEY NOT NULL,
    nombre VARCHAR(60) NOT NULL,
    ficha INT NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    correo VARCHAR(30) NOT NULL,
    celular VARCHAR(30) NOT NULL,
    rol VARCHAR(30) NOT NULL
);
create table lockers(
    id_locker varchar(30) PRIMARY KEY NOT NULL,
    reservation_time TIME NOT NULL,
    expiration_time TIME NOT NULL
);
