CREATE DATABASE IF NOT EXISTS login_system;
CREATE TABLE login_system.user (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),
    access_lvl int DEFAULT 0,
    PRIMARY KEY (id)
);
INSERT INTO TABLE login_system.user (first_name, last_name, email, password) VALUES ('Michel','Szekeres','szekeresmichel@hotmail.com','$2y$10$0BABaoAk3euMCBJyc65l8OOSc7wlmLd5xugJTRYMmUAYUtTsnVCPe')
