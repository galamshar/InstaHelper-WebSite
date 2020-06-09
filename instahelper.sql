-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 09 2020 г., 13:20
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `instahelper`
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
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(64) DEFAULT NULL,
  `product_description` text NOT NULL,
  `product_price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'gamshyk@outlook.com', 'gamshyk', 'Zawer021', 'User', 2),
(5, 'myrzagalyev.galymzhan@gmail.com', 'galamshar', 'Zawer021', 'user', 0),
(6, 'covid19@gnail.com', 'covid19', 'Zawer021', 'user', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback_requests`
--
ALTER TABLE `feedback_requests`
  ADD UNIQUE KEY `feedback_id` (`feedback_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `FK_USERID` (`user_id`),
  ADD KEY `FK_PRODUCTID` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Индексы таблицы `subscribtion`
--
ALTER TABLE `subscribtion`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `unique` (`email`,`username`),
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
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_PRODUCTID` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `FK_USERID` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_SUBSCRIPTION` FOREIGN KEY (`subscription_id`) REFERENCES `subscribtion` (`subscription_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
