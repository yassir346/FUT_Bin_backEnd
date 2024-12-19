-- use database;
-- create mld
-- 3 create tables;
-- 4 insert data in tables

CREATE TABLE Equipe(
   id INT AUTO_INCREMENT,
   logo VARCHAR(244),
   nom VARCHAR(244),
   PRIMARY KEY(id)
);

CREATE TABLE nationnalite(
   id INT AUTO_INCREMENT,
   nom VARCHAR(150),
   logo VARCHAR(150),
   PRIMARY KEY(id)
);

CREATE TABLE statistic_player(
   id INT AUTO_INCREMENT,
   rating INT,
   pace INT,
   shooting INT,
   dribbling INT,
   passing INT,
   defending INT,
   physical INT,
   PRIMARY KEY(id)
);

CREATE TABLE statistic_GK(
   id INT AUTO_INCREMENT,
   diving INT,
   handling INT,
   kicking INT,
   speed INT,
   reflexes INT,
   positioning INT,
   rating INT,
   PRIMARY KEY(id)
);

CREATE TABLE Player(
   id INT AUTO_INCREMENT,
   name VARCHAR(150),
   position_player VARCHAR(50),
   id_1 INT NOT NULL,
   id_2 INT NOT NULL,
   id_3 INT NOT NULL,
   id_4 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_statistic_GK) REFERENCES statistic_GK(id),
   FOREIGN KEY(id_statistic_player) REFERENCES statistic_player(id),
   FOREIGN KEY(id_nationnalite) REFERENCES nationnalite(id),
   FOREIGN KEY(id_Equipe) REFERENCES Equipe(id)
);


DROP TABLE Player;

INSERT into 
