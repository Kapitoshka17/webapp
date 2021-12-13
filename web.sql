-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2021 г., 12:34
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `goods_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `pic`, `price`, `goods_group`) VALUES
(1, 'Гроб №1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№1.png', 650, 'гробы'),
(2, 'Гроб №2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№2.png', 300, 'гробы'),
(3, 'Гроб №3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№3.png', 300, 'гробы'),
(4, 'Гроб №4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№4.png', 200, 'гробы'),
(5, 'Гроб №5', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№5.png', 200, 'гробы'),
(6, 'Гроб №6', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№6.png', 200, 'гробы'),
(7, 'Гроб №7', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№7.png', 46, 'гробы'),
(8, 'Гроб №8', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/гроб_№8.png', 46, 'гробы'),
(9, 'Крест №1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№1.png', 15, 'кресты'),
(10, 'Крест №2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№2.png', 12, 'кресты'),
(11, 'Крест №3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№3.png', 30, 'кресты'),
(12, 'Крест №4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№4.png', 15, 'кресты'),
(13, 'Крест №5', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№5.png', 30, 'кресты'),
(14, 'Крест №6', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№6.png', 30, 'кресты'),
(15, 'Крест №7', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№7.png', 30, 'кресты'),
(16, 'Крест №8', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur tempore atque voluptatum voluptatem iste perspiciatis officiis maiores soluta recusandae dolorum!', 'pic/крест_№8.png', 20, 'кресты');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `name`, `price`) VALUES
(1, 'Бюджетные похороны', 290),
(2, 'Стандартные похороны', 490),
(3, 'Кремация', 790),
(4, 'Премиум похороны', 820);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `url`) VALUES
(1, 'Организация похорон', 'pic/организация_похорон.jpg'),
(2, 'Кремирование', 'pic/кремирование.jpg'),
(3, 'Перевозка умерших', 'pic/перевозка_умерших.jpg'),
(4, 'Место захоронения', 'pic/место_захоронения.jpg'),
(5, 'Эксгумация', 'pic/эксгумация.jpg'),
(6, 'Копание могил', 'pic/копание_могил.jpg'),
(7, 'Бальзамирование', 'pic/бальзамирование.jpg'),
(8, 'Элитные похороны', 'pic/элитные_похороны.jpg'),
(9, 'Бюджетные похороны', 'pic/бюджетные_похороны.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `photo`, `password`) VALUES
(13, 'ipatiy.potey@mail.ru', 'pic/163925378116390338161635884173ZU6b_D73LSA.jpg', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
