-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Хост: 172.16.103.14
-- Время создания: Ноя 10 2014 г., 20:59
-- Версия сервера: 5.5.34-32.0
-- Версия PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `b130659_aryon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_type_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `article_type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1378801329, NULL),
(2, 3, 1378801329, NULL),
(3, 4, 1378801329, NULL),
(4, 2, 1395498239, NULL),
(5, 2, 1406242866, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_i18n`
--

DROP TABLE IF EXISTS `articles_i18n`;
CREATE TABLE IF NOT EXISTS `articles_i18n` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `full_text` text NOT NULL,
  `language_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `articles_i18n`
--

INSERT INTO `articles_i18n` (`id`, `article_id`, `title`, `description`, `keywords`, `full_text`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Добро пожаловать на сайт компании Aryon, г. Владикавказ! ', '', '', '<p>Aryon - известная компания, занимающаяся созданием уникальных изделий из различных металлов. На нашем сайте вы можете приобрести украшения, оружие, статуэтки и другие изделия ручной работы. Каждое из них является настоящим произведением искусства.</p>\r\n<p>Кроме продукции фирмы Aryon на сайте представлены уникальные товары других мастеров РСО-Алания. Здесь вы можете приобрести что-то особенное, пополнить свою коллекцию произведений искусства.&nbsp;</p>', 1, 1378801331, 1389999813),
(2, 1, 'Welcome to our site!', '', '', '<p>Welcome to the website of Aryon company. Our company creates unique products. We specialize on weapon and gifts crafted in traditional Ossetian manner.&nbsp;</p>\r\n<p>Moreover the website features hand made products made by other artists of Ossetia. Here you can buy any item via our online store. Welcome!</p>', 2, 1378801331, 1389999908),
(3, 1, 'Табуафси, хонам уае на интернеты тыгъдадмае Aryon ', '', '', '<p>Aryon у зындгонд компани, каецы архайы згъаераей алыхуызон дзаумаеттае аразыныл. Нае сайты уае бон у ссарын раесугъдгаенаентае, хаецаенгаерзтае, раеттае, цирхъхъыта аемае аендаер къухайконд дзаумаеттае. Алкаецы даер цае у ацаег аивадон сфаелдыстад.</p>\r\n<p>Нае интернеты тыгъдады Aryon продукцийы аеддейае ма ссараен ис республикае Аланийы къухаей даесны чи у, уыдоны продукци даер.&nbsp;</p>', 3, 1378801331, 1390908288),
(4, 2, 'О компании', '', '', '<p>Компания Aryon расположена в городе Владикавказ. Мы производим настоящие произведения искусства - мечи, кинжалы, ремни, украшения. Вся наша продукция - штучная и ручная работа. Мы готовы выполнить любой заказ по пожеланию наших клиентов. Поэтому наш ассортимент не ограничивается лишь теми предметами, которые представлены на сайте.&nbsp;<br />Надеемся, что вы сможете найти здесь именно то, что уже искали очень давно. Обращайтесь, мы уверены, что сотрудничество будет плодотворным.&nbsp;&nbsp;</p>\r\n<p><strong>Директор - Алборов Аслан Владимирович</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><a href="http://aryon.ru/assets/img/uploads/Arion%20buklet 003.pdf" target="_blank"><strong>Буклет с продукцией компании Aryon</strong></a></p>', 1, 1378801331, 1390156967),
(5, 2, 'About company', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1378801331, NULL),
(6, 2, 'About company', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1378801331, NULL),
(7, 3, 'Обратная связь', '', '', '<p>Мы находимся в РСО-Алания, г. Владикавказ</p>\r\n<p><strong>Наши телефоны:</strong></p>\r\n<p><strong>Директор - Алборов Аслан Владимирович:</strong></p>\r\n<p>8-918-825-33-70</p>\r\n<p>8-918-828-63-26</p>\r\n<p><strong>Техническая поддержка:</strong></p>\r\n<p>8-960-402-47-62</p>\r\n<p><strong>По всем вопросам обращайтесь по электронной почте:</strong></p>\r\n<p><a href="mailto:%20info@aryon.ru" target="_blank">info@aryon.ru</a></p>', 1, 1378801331, 1390001067),
(8, 3, 'Contacts', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1378801331, NULL),
(9, 3, 'Contacts', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1378801331, NULL),
(10, 4, 'Сайт находится в стадии добавления товаров', '', '', '<p>Уважаемые посетители нашего сайта, сейчас мы активно добавляем новые товары. Наполнение сайта товарами будет закончено примерно к началу апреля. Тогда же будут установлены актуальные цены. Как вы могли заметить, некоторые товары пока "стоят" 1 рубль. Естественно, что это лишь на время добавления товаров и данная цена не соответствует действительности.&nbsp;</p>\r\n<p>Спасибо за терпение</p>', 1, 1395498239, NULL),
(11, 4, '', '', '', '', 2, 1395498239, NULL),
(12, 4, '', '', '', '', 3, 1395498239, NULL),
(13, 5, 'Реализация механизма оплаты', '', '', '<p>Мы уже наполнили наш сайт товарами, которые вы можете приобрести в любое время. Теперь мы реализуем схему проведения онлайн-платежей. Предполагается, что этот процесс займёт около недели. В то же время вы уже сейчас можете заказывать любые товары, представленные на нашем сайте. Пока покупки осуществляются в "ручном" режиме. Пишите нам на электронную почту - <a href="mailto:info@aryon.ru,">info@aryon.ru,</a> &nbsp;или воспользуйтесь опцией "перезвонить". Мы свяжемся с вами и обсудим поставку понравившегося товара.&nbsp;</p>', 1, 1406242866, NULL),
(14, 5, '', '', '', '', 2, 1406242866, NULL),
(15, 5, '', '', '', '', 3, 1406242866, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_languages`
--

DROP TABLE IF EXISTS `articles_languages`;
CREATE TABLE IF NOT EXISTS `articles_languages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `articles_languages`
--

INSERT INTO `articles_languages` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'ru', 1378801040, NULL),
(2, 'en', 1378801040, NULL),
(3, 'os', 1378801040, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_types`
--

DROP TABLE IF EXISTS `articles_types`;
CREATE TABLE IF NOT EXISTS `articles_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `articles_types`
--

INSERT INTO `articles_types` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Главная страница', 1378801130, NULL),
(2, 'Новости', 1378801130, NULL),
(3, 'О компании', 1378801130, NULL),
(4, 'Обратная связь', 1378801130, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `callmes`
--

DROP TABLE IF EXISTS `callmes`;
CREATE TABLE IF NOT EXISTS `callmes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `callmes`
--

INSERT INTO `callmes` (`id`, `username`, `telephone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Юрист', '8 (495) 2560244', 'Интересуют часы ручной работы', 0, 1410423313, 1410423313),
(2, 'Санашвили Давид', '+79003061472', 'По шахматам', 0, 1415272518, 1415272518);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `photo_name` varchar(255) DEFAULT NULL,
  `is_promotion` tinyint(1) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `category_id`, `price`, `photo_name`, `is_promotion`, `discount`, `visible`, `created_at`, `updated_at`) VALUES
(1, 5, 2600, '9d457970ebf889727a3b2445d90b9bf0.JPG', 0, 5, 1, 1384186928, 1389960061),
(2, 4, 21000, 'af7ddc0521dea9485c74787815634919.JPG', 0, 10, 1, 1384190571, 1389960056),
(3, 4, 31000, 'c36ab2cf6e5944ae96fc1e5a8ae13e13.JPG', 0, 4, 1, 1384199103, 1389960040),
(4, 5, 600, '442cc851eeed6fb775ef5e7f63a72399.JPG', 0, 0, 1, 1384199289, 1384199428),
(5, 4, 1000, 'dfa4db3c32038fd54d0a2e10c0afeaa9.JPG', 0, 0, 1, 1384199508, 1384199558),
(6, 4, 10000, '8978abd1034c58d852cdeb64e3511f74.JPG', 0, 5, 1, 1384199620, 1389960080),
(7, 4, 15000, 'bee8e17045bed41af67b93047cd88100.JPG', 0, 0, 1, 1384199766, 1384199786),
(8, 5, 10000, 'f42af784dd12568973e9c816de93b394.JPG', 0, 7, 1, 1384200139, 1389960089),
(12, 6, 110000, 'f1a6689c8ab6393e7138cd2f3d8341c9.jpg', 0, 0, 1, 1389865028, 1389866923),
(13, 6, 220000, '3ef9b4b5457dc4d0ec0b7e7d41bac353.jpg', 0, 0, 1, 1389867431, 1389867550),
(14, 6, 220000, '401ab7f46a86ee8c3d346fc6eac56ce6.JPG', 1, 3, 1, 1389867903, 1389960254),
(15, 7, 8250, 'a98eecfdcb020b56ac49ba3784e6f838.JPG', 0, 0, 1, 1389868836, 1389868916),
(16, 7, 10450, 'a81f8f602dac60a9b6e637fb18e0240d.JPG', 0, 0, 1, 1389869036, 1389869117),
(17, 7, 8250, '656fe94182216d7388e1b065b325e346.JPG', 0, 0, 1, 1389869537, 1389869559),
(18, 7, 8250, '96a797ddfee9c94cb5e601db6c2684d6.JPG', 0, 0, 1, 1389869826, 1389869853),
(19, 8, 47850, '8a622bf74704d8be0853644b767ade2f.JPG', 1, 5, 1, 1389870231, 1389960246),
(20, 7, 7700, '5e4cd199d2349ea0328d0da2bbeac434.jpg', 1, 5, 1, 1389870473, 1389960243),
(21, 7, 5500, '75a5c9d83154c06db8809fad81beeb41.jpg', 0, 0, 1, 1389870573, 1389870606),
(22, 8, 4400, 'afde9421fdb3d25ac7e6a43ccf6a5f07.JPG', 0, 0, 1, 1389870805, 1389870843),
(23, 9, 2200, 'c421f9526548ef7e534f77d6e1f5c938.JPG', 0, 0, 1, 1389870995, 1389871011),
(24, 9, 1650, '1000bc75e6d5f63acb7903582032f728.JPG', 0, 0, 1, 1389871106, 1389871122),
(25, 9, 2420, '8ec76937d2599acafd3ded48803f7ce8.jpg', 0, 0, 1, 1389871370, 1389871393),
(26, 9, 2420, 'ae7d70c3e621c67e88bd02504adf20d5.jpg', 1, 10, 1, 1389871469, 1389960271),
(27, 9, 2420, '024800ec9f217baaa3c900675281329b.jpg', 0, 0, 1, 1389871728, 1389871746),
(28, 9, 1650, '08009c90d396830d0842340b242ee4dd.jpg', 0, 0, 1, 1389871794, 1389871823),
(29, 5, 30250, '82453b40844169e651a183e1659bb73e.JPG', 0, 0, 1, 1389876960, 1389877029),
(30, 8, 26400, 'c159e5059d7bee9f4f258f701d2b363c.JPG', 0, 0, 1, 1389877267, 1389877299),
(31, 5, 78100, '9b642098741ac05961697677cb092270.JPG', 0, 0, 1, 1389877692, 1389877749),
(32, 9, 1100, '8de1da74623dbf604716e80239198b47.JPG', 0, 0, 1, 1389878037, 1389878056),
(33, 10, 6160, '4090ff69fdc8c5512e9d60b3b5893546.JPG', 0, 0, 1, 1389958457, 1389958527),
(34, 8, 4400, 'efceb68284626cb847b29e72fb135f16.jpg', 0, 0, 1, 1389959044, 1389959084),
(35, 8, 4400, '82b4280fcb748fc284354ac97f24046d.jpg', 0, 0, 1, 1389959122, 1389959162),
(36, 8, 9350, 'f058e864d9e011b48b2e0b8f2604008b.JPG', 0, 0, 1, 1389959492, 1389959536),
(37, 9, 1870, '736aedf69edb0f75e792e245683f5664.jpg', 1, 5, 1, 1389959946, 1389959979),
(38, 9, 1430, 'dc6a722ccc10a94dd6d939f2c2793903.jpg', 0, 0, 1, 1389960369, 1389960405),
(39, 9, 2420, '1c81e24c7402c1ba3581b665a5e5c6bc.jpg', 0, 0, 1, 1389960814, 1389960854),
(41, 5, 110000, 'a427cb7076f40f98a80b4343d06d5989.JPG', 0, 0, 1, 1390157789, 1396129021),
(42, 5, 110000, '0781658fe4deb502406239edae232731.JPG', 0, 0, 1, 1390157876, 1396128982),
(43, 5, 33000, '6c9c713f28701cc269cc3f5ac614f643.JPG', 0, 0, 1, 1390157960, 1396128954),
(45, 5, 220000, '033d9ac5f2518e8dc70d88b1c5029689.jpg', 0, 0, 1, 1390158164, 1396128895),
(46, 5, 350000, 'defba9bd3727b6f477b5666b20362d7f.JPG', 0, 0, 1, 1390158321, 1406180742),
(47, 5, 38500, 'b5fbbff3e62a19eb63a56d9043cef650.JPG', 0, 0, 1, 1390158415, 1396128781),
(48, 5, 38500, '5cca465c5b0643ffd24a347a1f52bedc.JPG', 0, 0, 1, 1390158492, 1396128744),
(49, 5, 55000, '550207a3f2b192566bd39053e900525f.JPG', 0, 0, 1, 1390158564, 1396128683),
(50, 5, 38500, '230398f58e6fc862624d11d0630b5cb3.JPG', 0, 0, 1, 1390158655, 1396128597),
(51, 5, 110000, '33748007b923074df66cc7555a44f4bb.JPG', 0, 0, 1, 1390158712, 1396128547),
(52, 5, 350000, '1d7c3d69b35cd5e1274c79d2588cc98d.JPG', 0, 0, 1, 1395498410, 1395498490),
(53, 5, 16500, '0fdcf18d6225c0194454a1c83ef086e5.jpg', 0, 0, 1, 1395498604, 1396128502),
(56, 5, 55000, 'eb168d31d1b96957c8148cc441aa2029.JPG', 0, 0, 1, 1395597857, 1396128358),
(57, 4, 16500, '776e324f84ef3bba28402f549f4f0711.JPG', 0, 0, 1, 1395597965, 1396128396),
(58, 5, 66000, '515d2e7a758fa854ec4babdbec496d03.JPG', 0, 0, 1, 1395598059, 1396128321),
(59, 5, 16500, '48ae13e06b6d04f2f650cc14848089d2.JPG', 0, 0, 1, 1395598157, 1396128269),
(60, 5, 110000, '4544c31b2f94d18b1042e3c2ffdf9475.JPG', 0, 0, 1, 1395598247, 1396128243),
(61, 5, 110000, 'a93e42e7ef58d201b6b4990036f5290d.JPG', 0, 0, 1, 1395598352, 1396128201),
(63, 5, 350000, 'e63be380f1e1c9e2a83f85388302c9db.JPG', 0, 0, 1, 1395598672, 1406180710),
(64, 5, 55000, 'c2a252c105314224cb5ac7d3121fee47.JPG', 0, 0, 1, 1395598802, 1396128135),
(65, 5, 66000, '0de1b7c83ca275d4dc162a669745620d.JPG', 0, 0, 1, 1395598962, 1396128119),
(66, 4, 16500, 'aa2810379b498958a7871c11f270ca2c.JPG', 0, 0, 1, 1395599022, 1396127868),
(67, 5, 66000, '820e97f6fd24c39f88fca1534db2913a.JPG', 0, 0, 1, 1395599155, 1396128059),
(68, 5, 132000, 'ffa40022a943ed29829a130694af8893.jpg', 0, 0, 1, 1395599249, 1396127745),
(69, 5, 350000, 'b0e0c05662df67cd339f9bf3677286af.jpg', 0, 0, 1, 1395599398, 1406180640),
(70, 11, 77000, '8699c5fe0fe0a21d5ef70ed281708376.jpg', 0, 0, 1, 1395599524, 1396127673);

-- --------------------------------------------------------

--
-- Структура таблицы `items_categories`
--

DROP TABLE IF EXISTS `items_categories`;
CREATE TABLE IF NOT EXISTS `items_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_os` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `items_categories`
--

INSERT INTO `items_categories` (`id`, `title_ru`, `title_en`, `title_os`, `created_at`, `updated_at`) VALUES
(4, 'Украшения', 'Category 1', 'Category 1', 1382973306, 1385023875),
(5, 'Оружие', 'Category 2', 'Category 2', 1382973313, 1385023885),
(6, 'Шахматы', 'Chess', 'Шахмæттæ', 1389864944, 1389864944),
(7, 'Куклы и игрушки', 'Dolls and Toys', 'Чындз, хъазæн ', 1389868749, 1389868749),
(8, 'Сувениры', 'Souvenirs', 'Сувениры', 1389870159, 1389870159),
(9, 'Посуда', 'Dishes', 'Мигæнæнтæ', 1389870925, 1389870925),
(10, 'Национальная одежда', 'National Clothes', 'Национальная одежда', 1389958452, 1389958452),
(11, 'Разное', 'Different', 'Разное', 1395599491, 1395599491);

-- --------------------------------------------------------

--
-- Структура таблицы `items_i18n`
--

DROP TABLE IF EXISTS `items_i18n`;
CREATE TABLE IF NOT EXISTS `items_i18n` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `language_id` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `keywords` text,
  `search_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=205 ;

--
-- Дамп данных таблицы `items_i18n`
--

INSERT INTO `items_i18n` (`id`, `item_id`, `title`, `description`, `language_id`, `created_at`, `updated_at`, `keywords`, `search_description`) VALUES
(1, 1, 'Товар 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384186928, 1384199210, '', ''),
(2, 1, 'Item 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384186928, 1384199231, '', ''),
(3, 1, 'Item 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384186928, 1384199240, '', ''),
(4, 2, 'Товар 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384190571, 1384198833, '', ''),
(5, 2, 'Item 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384190571, 1384198844, '', ''),
(6, 2, 'Item 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384190571, 1384198854, '', ''),
(7, 3, 'Товар 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384199103, 1384199103, '', ''),
(8, 3, 'Item 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384199104, 1384199152, '', ''),
(9, 3, 'Item 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384199104, 1384199162, '', ''),
(10, 4, 'Товар 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384199290, 1384199290, '', ''),
(11, 4, 'Item 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384199290, 1384199336, '', ''),
(12, 4, 'Item 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384199290, 1384199347, '', ''),
(13, 5, 'Товар 5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384199508, 1384199508, '', ''),
(14, 5, 'Item 5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384199508, 1384199578, '', ''),
(15, 5, 'Item 5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384199508, 1384199589, '', ''),
(16, 6, 'Акчнак', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384199621, 1384199621, '', ''),
(17, 6, 'Akchnak', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384199621, 1384199666, '', ''),
(18, 6, 'Akchnak', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384199621, 1384199677, '', ''),
(19, 7, 'Алания', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384199766, 1384199766, '', ''),
(20, 7, 'Alania', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384199766, 1384199799, '', ''),
(21, 7, 'Alania', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384199766, 1384199807, '', ''),
(22, 8, 'Барс', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 1384200140, 1384808965, '', ''),
(23, 8, 'Bars', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2, 1384200140, 1384808973, '', ''),
(24, 8, 'Bars', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3, 1384200140, 1384200185, '', ''),
(25, 11, '123', '<p>123</p>', 1, 1389864759, 1389864759, '', ''),
(26, 11, NULL, NULL, 2, 1389864759, 1389864759, NULL, NULL),
(27, 11, NULL, NULL, 3, 1389864759, 1389864759, NULL, NULL),
(28, 12, 'Шахматы осетинские', '<p>Великолепные шахматы ручной работы, выполненные дерева клёна. Фигурки выполнены в традиционном осетинском стиле. В комплекте идёт разборный столик.</p>', 1, 1389865029, 1389865029, 'шахматы, Осетия, клён, дерево', 'Шахматы ручной работы, национальные осетинские. В комплекте столик, материал - клён.'),
(29, 12, NULL, NULL, 2, 1389865029, 1389865029, NULL, NULL),
(30, 12, NULL, NULL, 3, 1389865029, 1389865029, NULL, NULL),
(31, 13, 'Шахматы викинги', '<p>Шахматы ручной работы из ореха, клёна и самшита. Фигурки - воины-викинги.&nbsp;</p>', 1, 1389867431, 1389867431, 'шахматы, викинги, ручная работа', 'Шахматы ручной работы из ореха, клёна и самшита. Фигурки - воины-викинги. '),
(32, 13, NULL, NULL, 2, 1389867431, 1389867431, NULL, NULL),
(33, 13, NULL, NULL, 3, 1389867432, 1389867432, NULL, NULL),
(34, 14, 'Шахматы римские', '<p>Шахматы ручной работы. Фигуры - римские воины и правители. Материал - орех, клён, самшит</p>', 1, 1389867903, 1389867903, 'Шахматы, римляне, ручная работа', 'Шахматы ручной работы. Фигуры - римские воины и правители. Материал - орех, клён, самшит'),
(35, 14, NULL, NULL, 2, 1389867904, 1389867904, NULL, NULL),
(36, 14, NULL, NULL, 3, 1389867904, 1389867904, NULL, NULL),
(37, 15, 'Авторская кукла "старец"', '<p>Авторская кукла ручной рботы, высота 38 см</p>', 1, 1389868850, 1389868850, 'Кукла, ручная работа', 'осетинский мужчина, авторская работа, ручная работа, кукла'),
(38, 15, NULL, NULL, 2, 1389868850, 1389868850, NULL, NULL),
(39, 15, NULL, NULL, 3, 1389868851, 1389868851, NULL, NULL),
(40, 16, 'Авторская кукла "Добрый домашний эльф"', '<p>Кукла ручной работы Добрый домашний Эльф. Высота - 50 см. Цена указана за 1 куклу</p>', 1, 1389869036, 1389869036, 'Кукла, ручная работа', 'Кукла ручной работы Добрый домашний Эльф. Высота - 50 см.'),
(41, 16, NULL, NULL, 2, 1389869036, 1389869036, NULL, NULL),
(42, 16, NULL, NULL, 3, 1389869036, 1389869036, NULL, NULL),
(43, 17, 'Авторская кукла "Старик" и "Старуха"', '<p>Кукла ручной работы. Указана стоимость за 1 куклу. Высота - 40 см и 38 см, соответственно</p>', 1, 1389869538, 1389869538, 'Кукла, национальная кукла, Осетия', 'Кукла ручной работы, история Осетии'),
(44, 17, NULL, NULL, 2, 1389869538, 1389869538, NULL, NULL),
(45, 17, NULL, NULL, 3, 1389869538, 1389869538, NULL, NULL),
(46, 18, 'Авт. кукла "Бытовая сцена из жизни осетин"', '<p>Кукла ручной работы "Бытовая сцена из жизни осетин". Высота куклы - 36 см.</p>', 1, 1389869826, 1389869826, 'Кукла, осетины, кукла ручной работы', 'Кукла ручной работы "Бытовая сцена из жизни осетин". Высота куклы - 36 см.'),
(47, 18, NULL, NULL, 2, 1389869826, 1389869826, NULL, NULL),
(48, 18, NULL, NULL, 3, 1389869827, 1389869827, NULL, NULL),
(49, 19, 'Часы ручной работы "Изобилие"', '<p>Часы ручной работы "Изобилие". Диаметр часов - 38 см. Использовались следующие материалы: дуб, титан и позолота.</p>', 1, 1389870231, 1389870231, 'Часы, дуб, титан, позолота, изобилие, традиции Осетии', 'Часы ручной работы "Изобилие". Диаметр часов - 38 см. Использовались следующие материалы: дуб, титан и позолота.'),
(50, 19, NULL, NULL, 2, 1389870231, 1389870231, NULL, NULL),
(51, 19, NULL, NULL, 3, 1389870231, 1389870231, NULL, NULL),
(52, 20, 'Осетинская авторская кукла, женщина', '<p>Кукла ручной работы Осетинская женщина. Высота - 42 см.</p>', 1, 1389870473, 1389870473, 'Ручная работа, кукла, осетинка, осетинская женщина', 'Кукла ручной работы Осетинская женщина. Высота - 42 см.'),
(53, 20, NULL, NULL, 2, 1389870473, 1389870473, NULL, NULL),
(54, 20, NULL, NULL, 3, 1389870473, 1389870473, NULL, NULL),
(55, 21, 'Осетинская авторская кукла, мужчина', '<p>Кукла ручной работы Осетинский мужчина. Высота - 42 см.</p>', 1, 1389870574, 1389870574, 'Кукла, ручная работа, осетин, осетинский мужчина', 'Кукла ручной работы Осетинский мужчина. Высота - 42 см.'),
(56, 21, NULL, NULL, 2, 1389870574, 1389870574, NULL, NULL),
(57, 21, NULL, NULL, 3, 1389870574, 1389870574, NULL, NULL),
(58, 22, 'Бронзовая статуэтка "Лаегты дзуар"', '<p>Бронзовая статуэтка "Лаеты дзуар", высота - 13 см. Ручная работа.</p>', 1, 1389870805, 1389870805, 'бронза, статуэтка, культура Осетии, осетины', 'Бронзовая статуэтка "Лаеты дзуар", высота - 13 см. Ручная работа.'),
(59, 22, NULL, NULL, 2, 1389870805, 1389870805, NULL, NULL),
(60, 22, NULL, NULL, 3, 1389870806, 1389870806, NULL, NULL),
(61, 23, 'Традиционная осетинская чаша из керамики', '<p>Чаша традиционная осетинская. Материал - керамика. Отличный сувенир и подарок.</p>', 1, 1389870996, 1389870996, 'Керамика, чаша, традиции Осетии, посуда', 'Чаша традиционная осетинская. Материал - керамика. Отличный сувенир и подарок.'),
(62, 23, NULL, NULL, 2, 1389870996, 1389870996, NULL, NULL),
(63, 23, NULL, NULL, 3, 1389870996, 1389870996, NULL, NULL),
(64, 24, 'Традиционная осетинская чаша ', '<p>Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.</p>', 1, 1389871106, 1389871106, 'Чаша, керамика, традиции Осетии, осетины', 'Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.'),
(65, 24, NULL, NULL, 2, 1389871106, 1389871106, NULL, NULL),
(66, 24, NULL, NULL, 3, 1389871106, 1389871106, NULL, NULL),
(67, 25, 'Традиционная осетинская чаша ', '<p>Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.</p>', 1, 1389871370, 1389871370, 'Чаша, керамика, Осетия, традиции осетин', 'Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.'),
(68, 25, NULL, NULL, 2, 1389871370, 1389871370, NULL, NULL),
(69, 25, NULL, NULL, 3, 1389871371, 1389871371, NULL, NULL),
(70, 26, 'Традиционная осетинская чаша', '<p>Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.</p>', 1, 1389871469, 1389871469, 'Чаша, Осетия, традиции осетин, керамика, сувенир, подарок', 'Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.'),
(71, 26, NULL, NULL, 2, 1389871470, 1389871470, NULL, NULL),
(72, 26, NULL, NULL, 3, 1389871470, 1389871470, NULL, NULL),
(73, 27, 'Осетинская ритуальная пивная чаша', '<p>Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 1,5 литра.</p>', 1, 1389871728, 1389871728, 'Ритуальная чаша, пивная чаша, традиции осетин, Осетия, керамика', 'Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 1,5 литра.'),
(74, 27, NULL, NULL, 2, 1389871728, 1389871728, NULL, NULL),
(75, 27, NULL, NULL, 3, 1389871728, 1389871728, NULL, NULL),
(76, 28, 'Традиционная осетинская ритуальная пивная чаша', '<p>Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 2 литра.</p>', 1, 1389871794, 1389871794, 'Ритуальная чаша, пивная чаша, Осетия, традиции осетин, керамика', 'Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 1,5 литра.'),
(77, 28, NULL, NULL, 2, 1389871794, 1389871794, NULL, NULL),
(78, 28, NULL, NULL, 3, 1389871794, 1389871794, NULL, NULL),
(79, 29, 'Топор и шлем ручной работы', '<p>Топор и шлем ручной работы. Топор сделан из бронзы. Длина топорища - 75 см.</p>\r\n<p>Шлем сделан из сплава металлов, использован конский волос. &nbsp;</p>\r\n<p>Возможно продажа отдельно шлема и топора</p>', 1, 1389876960, 1389877055, 'Оружие, шлем, топор, бронза, изделие из бронзы', 'Топор и шлем ручной работы. Топор сделан из бронзы. Длина топорища - 75 см.\r\nШлем сделан из сплава металлов, использован конский волос.  '),
(80, 29, 'Axe and Helmet', '<p>Wonderfully crafted hand made axe and helmet made from bronze. Possible to buy helmet and axe separately.</p>', 2, 1389876960, 1389877112, 'Weapon, Axe, Helmet, Bronze', 'Wonderfully crafted hand made axe and helmet made from bronze. Possible to buy helmet and axe separately.'),
(81, 29, NULL, NULL, 3, 1389876961, 1389876961, NULL, NULL),
(82, 30, '12-струнная осетинская арфа', '<p>Эксклюзивная 12-струнная осетинская арфа. Материал - дерево. Длина основания - 67 см.</p>', 1, 1389877267, 1389877267, 'Арфа, резьба по дереву, ручная работа, музыкальный инструмент, Осетия, культура Осетии', 'Эксклюзивная 12-струнная осетинская арфа. Материал - дерево. Длина основания - 67 см.'),
(83, 30, NULL, NULL, 2, 1389877267, 1389877267, NULL, NULL),
(84, 30, NULL, NULL, 3, 1389877268, 1389877268, NULL, NULL),
(85, 31, 'Доспехи ручной работы', '<p>Доспехи ручной работы. В комплект входят шлем, байдана и топор. Возможна продажа предметов по отдельности.</p>', 1, 1389877692, 1389877692, 'Доспехи, оружие, топор, шлем, байдана', 'Доспехи ручной работы. В комплект входят шлем, байдана и топор. Возможна продажа предметов по отдельности.'),
(86, 31, NULL, NULL, 2, 1389877692, 1389877692, NULL, NULL),
(87, 31, NULL, NULL, 3, 1389877692, 1389877692, NULL, NULL),
(88, 32, 'Сито ручной работы', '<p>Сито с ручной росписью. Используются акрил и масло. Цена указана за 1 предмет.</p>', 1, 1389878037, 1389878037, 'Сито, традиции осетин, акрил, масло, ручная работа', 'Сито с ручной росписью. Используются акрил и масло. Цена указана за 1 предмет.'),
(89, 32, NULL, NULL, 2, 1389878037, 1389878037, NULL, NULL),
(90, 32, NULL, NULL, 3, 1389878037, 1389878037, NULL, NULL),
(91, 33, 'Комплект папаха, кинжал, пояс, газыри', '<p>Комплект на мальчика. В комплект входят: папаха, пояс, газыри и кинжал. Цена указана за весь комплект. Возможна продажа предметов по отдельности.</p>', 1, 1389958457, 1389958457, 'Папаха, газыри, традиции осетин, кинжал, оружие', 'Комплект на мальчика. В комплект входят: папаха, пояс, газыри и кинжал. Цена указана за весь комплект. Возможна продажа предметов по отдельности.'),
(92, 33, NULL, NULL, 2, 1389958457, 1389958457, NULL, NULL),
(93, 33, NULL, NULL, 3, 1389958457, 1389958457, NULL, NULL),
(94, 34, 'Бронзовая статуэтка', '<p>Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.</p>', 1, 1389959044, 1389959044, 'Бронза, статуэтка, ручная работа, осетин, традиции Осетии', 'Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.'),
(95, 34, NULL, NULL, 2, 1389959044, 1389959044, NULL, NULL),
(96, 34, NULL, NULL, 3, 1389959044, 1389959044, NULL, NULL),
(97, 35, 'Бронзовая статуэтка', '<p>Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.</p>', 1, 1389959122, 1389959122, 'Бронза, статуэтка, ручная работа, мужчина, традиции Осетии, осетин', 'Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.'),
(98, 35, NULL, NULL, 2, 1389959122, 1389959122, NULL, NULL),
(99, 35, NULL, NULL, 3, 1389959122, 1389959122, NULL, NULL),
(100, 36, 'Панно', '<p>Панно. Материал - медная проволока. Размеры - 34 см x 34 см.</p>', 1, 1389959492, 1389959492, 'Панно, медь, картина', 'Панно. Материал - медная проволока. Размеры - 34 см x 34 см.'),
(101, 36, NULL, NULL, 2, 1389959492, 1389959492, NULL, NULL),
(102, 36, NULL, NULL, 3, 1389959492, 1389959492, NULL, NULL),
(103, 37, 'Керамический сосуд', '<p>Керамический сосуд ручной работы. Высота - 50 см.</p>', 1, 1389959946, 1389959946, 'Посуда, керамика, традиции Осетии', 'Керамический сосуд ручной работы. Высота - 50 см.'),
(104, 37, NULL, NULL, 2, 1389959946, 1389959946, NULL, NULL),
(105, 37, NULL, NULL, 3, 1389959946, 1389959946, NULL, NULL),
(106, 38, 'Керамический сосуд', '<p>Керамический сосуд ручной работы. Высота - 34 см.</p>', 1, 1389960369, 1389960369, 'Керамика, посуда, ручная работа, традиции Осетии, осетины', 'Керамический сосуд ручной работы. Высота - 50 см.'),
(107, 38, NULL, NULL, 2, 1389960369, 1389960369, NULL, NULL),
(108, 38, NULL, NULL, 3, 1389960369, 1389960369, NULL, NULL),
(109, 39, 'Керамический сосуд', '<p>Керамический сосуд ручной работы. Высота - 50 см.</p>', 1, 1389960815, 1389960815, 'Керамика, посуда, сосуд, ручная работа, традиции осетин', 'Керамический сосуд ручной работы. Высота - 50 см.'),
(110, 39, NULL, NULL, 2, 1389960815, 1389960815, NULL, NULL),
(111, 39, NULL, NULL, 3, 1389960815, 1389960815, NULL, NULL),
(112, 40, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1390157652, 1390157652, 'Нож, ручная работа, оружие', 'Охотничий нож ручной работы'),
(113, 40, NULL, NULL, 2, 1390157652, 1390157652, NULL, NULL),
(114, 40, NULL, NULL, 3, 1390157652, 1390157652, NULL, NULL),
(115, 41, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1390157789, 1390157789, 'Нож, оружие, ручная работа', 'Охотничий нож ручной работы'),
(116, 41, NULL, NULL, 2, 1390157789, 1390157789, NULL, NULL),
(117, 41, NULL, NULL, 3, 1390157789, 1390157789, NULL, NULL),
(118, 42, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1390157876, 1390157876, 'Нож, оружие, ручная работа', 'Охотничий нож ручной работы'),
(119, 42, NULL, NULL, 2, 1390157876, 1390157876, NULL, NULL),
(120, 42, NULL, NULL, 3, 1390157876, 1390157876, NULL, NULL),
(121, 43, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1390157960, 1390157960, 'Оружие, нож, охотничий нож, ручная работа', 'Охотничий нож ручной работы'),
(122, 43, NULL, NULL, 2, 1390157960, 1390157960, NULL, NULL),
(123, 43, NULL, NULL, 3, 1390157960, 1390157960, NULL, NULL),
(124, 44, 'Кинжал ', '<p>Кинжал ручной работы</p>', 1, 1390158055, 1390158055, 'Кинжал, оружие, ручная работа', 'Кинжал ручной работы'),
(125, 44, NULL, NULL, 2, 1390158055, 1390158055, NULL, NULL),
(126, 44, NULL, NULL, 3, 1390158055, 1390158055, NULL, NULL),
(127, 45, 'Меч с ножнами', '<p>Меч ручной работы с ножнами</p>', 1, 1390158164, 1396128879, 'Меч, ножны, оружие, ручная работа', 'Меч ручной работы с ножнами'),
(128, 45, NULL, NULL, 2, 1390158164, 1390158164, NULL, NULL),
(129, 45, NULL, NULL, 3, 1390158164, 1390158164, NULL, NULL),
(130, 46, 'Комплект лук со стрелами', '<p>Комплект лук со стрелами ручной работы. Возможна продажа по отдельности.</p>', 1, 1390158321, 1390158321, 'Лук, оружие, стрелы, ', 'Комплект лук со стрелами ручной работы. Возможна продажа по отдельности.'),
(131, 46, NULL, NULL, 2, 1390158321, 1390158321, NULL, NULL),
(132, 46, NULL, NULL, 3, 1390158321, 1390158321, NULL, NULL),
(133, 47, 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', 1, 1390158415, 1390158415, 'Нож, оружие, ручная работа', 'Охотничий нож ручной работы.'),
(134, 47, NULL, NULL, 2, 1390158415, 1390158415, NULL, NULL),
(135, 47, NULL, NULL, 3, 1390158415, 1390158415, NULL, NULL),
(136, 48, 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', 1, 1390158492, 1390158492, 'Нож, охота, ручная работа', 'Охотничий нож ручной работы.'),
(137, 48, NULL, NULL, 2, 1390158492, 1390158492, NULL, NULL),
(138, 48, NULL, NULL, 3, 1390158492, 1390158492, NULL, NULL),
(139, 49, 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', 1, 1390158564, 1390158564, 'Нож, охотничий нож, ручная работа', 'Охотничий нож ручной работы.'),
(140, 49, NULL, NULL, 2, 1390158564, 1390158564, NULL, NULL),
(141, 49, NULL, NULL, 3, 1390158564, 1390158564, NULL, NULL),
(142, 50, 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', 1, 1390158655, 1390158655, 'Нож, охота, охотничий нож, ручная работа', 'Охотничий нож ручной работы.'),
(143, 50, NULL, NULL, 2, 1390158655, 1390158655, NULL, NULL),
(144, 50, NULL, NULL, 3, 1390158655, 1390158655, NULL, NULL),
(145, 51, 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', 1, 1390158712, 1390158712, 'Охотничий нож, нож, охота, ручная работа', 'Охотничий нож ручной работы.'),
(146, 51, NULL, NULL, 2, 1390158712, 1390158712, NULL, NULL),
(147, 51, NULL, NULL, 3, 1390158712, 1390158712, NULL, NULL),
(148, 52, 'Меч с ножнами', '<p>Отличный меч ручной работы с ножнами</p>', 1, 1395498410, 1395498410, 'Меж, оружие, ножны', 'Меж ручной работы с ножнами'),
(149, 52, NULL, NULL, 2, 1395498410, 1395498410, NULL, NULL),
(150, 52, NULL, NULL, 3, 1395498410, 1395498410, NULL, NULL),
(151, 53, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1395498604, 1395498604, 'Нож, ручная работа, охотничий нож', 'Охотничий нож ручной работы'),
(152, 53, NULL, NULL, 2, 1395498604, 1395498604, NULL, NULL),
(153, 53, NULL, NULL, 3, 1395498604, 1395498604, NULL, NULL),
(154, 54, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1395573567, 1395573567, 'Охотничий нож, оружие, ручная работа', 'Охотничий нож ручной работы'),
(155, 54, NULL, NULL, 2, 1395573567, 1395573567, NULL, NULL),
(156, 54, NULL, NULL, 3, 1395573567, 1395573567, NULL, NULL),
(157, 55, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1395573708, 1395573744, 'Нож, ручная работа, охотничий нож', 'Охотничий нож ручной работ'),
(158, 55, NULL, NULL, 2, 1395573708, 1395573708, NULL, NULL),
(159, 55, NULL, NULL, 3, 1395573708, 1395573708, NULL, NULL),
(160, 56, 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', 1, 1395597857, 1395597857, 'Охотничий нож, нож, ручная работа', 'Охотничий нож ручной работы'),
(161, 56, NULL, NULL, 2, 1395597857, 1395597857, NULL, NULL),
(162, 56, NULL, NULL, 3, 1395597857, 1395597857, NULL, NULL),
(163, 57, 'Ремень', '<p>Ремень из натуральной кожи, ручная работа</p>', 1, 1395597965, 1395597965, 'Ремень, одежда, кожа, ручная работа', 'Ремень из натуральной кожи, ручная работа'),
(164, 57, NULL, NULL, 2, 1395597965, 1395597965, NULL, NULL),
(165, 57, NULL, NULL, 3, 1395597965, 1395597965, NULL, NULL),
(166, 58, 'Охотничий нож и футляр', '<p>Охотничий нож ручной работы. В комплекте идёт футляр из древесины.</p>', 1, 1395598059, 1396128297, 'Охотничий нож, футляр, древесина, ручная работа', 'Охотничий нож ручной работы. В комплекте идёт футляр из древесины.'),
(167, 58, NULL, NULL, 2, 1395598059, 1395598059, NULL, NULL),
(168, 58, NULL, NULL, 3, 1395598059, 1395598059, NULL, NULL),
(169, 59, 'Охотничий нож ', '<p>Охотничий нож ручной работы</p>', 1, 1395598157, 1395598157, 'Охотничий нож, нож, ручная работа, оружие', 'Охотничий нож ручной работы'),
(170, 59, NULL, NULL, 2, 1395598157, 1395598157, NULL, NULL),
(171, 59, NULL, NULL, 3, 1395598157, 1395598157, NULL, NULL),
(172, 60, 'Охотничий нож и ножны', '<p>Охотничий нож ручной работы и ножны в комплекте</p>', 1, 1395598247, 1395598247, 'Нож, ножны, охотничий нож, ручная работа', 'Охотничий нож ручной работы и ножны в комплекте'),
(173, 60, NULL, NULL, 2, 1395598247, 1395598247, NULL, NULL),
(174, 60, NULL, NULL, 3, 1395598247, 1395598247, NULL, NULL),
(175, 61, 'Охотничий нож и ножны', '<p>Охотничий нож ручной работы и ножны в комплекте</p>', 1, 1395598352, 1395598352, 'Нож, ножны, охотничий нож, ручная работа', 'Охотничий нож ручной работы и ножны в комплекте'),
(176, 61, NULL, NULL, 2, 1395598352, 1395598352, NULL, NULL),
(177, 61, NULL, NULL, 3, 1395598352, 1395598352, NULL, NULL),
(178, 62, 'Меч и ножны', '<p>Меч ручной работы и ножны в комплекте</p>', 1, 1395598504, 1395598504, 'Меч, ручная работа, ножны', 'Меч ручной работы и ножны в комплекте'),
(179, 62, NULL, NULL, 2, 1395598504, 1395598504, NULL, NULL),
(180, 62, NULL, NULL, 3, 1395598504, 1395598504, NULL, NULL),
(181, 63, 'Лук, стрелы, охотничий нож и ремень', '<p>Комплект, состоящий из лука со стрелами, охотничьего ножа и ремня. Возможна продажа предметов по отдельности.</p>', 1, 1395598672, 1395598672, 'Лук, стрелы, ремень, нож, кожа, ручная работа', 'Комплект, состоящий из лука со стрелами, охотничьего ножа и ремня. Возможна продажа предметов по отдельности.'),
(182, 63, NULL, NULL, 2, 1395598672, 1395598672, NULL, NULL),
(183, 63, NULL, NULL, 3, 1395598672, 1395598672, NULL, NULL),
(184, 64, 'Кинжал и ножны', '<p>Кинжал ручной работы и ножны в комплекте</p>', 1, 1395598802, 1395598802, 'Кинжал, ножны, ручная работа, оружие', 'Кинжал ручной работы и ножны в комплекте'),
(185, 64, NULL, NULL, 2, 1395598802, 1395598802, NULL, NULL),
(186, 64, NULL, NULL, 3, 1395598802, 1395598802, NULL, NULL),
(187, 65, 'Охотничий нож и ножны', '<p>Охотничий нож ручной работы и ножны в комплекте</p>', 1, 1395598962, 1395598962, 'Нож, ножны, ручная работа', 'Охотничий нож ручной работы и ножны в комплекте'),
(188, 65, NULL, NULL, 2, 1395598962, 1395598962, NULL, NULL),
(189, 65, NULL, NULL, 3, 1395598962, 1395598962, NULL, NULL),
(190, 66, 'Скифское ожерелье', '<p>Скифское ожерелье ручной работы</p>', 1, 1395599022, 1396127851, 'Ожерелье, украшение, скифское ожерелье, ручная работа', 'Скифское ожерелье ручной работы'),
(191, 66, NULL, NULL, 2, 1395599022, 1395599022, NULL, NULL),
(192, 66, NULL, NULL, 3, 1395599022, 1395599022, NULL, NULL),
(193, 67, 'Нож и ножны', '<p>Нож и ножны ручной работы</p>', 1, 1395599155, 1395599155, 'Нож, ручная работа, ножны', 'Нож и ножны ручной работы'),
(194, 67, NULL, NULL, 2, 1395599155, 1395599155, NULL, NULL),
(195, 67, NULL, NULL, 3, 1395599155, 1395599155, NULL, NULL),
(196, 68, 'Декоративная подставка и кинжалы', '<p>Декоративная подставка в форме оленей и два кинжала в комплекте</p>', 1, 1395599249, 1395599249, 'Кинжалы, декоративная подставка, комплект', 'Декоративная подставка в форме оленей и два кинжала в комплекте'),
(197, 68, NULL, NULL, 2, 1395599249, 1395599249, NULL, NULL),
(198, 68, NULL, NULL, 3, 1395599249, 1395599249, NULL, NULL),
(199, 69, 'Лук, стрелы, охотничий нож и ремень', '<p>Комплект состоит из лука, стрел, охотничьего ножа и ремня. Всё - ручная работа. Возможна продажа по отдельности</p>', 1, 1395599398, 1395599398, 'Лук, охотничий нож, ремень, стрелы, ручная работа', 'Комплект состоит из лука, стрел, охотничьего ножа и ремня. Всё - ручная работа. Возможна продажа по отдельности'),
(200, 69, NULL, NULL, 2, 1395599398, 1395599398, NULL, NULL),
(201, 69, NULL, NULL, 3, 1395599398, 1395599398, NULL, NULL),
(202, 70, 'Декоративная ширма из натуральной кожи', '<p>Декоративная ширма из натуральной кожи. Ручная работа.</p>', 1, 1395599524, 1395599524, 'Ширма, натуральная кожа, ручная работа', 'Декоративная ширма из натуральной кожи. Ручная работа.'),
(203, 70, NULL, NULL, 2, 1395599524, 1395599524, NULL, NULL),
(204, 70, NULL, NULL, 3, 1395599524, 1395599524, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_articles'),
('app', 'default', '002_create_articles_i18n'),
('app', 'default', '003_create_articles_types'),
('app', 'default', '004_create_articles_languages'),
('app', 'default', '005_create_sliders'),
('app', 'default', '006_create_items'),
('app', 'default', '007_create_items_i18ns'),
('app', 'default', '008_create_items_categories'),
('app', 'default', '009_add_visible_to_items'),
('app', 'default', '010_create_settings'),
('app', 'default', '011_add_keywordsdescription_to_items_i18n'),
('app', 'default', '012_create_callmes');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'exchange_rate', '33', 1384180046, 1384181879),
(2, 'telephone', '+7(918)8253370', 1384180046, 1384200974),
(3, 'email', 'info@aryon.ru', 1384180046, 1384265259),
(4, 'catalog_keywords_ru', '', 1384180046, 1384180046),
(5, 'catalog_description_ru', '', 1384180046, 1384180046),
(6, 'catalog_keywords_en', '', 1384180046, 1384180046),
(7, 'catalog_description_en', '', 1384180046, 1384180046),
(8, 'catalog_keywords_os', '', NULL, NULL),
(9, 'catalog_description_en', '', NULL, NULL),
(10, 'news_keywords_ru', '', NULL, NULL),
(11, 'news_description_ru', '', NULL, NULL),
(12, 'news_keywords_en', '', NULL, NULL),
(13, 'news_description_ru', '', NULL, NULL),
(14, 'news_keywords_os', '', NULL, NULL),
(15, 'news_description_os', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `img_path`, `uri`, `position`, `created_at`, `updated_at`) VALUES
(4, 'e84c61a423c4a5a2a4308eac9dec9298.jpg', 'http://www.aryon.ru/ru/catalog', 3, 1384265932, 1384265932),
(5, '4ed7397e046d09d421288c4d17b7c142.jpg', 'http://aryon.ru/ru/about', 4, 1385023613, 1385023613),
(6, '1581abffe6ebc5b13a0b8648655acff7.jpg', 'contacts', 5, 1385023815, 1385023815),
(7, '1ea9f6f590b47c9ce6ad8af2a1a0cb68.jpg', 'ru/catalog/index/6', 6, 1389867820, 1389867820);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `last_login` varchar(25) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ZNyzRBToP3ASC3qtWq8u+bgmioXJ823138mi5CTRZrM=', 1, 'alex.mon1989@gmail.com', '1412748969', '8edcd9a0058e8919887b73c92680b949973a32a0', 'a:0:{}', 1384939358, 1384941000);

-- --------------------------------------------------------

--
-- Структура таблицы `users_clients`
--

DROP TABLE IF EXISTS `users_clients`;
CREATE TABLE IF NOT EXISTS `users_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT '0',
  `autonomous` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `notes` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_providers`
--

DROP TABLE IF EXISTS `users_providers`;
CREATE TABLE IF NOT EXISTS `users_providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_scopes`
--

DROP TABLE IF EXISTS `users_scopes`;
CREATE TABLE IF NOT EXISTS `users_scopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_sessions`
--

DROP TABLE IF EXISTS `users_sessions`;
CREATE TABLE IF NOT EXISTS `users_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oauth_sessions_ibfk_1` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_sessionscopes`
--

DROP TABLE IF EXISTS `users_sessionscopes`;
CREATE TABLE IF NOT EXISTS `users_sessionscopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`),
  KEY `access_token` (`access_token`),
  KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
