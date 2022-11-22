drop database if exists vaversa;
CREATE DATABASE vaversa;

use vaversa;

CREATE TABLE users (
	Id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
	username varchar(20) NOT NULL,
	password varchar(30) NOT NULL
);

CREATE TABLE plantInfo (
	Id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
	name varchar(30) NOT NULL,
	attributes text,
	water DATE NOT NULL,
	time_until_harvist DATE,
	light varchar(30), 
	trims varchar(30)
);

CREATE TABLE plant (
	Id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
	plant_date DATE,
	last_water DATE,
	kasId int,
	Foreign KEY (kasId) references kas(Id),
);

CREATE TABLE kas (
	Id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
	userId int,
	Foreign KEY (userId) references users(Id)
);