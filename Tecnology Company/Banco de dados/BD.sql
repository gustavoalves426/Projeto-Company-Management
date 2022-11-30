CREATE DATABASE IF NOT EXISTS `company`;
USE `company`;


CREATE TABLE IF NOT EXISTS `estoque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produtoestoque` varchar(50) NOT NULL,
  `quantidade` int(20) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `codigoproduto` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idade` int(11) NOT NULL,
  `nome` varchar(10) NOT NULL COMMENT 'nome do funcionario',
  `setor` varchar(10) NOT NULL COMMENT 'setor em que o funcionario foi destinado',
  `cargo` int(11) NOT NULL COMMENT 'cargoatribuido ao funcionario',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` int(11) NOT NULL,
  `produto` varchar(10) NOT NULL,
  `parcelamento` varchar(10) NOT NULL,
  `codigo` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


