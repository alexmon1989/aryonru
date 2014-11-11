/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : aryon

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-11-11 16:48:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_type_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '1', '1378801329', null);
INSERT INTO `articles` VALUES ('2', '3', '1378801329', null);
INSERT INTO `articles` VALUES ('3', '4', '1378801329', null);
INSERT INTO `articles` VALUES ('4', '2', '1395498239', null);
INSERT INTO `articles` VALUES ('5', '2', '1406242866', null);

-- ----------------------------
-- Table structure for `articles_i18n`
-- ----------------------------
DROP TABLE IF EXISTS `articles_i18n`;
CREATE TABLE `articles_i18n` (
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles_i18n
-- ----------------------------
INSERT INTO `articles_i18n` VALUES ('1', '1', 'Добро пожаловать на сайт компании Aryon, г. Владикавказ! ', '', '', '<p>Aryon - известная компания, занимающаяся созданием уникальных изделий из различных металлов. На нашем сайте вы можете приобрести украшения, оружие, статуэтки и другие изделия ручной работы. Каждое из них является настоящим произведением искусства.</p>\r\n<p>Кроме продукции фирмы Aryon на сайте представлены уникальные товары других мастеров РСО-Алания. Здесь вы можете приобрести что-то особенное, пополнить свою коллекцию произведений искусства.&nbsp;</p>', '1', '1378801331', '1389999813');
INSERT INTO `articles_i18n` VALUES ('2', '1', 'Welcome to our site!', '', '', '<p>Welcome to the website of Aryon company. Our company creates unique products. We specialize on weapon and gifts crafted in traditional Ossetian manner.&nbsp;</p>\r\n<p>Moreover the website features hand made products made by other artists of Ossetia. Here you can buy any item via our online store. Welcome!</p>', '2', '1378801331', '1389999908');
INSERT INTO `articles_i18n` VALUES ('3', '1', 'Табуафси, хонам уае на интернеты тыгъдадмае Aryon ', '', '', '<p>Aryon у зындгонд компани, каецы архайы згъаераей алыхуызон дзаумаеттае аразыныл. Нае сайты уае бон у ссарын раесугъдгаенаентае, хаецаенгаерзтае, раеттае, цирхъхъыта аемае аендаер къухайконд дзаумаеттае. Алкаецы даер цае у ацаег аивадон сфаелдыстад.</p>\r\n<p>Нае интернеты тыгъдады Aryon продукцийы аеддейае ма ссараен ис республикае Аланийы къухаей даесны чи у, уыдоны продукци даер.&nbsp;</p>', '3', '1378801331', '1390908288');
INSERT INTO `articles_i18n` VALUES ('4', '2', 'О компании', '', '', '<p>Компания Aryon расположена в городе Владикавказ. Мы производим настоящие произведения искусства - мечи, кинжалы, ремни, украшения. Вся наша продукция - штучная и ручная работа. Мы готовы выполнить любой заказ по пожеланию наших клиентов. Поэтому наш ассортимент не ограничивается лишь теми предметами, которые представлены на сайте.&nbsp;<br />Надеемся, что вы сможете найти здесь именно то, что уже искали очень давно. Обращайтесь, мы уверены, что сотрудничество будет плодотворным.&nbsp;&nbsp;</p>\r\n<p><strong>Директор - Алборов Аслан Владимирович</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><a href=\"http://aryon.ru/assets/img/uploads/Arion%20buklet 003.pdf\" target=\"_blank\"><strong>Буклет с продукцией компании Aryon</strong></a></p>', '1', '1378801331', '1390156967');
INSERT INTO `articles_i18n` VALUES ('5', '2', 'About company', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1378801331', null);
INSERT INTO `articles_i18n` VALUES ('6', '2', 'About company', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1378801331', null);
INSERT INTO `articles_i18n` VALUES ('7', '3', 'Обратная связь', '', '', '<p>Мы находимся в РСО-Алания, г. Владикавказ</p>\r\n<p><strong>Наши телефоны:</strong></p>\r\n<p><strong>Директор - Алборов Аслан Владимирович:</strong></p>\r\n<p>8-918-825-33-70</p>\r\n<p>8-918-828-63-26</p>\r\n<p><strong>Техническая поддержка:</strong></p>\r\n<p>8-960-402-47-62</p>\r\n<p><strong>По всем вопросам обращайтесь по электронной почте:</strong></p>\r\n<p><a href=\"mailto:%20info@aryon.ru\" target=\"_blank\">info@aryon.ru</a></p>', '1', '1378801331', '1390001067');
INSERT INTO `articles_i18n` VALUES ('8', '3', 'Contacts', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1378801331', null);
INSERT INTO `articles_i18n` VALUES ('9', '3', 'Contacts', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1378801331', null);
INSERT INTO `articles_i18n` VALUES ('10', '4', 'Сайт находится в стадии добавления товаров', '', '', '<p>Уважаемые посетители нашего сайта, сейчас мы активно добавляем новые товары. Наполнение сайта товарами будет закончено примерно к началу апреля. Тогда же будут установлены актуальные цены. Как вы могли заметить, некоторые товары пока \"стоят\" 1 рубль. Естественно, что это лишь на время добавления товаров и данная цена не соответствует действительности.&nbsp;</p>\r\n<p>Спасибо за терпение</p>', '1', '1395498239', null);
INSERT INTO `articles_i18n` VALUES ('11', '4', '', '', '', '', '2', '1395498239', null);
INSERT INTO `articles_i18n` VALUES ('12', '4', '', '', '', '', '3', '1395498239', null);
INSERT INTO `articles_i18n` VALUES ('13', '5', 'Реализация механизма оплаты', '', '', '<p>Мы уже наполнили наш сайт товарами, которые вы можете приобрести в любое время. Теперь мы реализуем схему проведения онлайн-платежей. Предполагается, что этот процесс займёт около недели. В то же время вы уже сейчас можете заказывать любые товары, представленные на нашем сайте. Пока покупки осуществляются в \"ручном\" режиме. Пишите нам на электронную почту - <a href=\"mailto:info@aryon.ru,\">info@aryon.ru,</a> &nbsp;или воспользуйтесь опцией \"перезвонить\". Мы свяжемся с вами и обсудим поставку понравившегося товара.&nbsp;</p>', '1', '1406242866', null);
INSERT INTO `articles_i18n` VALUES ('14', '5', '', '', '', '', '2', '1406242866', null);
INSERT INTO `articles_i18n` VALUES ('15', '5', '', '', '', '', '3', '1406242866', null);

-- ----------------------------
-- Table structure for `articles_languages`
-- ----------------------------
DROP TABLE IF EXISTS `articles_languages`;
CREATE TABLE `articles_languages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles_languages
-- ----------------------------
INSERT INTO `articles_languages` VALUES ('1', 'ru', '1378801040', null);
INSERT INTO `articles_languages` VALUES ('2', 'en', '1378801040', null);
INSERT INTO `articles_languages` VALUES ('3', 'os', '1378801040', null);

-- ----------------------------
-- Table structure for `articles_types`
-- ----------------------------
DROP TABLE IF EXISTS `articles_types`;
CREATE TABLE `articles_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles_types
-- ----------------------------
INSERT INTO `articles_types` VALUES ('1', 'Главная страница', '1378801130', null);
INSERT INTO `articles_types` VALUES ('2', 'Новости', '1378801130', null);
INSERT INTO `articles_types` VALUES ('3', 'О компании', '1378801130', null);
INSERT INTO `articles_types` VALUES ('4', 'Обратная связь', '1378801130', null);

-- ----------------------------
-- Table structure for `callmes`
-- ----------------------------
DROP TABLE IF EXISTS `callmes`;
CREATE TABLE `callmes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of callmes
-- ----------------------------
INSERT INTO `callmes` VALUES ('1', 'Юрист', '8 (495) 2560244', 'Интересуют часы ручной работы', '0', '1410423313', '1410423313');
INSERT INTO `callmes` VALUES ('2', 'Санашвили Давид', '+79003061472', 'По шахматам', '0', '1415272518', '1415272518');

-- ----------------------------
-- Table structure for `items`
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', '5', '2600', '9d457970ebf889727a3b2445d90b9bf0.JPG', '0', '5', '1', '1384186928', '1389960061');
INSERT INTO `items` VALUES ('2', '4', '21000', 'af7ddc0521dea9485c74787815634919.JPG', '0', '10', '1', '1384190571', '1389960056');
INSERT INTO `items` VALUES ('3', '4', '31000', 'c36ab2cf6e5944ae96fc1e5a8ae13e13.JPG', '0', '4', '1', '1384199103', '1389960040');
INSERT INTO `items` VALUES ('4', '5', '600', '442cc851eeed6fb775ef5e7f63a72399.JPG', '0', '0', '1', '1384199289', '1384199428');
INSERT INTO `items` VALUES ('5', '4', '1000', 'dfa4db3c32038fd54d0a2e10c0afeaa9.JPG', '0', '0', '1', '1384199508', '1384199558');
INSERT INTO `items` VALUES ('6', '4', '10000', '8978abd1034c58d852cdeb64e3511f74.JPG', '0', '5', '1', '1384199620', '1389960080');
INSERT INTO `items` VALUES ('7', '4', '15000', 'bee8e17045bed41af67b93047cd88100.JPG', '0', '0', '1', '1384199766', '1384199786');
INSERT INTO `items` VALUES ('8', '5', '10000', 'f42af784dd12568973e9c816de93b394.JPG', '0', '7', '1', '1384200139', '1389960089');
INSERT INTO `items` VALUES ('12', '6', '110000', 'f1a6689c8ab6393e7138cd2f3d8341c9.jpg', '0', '0', '1', '1389865028', '1389866923');
INSERT INTO `items` VALUES ('13', '6', '220000', '3ef9b4b5457dc4d0ec0b7e7d41bac353.jpg', '0', '0', '1', '1389867431', '1389867550');
INSERT INTO `items` VALUES ('14', '6', '220000', '401ab7f46a86ee8c3d346fc6eac56ce6.JPG', '1', '3', '1', '1389867903', '1389960254');
INSERT INTO `items` VALUES ('15', '7', '8250', 'a98eecfdcb020b56ac49ba3784e6f838.JPG', '0', '0', '1', '1389868836', '1389868916');
INSERT INTO `items` VALUES ('16', '7', '10450', 'a81f8f602dac60a9b6e637fb18e0240d.JPG', '0', '0', '1', '1389869036', '1389869117');
INSERT INTO `items` VALUES ('17', '7', '8250', '656fe94182216d7388e1b065b325e346.JPG', '0', '0', '1', '1389869537', '1389869559');
INSERT INTO `items` VALUES ('18', '7', '8250', '96a797ddfee9c94cb5e601db6c2684d6.JPG', '0', '0', '1', '1389869826', '1389869853');
INSERT INTO `items` VALUES ('19', '8', '47850', '8a622bf74704d8be0853644b767ade2f.JPG', '1', '5', '1', '1389870231', '1389960246');
INSERT INTO `items` VALUES ('20', '7', '7700', '5e4cd199d2349ea0328d0da2bbeac434.jpg', '1', '5', '1', '1389870473', '1389960243');
INSERT INTO `items` VALUES ('21', '7', '5500', '75a5c9d83154c06db8809fad81beeb41.jpg', '0', '0', '1', '1389870573', '1389870606');
INSERT INTO `items` VALUES ('22', '8', '4400', 'afde9421fdb3d25ac7e6a43ccf6a5f07.JPG', '0', '0', '1', '1389870805', '1389870843');
INSERT INTO `items` VALUES ('23', '9', '2200', 'c421f9526548ef7e534f77d6e1f5c938.JPG', '0', '0', '1', '1389870995', '1389871011');
INSERT INTO `items` VALUES ('24', '9', '1650', '1000bc75e6d5f63acb7903582032f728.JPG', '0', '0', '1', '1389871106', '1389871122');
INSERT INTO `items` VALUES ('25', '9', '2420', '8ec76937d2599acafd3ded48803f7ce8.jpg', '0', '0', '1', '1389871370', '1389871393');
INSERT INTO `items` VALUES ('26', '9', '2420', 'ae7d70c3e621c67e88bd02504adf20d5.jpg', '1', '10', '1', '1389871469', '1389960271');
INSERT INTO `items` VALUES ('27', '9', '2420', '024800ec9f217baaa3c900675281329b.jpg', '0', '0', '1', '1389871728', '1389871746');
INSERT INTO `items` VALUES ('28', '9', '1650', '08009c90d396830d0842340b242ee4dd.jpg', '0', '0', '1', '1389871794', '1389871823');
INSERT INTO `items` VALUES ('29', '5', '30250', '82453b40844169e651a183e1659bb73e.JPG', '0', '0', '1', '1389876960', '1389877029');
INSERT INTO `items` VALUES ('30', '8', '26400', 'c159e5059d7bee9f4f258f701d2b363c.JPG', '0', '0', '1', '1389877267', '1389877299');
INSERT INTO `items` VALUES ('31', '5', '78100', '9b642098741ac05961697677cb092270.JPG', '0', '0', '1', '1389877692', '1389877749');
INSERT INTO `items` VALUES ('32', '9', '1100', '8de1da74623dbf604716e80239198b47.JPG', '0', '0', '1', '1389878037', '1389878056');
INSERT INTO `items` VALUES ('33', '10', '6160', '4090ff69fdc8c5512e9d60b3b5893546.JPG', '0', '0', '1', '1389958457', '1389958527');
INSERT INTO `items` VALUES ('34', '8', '4400', 'efceb68284626cb847b29e72fb135f16.jpg', '0', '0', '1', '1389959044', '1389959084');
INSERT INTO `items` VALUES ('35', '8', '4400', '82b4280fcb748fc284354ac97f24046d.jpg', '0', '0', '1', '1389959122', '1389959162');
INSERT INTO `items` VALUES ('36', '8', '9350', 'f058e864d9e011b48b2e0b8f2604008b.JPG', '0', '0', '1', '1389959492', '1389959536');
INSERT INTO `items` VALUES ('37', '9', '1870', '736aedf69edb0f75e792e245683f5664.jpg', '1', '5', '1', '1389959946', '1389959979');
INSERT INTO `items` VALUES ('38', '9', '1430', 'dc6a722ccc10a94dd6d939f2c2793903.jpg', '0', '0', '1', '1389960369', '1389960405');
INSERT INTO `items` VALUES ('39', '9', '2420', '1c81e24c7402c1ba3581b665a5e5c6bc.jpg', '0', '0', '1', '1389960814', '1389960854');
INSERT INTO `items` VALUES ('41', '5', '110000', 'a427cb7076f40f98a80b4343d06d5989.JPG', '0', '0', '1', '1390157789', '1396129021');
INSERT INTO `items` VALUES ('42', '5', '110000', '0781658fe4deb502406239edae232731.JPG', '0', '0', '1', '1390157876', '1396128982');
INSERT INTO `items` VALUES ('43', '5', '33000', '6c9c713f28701cc269cc3f5ac614f643.JPG', '0', '0', '1', '1390157960', '1396128954');
INSERT INTO `items` VALUES ('45', '5', '220000', '033d9ac5f2518e8dc70d88b1c5029689.jpg', '0', '0', '1', '1390158164', '1396128895');
INSERT INTO `items` VALUES ('46', '5', '350000', 'defba9bd3727b6f477b5666b20362d7f.JPG', '0', '0', '1', '1390158321', '1406180742');
INSERT INTO `items` VALUES ('47', '5', '38500', 'b5fbbff3e62a19eb63a56d9043cef650.JPG', '0', '0', '1', '1390158415', '1396128781');
INSERT INTO `items` VALUES ('48', '5', '38500', '5cca465c5b0643ffd24a347a1f52bedc.JPG', '0', '0', '1', '1390158492', '1396128744');
INSERT INTO `items` VALUES ('49', '5', '55000', '550207a3f2b192566bd39053e900525f.JPG', '0', '0', '1', '1390158564', '1396128683');
INSERT INTO `items` VALUES ('50', '5', '38500', '230398f58e6fc862624d11d0630b5cb3.JPG', '0', '0', '1', '1390158655', '1396128597');
INSERT INTO `items` VALUES ('51', '5', '110000', '33748007b923074df66cc7555a44f4bb.JPG', '0', '0', '1', '1390158712', '1396128547');
INSERT INTO `items` VALUES ('52', '5', '350000', '1d7c3d69b35cd5e1274c79d2588cc98d.JPG', '0', '0', '1', '1395498410', '1395498490');
INSERT INTO `items` VALUES ('53', '5', '16500', '0fdcf18d6225c0194454a1c83ef086e5.jpg', '0', '0', '1', '1395498604', '1396128502');
INSERT INTO `items` VALUES ('56', '5', '55000', 'eb168d31d1b96957c8148cc441aa2029.JPG', '0', '0', '1', '1395597857', '1396128358');
INSERT INTO `items` VALUES ('57', '4', '16500', '776e324f84ef3bba28402f549f4f0711.JPG', '0', '0', '1', '1395597965', '1396128396');
INSERT INTO `items` VALUES ('58', '5', '66000', '515d2e7a758fa854ec4babdbec496d03.JPG', '0', '0', '1', '1395598059', '1396128321');
INSERT INTO `items` VALUES ('59', '5', '16500', '48ae13e06b6d04f2f650cc14848089d2.JPG', '0', '0', '1', '1395598157', '1396128269');
INSERT INTO `items` VALUES ('60', '5', '110000', '4544c31b2f94d18b1042e3c2ffdf9475.JPG', '0', '0', '1', '1395598247', '1396128243');
INSERT INTO `items` VALUES ('61', '5', '110000', 'a93e42e7ef58d201b6b4990036f5290d.JPG', '0', '0', '1', '1395598352', '1396128201');
INSERT INTO `items` VALUES ('63', '5', '350000', 'e63be380f1e1c9e2a83f85388302c9db.JPG', '0', '0', '1', '1395598672', '1406180710');
INSERT INTO `items` VALUES ('64', '5', '55000', 'c2a252c105314224cb5ac7d3121fee47.JPG', '0', '0', '1', '1395598802', '1396128135');
INSERT INTO `items` VALUES ('65', '5', '66000', '0de1b7c83ca275d4dc162a669745620d.JPG', '0', '0', '1', '1395598962', '1396128119');
INSERT INTO `items` VALUES ('66', '4', '16500', 'aa2810379b498958a7871c11f270ca2c.JPG', '0', '0', '1', '1395599022', '1396127868');
INSERT INTO `items` VALUES ('67', '5', '66000', '820e97f6fd24c39f88fca1534db2913a.JPG', '0', '0', '1', '1395599155', '1396128059');
INSERT INTO `items` VALUES ('68', '5', '132000', 'ffa40022a943ed29829a130694af8893.jpg', '0', '0', '1', '1395599249', '1396127745');
INSERT INTO `items` VALUES ('69', '5', '350000', 'b0e0c05662df67cd339f9bf3677286af.jpg', '0', '0', '1', '1395599398', '1406180640');
INSERT INTO `items` VALUES ('70', '11', '77000', '8699c5fe0fe0a21d5ef70ed281708376.jpg', '0', '0', '1', '1395599524', '1396127673');

-- ----------------------------
-- Table structure for `items_categories`
-- ----------------------------
DROP TABLE IF EXISTS `items_categories`;
CREATE TABLE `items_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_os` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of items_categories
-- ----------------------------
INSERT INTO `items_categories` VALUES ('4', 'Украшения', 'Category 1', 'Category 1', '1382973306', '1385023875');
INSERT INTO `items_categories` VALUES ('5', 'Оружие', 'Category 2', 'Category 2', '1382973313', '1385023885');
INSERT INTO `items_categories` VALUES ('6', 'Шахматы', 'Chess', 'Шахмæттæ', '1389864944', '1389864944');
INSERT INTO `items_categories` VALUES ('7', 'Куклы и игрушки', 'Dolls and Toys', 'Чындз, хъазæн ', '1389868749', '1389868749');
INSERT INTO `items_categories` VALUES ('8', 'Сувениры', 'Souvenirs', 'Сувениры', '1389870159', '1389870159');
INSERT INTO `items_categories` VALUES ('9', 'Посуда', 'Dishes', 'Мигæнæнтæ', '1389870925', '1389870925');
INSERT INTO `items_categories` VALUES ('10', 'Национальная одежда', 'National Clothes', 'Национальная одежда', '1389958452', '1389958452');
INSERT INTO `items_categories` VALUES ('11', 'Разное', 'Different', 'Разное', '1395599491', '1395599491');

-- ----------------------------
-- Table structure for `items_i18n`
-- ----------------------------
DROP TABLE IF EXISTS `items_i18n`;
CREATE TABLE `items_i18n` (
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
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of items_i18n
-- ----------------------------
INSERT INTO `items_i18n` VALUES ('1', '1', 'Товар 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384186928', '1384199210', '', '');
INSERT INTO `items_i18n` VALUES ('2', '1', 'Item 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384186928', '1384199231', '', '');
INSERT INTO `items_i18n` VALUES ('3', '1', 'Item 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384186928', '1384199240', '', '');
INSERT INTO `items_i18n` VALUES ('4', '2', 'Товар 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384190571', '1384198833', '', '');
INSERT INTO `items_i18n` VALUES ('5', '2', 'Item 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384190571', '1384198844', '', '');
INSERT INTO `items_i18n` VALUES ('6', '2', 'Item 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384190571', '1384198854', '', '');
INSERT INTO `items_i18n` VALUES ('7', '3', 'Товар 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384199103', '1384199103', '', '');
INSERT INTO `items_i18n` VALUES ('8', '3', 'Item 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384199104', '1384199152', '', '');
INSERT INTO `items_i18n` VALUES ('9', '3', 'Item 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384199104', '1384199162', '', '');
INSERT INTO `items_i18n` VALUES ('10', '4', 'Товар 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384199290', '1384199290', '', '');
INSERT INTO `items_i18n` VALUES ('11', '4', 'Item 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384199290', '1384199336', '', '');
INSERT INTO `items_i18n` VALUES ('12', '4', 'Item 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384199290', '1384199347', '', '');
INSERT INTO `items_i18n` VALUES ('13', '5', 'Товар 5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384199508', '1384199508', '', '');
INSERT INTO `items_i18n` VALUES ('14', '5', 'Item 5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384199508', '1384199578', '', '');
INSERT INTO `items_i18n` VALUES ('15', '5', 'Item 5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384199508', '1384199589', '', '');
INSERT INTO `items_i18n` VALUES ('16', '6', 'Акчнак', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384199621', '1384199621', '', '');
INSERT INTO `items_i18n` VALUES ('17', '6', 'Akchnak', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384199621', '1384199666', '', '');
INSERT INTO `items_i18n` VALUES ('18', '6', 'Akchnak', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384199621', '1384199677', '', '');
INSERT INTO `items_i18n` VALUES ('19', '7', 'Алания', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384199766', '1384199766', '', '');
INSERT INTO `items_i18n` VALUES ('20', '7', 'Alania', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384199766', '1384199799', '', '');
INSERT INTO `items_i18n` VALUES ('21', '7', 'Alania', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384199766', '1384199807', '', '');
INSERT INTO `items_i18n` VALUES ('22', '8', 'Барс', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '1', '1384200140', '1384808965', '', '');
INSERT INTO `items_i18n` VALUES ('23', '8', 'Bars', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2', '1384200140', '1384808973', '', '');
INSERT INTO `items_i18n` VALUES ('24', '8', 'Bars', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '3', '1384200140', '1384200185', '', '');
INSERT INTO `items_i18n` VALUES ('25', '11', '123', '<p>123</p>', '1', '1389864759', '1389864759', '', '');
INSERT INTO `items_i18n` VALUES ('26', '11', null, null, '2', '1389864759', '1389864759', null, null);
INSERT INTO `items_i18n` VALUES ('27', '11', null, null, '3', '1389864759', '1389864759', null, null);
INSERT INTO `items_i18n` VALUES ('28', '12', 'Шахматы осетинские', '<p>Великолепные шахматы ручной работы, выполненные дерева клёна. Фигурки выполнены в традиционном осетинском стиле. В комплекте идёт разборный столик.</p>', '1', '1389865029', '1389865029', 'шахматы, Осетия, клён, дерево', 'Шахматы ручной работы, национальные осетинские. В комплекте столик, материал - клён.');
INSERT INTO `items_i18n` VALUES ('29', '12', null, null, '2', '1389865029', '1389865029', null, null);
INSERT INTO `items_i18n` VALUES ('30', '12', null, null, '3', '1389865029', '1389865029', null, null);
INSERT INTO `items_i18n` VALUES ('31', '13', 'Шахматы викинги', '<p>Шахматы ручной работы из ореха, клёна и самшита. Фигурки - воины-викинги.&nbsp;</p>', '1', '1389867431', '1389867431', 'шахматы, викинги, ручная работа', 'Шахматы ручной работы из ореха, клёна и самшита. Фигурки - воины-викинги. ');
INSERT INTO `items_i18n` VALUES ('32', '13', null, null, '2', '1389867431', '1389867431', null, null);
INSERT INTO `items_i18n` VALUES ('33', '13', null, null, '3', '1389867432', '1389867432', null, null);
INSERT INTO `items_i18n` VALUES ('34', '14', 'Шахматы римские', '<p>Шахматы ручной работы. Фигуры - римские воины и правители. Материал - орех, клён, самшит</p>', '1', '1389867903', '1389867903', 'Шахматы, римляне, ручная работа', 'Шахматы ручной работы. Фигуры - римские воины и правители. Материал - орех, клён, самшит');
INSERT INTO `items_i18n` VALUES ('35', '14', null, null, '2', '1389867904', '1389867904', null, null);
INSERT INTO `items_i18n` VALUES ('36', '14', null, null, '3', '1389867904', '1389867904', null, null);
INSERT INTO `items_i18n` VALUES ('37', '15', 'Авторская кукла \"старец\"', '<p>Авторская кукла ручной рботы, высота 38 см</p>', '1', '1389868850', '1389868850', 'Кукла, ручная работа', 'осетинский мужчина, авторская работа, ручная работа, кукла');
INSERT INTO `items_i18n` VALUES ('38', '15', null, null, '2', '1389868850', '1389868850', null, null);
INSERT INTO `items_i18n` VALUES ('39', '15', null, null, '3', '1389868851', '1389868851', null, null);
INSERT INTO `items_i18n` VALUES ('40', '16', 'Авторская кукла \"Добрый домашний эльф\"', '<p>Кукла ручной работы Добрый домашний Эльф. Высота - 50 см. Цена указана за 1 куклу</p>', '1', '1389869036', '1389869036', 'Кукла, ручная работа', 'Кукла ручной работы Добрый домашний Эльф. Высота - 50 см.');
INSERT INTO `items_i18n` VALUES ('41', '16', null, null, '2', '1389869036', '1389869036', null, null);
INSERT INTO `items_i18n` VALUES ('42', '16', null, null, '3', '1389869036', '1389869036', null, null);
INSERT INTO `items_i18n` VALUES ('43', '17', 'Авторская кукла \"Старик\" и \"Старуха\"', '<p>Кукла ручной работы. Указана стоимость за 1 куклу. Высота - 40 см и 38 см, соответственно</p>', '1', '1389869538', '1389869538', 'Кукла, национальная кукла, Осетия', 'Кукла ручной работы, история Осетии');
INSERT INTO `items_i18n` VALUES ('44', '17', null, null, '2', '1389869538', '1389869538', null, null);
INSERT INTO `items_i18n` VALUES ('45', '17', null, null, '3', '1389869538', '1389869538', null, null);
INSERT INTO `items_i18n` VALUES ('46', '18', 'Авт. кукла \"Бытовая сцена из жизни осетин\"', '<p>Кукла ручной работы \"Бытовая сцена из жизни осетин\". Высота куклы - 36 см.</p>', '1', '1389869826', '1389869826', 'Кукла, осетины, кукла ручной работы', 'Кукла ручной работы \"Бытовая сцена из жизни осетин\". Высота куклы - 36 см.');
INSERT INTO `items_i18n` VALUES ('47', '18', null, null, '2', '1389869826', '1389869826', null, null);
INSERT INTO `items_i18n` VALUES ('48', '18', null, null, '3', '1389869827', '1389869827', null, null);
INSERT INTO `items_i18n` VALUES ('49', '19', 'Часы ручной работы \"Изобилие\"', '<p>Часы ручной работы \"Изобилие\". Диаметр часов - 38 см. Использовались следующие материалы: дуб, титан и позолота.</p>', '1', '1389870231', '1389870231', 'Часы, дуб, титан, позолота, изобилие, традиции Осетии', 'Часы ручной работы \"Изобилие\". Диаметр часов - 38 см. Использовались следующие материалы: дуб, титан и позолота.');
INSERT INTO `items_i18n` VALUES ('50', '19', null, null, '2', '1389870231', '1389870231', null, null);
INSERT INTO `items_i18n` VALUES ('51', '19', null, null, '3', '1389870231', '1389870231', null, null);
INSERT INTO `items_i18n` VALUES ('52', '20', 'Осетинская авторская кукла, женщина', '<p>Кукла ручной работы Осетинская женщина. Высота - 42 см.</p>', '1', '1389870473', '1389870473', 'Ручная работа, кукла, осетинка, осетинская женщина', 'Кукла ручной работы Осетинская женщина. Высота - 42 см.');
INSERT INTO `items_i18n` VALUES ('53', '20', null, null, '2', '1389870473', '1389870473', null, null);
INSERT INTO `items_i18n` VALUES ('54', '20', null, null, '3', '1389870473', '1389870473', null, null);
INSERT INTO `items_i18n` VALUES ('55', '21', 'Осетинская авторская кукла, мужчина', '<p>Кукла ручной работы Осетинский мужчина. Высота - 42 см.</p>', '1', '1389870574', '1389870574', 'Кукла, ручная работа, осетин, осетинский мужчина', 'Кукла ручной работы Осетинский мужчина. Высота - 42 см.');
INSERT INTO `items_i18n` VALUES ('56', '21', null, null, '2', '1389870574', '1389870574', null, null);
INSERT INTO `items_i18n` VALUES ('57', '21', null, null, '3', '1389870574', '1389870574', null, null);
INSERT INTO `items_i18n` VALUES ('58', '22', 'Бронзовая статуэтка \"Лаегты дзуар\"', '<p>Бронзовая статуэтка \"Лаеты дзуар\", высота - 13 см. Ручная работа.</p>', '1', '1389870805', '1389870805', 'бронза, статуэтка, культура Осетии, осетины', 'Бронзовая статуэтка \"Лаеты дзуар\", высота - 13 см. Ручная работа.');
INSERT INTO `items_i18n` VALUES ('59', '22', null, null, '2', '1389870805', '1389870805', null, null);
INSERT INTO `items_i18n` VALUES ('60', '22', null, null, '3', '1389870806', '1389870806', null, null);
INSERT INTO `items_i18n` VALUES ('61', '23', 'Традиционная осетинская чаша из керамики', '<p>Чаша традиционная осетинская. Материал - керамика. Отличный сувенир и подарок.</p>', '1', '1389870996', '1389870996', 'Керамика, чаша, традиции Осетии, посуда', 'Чаша традиционная осетинская. Материал - керамика. Отличный сувенир и подарок.');
INSERT INTO `items_i18n` VALUES ('62', '23', null, null, '2', '1389870996', '1389870996', null, null);
INSERT INTO `items_i18n` VALUES ('63', '23', null, null, '3', '1389870996', '1389870996', null, null);
INSERT INTO `items_i18n` VALUES ('64', '24', 'Традиционная осетинская чаша ', '<p>Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.</p>', '1', '1389871106', '1389871106', 'Чаша, керамика, традиции Осетии, осетины', 'Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.');
INSERT INTO `items_i18n` VALUES ('65', '24', null, null, '2', '1389871106', '1389871106', null, null);
INSERT INTO `items_i18n` VALUES ('66', '24', null, null, '3', '1389871106', '1389871106', null, null);
INSERT INTO `items_i18n` VALUES ('67', '25', 'Традиционная осетинская чаша ', '<p>Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.</p>', '1', '1389871370', '1389871370', 'Чаша, керамика, Осетия, традиции осетин', 'Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.');
INSERT INTO `items_i18n` VALUES ('68', '25', null, null, '2', '1389871370', '1389871370', null, null);
INSERT INTO `items_i18n` VALUES ('69', '25', null, null, '3', '1389871371', '1389871371', null, null);
INSERT INTO `items_i18n` VALUES ('70', '26', 'Традиционная осетинская чаша', '<p>Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.</p>', '1', '1389871469', '1389871469', 'Чаша, Осетия, традиции осетин, керамика, сувенир, подарок', 'Традиционная осетинская чаша. Материал - керамика. Отличный подарок и сувенир.');
INSERT INTO `items_i18n` VALUES ('71', '26', null, null, '2', '1389871470', '1389871470', null, null);
INSERT INTO `items_i18n` VALUES ('72', '26', null, null, '3', '1389871470', '1389871470', null, null);
INSERT INTO `items_i18n` VALUES ('73', '27', 'Осетинская ритуальная пивная чаша', '<p>Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 1,5 литра.</p>', '1', '1389871728', '1389871728', 'Ритуальная чаша, пивная чаша, традиции осетин, Осетия, керамика', 'Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 1,5 литра.');
INSERT INTO `items_i18n` VALUES ('74', '27', null, null, '2', '1389871728', '1389871728', null, null);
INSERT INTO `items_i18n` VALUES ('75', '27', null, null, '3', '1389871728', '1389871728', null, null);
INSERT INTO `items_i18n` VALUES ('76', '28', 'Традиционная осетинская ритуальная пивная чаша', '<p>Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 2 литра.</p>', '1', '1389871794', '1389871794', 'Ритуальная чаша, пивная чаша, Осетия, традиции осетин, керамика', 'Традиционная осетинская ритуальная пивная чаша. Материал - керамика. Ёмкость - 1,5 литра.');
INSERT INTO `items_i18n` VALUES ('77', '28', null, null, '2', '1389871794', '1389871794', null, null);
INSERT INTO `items_i18n` VALUES ('78', '28', null, null, '3', '1389871794', '1389871794', null, null);
INSERT INTO `items_i18n` VALUES ('79', '29', 'Топор и шлем ручной работы', '<p>Топор и шлем ручной работы. Топор сделан из бронзы. Длина топорища - 75 см.</p>\r\n<p>Шлем сделан из сплава металлов, использован конский волос. &nbsp;</p>\r\n<p>Возможно продажа отдельно шлема и топора</p>', '1', '1389876960', '1389877055', 'Оружие, шлем, топор, бронза, изделие из бронзы', 'Топор и шлем ручной работы. Топор сделан из бронзы. Длина топорища - 75 см.\r\nШлем сделан из сплава металлов, использован конский волос.  ');
INSERT INTO `items_i18n` VALUES ('80', '29', 'Axe and Helmet', '<p>Wonderfully crafted hand made axe and helmet made from bronze. Possible to buy helmet and axe separately.</p>', '2', '1389876960', '1389877112', 'Weapon, Axe, Helmet, Bronze', 'Wonderfully crafted hand made axe and helmet made from bronze. Possible to buy helmet and axe separately.');
INSERT INTO `items_i18n` VALUES ('81', '29', null, null, '3', '1389876961', '1389876961', null, null);
INSERT INTO `items_i18n` VALUES ('82', '30', '12-струнная осетинская арфа', '<p>Эксклюзивная 12-струнная осетинская арфа. Материал - дерево. Длина основания - 67 см.</p>', '1', '1389877267', '1389877267', 'Арфа, резьба по дереву, ручная работа, музыкальный инструмент, Осетия, культура Осетии', 'Эксклюзивная 12-струнная осетинская арфа. Материал - дерево. Длина основания - 67 см.');
INSERT INTO `items_i18n` VALUES ('83', '30', null, null, '2', '1389877267', '1389877267', null, null);
INSERT INTO `items_i18n` VALUES ('84', '30', null, null, '3', '1389877268', '1389877268', null, null);
INSERT INTO `items_i18n` VALUES ('85', '31', 'Доспехи ручной работы', '<p>Доспехи ручной работы. В комплект входят шлем, байдана и топор. Возможна продажа предметов по отдельности.</p>', '1', '1389877692', '1389877692', 'Доспехи, оружие, топор, шлем, байдана', 'Доспехи ручной работы. В комплект входят шлем, байдана и топор. Возможна продажа предметов по отдельности.');
INSERT INTO `items_i18n` VALUES ('86', '31', null, null, '2', '1389877692', '1389877692', null, null);
INSERT INTO `items_i18n` VALUES ('87', '31', null, null, '3', '1389877692', '1389877692', null, null);
INSERT INTO `items_i18n` VALUES ('88', '32', 'Сито ручной работы', '<p>Сито с ручной росписью. Используются акрил и масло. Цена указана за 1 предмет.</p>', '1', '1389878037', '1389878037', 'Сито, традиции осетин, акрил, масло, ручная работа', 'Сито с ручной росписью. Используются акрил и масло. Цена указана за 1 предмет.');
INSERT INTO `items_i18n` VALUES ('89', '32', null, null, '2', '1389878037', '1389878037', null, null);
INSERT INTO `items_i18n` VALUES ('90', '32', null, null, '3', '1389878037', '1389878037', null, null);
INSERT INTO `items_i18n` VALUES ('91', '33', 'Комплект папаха, кинжал, пояс, газыри', '<p>Комплект на мальчика. В комплект входят: папаха, пояс, газыри и кинжал. Цена указана за весь комплект. Возможна продажа предметов по отдельности.</p>', '1', '1389958457', '1389958457', 'Папаха, газыри, традиции осетин, кинжал, оружие', 'Комплект на мальчика. В комплект входят: папаха, пояс, газыри и кинжал. Цена указана за весь комплект. Возможна продажа предметов по отдельности.');
INSERT INTO `items_i18n` VALUES ('92', '33', null, null, '2', '1389958457', '1389958457', null, null);
INSERT INTO `items_i18n` VALUES ('93', '33', null, null, '3', '1389958457', '1389958457', null, null);
INSERT INTO `items_i18n` VALUES ('94', '34', 'Бронзовая статуэтка', '<p>Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.</p>', '1', '1389959044', '1389959044', 'Бронза, статуэтка, ручная работа, осетин, традиции Осетии', 'Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.');
INSERT INTO `items_i18n` VALUES ('95', '34', null, null, '2', '1389959044', '1389959044', null, null);
INSERT INTO `items_i18n` VALUES ('96', '34', null, null, '3', '1389959044', '1389959044', null, null);
INSERT INTO `items_i18n` VALUES ('97', '35', 'Бронзовая статуэтка', '<p>Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.</p>', '1', '1389959122', '1389959122', 'Бронза, статуэтка, ручная работа, мужчина, традиции Осетии, осетин', 'Бронзовая статуэтка ручной работы на подставке. Высота - 11 см.');
INSERT INTO `items_i18n` VALUES ('98', '35', null, null, '2', '1389959122', '1389959122', null, null);
INSERT INTO `items_i18n` VALUES ('99', '35', null, null, '3', '1389959122', '1389959122', null, null);
INSERT INTO `items_i18n` VALUES ('100', '36', 'Панно', '<p>Панно. Материал - медная проволока. Размеры - 34 см x 34 см.</p>', '1', '1389959492', '1389959492', 'Панно, медь, картина', 'Панно. Материал - медная проволока. Размеры - 34 см x 34 см.');
INSERT INTO `items_i18n` VALUES ('101', '36', null, null, '2', '1389959492', '1389959492', null, null);
INSERT INTO `items_i18n` VALUES ('102', '36', null, null, '3', '1389959492', '1389959492', null, null);
INSERT INTO `items_i18n` VALUES ('103', '37', 'Керамический сосуд', '<p>Керамический сосуд ручной работы. Высота - 50 см.</p>', '1', '1389959946', '1389959946', 'Посуда, керамика, традиции Осетии', 'Керамический сосуд ручной работы. Высота - 50 см.');
INSERT INTO `items_i18n` VALUES ('104', '37', null, null, '2', '1389959946', '1389959946', null, null);
INSERT INTO `items_i18n` VALUES ('105', '37', null, null, '3', '1389959946', '1389959946', null, null);
INSERT INTO `items_i18n` VALUES ('106', '38', 'Керамический сосуд', '<p>Керамический сосуд ручной работы. Высота - 34 см.</p>', '1', '1389960369', '1389960369', 'Керамика, посуда, ручная работа, традиции Осетии, осетины', 'Керамический сосуд ручной работы. Высота - 50 см.');
INSERT INTO `items_i18n` VALUES ('107', '38', null, null, '2', '1389960369', '1389960369', null, null);
INSERT INTO `items_i18n` VALUES ('108', '38', null, null, '3', '1389960369', '1389960369', null, null);
INSERT INTO `items_i18n` VALUES ('109', '39', 'Керамический сосуд', '<p>Керамический сосуд ручной работы. Высота - 50 см.</p>', '1', '1389960815', '1389960815', 'Керамика, посуда, сосуд, ручная работа, традиции осетин', 'Керамический сосуд ручной работы. Высота - 50 см.');
INSERT INTO `items_i18n` VALUES ('110', '39', null, null, '2', '1389960815', '1389960815', null, null);
INSERT INTO `items_i18n` VALUES ('111', '39', null, null, '3', '1389960815', '1389960815', null, null);
INSERT INTO `items_i18n` VALUES ('112', '40', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1390157652', '1390157652', 'Нож, ручная работа, оружие', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('113', '40', null, null, '2', '1390157652', '1390157652', null, null);
INSERT INTO `items_i18n` VALUES ('114', '40', null, null, '3', '1390157652', '1390157652', null, null);
INSERT INTO `items_i18n` VALUES ('115', '41', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1390157789', '1390157789', 'Нож, оружие, ручная работа', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('116', '41', null, null, '2', '1390157789', '1390157789', null, null);
INSERT INTO `items_i18n` VALUES ('117', '41', null, null, '3', '1390157789', '1390157789', null, null);
INSERT INTO `items_i18n` VALUES ('118', '42', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1390157876', '1390157876', 'Нож, оружие, ручная работа', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('119', '42', null, null, '2', '1390157876', '1390157876', null, null);
INSERT INTO `items_i18n` VALUES ('120', '42', null, null, '3', '1390157876', '1390157876', null, null);
INSERT INTO `items_i18n` VALUES ('121', '43', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1390157960', '1390157960', 'Оружие, нож, охотничий нож, ручная работа', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('122', '43', null, null, '2', '1390157960', '1390157960', null, null);
INSERT INTO `items_i18n` VALUES ('123', '43', null, null, '3', '1390157960', '1390157960', null, null);
INSERT INTO `items_i18n` VALUES ('124', '44', 'Кинжал ', '<p>Кинжал ручной работы</p>', '1', '1390158055', '1390158055', 'Кинжал, оружие, ручная работа', 'Кинжал ручной работы');
INSERT INTO `items_i18n` VALUES ('125', '44', null, null, '2', '1390158055', '1390158055', null, null);
INSERT INTO `items_i18n` VALUES ('126', '44', null, null, '3', '1390158055', '1390158055', null, null);
INSERT INTO `items_i18n` VALUES ('127', '45', 'Меч с ножнами', '<p>Меч ручной работы с ножнами</p>', '1', '1390158164', '1396128879', 'Меч, ножны, оружие, ручная работа', 'Меч ручной работы с ножнами');
INSERT INTO `items_i18n` VALUES ('128', '45', null, null, '2', '1390158164', '1390158164', null, null);
INSERT INTO `items_i18n` VALUES ('129', '45', null, null, '3', '1390158164', '1390158164', null, null);
INSERT INTO `items_i18n` VALUES ('130', '46', 'Комплект лук со стрелами', '<p>Комплект лук со стрелами ручной работы. Возможна продажа по отдельности.</p>', '1', '1390158321', '1390158321', 'Лук, оружие, стрелы, ', 'Комплект лук со стрелами ручной работы. Возможна продажа по отдельности.');
INSERT INTO `items_i18n` VALUES ('131', '46', null, null, '2', '1390158321', '1390158321', null, null);
INSERT INTO `items_i18n` VALUES ('132', '46', null, null, '3', '1390158321', '1390158321', null, null);
INSERT INTO `items_i18n` VALUES ('133', '47', 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', '1', '1390158415', '1390158415', 'Нож, оружие, ручная работа', 'Охотничий нож ручной работы.');
INSERT INTO `items_i18n` VALUES ('134', '47', null, null, '2', '1390158415', '1390158415', null, null);
INSERT INTO `items_i18n` VALUES ('135', '47', null, null, '3', '1390158415', '1390158415', null, null);
INSERT INTO `items_i18n` VALUES ('136', '48', 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', '1', '1390158492', '1390158492', 'Нож, охота, ручная работа', 'Охотничий нож ручной работы.');
INSERT INTO `items_i18n` VALUES ('137', '48', null, null, '2', '1390158492', '1390158492', null, null);
INSERT INTO `items_i18n` VALUES ('138', '48', null, null, '3', '1390158492', '1390158492', null, null);
INSERT INTO `items_i18n` VALUES ('139', '49', 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', '1', '1390158564', '1390158564', 'Нож, охотничий нож, ручная работа', 'Охотничий нож ручной работы.');
INSERT INTO `items_i18n` VALUES ('140', '49', null, null, '2', '1390158564', '1390158564', null, null);
INSERT INTO `items_i18n` VALUES ('141', '49', null, null, '3', '1390158564', '1390158564', null, null);
INSERT INTO `items_i18n` VALUES ('142', '50', 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', '1', '1390158655', '1390158655', 'Нож, охота, охотничий нож, ручная работа', 'Охотничий нож ручной работы.');
INSERT INTO `items_i18n` VALUES ('143', '50', null, null, '2', '1390158655', '1390158655', null, null);
INSERT INTO `items_i18n` VALUES ('144', '50', null, null, '3', '1390158655', '1390158655', null, null);
INSERT INTO `items_i18n` VALUES ('145', '51', 'Охотничий нож', '<p>Охотничий нож ручной работы.</p>', '1', '1390158712', '1390158712', 'Охотничий нож, нож, охота, ручная работа', 'Охотничий нож ручной работы.');
INSERT INTO `items_i18n` VALUES ('146', '51', null, null, '2', '1390158712', '1390158712', null, null);
INSERT INTO `items_i18n` VALUES ('147', '51', null, null, '3', '1390158712', '1390158712', null, null);
INSERT INTO `items_i18n` VALUES ('148', '52', 'Меч с ножнами', '<p>Отличный меч ручной работы с ножнами</p>', '1', '1395498410', '1395498410', 'Меж, оружие, ножны', 'Меж ручной работы с ножнами');
INSERT INTO `items_i18n` VALUES ('149', '52', null, null, '2', '1395498410', '1395498410', null, null);
INSERT INTO `items_i18n` VALUES ('150', '52', null, null, '3', '1395498410', '1395498410', null, null);
INSERT INTO `items_i18n` VALUES ('151', '53', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1395498604', '1395498604', 'Нож, ручная работа, охотничий нож', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('152', '53', null, null, '2', '1395498604', '1395498604', null, null);
INSERT INTO `items_i18n` VALUES ('153', '53', null, null, '3', '1395498604', '1395498604', null, null);
INSERT INTO `items_i18n` VALUES ('154', '54', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1395573567', '1395573567', 'Охотничий нож, оружие, ручная работа', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('155', '54', null, null, '2', '1395573567', '1395573567', null, null);
INSERT INTO `items_i18n` VALUES ('156', '54', null, null, '3', '1395573567', '1395573567', null, null);
INSERT INTO `items_i18n` VALUES ('157', '55', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1395573708', '1395573744', 'Нож, ручная работа, охотничий нож', 'Охотничий нож ручной работ');
INSERT INTO `items_i18n` VALUES ('158', '55', null, null, '2', '1395573708', '1395573708', null, null);
INSERT INTO `items_i18n` VALUES ('159', '55', null, null, '3', '1395573708', '1395573708', null, null);
INSERT INTO `items_i18n` VALUES ('160', '56', 'Охотничий нож', '<p>Охотничий нож ручной работы</p>', '1', '1395597857', '1395597857', 'Охотничий нож, нож, ручная работа', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('161', '56', null, null, '2', '1395597857', '1395597857', null, null);
INSERT INTO `items_i18n` VALUES ('162', '56', null, null, '3', '1395597857', '1395597857', null, null);
INSERT INTO `items_i18n` VALUES ('163', '57', 'Ремень', '<p>Ремень из натуральной кожи, ручная работа</p>', '1', '1395597965', '1395597965', 'Ремень, одежда, кожа, ручная работа', 'Ремень из натуральной кожи, ручная работа');
INSERT INTO `items_i18n` VALUES ('164', '57', null, null, '2', '1395597965', '1395597965', null, null);
INSERT INTO `items_i18n` VALUES ('165', '57', null, null, '3', '1395597965', '1395597965', null, null);
INSERT INTO `items_i18n` VALUES ('166', '58', 'Охотничий нож и футляр', '<p>Охотничий нож ручной работы. В комплекте идёт футляр из древесины.</p>', '1', '1395598059', '1396128297', 'Охотничий нож, футляр, древесина, ручная работа', 'Охотничий нож ручной работы. В комплекте идёт футляр из древесины.');
INSERT INTO `items_i18n` VALUES ('167', '58', null, null, '2', '1395598059', '1395598059', null, null);
INSERT INTO `items_i18n` VALUES ('168', '58', null, null, '3', '1395598059', '1395598059', null, null);
INSERT INTO `items_i18n` VALUES ('169', '59', 'Охотничий нож ', '<p>Охотничий нож ручной работы</p>', '1', '1395598157', '1395598157', 'Охотничий нож, нож, ручная работа, оружие', 'Охотничий нож ручной работы');
INSERT INTO `items_i18n` VALUES ('170', '59', null, null, '2', '1395598157', '1395598157', null, null);
INSERT INTO `items_i18n` VALUES ('171', '59', null, null, '3', '1395598157', '1395598157', null, null);
INSERT INTO `items_i18n` VALUES ('172', '60', 'Охотничий нож и ножны', '<p>Охотничий нож ручной работы и ножны в комплекте</p>', '1', '1395598247', '1395598247', 'Нож, ножны, охотничий нож, ручная работа', 'Охотничий нож ручной работы и ножны в комплекте');
INSERT INTO `items_i18n` VALUES ('173', '60', null, null, '2', '1395598247', '1395598247', null, null);
INSERT INTO `items_i18n` VALUES ('174', '60', null, null, '3', '1395598247', '1395598247', null, null);
INSERT INTO `items_i18n` VALUES ('175', '61', 'Охотничий нож и ножны', '<p>Охотничий нож ручной работы и ножны в комплекте</p>', '1', '1395598352', '1395598352', 'Нож, ножны, охотничий нож, ручная работа', 'Охотничий нож ручной работы и ножны в комплекте');
INSERT INTO `items_i18n` VALUES ('176', '61', null, null, '2', '1395598352', '1395598352', null, null);
INSERT INTO `items_i18n` VALUES ('177', '61', null, null, '3', '1395598352', '1395598352', null, null);
INSERT INTO `items_i18n` VALUES ('178', '62', 'Меч и ножны', '<p>Меч ручной работы и ножны в комплекте</p>', '1', '1395598504', '1395598504', 'Меч, ручная работа, ножны', 'Меч ручной работы и ножны в комплекте');
INSERT INTO `items_i18n` VALUES ('179', '62', null, null, '2', '1395598504', '1395598504', null, null);
INSERT INTO `items_i18n` VALUES ('180', '62', null, null, '3', '1395598504', '1395598504', null, null);
INSERT INTO `items_i18n` VALUES ('181', '63', 'Лук, стрелы, охотничий нож и ремень', '<p>Комплект, состоящий из лука со стрелами, охотничьего ножа и ремня. Возможна продажа предметов по отдельности.</p>', '1', '1395598672', '1395598672', 'Лук, стрелы, ремень, нож, кожа, ручная работа', 'Комплект, состоящий из лука со стрелами, охотничьего ножа и ремня. Возможна продажа предметов по отдельности.');
INSERT INTO `items_i18n` VALUES ('182', '63', null, null, '2', '1395598672', '1395598672', null, null);
INSERT INTO `items_i18n` VALUES ('183', '63', null, null, '3', '1395598672', '1395598672', null, null);
INSERT INTO `items_i18n` VALUES ('184', '64', 'Кинжал и ножны', '<p>Кинжал ручной работы и ножны в комплекте</p>', '1', '1395598802', '1395598802', 'Кинжал, ножны, ручная работа, оружие', 'Кинжал ручной работы и ножны в комплекте');
INSERT INTO `items_i18n` VALUES ('185', '64', null, null, '2', '1395598802', '1395598802', null, null);
INSERT INTO `items_i18n` VALUES ('186', '64', null, null, '3', '1395598802', '1395598802', null, null);
INSERT INTO `items_i18n` VALUES ('187', '65', 'Охотничий нож и ножны', '<p>Охотничий нож ручной работы и ножны в комплекте</p>', '1', '1395598962', '1395598962', 'Нож, ножны, ручная работа', 'Охотничий нож ручной работы и ножны в комплекте');
INSERT INTO `items_i18n` VALUES ('188', '65', null, null, '2', '1395598962', '1395598962', null, null);
INSERT INTO `items_i18n` VALUES ('189', '65', null, null, '3', '1395598962', '1395598962', null, null);
INSERT INTO `items_i18n` VALUES ('190', '66', 'Скифское ожерелье', '<p>Скифское ожерелье ручной работы</p>', '1', '1395599022', '1396127851', 'Ожерелье, украшение, скифское ожерелье, ручная работа', 'Скифское ожерелье ручной работы');
INSERT INTO `items_i18n` VALUES ('191', '66', null, null, '2', '1395599022', '1395599022', null, null);
INSERT INTO `items_i18n` VALUES ('192', '66', null, null, '3', '1395599022', '1395599022', null, null);
INSERT INTO `items_i18n` VALUES ('193', '67', 'Нож и ножны', '<p>Нож и ножны ручной работы</p>', '1', '1395599155', '1395599155', 'Нож, ручная работа, ножны', 'Нож и ножны ручной работы');
INSERT INTO `items_i18n` VALUES ('194', '67', null, null, '2', '1395599155', '1395599155', null, null);
INSERT INTO `items_i18n` VALUES ('195', '67', null, null, '3', '1395599155', '1395599155', null, null);
INSERT INTO `items_i18n` VALUES ('196', '68', 'Декоративная подставка и кинжалы', '<p>Декоративная подставка в форме оленей и два кинжала в комплекте</p>', '1', '1395599249', '1395599249', 'Кинжалы, декоративная подставка, комплект', 'Декоративная подставка в форме оленей и два кинжала в комплекте');
INSERT INTO `items_i18n` VALUES ('197', '68', null, null, '2', '1395599249', '1395599249', null, null);
INSERT INTO `items_i18n` VALUES ('198', '68', null, null, '3', '1395599249', '1395599249', null, null);
INSERT INTO `items_i18n` VALUES ('199', '69', 'Лук, стрелы, охотничий нож и ремень', '<p>Комплект состоит из лука, стрел, охотничьего ножа и ремня. Всё - ручная работа. Возможна продажа по отдельности</p>', '1', '1395599398', '1395599398', 'Лук, охотничий нож, ремень, стрелы, ручная работа', 'Комплект состоит из лука, стрел, охотничьего ножа и ремня. Всё - ручная работа. Возможна продажа по отдельности');
INSERT INTO `items_i18n` VALUES ('200', '69', null, null, '2', '1395599398', '1395599398', null, null);
INSERT INTO `items_i18n` VALUES ('201', '69', null, null, '3', '1395599398', '1395599398', null, null);
INSERT INTO `items_i18n` VALUES ('202', '70', 'Декоративная ширма из натуральной кожи', '<p>Декоративная ширма из натуральной кожи. Ручная работа.</p>', '1', '1395599524', '1395599524', 'Ширма, натуральная кожа, ручная работа', 'Декоративная ширма из натуральной кожи. Ручная работа.');
INSERT INTO `items_i18n` VALUES ('203', '70', null, null, '2', '1395599524', '1395599524', null, null);
INSERT INTO `items_i18n` VALUES ('204', '70', null, null, '3', '1395599524', '1395599524', null, null);

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('app', 'default', '001_create_articles');
INSERT INTO `migration` VALUES ('app', 'default', '002_create_articles_i18n');
INSERT INTO `migration` VALUES ('app', 'default', '003_create_articles_types');
INSERT INTO `migration` VALUES ('app', 'default', '004_create_articles_languages');
INSERT INTO `migration` VALUES ('app', 'default', '005_create_sliders');
INSERT INTO `migration` VALUES ('app', 'default', '006_create_items');
INSERT INTO `migration` VALUES ('app', 'default', '007_create_items_i18ns');
INSERT INTO `migration` VALUES ('app', 'default', '008_create_items_categories');
INSERT INTO `migration` VALUES ('app', 'default', '009_add_visible_to_items');
INSERT INTO `migration` VALUES ('app', 'default', '010_create_settings');
INSERT INTO `migration` VALUES ('app', 'default', '011_add_keywordsdescription_to_items_i18n');
INSERT INTO `migration` VALUES ('app', 'default', '012_create_callmes');
INSERT INTO `migration` VALUES ('app', 'default', '013_create_orders');
INSERT INTO `migration` VALUES ('app', 'default', '014_create_orders_items');
INSERT INTO `migration` VALUES ('app', 'default', '015_add_count_to_orders_items');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_comments` text,
  `price` float DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `payed` int(1) DEFAULT '0',
  `operator_comments` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('5', 'кенкен', 'кенкен', 'alex.mon1989@gmail.com', 'кенкен', '', '51590', null, '0', null, '1415712910', null);

-- ----------------------------
-- Table structure for `orders_items`
-- ----------------------------
DROP TABLE IF EXISTS `orders_items`;
CREATE TABLE `orders_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_items
-- ----------------------------
INSERT INTO `orders_items` VALUES ('9', '5', '37', '2');
INSERT INTO `orders_items` VALUES ('10', '5', '19', '1');

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'exchange_rate', '33', '1384180046', '1384181879');
INSERT INTO `settings` VALUES ('2', 'telephone', '+7(918)8253370', '1384180046', '1384200974');
INSERT INTO `settings` VALUES ('3', 'email', 'info@aryon.ru', '1384180046', '1384265259');
INSERT INTO `settings` VALUES ('4', 'catalog_keywords_ru', '', '1384180046', '1384180046');
INSERT INTO `settings` VALUES ('5', 'catalog_description_ru', '', '1384180046', '1384180046');
INSERT INTO `settings` VALUES ('6', 'catalog_keywords_en', '', '1384180046', '1384180046');
INSERT INTO `settings` VALUES ('7', 'catalog_description_en', '', '1384180046', '1384180046');
INSERT INTO `settings` VALUES ('8', 'catalog_keywords_os', '', null, null);
INSERT INTO `settings` VALUES ('9', 'catalog_description_en', '', null, null);
INSERT INTO `settings` VALUES ('10', 'news_keywords_ru', '', null, null);
INSERT INTO `settings` VALUES ('11', 'news_description_ru', '', null, null);
INSERT INTO `settings` VALUES ('12', 'news_keywords_en', '', null, null);
INSERT INTO `settings` VALUES ('13', 'news_description_ru', '', null, null);
INSERT INTO `settings` VALUES ('14', 'news_keywords_os', '', null, null);
INSERT INTO `settings` VALUES ('15', 'news_description_os', '', null, null);

-- ----------------------------
-- Table structure for `sliders`
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES ('4', 'e84c61a423c4a5a2a4308eac9dec9298.jpg', 'http://www.aryon.ru/ru/catalog', '3', '1384265932', '1384265932');
INSERT INTO `sliders` VALUES ('5', '4ed7397e046d09d421288c4d17b7c142.jpg', 'http://aryon.ru/ru/about', '4', '1385023613', '1385023613');
INSERT INTO `sliders` VALUES ('6', '1581abffe6ebc5b13a0b8648655acff7.jpg', 'contacts', '5', '1385023815', '1385023815');
INSERT INTO `sliders` VALUES ('7', '1ea9f6f590b47c9ce6ad8af2a1a0cb68.jpg', 'ru/catalog/index/6', '6', '1389867820', '1389867820');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'ZNyzRBToP3ASC3qtWq8u+bgmioXJ823138mi5CTRZrM=', '1', 'alex.mon1989@gmail.com', '1415652249', 'b7fb8ee01e2472829b534805704676e376451d5b', 'a:0:{}', '1384939358', '1384941000');

-- ----------------------------
-- Table structure for `users_clients`
-- ----------------------------
DROP TABLE IF EXISTS `users_clients`;
CREATE TABLE `users_clients` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_clients
-- ----------------------------

-- ----------------------------
-- Table structure for `users_providers`
-- ----------------------------
DROP TABLE IF EXISTS `users_providers`;
CREATE TABLE `users_providers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_providers
-- ----------------------------

-- ----------------------------
-- Table structure for `users_scopes`
-- ----------------------------
DROP TABLE IF EXISTS `users_scopes`;
CREATE TABLE `users_scopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_scopes
-- ----------------------------

-- ----------------------------
-- Table structure for `users_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `users_sessions`;
CREATE TABLE `users_sessions` (
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
  KEY `oauth_sessions_ibfk_1` (`client_id`),
  CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_sessions
-- ----------------------------

-- ----------------------------
-- Table structure for `users_sessionscopes`
-- ----------------------------
DROP TABLE IF EXISTS `users_sessionscopes`;
CREATE TABLE `users_sessionscopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`),
  KEY `access_token` (`access_token`),
  KEY `scope` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_sessionscopes
-- ----------------------------
