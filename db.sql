CREATE DATABASE IF NOT EXISTS `mvc_exemplate`;

USE `mvc_exemplate`;

CREATE TABLE IF NOT EXISTS `user` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `todo` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `status` ENUM('Feito', 'Em andamento', 'Pra fazer') NOT NULL,
    `user_id` INT,
    FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
);