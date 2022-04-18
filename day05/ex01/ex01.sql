CREATE TABLE IF NOT EXISTS `db_hmaronen`.`ft_table` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(10) NOT NULL DEFAULT 'toto',
    `group` ENUM('staff','student','other') NOT NULL,
    `creation_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    PRIMARY KEY (id));
