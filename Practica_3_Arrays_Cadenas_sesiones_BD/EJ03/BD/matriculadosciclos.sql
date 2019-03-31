
/*USUARIO QUE HE USADO EN LA PRACTICA*/
/*CREATE USER 'pelusa'@'localhost' IDENTIFIED BY 'pelusa';
GRANT ALL PRIVILEGES ON * . * TO 'pelusa'@'localhost';
FLUSH PRIVILEGES;*/

CREATE DATABASE IF NOT EXISTS matriculadosciclos;

use matriculadosciclos;

CREATE TABLE IF NOT EXISTS matriculados(
	IDENTIFICADOR int not null primary key auto_increment,
    NOMBRE varchar(20) not null,
    APELLIDOS varchar(30) not null,
    FECHANACIMIENTO date not null,
    MODULO varchar (10) not null,
    CICLOFORMATIVO SET ('ASIR','DAM','DAW','SMR') not null
	);
    
CREATE TABLE IF NOT EXISTS ciclos(
	IDENTIFICADOR int not null primary key auto_increment,
    NOMBRECICLO SET ('SMR','ASIR','DAM','DAW') not null,
    TIPOCICLO SET ('MEDIO','SUPERIOR') not null
    );
    
    
    
INSERT INTO ciclos (IDENTIFICADOR, NOMBRECICLO, TIPOCICLO) VALUES 
	(1, 'ASIR', 'SUPERIOR'), 
	(2, 'DAW', 'SUPERIOR'),
	(3, 'SMR', 'MEDIO'), 
	(4, 'DAM', 'SUPERIOR');
    
    
INSERT INTO matriculadoS (IDENTIFICADOR, NOMBRE, APELLIDOS, FECHANACIMIENTO, MODULO, CICLOFORMATIVO) VALUES
	(1, 'ANGEL', 'PRINCIPAL PEREZ', '2016-02-04', 'ASO', 'ASIR'),
	(2, 'PERICO', 'DE LOS PALOTES', '2018-09-10', 'IAW', 'DAW'),
	(3, 'FULANO', 'DE TAL', '2018-01-15', 'SRI', 'ASIR'),
	(4, 'MENGANITO', 'PEREZ', '2017-09-05', 'EINEM', 'SMR'),
	(5, 'ROBERTO', 'SAEZ', '2018-01-22', 'SRI', 'DAM'),
	(6, 'CRISTIAN', 'PARDO', '2017-11-13', 'ASGBD', 'ASIR'),
	(7, 'PEDRO', 'SANCHEZ SANCHEZ', '2017-04-10', 'SAD', 'ASIR'),
	(8, 'FERNANDO', 'ALONSO', '2018-01-15', 'SRI', 'ASIR'),
	(9, 'ANDRES', 'INIESTA', '2016-11-22', 'ASGBD', 'DAM'),
	(10, 'GOKU', 'KAKAROT', '2016-08-16', 'SAD', 'ASIR');    


