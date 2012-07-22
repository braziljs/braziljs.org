CREATE TABLE  `braziljs`.`newsletter` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`email` VARCHAR( 128 ) NOT NULL ,
	`date` DATETIME NOT NULL ,
		UNIQUE (
			`email`
		)
) ENGINE = INNODB;