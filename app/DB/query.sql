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

SELECT Player.id, Player.name, Player.position_player, nationnalite.logo, Equipe.logo, statistic_player.rating, statistic_player.pace, statistic_player.dribbling, statistic_player.shooting, statistic_player.passing , statistic_player.defending ,statistic_player.physical
FROM Player
INNER JOIN nationnalite ON Player.id_nationnalite = nationnalite.id
INNER JOIN statistic_player ON Player.id_statistic_player = statistic_player.id
INNER JOIN Equipe ON Player.id_Equipe = Equipe.id
INNER JOIN statistic_GK ON Player.id_statistic_GK = statistic_GK.id;