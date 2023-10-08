 $sql = "CREATE TABLE IF NOT EXISTS `users` (`id` INT(9) PRIMARY KEY AUTO_INCREMENT, `username` VARCHAR(65) NOT NULL, `email` VARCHAR(65) NOT NULL , 
            `pass` VARCHAR(65) NOT NULL, date_publish  TIMESTAMP DEFAULT CURRENT_TIMESTAMP, `token_push` VARCHAR(65) NOT NULL, `email_verified` TINYINT(1) NOT NULL, `obs` VARCHAR(65) NOT NULL)";


#cuando insertes dejalo en blanco tanto el campo de la fecha como el valor,se pone automatico, es decir,en inert to o update saltalo tanto el incice como el valor
