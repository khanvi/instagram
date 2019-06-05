-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 12:35
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hv`
--

-- --------------------------------------------------------

--
-- Структура таблицы `instagram_post`
--

CREATE TABLE `instagram_post` (
  `id` int(10) NOT NULL,
  `text` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `login` varchar(300) NOT NULL,
  `name_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `instagram_post`
--

INSERT INTO `instagram_post` (`id`, `text`, `img`, `name`, `login`, `name_img`) VALUES
(64, 'как дела?', '7.jpg', '1', '1', '5.jpg'),
(66, 'it is instagram', '', '', '', ''),
(67, 'its instagram', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `instagram_post`
--
ALTER TABLE `instagram_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `instagram_post`
--
ALTER TABLE `instagram_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
