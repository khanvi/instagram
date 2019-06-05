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
-- Структура таблицы `instagram_reg`
--

CREATE TABLE `instagram_reg` (
  `id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `login` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `avatar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `instagram_reg`
--

INSERT INTO `instagram_reg` (`id`, `name`, `login`, `password`, `mail`, `avatar`) VALUES
(1, 'kk', 'kk', 'kk', 'kk', ''),
(55, 'Витя Ханин', 'basad', '123', 'basad23ghg@gmail.com', '1.jpg'),
(56, 'Петя', 'kk', 'kk', 'khanvi23ghg@gmail.com', '2.jpg'),
(57, '1', '1', '1', '1', '5.jpg'),
(58, '2', '2', '2', '2', '4.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `instagram_reg`
--
ALTER TABLE `instagram_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `instagram_reg`
--
ALTER TABLE `instagram_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
