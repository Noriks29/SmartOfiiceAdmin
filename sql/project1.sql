-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 15 2023 г., 02:08
-- Версия сервера: 8.0.26
-- Версия PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `individ_list`
--

CREATE TABLE `individ_list` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) DEFAULT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `individ_list`
--

INSERT INTO `individ_list` (`id`, `name`, `surname`, `patronymic`, `tel`) VALUES
(1, 'admin', 'admin', NULL, '89115791549'),
(2, 'Ильяс', 'Харисов', NULL, '89553355535');

-- --------------------------------------------------------

--
-- Структура таблицы `workspace_class`
--

CREATE TABLE `workspace_class` (
  `id_class` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `workspace_class`
--

INSERT INTO `workspace_class` (`id_class`, `name`, `text`) VALUES
(1, 'Стол', NULL),
(2, 'Zoom - комната', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `workspace_ind`
--

CREATE TABLE `workspace_ind` (
  `id` int NOT NULL,
  `id_workspace` int NOT NULL,
  `id_individ` int NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `workspace_ind`
--

INSERT INTO `workspace_ind` (`id`, `id_workspace`, `id_individ`, `date_start`, `date_end`, `status`) VALUES
(1, 45, 1, '2023-10-14 21:47:42', '2023-10-16 00:47:42', 1),
(2, 47, 2, '2023-10-13 00:47:42', '2023-10-19 00:47:42', 2),
(3, 66, 1, '2023-10-14 23:27:52', '2023-10-14 23:27:52', 1),
(4, 92, 2, '2023-10-14 23:27:53', '2023-10-14 23:27:53', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `workspace_list`
--

CREATE TABLE `workspace_list` (
  `id_workspace` int NOT NULL,
  `workspace_class` int NOT NULL,
  `locathion_num` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `workspace_list`
--

INSERT INTO `workspace_list` (`id_workspace`, `workspace_class`, `locathion_num`) VALUES
(40, 2, 40),
(43, 1, 43),
(44, 1, 44),
(45, 1, 0),
(46, 1, 0),
(47, 1, 0),
(48, 1, 48),
(66, 2, 66),
(69, 1, 69),
(70, 1, 70),
(71, 1, 71),
(72, 1, 72),
(73, 1, 73),
(92, 2, 92),
(118, 2, 118);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `individ_list`
--
ALTER TABLE `individ_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workspace_class`
--
ALTER TABLE `workspace_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Индексы таблицы `workspace_ind`
--
ALTER TABLE `workspace_ind`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workspace_list`
--
ALTER TABLE `workspace_list`
  ADD PRIMARY KEY (`id_workspace`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
