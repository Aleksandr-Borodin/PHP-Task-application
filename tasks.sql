-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 04 2017 г., 14:26
-- Версия сервера: 10.0.30-MariaDB-30
-- Версия PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aleksandrov477`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `im` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `email`, `text`, `im`, `status`) VALUES
(56, 'test100', 'test@gmail.com', 'TestTestTestTestTestTestTest', 'DSCF7833.jpg', 0),
(55, 'Александр', 'aleksandrov477@gmail.com', 'Добавил в тег загрузки файла значение-свойство для ограничения типов загружаемых файлов', 'sun-1.jpg', 0),
(54, 'Гомер', 'homer@ukr.net', 'Радость - это?', 'kEKcOWl8RMLde.gif', 0),
(51, '111', 'swdwd@dw.re', '22222', 'enot.jpg', 1),
(49, 'Томас', 'alex@mail.com', 'Солнце - звезда?', 'sun-1.jpg', 0),
(48, 'Ксения', 'kseniya@ia.ua', 'Какая ближайшая к нам галактика?', '0_91407_fe8aa2dc_orig.jpg', 0),
(47, 'Елена', 'elena@mail.ru', 'Что такое квазар?', '8981097731.jpg', 1),
(46, 'Петр', 'petr@gmail.com', 'Плутон - планета?', 'dnews-files-2015-10-charon-670x440-1501001-jpg.jpg', 0),
(44, 'Анатолий', 'anatolij@mail.com', 'Что такое сингулярность?', 'Singulyarnost-v-predstavlenii-hudozhnika.jpg', 0),
(45, 'Мария', 'mariya@gh.com', 'Каковы размеры Млечного пути?', 'Milky_Way (1).JPG', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
