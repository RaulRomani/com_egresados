create table if not exists `#__egresados`(
	id int(10) unsigned not null auto_increment,
	nombre varchar(250) not null ,
	apellido varchar(250) not null,
	PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT IGNORE INTO `#__egresados`
(nombre, apellido) values ('Rául','Romaní Flores'), ('Yuri','Untiveros Barboza'),
('Guillermo','Torres Ramirez');