-- /////////////////////// creat data base ///////////////////////////////

CREATE DATABASE school;

-- /////////////////////// creat tables ////////////////////////

create table Administration (
	id int AUTO_INCREMENT,
    nom varchar(255),
    prenom varchar(255),
    Email varchar(255),
    mot de passe varchar (255)
    PRIMARY key(id)

)

create table Etudiant (
	id2 int AUTO_INCREMENT,
    nom2 varchar(255),
    prenom2 varchar(255),
    DateNaissance date,
    Genre varchar(255),
    Email2 varchar(255),
    mdpss varchar (255),
    PRIMARY key(id2)

)

-- ////////////////////// INSERT into /////////////////////////

INSERT INTO Administration (nom, prenom,mdps )
VALUES ('Youssef', 'Ezzohayly','1234567Y@oussef'),
('Anas', 'Labzar','auzou@narton23'),
('Redoane', 'tohami','reDone123tohami');

INSERT INTO Etudiant (nom2, prenom2, DateNaissance,Genre,Email2, mdpss )
VALUES ('Youssef', 'Ezzohayly','2002-02-21','Male', 'youssef.ezzohayly98@gmail.com','1234567Y@oussef'),
('Anas', 'Labzar','1999-01-22','Male','anas.lazbar@gmail.com','auzou@narton23'),
('Redoane', 'tohami','1989-12-30','Male','bardaoui@outlook.com','reDone123tohami');

-- //////////////////// ADD /////////////////////////

ALTER TABLE Administration
ADD Email varchar(255);

-- ////////////////////// Select ///////////////////

SELECT *, DATE_FORMAT(DateNaissance, "%d/%m/%Y")
FROM Etudiant;

-- ///////////////////// Delete ////////////////////

DELETE FROM Etudiant WHERE nom2='Anas';
 