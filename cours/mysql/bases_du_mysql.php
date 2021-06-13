Syntax:
CREATE DATABASE learnandjoy;

DROP DATABASE databasename;

CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);


ALTER TABLE Persons 
ADD Email varchar(255);

ALTER TABLE Persons 
DROP COLUMN Email;


DROP TABLE Persons;


Les contraintes suivantes sont couramment utilisées en SQL :

NOT NULL - Garantit qu'une colonne ne peut pas avoir une valeur NULL
UNIQUE - Assure que toutes les valeurs d'une colonne sont différentes
PRIMARY KEY - Une combinaison de NOT NULL et UNIQUE. Identifie de manière unique chaque ligne d'un tableau
FOREIGN KEY - Empêche les actions qui détruiraient les liens entre les tables
CHECK - Assure que les valeurs d'une colonne satisfont à une condition spécifique
DEFAULT - Définit une valeur par défaut pour une colonne si aucune valeur n'est spécifiée
CREATE INDEX - Utilisé pour créer et récupérer des données de la base de données très rapidement

-----------------------------------1- NOT NULL -----------------------

- NOT NULL on CREATE TABLE
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255) NOT NULL,
    Age int
);

- NOT NULL on ALTER TABLE
ALTER TABLE Persons
MODIFY Age int NOT NULL;



-----------------------------------2- UNIQUE -----------------------
- UNIQUE Constraint on CREATE TABLE
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    UNIQUE (ID)
);

- UNIQUE Constraint on ALTER TABLE

ALTER TABLE Persons
ADD UNIQUE (ID);

- UNIQUE constraint on multiple columns
ALTER TABLE Persons
ADD CONSTRAINT UC_Person UNIQUE (ID,LastName);

- DROP a UNIQUE Constraint
ALTER TABLE Persons
DROP INDEX UC_Person;

------------------------------3- PRIMARY KEY-------------------------------

- PRIMARY KEY on CREATE TABLE
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    PRIMARY KEY (ID)
);

- defining a PRIMARY KEY constraint on multiple columns
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    CONSTRAINT PK_Person PRIMARY KEY (ID,LastName)
);

- PRIMARY KEY on ALTER TABLE
ALTER TABLE Persons
ADD PRIMARY KEY (ID);

- PRIMARY KEY Constraint
ALTER TABLE Persons
DROP PRIMARY KEY;

------------------------------4- FOREIGN KEY-------------------------------
- FOREIGN KEY on CREATE TABLE
CREATE TABLE Orders (
    OrderID int NOT NULL,
    OrderNumber int NOT NULL,
    PersonID int,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
);

- FOREIGN KEY on ALTER TABLE
ALTER TABLE Orders
ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

- FOREIGN KEY constraint on multiple columns
ALTER TABLE Orders
ADD CONSTRAINT FK_PersonOrder
FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

- DROP a FOREIGN KEY
ALTER TABLE Orders
DROP FOREIGN KEY FK_PersonOrder;


-----------------------------------5- CHECK Constraint ----------------------- 
- CHECK on CREATE TABLE
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    CHECK (Age>=18)
);

- CHECK constraint on multiple columns
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    City varchar(255),
    CONSTRAINT CHK_Person CHECK (Age>=18 AND City='Sandnes')
);

- CHECK on ALTER TABLE
ALTER TABLE Persons
ADD CHECK (Age>=18);

- CHECK constraint on multiple columns
ALTER TABLE Persons
ADD CONSTRAINT CHK_PersonAge CHECK (Age>=18 AND City='Sandnes');

-DROP a CHECK Constraint
ALTER TABLE Persons
DROP CHECK CHK_PersonAge;

------------------------------6- DEFAULT Constraint:-------------------------------
- DEFAULT on CREATE TABLE
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    City varchar(255) DEFAULT 'Sandnes'
);

CREATE TABLE Orders (
    ID int NOT NULL,
    OrderNumber int NOT NULL,
    OrderDate date DEFAULT GETDATE()
);

-DEFAULT on ALTER TABLE
ALTER TABLE Persons
ALTER City SET DEFAULT 'Sandnes';

- DROP a DEFAULT
ALTER TABLE Persons
ALTER City DROP DEFAULT;