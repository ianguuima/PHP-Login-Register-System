# PHP-Login-Register-System
A simple system that you can create your own account and log-in into it. My first project in PHP.


<h4>Configuration<h4>

To configure is easy, just enter in: login_method.php and register_method.php and change mysql to yours.

After, create a table using this command in PhpMyAdmin: 		
```
	CREATE TABLE IF NOT EXISTS `usuarios` (
      `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
      `nome` VARCHAR( 50 ) NOT NULL ,
      `usuario` VARCHAR( 25 ) NOT NULL ,
      `senha` VARCHAR( 40 ) NOT NULL ,
      `email` VARCHAR( 100 ) NOT NULL ,
      `nivel` INT(1) UNSIGNED NOT NULL DEFAULT '1',
      `ativo` BOOL NOT NULL DEFAULT '1',
      `cadastro` DATETIME NOT NULL ,
      PRIMARY KEY (`id`),
      UNIQUE KEY `usuario` (`usuario`),
      KEY `nivel` (`nivel`)
  	) ENGINE=MyISAM ;
```


I think that the system is self explanatory, so, use what your want and as you want
