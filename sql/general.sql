CREATE DATABASE IF NOT EXISTS login_system;
CREATE TABLE login_system.user (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    pass varchar(255),
    access_lvl int DEFAULT 0,
    PRIMARY KEY (id)
);
