CREATE TABLE IF NOT EXISTS `User` (
  `id` INT AUTO_INCREMENT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `pwd` VARCHAR(255) NOT NULL,
  `race` INT NOT NULL, -- admin 0 , nain 1 , elfe 2
  `email` VARCHAR(255) NOT NULL,
   CONSTRAINT `id_prime` PRIMARY KEY (id),
  ) ;

CREATE TABLE IF NOT EXISTS `elvebulding` (
  `name` VARCHAR(50) NOT NULL,
  `product` VARCHAR(50) NOT NULL,
  `product_time` INT NOT NULL,
  `qty` INT NOT NULL,
  `price` VARCHAR(50) NOT NULL,
  'description'  VARCHAR(50) NOT NULL,
   CONSTRAINT `id_prime` PRIMARY KEY (name),
  ) ;
