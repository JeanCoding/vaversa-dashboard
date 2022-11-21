CREATE DATABASE vaversa;

USE DATABASE vaversa;

CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username varchar(20) NOT NULL,
    password varchar(30) NOT NULL
);

CREATE TABLE plants (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name varchar(30) NOT NULL,
    description text,
    identifier int
);

CREATE TABLE refills (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    plants_id int NOT NULL,
    title varchar(20) NOT NULL,
    start_time DATE NOT NULL,
    end_time DATE NOT NULL
);