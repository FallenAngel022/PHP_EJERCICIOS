DROP DATABASE IF EXISTS basededatos;
CREATE DATABASE basededatos;

USE basededatos;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  idusuario INT(11) NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(20) NOT NULL UNIQUE,
  contrasenia VARCHAR(12) NOT NULL,
  PRIMARY KEY (idusuario)
);
INSERT INTO usuarios VALUES(00000000001,"ana","ana");
INSERT INTO usuarios VALUES(00000000002,"maria","maria");
INSERT INTO usuarios VALUES(00000000003,"manolo","manolo");
INSERT INTO usuarios VALUES(00000000004,"pepe","pepe");
INSERT INTO usuarios VALUES(00000000005,"juan","juan");
INSERT INTO usuarios VALUES(00000000006,"sara","sara");
INSERT INTO usuarios VALUES(00000000007,"helena","helena");  
INSERT INTO usuarios VALUES(00000000008,"antonio","antonio");
INSERT INTO usuarios VALUES(00000000009,"nuria","nuria");
INSERT INTO usuarios VALUES(00000000010,"usuario","usuario"); 
INSERT INTO usuarios VALUES(00000000011,"admin","admin"); 
INSERT INTO usuarios VALUES(00000000012,"root","root"); 

select * from usuarios;