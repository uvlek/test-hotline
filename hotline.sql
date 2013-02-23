-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 23 2013 г., 21:58
-- Версия сервера: 5.1.63-community-log
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `hotline`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(201) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `tags` varchar(250) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `image`, `tags`, `date`) VALUES
(46, 'Какой то заголовок козырный', 'Контент супер контент', 'upload/20130223162651427.jpg', 'тег, тег, тег', '2013-02-06 03:26:27'),
(60, 'Magento', '<p>The Magento SOAP v1 API provides you with the ability to manage your eCommerce stores by providing calls for working with resources such as customers, categories, products, and sales orders. It also allows you to manage shopping carts and inventory.</p><br />\r\n<p><br />\r\nA SOAP v2 API version has been available since Magento 1.3, and a WS-I compliant version has been available since Magento 1.6.</p>', 'upload/20130223200007629.jpg', 'magento, php', '2013-02-23 06:59:38'),
(61, 'Polaroid', '<b>Polaroid</b><br>', '', 'polaroid, очки', '2013-02-06 12:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
