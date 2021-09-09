DROP DATABASE IF EXISTS chatjquery;
CREATE DATABASE IF NOT EXISTS chatjquery;
USE chatjquery;



CREATE TABLE chat(
    idchat INT PRIMARY KEY AUTO_INCREMENT,
    telefono VARCHAR(55) NOT NULL,
    user VARCHAR (55) NOT NULL,
    mensaje VARCHAR(255) NOT NULL
);

select * from chat