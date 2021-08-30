DROP DATABASE IF EXISTS Cda;
CREATE DATABASE Cda;
USE Cda;

CREATE TABLE Ville(
	idVille int(11) not NULL auto_increment PRIMARY KEY,
	nomVille varchar(50),
	numDepartement int(3),
    codePostal int(5),
	dateMaj date
)ENGINE=Innodb DEFAULT CHARSET = utf8;
