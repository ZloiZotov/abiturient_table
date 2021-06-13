-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 13 2021 г., 16:28
-- Версия сервера: 5.7.27-30
-- Версия PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u1091699_abiturient_table`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table_zaoch`
--

CREATE TABLE `table_zaoch` (
  `id` int(10) NOT NULL,
  `spec_kod` varchar(20) NOT NULL,
  `spec` text NOT NULL,
  `baza` varchar(20) NOT NULL,
  `srok_obuch` varchar(40) NOT NULL,
  `priem_b` int(11) DEFAULT NULL,
  `budget_orig` int(11) DEFAULT NULL,
  `budget_copy` int(11) DEFAULT NULL,
  `priem_c` int(11) DEFAULT NULL,
  `com_orig` int(11) DEFAULT NULL,
  `com_copy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_zaoch`
--

INSERT INTO `table_zaoch` (`id`, `spec_kod`, `spec`, `baza`, `srok_obuch`, `priem_b`, `budget_orig`, `budget_copy`, `priem_c`, `com_orig`, `com_copy`) VALUES
(1, '08.02.02', '«Строительство и эксплуатация инженерных сооружений»', '11 кл.', '3 г. 10 мес.', 15, 1, 0, 10, 0, 0),
(4, '08.02.01', '«Строительство и эксплуатация зданий и сооружений»', '11 кл.', '3 г. 10 мес.', 15, 3, 0, 10, 0, 0),
(5, '21.02.05', '«Земельно-имущественные отношения»', '11 кл.', '2 г. 10 мес.', 30, 0, 0, 20, 0, 0),
(6, '23.02.04', '«Техническая эксплуатация подъемно-транспортных, строительных, дорожных машин и оборудования»', '11 кл.', '3 г. 10 мес.', NULL, NULL, NULL, 15, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table_zaoch`
--
ALTER TABLE `table_zaoch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table_zaoch`
--
ALTER TABLE `table_zaoch`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
