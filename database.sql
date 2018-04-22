CREATE DATABASE IF NOT EXISTS login;
USE login

CREATE TABLE IF NOT EXISTS users (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  username varchar(20) NOT NULL DEFAULT '',
  password varchar(40) NOT NULL DEFAULT '',
  name varchar(100) NOT NULL DEFAULT '',
  roles varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT into users (username, password, name, roles) values ('test', 'test', 'Test2', 'user');
INSERT into users (username, password, name, roles) values ('admin', 'admin', 'Admin', 'admin');
