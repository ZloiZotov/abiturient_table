-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 13 2021 г., 16:27
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
-- Структура таблицы `table_och`
--

CREATE TABLE `table_och` (
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
-- Дамп данных таблицы `table_och`
--

INSERT INTO `table_och` (`id`, `spec_kod`, `spec`, `baza`, `srok_obuch`, `priem_b`, `budget_orig`, `budget_copy`, `priem_c`, `com_orig`, `com_copy`) VALUES
(1, '08.02.01', '«Строительство и эксплуатация зданий и сооружений» (базовая подготовка)', '9 кл.', '3 г. 10 мес.', 25, 0, 0, 25, 0, 0),
(2, '08.02.01', '«Строительство и эксплуатация зданий и сооружений» (углубленная подготовка)', '9 кл.', '4 г. 10 мес.', 25, 0, 0, NULL, NULL, NULL),
(3, '08.02.01', '«Строительство и эксплуатация зданий и сооружений» (базовая подготовка)', '11 кл.', '2 г. 10 мес.', NULL, NULL, NULL, 25, 0, 0),
(4, '08.02.02', '«Строительство и эксплуатация инженерных сооружений»', '9 кл.', '3 г. 10 мес.', 75, 0, 0, NULL, NULL, NULL),
(5, '21.02.05', '«Земельно-имущественные отношения»', '9 кл.', '3 г. 10 мес.', 50, 2, 0, 25, 1, 0),
(6, '23.02.04', '«Техническая эксплуатация подъемно-транспортных, строительных, дорожных машин и оборудования»', '9 кл.', '3 г. 10 мес.', 25, 0, 0, NULL, NULL, NULL),
(7, '35.02.12', '«Садово-парковое и ландшафтное строительство»', '9 кл.', '3 г. 10 мес.', 25, 1, 0, NULL, NULL, NULL),
(8, '38.02.01', '«Экономика и бухгалтерский учет»', '9 кл.', '3 г. 10 мес.', 25, 1, 0, 25, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table_och`
--
ALTER TABLE `table_och`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table_och`
--
ALTER TABLE `table_och`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
