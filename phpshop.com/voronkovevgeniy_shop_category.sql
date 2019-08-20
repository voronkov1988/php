create table category
(
  id           int auto_increment
    primary key,
  cat_name     varchar(45) not null,
  browser_name text        null
);

INSERT INTO voronkovevgeniy_shop.category (id, cat_name, browser_name) VALUES (1, 'sets', 'Сеты');
INSERT INTO voronkovevgeniy_shop.category (id, cat_name, browser_name) VALUES (2, 'sushi', 'Суши');
INSERT INTO voronkovevgeniy_shop.category (id, cat_name, browser_name) VALUES (3, 'rolls', 'Роллы');
create table good
(
  id          int          not null
    primary key,
  category    varchar(45)  not null,
  name        varchar(45)  not null,
  composition varchar(255) not null,
  price       int          not null,
  descr       varchar(255) null,
  img         varchar(255) null,
  link_name   text         null
);

INSERT INTO voronkovevgeniy_shop.good (id, category, name, composition, price, descr, img, link_name) VALUES (1, 'sets', 'Сет Запеченный', 'запеченные роллы', 800, 'lorem', 'baked.jpg', 'baked_set');
INSERT INTO voronkovevgeniy_shop.good (id, category, name, composition, price, descr, img, link_name) VALUES (2, 'sets', 'Сет Филамикс', 'три разных ролла Филадельфия', 950, 'lorem', 'philaset.jpg', 'phila_set');
INSERT INTO voronkovevgeniy_shop.good (id, category, name, composition, price, descr, img, link_name) VALUES (3, 'rolls', 'Ролл Филадельфия', 'лосось, сливочный сыр', 300, 'lorem', 'phila.jpg', 'phila');
INSERT INTO voronkovevgeniy_shop.good (id, category, name, composition, price, descr, img, link_name) VALUES (4, 'rolls', 'Ролл Калифорния', 'краб, огурец, масаго', 200, 'lorem', 'california.jpg', 'california');
INSERT INTO voronkovevgeniy_shop.good (id, category, name, composition, price, descr, img, link_name) VALUES (5, 'sushi', 'Суши Лосось', 'лосось, рис', 100, 'lorem', 'salmon.jpg', 'salmon');
INSERT INTO voronkovevgeniy_shop.good (id, category, name, composition, price, descr, img, link_name) VALUES (6, 'sushi', 'Суши Угорь', 'угорь, рис', 110, 'lorem', 'eel.jpg', 'eel');
create table `order`
(
  id      int auto_increment
    primary key,
  date    datetime                                   not null,
  name    varchar(255)                               not null,
  email   varchar(255)                               not null,
  phone   varchar(255)                               not null,
  address varchar(255)                               not null,
  sum     int                                        not null,
  status  enum ('Новый', 'Завершен') default 'Новый' not null
);

INSERT INTO voronkovevgeniy_shop.`order` (id, date, name, email, phone, address, sum, status) VALUES (13, '2019-01-20 16:51:52', 'Василий', 'vasickru@mail.ru', '+79518190825', 'Школьная 1/32', 4710, 'Завершен');
INSERT INTO voronkovevgeniy_shop.`order` (id, date, name, email, phone, address, sum, status) VALUES (38, '2019-01-21 06:51:16', '123', 'vasickru@mail.ru', '+79518190825', 'Свердловский Тракт ү', 100, 'Новый');
INSERT INTO voronkovevgeniy_shop.`order` (id, date, name, email, phone, address, sum, status) VALUES (39, '2019-01-28 08:20:29', 'Василий', '1@1.ru', '+79518190825', 'Свердловский Тракт ү', 1900, 'Новый');
INSERT INTO voronkovevgeniy_shop.`order` (id, date, name, email, phone, address, sum, status) VALUES (40, '2019-01-28 08:38:19', '123', 'vasickru@mail.ru', '+79518190825', 'Свердловский Тракт ү', 1250, 'Новый');
create table order_good
(
  id         int auto_increment
    primary key,
  order_id   int          not null,
  product_id int          not null,
  name       varchar(255) null,
  price      int          null,
  quantity   int          null,
  sum        int          null
);

INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (1, 12, 1, 'Сет Запеченный', 800, 1, 800);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (2, 12, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (3, 12, 3, 'Ролл Филадельфия', 300, 2, 600);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (4, 13, 4, 'Ролл Калифорния', 200, 2, 400);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (5, 13, 2, 'Сет Филамикс', 950, 2, 1900);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (6, 13, 6, 'Суши Угорь', 110, 1, 110);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (7, 13, 1, 'Сет Запеченный', 800, 1, 800);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (8, 13, 3, 'Ролл Филадельфия', 300, 5, 1500);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (9, 14, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (10, 14, 3, 'Ролл Филадельфия', 300, 2, 600);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (11, 15, 5, 'Суши Лосось', 100, 1, 100);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (12, 15, 6, 'Суши Угорь', 110, 2, 220);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (13, 16, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (14, 17, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (15, 17, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (16, 18, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (17, 19, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (18, 20, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (19, 21, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (20, 22, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (21, 23, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (22, 23, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (23, 24, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (24, 25, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (25, 26, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (26, 27, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (27, 28, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (28, 29, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (29, 30, 1, 'Сет Запеченный', 800, 2, 1600);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (30, 31, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (31, 32, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (32, 33, 1, 'Сет Запеченный', 800, 1, 800);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (33, 34, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (34, 35, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (35, 36, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (36, 37, 1, 'Сет Запеченный', 800, 1, 800);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (37, 38, 5, 'Суши Лосось', 100, 1, 100);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (38, 39, 1, 'Сет Запеченный', 800, 2, 1600);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (39, 39, 3, 'Ролл Филадельфия', 300, 1, 300);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (40, 40, 2, 'Сет Филамикс', 950, 1, 950);
INSERT INTO voronkovevgeniy_shop.order_good (id, order_id, product_id, name, price, quantity, sum) VALUES (41, 40, 3, 'Ролл Филадельфия', 300, 1, 300);
create table user
(
  id       int unsigned auto_increment
    primary key,
  username varchar(255) not null,
  password varchar(255) not null,
  auth_key varchar(255) null
);

INSERT INTO voronkovevgeniy_shop.user (id, username, password, auth_key) VALUES (1, 'admin', '$2y$13$OzahBu2mo8152R9lQdvagOXmQ3r26TENt42QjSDJFS2mReC16oUrC', null);