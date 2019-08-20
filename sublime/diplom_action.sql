create table action
(
  id   int auto_increment
    primary key,
  sort varchar(30) not null,
  constraint sort
    unique (sort)
);

INSERT INTO diplom.action (id, sort) VALUES (5, 'hot');
INSERT INTO diplom.action (id, sort) VALUES (2, 'new');
INSERT INTO diplom.action (id, sort) VALUES (1, 'sale');

create table good
(
  id        int auto_increment
    primary key,
  category  varchar(30)  not null,
  name      varchar(500) not null,
  price     int          not null,
  descr     varchar(700) not null,
  img       varchar(100) not null,
  link_name varchar(100) not null,
  rus_cat   varchar(30)  not null,
  cat_desr  varchar(100) not null,
  status    varchar(255) null,
  constraint good_ibfk_1
    foreign key (status) references action (sort)
);

create index FK_users_category
  on good (category);

create index status
  on good (status);

INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (2, 'PC', 'Настольный ПК Lenovo', 300, 'Intel Core i5-7300U • DDR4 0 Гб (не установлена) • ; ODD нет • Intel HD Graphics 620 • Wi-Fi ест', 'avds_small.jpg', 'pc_lenovo', 'Компьютеры', 'все о копьютерах', 'new');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (3, 'PC', 'Системный блок Lenovo ThinkCentre V520s-08IKL SFF 10NM004VRU black', 700, 'Intel Core i3-7100 • DDR4 4 Гб • HDD; ODD нет • Intel HD Graphics 630 • MS Windows 10 Home (64-bit)', 'e68ce19bb9cd670bd7b96f4b327a2907.jpg', 'Lenovo_ThinkCentre_V520s', 'Компьютеры', 'все о копьютерах', 'hot');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (4, 'PC', 'Ноутбук Lenovo V330-15IKB (81AX00MARK), Dark grey', 900, 'Intel Core i5-7200U • 4 Гб DDR4 • HDD: 500 Гб • 15.6'''' (1920 x 1080), Intel HD Graphics 620 • DOS', 'cfe630ce387274cef564c04ec965e96a.jpg', 'LenovoV330-15IKB_81AX00MARK)_Darkgrey', 'Компьютеры', 'все о копьютерах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (5, 'PC', 'Моноблок Dell Inspiron 3277 (3277-7264), black', 700, 'Intel Pentium 4415U • 4 Гб DDR4 • HDD 1000 Гб, ODD нет • 21.5" IPS (1920x1080) + Intel HD Graphics', 'mono1.jpg', 'Dell_Inspiron_3277 ', 'Компьютеры', 'все о копьютерах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (6, 'PC', 'Моноблок Acer Aspire C22-865 (DQ.BBRER.004) white', 900, 'Intel Core i3-8130U • 4 Гб DDR4 • HDD 500 Гб, ODD нет • 21" (1920x1080) + Intel UHD Graphics 620', 'mono2.jpg', 'Acer_Aspire', 'Компьютеры', 'все о копьютерах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (7, 'PC', 'Системный блок игрового ПК HP Pavilion 590-p0000ur (4GL23EA), Grey', 500, 'Intel Pentium Gold G5400 • DDR4 8 Гб • 1000 Гб HDD; DVD-RW • NVIDIA GeForce GTX 1050 Ti • Wi-Fi 802.', 'pc.jpg', 'HP_Pavilion_590-p0000ur', 'Компьютеры', 'все о копьютерах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (8, 'Mobile', 'Смартфон Samsung Galaxy J2 Prime SM-G532 golden metal', 100, 'Android • 5 дюйм. (960x540), 1.5 ГБ + 8 Гб • 2 x SIM • LTE • тыл. 8 МП . фронт. 5 МП', '1.jpg', 'Power ', 'Мобильные телефоны', 'все о мобильн телефонах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (9, 'Mobile', 'Смартфон Meizu M5C 5" 2Gb/32GB red', 100, 'Android • 5 дюйм. (1280x720), 2 Гб + 32 Гб • 2 x SIM • LTE, LTE-A • тыл. 8 МП . фронт. 5 МП', '2.jpg', 'Canon', 'Мобильные телефоны', 'все о мобильн телефонах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (10, 'Mobile', 'Смартфон Meizu M8 lite 3/32Gb black', 300, 'Android • 5.7 дюйм. (1440x720 ), 3 Гб + 32 Гб • 2 x SIM • LTE • тыл. 13 МП . фронт. 5 МП', '3.jpg', 'SP ', 'Мобильные телефоны', 'все о мобильн телефонах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (11, 'Mobile', 'Смартфон Meizu 16 6/64Gb Black', 300, 'Android 8.1 • 6 дюйм. (2160x1080 ), 6 Гб + 64 Гб • 2 x SIM • LTE • тыл. 12 МП, 20 МП. фронт. 20 МП', '4.jpg', 'PowerShot_G1_XMark_III_black', 'Мобильные телефоны', 'все о мобильн телефонах', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (12, 'Mobile', 'Смартфон Samsung Galaxy S9 SM-G960F, ultraviolet', 400, 'Android 8.0 • 5.8 дюйм. (2960x1440 ), 4 Гб + 64 Гб • 2 x SIM • LTE, LTE-A • тыл. 12 МП. фронт. 8 МП', '5.jpg', 'black', 'Мобильные телефоны', 'все о мобильн телефонах', 'sale');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (13, 'Mobile', 'Смартфон Sony Xperia L2 3/32Gb, Black', 500, 'Android • 5.5 дюйм. (1920x1080), 3 Гб + 32 Гб • 2 x SIM. фронт. 8 МП', '6.jpg', 'Nikon', 'Мобильные телефоны', 'все о мобильн телефонах', 'sale');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (14, 'FOTO', 'Фотоаппарат беззеркальный Canon EOS M50 Kit (15-45 IS STM) White', 111, '25.8 млн, 3840x2160, 10 кадр. / сек, ЖК-экран: поворотный, сенсорный, 1040000 точек, 3 дюйма', '11.jpg', 'Bod', 'Фотоаппараты', 'Все о Фотоаппараты', null);
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (15, 'FOTO', 'Фотоаппарат беззеркальный Canon EOS M50 Kit (15-45 IS STM) black', 1446, '25.8 млн, 3840x2160, 10 кадр. / сек, ЖК-экран: поворотный, сенсорный, 1040000 точек, 3 дюйма', '22.jpg', 'Mark_IV_Body', 'Фотоаппараты', 'Все о Фотоаппараты', 'sale');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (16, 'FOTO', 'Фотоаппарат Canon EOS M6 Kit (15-45 IS STM) Black/Silver', 124, '25.8 млн, 1920x1080, 9 кадр. / сек, ЖК-экран: поворотный, сенсорный, 1040000 точек, 3 дюйма', '33.jpg', 'Ball_L ', 'Фотоаппараты', 'Все о Фотоаппараты', 'hot');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (17, 'FOTO', 'Фотоаппарат зеркальный Sony Alpha SLT-A68 Kit 18-55, black', 343, '24.3 млн, 1920x1080, 8 кадр. / сек, ЖК-экран: поворотный, 460800 точек, 2.70 дюйма', '44.jpg', 'Colt', 'Фотоаппараты', 'Все о Фотоаппараты', 'new');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (18, 'FOTO', 'Фотоаппарат Canon Power Shot G3 X Black', 454, '20.9 млн, оптический zoom: 25x, 1920x1080, 5.9 кадр. / сек, ЖК-экран: поворотный, сенсорный, 1620000...', '55.jpg', 'Pen', 'Фотоаппараты', 'Все о Фотоаппараты', 'sale');
INSERT INTO diplom.good (id, category, name, price, descr, img, link_name, rus_cat, cat_desr, status) VALUES (19, 'FOTO', 'Фотоаппарат зеркальный Canon EOS 77D Body Black', 768, '25.8 млн, 1920x1080, 6 кадр. / сек, ЖК-экран: поворотный, сенсорный, 1040000 точек, 3 дюйма', '66.jpg', 'CPL', 'Фотоаппараты', 'Все о Фотоаппараты', 'sale');
create table `order`
(
  id       int auto_increment
    primary key,
  name     varchar(30) not null,
  lastName varchar(30) not null,
  phone    varchar(30) not null,
  email    varchar(30) not null
);

INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (31, '', 'прапр', 'z.voronkov@mail.ru', '783576454');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (32, '', 'прапр', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (33, '', 'прапр', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (34, '', 'прапр', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (35, '', 'прапр', 'парапрап', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (36, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (37, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (38, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (39, '', 'Воронков', '+783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (40, '', 'Воронков', 'парапрап', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (41, '', 'Воронков', 'парапрап', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (42, '', 'Воронков', 'парапрап', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (43, '', 'Воронков', 'парапрап', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (44, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (45, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (46, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (47, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (48, '', 'Воронков', '+783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (49, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (50, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (51, '', 'Воронков', '783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (52, '', 'Воронков', '+783576454', 'zelgryz@yandex.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (53, '', 'прапр', '783576454', 'zelgryz@yandex.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (54, '', 'прапр', '783576454', 'zelgryz@yandex.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (55, '', 'Воронков', '+783576454', 'z.voronkov@mail.ru');
INSERT INTO diplom.`order` (id, name, lastName, phone, email) VALUES (56, '', 'Воронков', '+783576454', 'z.voronkov@mail.ru');

create table category
(
  id           int auto_increment
    primary key,
  cat_name     varchar(30)  not null,
  browser_name varchar(30)  not null,
  descr        varchar(300) not null,
  constraint browser_name
    unique (browser_name),
  constraint cat_name
    unique (cat_name),
  constraint category_ibfk_1
    foreign key (browser_name) references good (category)
);

INSERT INTO diplom.category (id, cat_name, browser_name, descr) VALUES (1, 'Компьютеры', 'PC', 'компы');
INSERT INTO diplom.category (id, cat_name, browser_name, descr) VALUES (2, 'Мобильные телефоны', 'Mobile', 'мобилы');
INSERT INTO diplom.category (id, cat_name, browser_name, descr) VALUES (3, 'Фотоаппараты', 'FOTO', 'фотики');