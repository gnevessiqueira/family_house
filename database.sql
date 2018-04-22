CREATE DATABASE login;
USE login;

#Dump of table users
#--------------------------

DROP TABLE IF EXISTS 'users';

CREATE TABLE 'users' (
  'id' int(11) unsigned NOT NULL AUTO_INCREMENT,
  'username' varchar(20) NOT NULL DEFAULT '',
  'password' varchar(40) NOT NULL DEFAULT '',
  'name' varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

