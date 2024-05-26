-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2024 г., 07:43
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `id_status` int NOT NULL,
  `id_type` int NOT NULL,
  `id_user` int NOT NULL,
  `number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `id_status`, `id_type`, `id_user`, `number`) VALUES
(20, 1, 5, 4, 1111),
(21, 3, 2, 4, 8888),
(22, 1, 2, 4, 5656),
(23, 4, 4, 4, 5545);

-- --------------------------------------------------------

--
-- Структура таблицы `record_course`
--

CREATE TABLE `record_course` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_course` int NOT NULL,
  `id_status` int NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `record_course`
--

INSERT INTO `record_course` (`id`, `id_user`, `id_course`, `id_status`, `date`, `time`) VALUES
(7, 3, 4, 2, '2024-05-23', '00:20:00'),
(10, 6, 3, 2, NULL, NULL),
(11, 6, 1, 2, NULL, NULL),
(13, 6, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `record_mc`
--

CREATE TABLE `record_mc` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_mc` int NOT NULL,
  `id_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `record_mc`
--

INSERT INTO `record_mc` (`id`, `id_user`, `id_mc`, `id_status`) VALUES
(6, 3, 12, 2),
(7, 6, 18, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `status`) VALUES
(1, 'Подтверждено'),
(2, 'Не подтверждено');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses_product`
--

CREATE TABLE `statuses_product` (
  `id` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses_product`
--

INSERT INTO `statuses_product` (`id`, `status`) VALUES
(1, 'На просушке'),
(2, 'Проходит обжиг'),
(3, 'Готово'),
(4, 'Выдано');

-- --------------------------------------------------------

--
-- Структура таблицы `time_mc`
--

CREATE TABLE `time_mc` (
  `id` int NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `time_mc`
--

INSERT INTO `time_mc` (`id`, `time`) VALUES
(1, '14:00'),
(2, '14:30'),
(3, '15:00'),
(4, '15:30'),
(5, '16:00'),
(6, '16:30'),
(7, '17:00'),
(8, '17:30'),
(9, '18:00'),
(10, '18:30'),
(11, '19:00'),
(12, '19:30');

-- --------------------------------------------------------

--
-- Структура таблицы `title_course`
--

CREATE TABLE `title_course` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `title_course`
--

INSERT INTO `title_course` (`id`, `title`) VALUES
(1, 'ИЗО для детей'),
(2, 'Масло для детей 9+'),
(3, 'Скетчинг'),
(4, 'ИЗО - интенсив'),
(5, 'Обучение гончарному мастерству'),
(6, 'Обучение ручной лепке');

-- --------------------------------------------------------

--
-- Структура таблицы `title_mc`
--

CREATE TABLE `title_mc` (
  `id` int NOT NULL,
  `lesson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `title_mc`
--

INSERT INTO `title_mc` (`id`, `lesson`, `title`, `age`, `price`, `img`, `date`, `id_time`) VALUES
(9, 'Живопись маслом', 'Яблоневый цвет', '16', '2500', '66401d0d5778d.png', '2024-05-03', 10),
(10, 'Живопись маслом', 'Море зовёт', '16', '2500', '66401d39e4cf3.png', '2024-05-10', 10),
(11, 'Керамика', 'Конфетница \"Лягушечка\"', '8', '1750', '66401d60f34e8.png', '2024-05-07', 10),
(12, 'Керамика', 'Любитель конфет', '9', '1750', '66477ef2e1b94.png', '2024-05-11', 5),
(18, 'Акварельный скетчинг', 'Милая панда', '8', '990', '66478bbfed286.png', '2024-05-11', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `title_up_events`
--

CREATE TABLE `title_up_events` (
  `id` int NOT NULL,
  `visible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_time` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `title_up_events`
--

INSERT INTO `title_up_events` (`id`, `visible`, `price`, `date`, `id_time`, `img`) VALUES
(2, 'Представляем наш новый проект \"Выставка флагов несуществующих стран и сообществ\"!', '2000', '2024-06-01', 7, '6647b4eb3e15c.jpeg'),
(4, 'Друзья! Мы спешим вам сообщить о начале подготовки к ежегодной детской выставке. Приглашаем к участию всех учеников детского отделения Арт - академии \"Квадрат\"!', '1200', '2024-05-15', 11, '6647ba6c73c46.jpeg'),
(5, 'Впервые в нашей истории!\r\nМы решили поучаствовать в таком значительном мероприятии, как ночь музеев! И с радостью приглашаем всех омичей и гостей города посетить наше творческое пространство!', '2000', '2024-05-18', 11, '6647bab86078a.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `type_activity`
--

CREATE TABLE `type_activity` (
  `id` int NOT NULL,
  `title_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_activity`
--

INSERT INTO `type_activity` (`id`, `title_type`) VALUES
(1, 'Лепка'),
(2, 'Гончарное мастерство'),
(3, 'Скетчинг'),
(4, 'Масло для детей'),
(5, 'Изо-интенсив'),
(6, 'ИЗО для детей');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `isAdmin` int NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronimyc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `surname`, `name`, `patronimyc`, `tel`, `email`, `password`) VALUES
(3, 1, 'авп', 'апв', 'вап', '+7 (777) 777-77-77', 'yae.lebedeva@gmail.com', '93279e3308bdbbeed946fc965017f67a'),
(4, 0, 'Лебедева', 'Яна', 'Евгеньевна', '+7 (913) 640-03-40', 'l13yana@yandex.ru', '93279e3308bdbbeed946fc965017f67a'),
(5, 0, 'ЫВА', 'ЫВА', 'ЫВА', '+7 (888) 888-88-88', '2@mail.cpm', '93279e3308bdbbeed946fc965017f67a'),
(6, 0, 'о', 'н', 'а', '+7 (888) 888-88-88', 'n.a.ona@ya.ru', '21218cca77804d2ba1922c33e0151105');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_product_ibfk_1` (`id_status`),
  ADD KEY `user_product_ibfk_2` (`id_user`),
  ADD KEY `type_ibfk_3` (`id_type`);

--
-- Индексы таблицы `record_course`
--
ALTER TABLE `record_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`id_user`),
  ADD KEY `status_ibfk_2` (`id_status`),
  ADD KEY `title_ibfk_3` (`id_course`);

--
-- Индексы таблицы `record_mc`
--
ALTER TABLE `record_mc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mc_user_ibfk_1` (`id_user`),
  ADD KEY `mc_mc_ibfk_2` (`id_mc`),
  ADD KEY `ms_status_ibfk_3` (`id_status`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statuses_product`
--
ALTER TABLE `statuses_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `time_mc`
--
ALTER TABLE `time_mc`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `title_course`
--
ALTER TABLE `title_course`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `title_mc`
--
ALTER TABLE `title_mc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_mc_ibfk_1` (`id_time`);

--
-- Индексы таблицы `title_up_events`
--
ALTER TABLE `title_up_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_up_e_ibfk_1` (`id_time`);

--
-- Индексы таблицы `type_activity`
--
ALTER TABLE `type_activity`
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
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `record_course`
--
ALTER TABLE `record_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `record_mc`
--
ALTER TABLE `record_mc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `statuses_product`
--
ALTER TABLE `statuses_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `time_mc`
--
ALTER TABLE `time_mc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `title_course`
--
ALTER TABLE `title_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `title_mc`
--
ALTER TABLE `title_mc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `title_up_events`
--
ALTER TABLE `title_up_events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `type_activity`
--
ALTER TABLE `type_activity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `status_product_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `statuses_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `type_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type_activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_product_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `record_course`
--
ALTER TABLE `record_course`
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `title_ibfk_3` FOREIGN KEY (`id_course`) REFERENCES `title_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `record_mc`
--
ALTER TABLE `record_mc`
  ADD CONSTRAINT `mc_mc_ibfk_2` FOREIGN KEY (`id_mc`) REFERENCES `title_mc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mc_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_status_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `title_mc`
--
ALTER TABLE `title_mc`
  ADD CONSTRAINT `time_mc_ibfk_1` FOREIGN KEY (`id_time`) REFERENCES `time_mc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `title_up_events`
--
ALTER TABLE `title_up_events`
  ADD CONSTRAINT `time_up_e_ibfk_1` FOREIGN KEY (`id_time`) REFERENCES `time_mc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
