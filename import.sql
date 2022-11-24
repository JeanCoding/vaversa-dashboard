CREATE DATABASE vaversa;

CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username varchar(20) NOT NULL,
    password varchar(30) NOT NULL
);

CREATE TABLE plants (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    plant_name varchar(30) NOT NULL,
    task varchar(30),
    name varchar(30) NOT NULL,
    plant_date varchar(30)
);

CREATE TABLE refills (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    plants_id int NOT NULL,
    title varchar(20) NOT NULL,
    start_time DATE NOT NULL,
    end_time DATE NOT NULL
);