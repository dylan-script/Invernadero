CREATE TABLE `Beds` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`Quantity_Plants` INT(5) NOT NULL,
	`Descrip` varchar(30) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Plants` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`ID_Bed` INT NOT NULL,
	`Position` INT(5) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Height` (
	`ID_Plant` INT NOT NULL,
	`Value` FLOAT(5) NOT NULL,
	`Date` DATETIME NOT NULL
);

CREATE TABLE `Num_Sheets` (
	`ID_Plant` INT NOT NULL,
	`Value` INT(5) NOT NULL,
	`Date` DATETIME(5) NOT NULL
);

CREATE TABLE `Diameter` (
	`ID_Plant` INT NOT NULL,
	`Value` FLOAT(5) NOT NULL,
	`Date` DATETIME(5) NOT NULL
);

CREATE TABLE `substrate_moisture` (
	`ID_Bed` INT NOT NULL,
	`Value` FLOAT(5) NOT NULL,
	`Date` DATETIME NOT NULL
);

CREATE TABLE `Sensors` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`Name` Enum('Humedad Ambiente', 'Temperatura', 'Flujo') NOT NULL,
	`Unit` varchar(20) NOT NULL UNIQUE,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Results_Sen` (
	`ID_Sensor` INT NOT NULL,
	`Value` FLOAT(5) NOT NULL,
	`Date` DATETIME NOT NULL
);

CREATE TABLE `Users` (
	`ID` varchar(20) NOT NULL UNIQUE,
	`Pwd` varchar(20) NOT NULL,
	`Name` varchar(50) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Aphidoidea` (
	`ID_Plant` INT NOT NULL,
	`Value` INT(5) NOT NULL,
	`Date` DATETIME(5) NOT NULL
);

ALTER TABLE `Plants` ADD CONSTRAINT `Plants_fk0` FOREIGN KEY (`ID_Bed`) REFERENCES `Beds`(`ID`);

ALTER TABLE `Height` ADD CONSTRAINT `Height_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `Plants`(`ID`);

ALTER TABLE `Num_Sheets` ADD CONSTRAINT `Num_Sheets_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `Plants`(`ID`);

ALTER TABLE `Diameter` ADD CONSTRAINT `Diameter_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `Plants`(`ID`);

ALTER TABLE `substrate_moisture` ADD CONSTRAINT `substrate_moisture_fk0` FOREIGN KEY (`ID_Bed`) REFERENCES `Beds`(`ID`);

ALTER TABLE `Results_Sen` ADD CONSTRAINT `Results_Sen_fk0` FOREIGN KEY (`ID_Sensor`) REFERENCES `Sensors`(`ID`);

ALTER TABLE `Aphidoidea` ADD CONSTRAINT `Aphidoidea_fk0` FOREIGN KEY (`ID_Plant`) REFERENCES `Plants`(`ID`);










