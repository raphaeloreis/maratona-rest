
CREATE TABLE IF NOT EXISTS `corredor` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nascimento` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ;

CREATE TABLE IF NOT EXISTS `prova` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(10) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ;

CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_corredor` int(5) NOT NULL,
  `id_prova` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ;

CREATE TABLE IF NOT EXISTS `resultado` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_corredor` int(5) NOT NULL,
  `id_prova` int(5) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_conclusao` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ;
