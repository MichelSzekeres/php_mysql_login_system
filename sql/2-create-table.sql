-- Create table in databse (direct insert this file directly to create db)
CREATE TABLE user (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),
    access_lvl int DEFAULT 0,
    PRIMARY KEY (id)
);
