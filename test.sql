-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 23 2017 г., 12:06
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statistic`
--

CREATE TABLE IF NOT EXISTS `statistic` (
  `id` int(11) NOT NULL,
  `url` varchar(250) NOT NULL,
  `title` text NOT NULL,
  `code` int(11) NOT NULL,
  `query_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statistic`
--

INSERT INTO `statistic` (`id`, `url`, `title`, `code`, `query_date`) VALUES
(16, 'https://www.highcharts.com/download', 'Download | Highcharts', 200, '2017-03-22'),
(17, 'http://gameshop.kl.com.ua/', 'Game Shop - магазин компьютерных игр', 200, '2017-03-22'),
(18, 'https://www.highcharts.com/download', 'Download | Highcharts', 200, '2017-03-22'),
(19, 'http://gameshop.kl.com.ua/', 'Game Shop - магазин компьютерных игр', 200, '2017-03-22'),
(20, 'https://www.highcharts.com/download', 'Download | Highcharts', 404, '2017-03-22'),
(21, 'https://www.highcharts.com/download', 'Download | Highcharts', 404, '2017-03-23'),
(23, 'https://www.highcharts.com/download', 'Download | Highcharts', 200, '2017-03-23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
