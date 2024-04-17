-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 17 2024 г., 15:41
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wedding_org`
--

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `phone` text NOT NULL,
  `makeup_artist` int(11) NOT NULL,
  `type_makeup` varchar(100) NOT NULL,
  `type_hairstyle` varchar(100) NOT NULL,
  `female_clothe` text NOT NULL,
  `male_clothe` text NOT NULL,
  `tamada` int(11) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `guests` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `id_client`, `phone`, `makeup_artist`, `type_makeup`, `type_hairstyle`, `female_clothe`, `male_clothe`, `tamada`, `place`, `date`, `guests`) VALUES
(1, 2, '11111111111', 2, 'дневной', 'боб', 'Размер 0', 'Размер 44', 1, 'Место 1', '2024-04-17 16:19:00', 100),
(2, 3, '22222222222', 2, 'водостойкий', 'без_волос', 'Размер 4', 'Размер 46', 1, 'Место 3', '2024-04-27 19:39:00', 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`id`, `role`, `fullname`) VALUES
(1, 2, 'Александр Владимирович Ревва'),
(2, 1, 'Павел Алексеевич Воля');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `fullname` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role`, `login`, `email`, `fullname`, `password`) VALUES
(1, 1, 'asd', 'asd@asd', 'Иванов Иван Иванович', '$2y$10$lQxcObMO4z4rElVc2SV7huSk0mUaskxNoNzTNjor0K1O.h0EUMJvu'),
(2, 2, 'zxc', 'zxc@zxc.ru', 'Артемов Артем Артемович', '$2y$10$Ewt5/84OF37UBcFAnegKmOZjnmo9NdhKvEofztd7vaBKPCOJlSLFa'),
(3, 2, 'qwerty', 'qwerty@qwerty', 'Васильев Василий Васильевич', '$2y$10$kGOAnDZqOAaQdl.w8MRjAuJ9GXoomq9yYcR5Ys5hYTJidkJU/WkHS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
