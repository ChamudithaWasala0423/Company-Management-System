Create Database sm_system;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE user_data(
    user_id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    user_role varchar(255) NOT NULL,
    gender varchar(20),
    password  varchar(255) NOT NULL,
    code mediumint(50) NOT NULL,
    status text NOT NULL,
    add_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



