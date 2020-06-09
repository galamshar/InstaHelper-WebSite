-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 06 2020 г., 17:25
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `id13906865_instahelper`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback_requests`
--

CREATE TABLE `feedback_requests` (
  `feedback_id` bigint(20) UNSIGNED NOT NULL,
  `feed_name` varchar(16) NOT NULL,
  `feed_email` varchar(32) NOT NULL,
  `feed_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback_requests`
--

INSERT INTO `feedback_requests` (`feedback_id`, `feed_name`, `feed_email`, `feed_text`) VALUES
(1, 'John', 'johndoe@gmail.com', 'text'),
(2, 'John', 'gamshyk@outlook.com', 'TEXTTEXT'),
(3, 'Galymzhan', 'g.myrzagalyev@gmail.com', 'POIUYTRTYUI'),
(4, 'APPLE XS', 'akadka', 'FGHJL:\"'),
(5, 'Billi', 'billijin@gmail.com', 'Билли Джин, насрал в кувшин!');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribtion`
--

CREATE TABLE `subscribtion` (
  `subscription_id` int(11) NOT NULL,
  `subscription_type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `subscribtion`
--

INSERT INTO `subscribtion` (`subscription_id`, `subscription_type`) VALUES
(0, 'NONE'),
(1, 'BASIC'),
(2, 'PRO');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` varchar(16) NOT NULL DEFAULT 'user',
  `subscription_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `subscription_id`) VALUES
(6, 'covid19@gnail.com', 'covid19', 'Zawer021', 'user', 0),
(1, 'gamshyk@outlook.com', 'gamshyk', 'Zawer021', 'User', 2),
(5, 'myrzagalyev.galymzhan@gmail.com', 'galamshar', 'Zawer021', 'user', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback_requests`
--
ALTER TABLE `feedback_requests`
  ADD UNIQUE KEY `feedback_id` (`feedback_id`);

--
-- Индексы таблицы `subscribtion`
--
ALTER TABLE `subscribtion`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`,`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_SUBSCRIPTION` (`subscription_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback_requests`
--
ALTER TABLE `feedback_requests`
  MODIFY `feedback_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_SUBSCRIPTION` FOREIGN KEY (`subscription_id`) REFERENCES `subscribtion` (`subscription_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
