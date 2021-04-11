-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 02 2021 г., 10:15
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` text DEFAULT NULL,
  `login` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(7, 'jahongir', 'admin', 'iqbol9309@gmail.com', 123, 'uploads/1613749650logo-white.png'),
(8, 'Mirjon', 'mir', 'iqbol9309@gmail.com', 456, 'uploads/16137571661.jpg'),
(9, 'Mirjon', 'mirjon', 'mirjon@gmail.com', 789, 'uploads/16137573441.jpg'),
(10, 'Ollonazar', 'ollonazar', 'ollonazar@gmail.com', 1999, 'uploads/16137594611.jpg'),
(11, 'asdasdas', 'aliy', 'iqbol9309@gmail.com', 2701, 'uploads/16138177060001.png'),
(12, 'asdasdas', 'logo', 'iqbol9309@gmail.com', 123456789, 'uploads/16140723570001.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
