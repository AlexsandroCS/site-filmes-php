DROP DATABASE IF EXISTS faisp;
create database faisp;
use faisp;

CREATE TABLE `filmes` (`id` INT NOT NULL AUTO_INCREMENT , `titulo` VARCHAR(125) NOT NULL , `genero` ENUM('acao','drama','comedia','fantasia','suspense','terror') NOT NULL , `dataDeLancamento` DATE NULL , `classificacao` INT NOT NULL DEFAULT '0' , `descricao` TEXT NOT NULL , `created_at` DATETIME NOT NULL , `created_by` INT NOT NULL , `updated_at` DATETIME NULL , `updated_by` INT NULL , `deleted_at` DATETIME NULL , `deleted_by` INT NULL , PRIMARY KEY (`id`));
ALTER TABLE `filmes` CHANGE `created_at` `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;

ALTER TABLE `filmes` ADD `diretor` VARCHAR(125) NULL AFTER `classificacao`;