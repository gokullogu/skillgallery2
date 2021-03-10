CREATE DATABASE auth_reg;

use auth_reg;

CREATE TABLE auth_table_sign(`username` VARCHAR(100) NOT NULL ,`email` VARCHAR(100) NOT NULL ,`password` VARCHAR(100) NOT NULL,`cpassword` VARCHAR(100));

--INSERT INTO auth_table_sign VALUES("user","email@gmail","pwd");

DROP  TABLE auth_table_sign;

SELECT * FROM auth_table_sign;

DELETE FROM auth_table;

CREATE TABLE auth_table_log(
  email VARCHAR(30),
  password VARCHAR(50)
);

SELECT * FROM auth_table_log;

INSERT INTO auth_table_sign VALUES ("ab","email@gmail","pollachi");


