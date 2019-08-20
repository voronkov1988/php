create table color
(
  id    int auto_increment
    primary key,
  color varchar(20)  not null,
  bgc   varchar(100) not null
);

INSERT INTO lesson9.color (id, color, bgc) VALUES (1, 'red', 'background-color: red;');
INSERT INTO lesson9.color (id, color, bgc) VALUES (2, 'green', 'background-color: green;');
INSERT INTO lesson9.color (id, color, bgc) VALUES (3, 'yellow', 'background-color: yellow;');
create table lesson9_bd
(
  id       int auto_increment
    primary key,
  login    varchar(30) not null,
  password varchar(30) not null
);

INSERT INTO lesson9.lesson9_bd (id, login, password) VALUES (1, 'женя', '123');
INSERT INTO lesson9.lesson9_bd (id, login, password) VALUES (2, '123', '123');