create table comment
(
  id         int auto_increment
    primary key,
  name       varchar(30)               not null,
  comment    varchar(300)              not null,
  moderation varchar(30) default 'new' null
);

INSERT INTO lesson10.comment (id, name, comment, moderation) VALUES (194, 'рек', 'кену', 'ok');
INSERT INTO lesson10.comment (id, name, comment, moderation) VALUES (195, 'рек', 'кену', 'new');
INSERT INTO lesson10.comment (id, name, comment, moderation) VALUES (196, 'рек', 'кену', 'new');
INSERT INTO lesson10.comment (id, name, comment, moderation) VALUES (197, 'кекек', 'кеке', 'new');