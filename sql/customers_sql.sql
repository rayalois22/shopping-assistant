CREATE TABLE IF NOT EXISTS `shopping-assistant-db`.`customers` (
  `cust_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `phone_number` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `county` VARCHAR(45) NOT NULL,
  `town` VARCHAR(45) NOT NULL,
  `created_at` DATETIME GENERATED ALWAYS AS () VIRTUAL,
  `updated_at` DATETIME GENERATED ALWAYS AS (),
  PRIMARY KEY (`cust_id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
