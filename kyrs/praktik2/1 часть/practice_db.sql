-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 12 2019 г., 13:12
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tel` int(12) NOT NULL,
  `site` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name`, `mail`, `tel`, `site`) VALUES
(1, 'Ворокнов Евгений', 'z.voronkov@mail.ru', 9574688, 'rusttshop.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `career` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `career`
--

INSERT INTO `career` (`id`, `career`) VALUES
(1, 'Циклы в PHP\r\nНа втором месте по частоте использования, после конструкций условий (условных операторов), находятся циклы.\r\n\r\nЦиклы позволяют повторять определенное (и даже неопределенное - когда работа цикла зависит от условия) колличество раз различные операторы.');

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `education` varchar(30) NOT NULL,
  `sity` varchar(30) NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`id`, `education`, `sity`, `year_start`, `year_end`) VALUES
(1, 'гарвард', 'Москва', 1990, 1995),
(2, 'ПТУ', 'Belarus', 1995, 2000);

-- --------------------------------------------------------

--
-- Структура таблицы `expriens`
--

CREATE TABLE `expriens` (
  `id` int(11) NOT NULL,
  `prof` varchar(30) NOT NULL,
  `gorod` varchar(30) NOT NULL,
  `date` int(11) NOT NULL,
  `description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `expriens`
--

INSERT INTO `expriens` (`id`, `prof`, `gorod`, `date`, `description`) VALUES
(1, 'weilding', 'Mogilev', 2010, 'Цикл с предусловием (while)'),
(2, 'senoir', 'Minsk', 2018, 'Цикл с постусловием (do-while)'),
(3, 'developer', 'Kiev', 2010, 'Цикл со счетчиком (for)');

-- --------------------------------------------------------

--
-- Структура таблицы `interest`
--

CREATE TABLE `interest` (
  `id` int(11) NOT NULL,
  `interes` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `interest`
--

INSERT INTO `interest` (`id`, `interes`) VALUES
(1, 'рыбалка'),
(2, 'Пиво'),
(3, 'Спорт');

-- --------------------------------------------------------

--
-- Структура таблицы `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `lang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `language`
--

INSERT INTO `language` (`id`, `lang`) VALUES
(1, 'English'),
(2, 'Belarus'),
(3, 'Russian');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `studio` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `studio`, `description`) VALUES
(1, 'velocity', 'lore lorem lorem'),
(2, 'devstudio', 'lore lorem lorem'),
(3, 'tempo', 'lorem345'),
(4, 'atom', 'lorem3345'),
(5, 'delta', 'lorem3вававававав345');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `cms` varchar(50) NOT NULL,
  `bar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`id`, `cms`, `bar`) VALUES
(1, 'wordpress', 20),
(2, 'opencart', 30),
(3, 'modx', 40),
(4, 'simplacms', 50),
(5, 'joomla', 70),
(6, 'blablalba', 100);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `expriens`
--
ALTER TABLE `expriens`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `expriens`
--
ALTER TABLE `expriens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
