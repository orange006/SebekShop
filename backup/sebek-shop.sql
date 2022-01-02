-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2020 г., 18:18
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sebek-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clothes`
--

CREATE TABLE `clothes` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `material` varchar(50) NOT NULL,
  `size` varchar(5) NOT NULL,
  `img` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clothes`
--

INSERT INTO `clothes` (`id`, `name`, `price`, `description`, `material`, `size`, `img`) VALUES
(1, 'Худи «Бандитизм» 001к', '1500 uah/56 usd', 'Качество топовое. Ткань без/с начёсом на выбор. Лимитированный тираж. Худи для каждого.', 'хлопок 95%, эластан 5%', 'S M L', 'clothes/huddie_band.jpg'),
(2, 'Худи «Картина с себеком» белый 001к', '1500 uah/56 usd', 'Милое худи для настоящих чикуль. Можно носить как каждый день, так и для спорта.', 'хлопок 95%, эластан 5%', 'S M L', 'clothes/huddie_sebek.jpg'),
(3, 'Футболка «Картина с себеком» белая 001к', '500 uah/19 usd', 'Девчата, налетайте на крутые футболки. Удиви своих друзей крутым мерчем.', 'хлопок 95%, эластан 5%', 'S M L', 'clothes/t-shirt_sebek_wh.jpg'),
(4, 'Футболка «Картина с себеком» чёрная 001к', '500 uah/19 usd', 'Девчата, налетайте на крутые футболки. Удиви своих друзей крутым мерчем.', 'хлопок 95%, эластан 5%', 'S M', 'clothes/t-shirt_sebek_bl.jpg'),
(5, 'Футболка «Котлован» 001к', '500 uah/19 usd', 'Крутые футболочки с крутым принтом. Не будь псом - купи мерч.', 'хлопок 95%, эластан 5%', 'S M', 'clothes/t-shirt_kotlovan.jpg'),
(6, 'Худи «СЕБЕК 01» 001к', '1500 uah/56 usd', 'Качественный худос за отличную цену. Все девчата твои.', 'хлопок 95%, эластан 5%', 'S M L', 'clothes/huddie_sebek01K.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `covers`
--

CREATE TABLE `covers` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `material` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `covers`
--

INSERT INTO `covers` (`id`, `name`, `price`, `description`, `material`, `img`) VALUES
(1, 'Кейс «Для Девчат» 001к', '350 uah/13 usd', 'Крутой чехол для крутых девчат, на все модели айфонов.', 'силикон/матовый пластик', 'covers/case_dlya_devchat.png'),
(2, 'Кейс «Бандитизм» 001к', '350 uah/13 usd', 'Крутой чехол для крутых пацанов, на все модели айфонов.', 'матовый пластик', 'covers/case_band.png'),
(3, 'Кейс «Котлован» 001к', '350 uah/13 usd', 'Чехол на все модели айфонов.', 'пластик', 'covers/case_kotlovan.png'),
(4, 'Кейс «Make money» 001к', '350 uah/13 usd', 'Чехол на все модели айфонов.', 'силикон/матовый пластик', 'covers/case_make_money.png'),
(5, 'Кейс «Себек» прозрачный 001к', '350 uah/13 usd', 'Чехол на все модели айфонов.', 'силикон', 'covers/case_sebek.png'),
(6, 'Кейс «Себек» 001к', '350 uah/13 usd', 'Чехол на все модели айфонов.', 'матовый пластик/силикон', 'covers/case_sebek_bl.png');

-- --------------------------------------------------------

--
-- Структура таблицы `mouthpieces`
--

CREATE TABLE `mouthpieces` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `material` varchar(50) NOT NULL,
  `img` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mouthpieces`
--

INSERT INTO `mouthpieces` (`id`, `name`, `price`, `description`, `material`, `img`) VALUES
(1, 'Персональный мундштук \"SebekWhite\"', '300 uah/11 usd', 'Лучшего подарка для ценителей кальяна - не придумать. Мундштук в виде Себека это #стильномодномолодёжно. Ходят легенды, что с этим мундштуком кальяны дымятся ещё сильнее ', 'керамика+силикон', 'smoke/sebek_head_wh.jpg'),
(2, 'Персональный мундштук \"SebekBlack\"', '300 uah/11 usd', 'Переходи на тёмную сторону - заказывай Чёрного Себека, он ждёт именно тебя. Скрасит одиночество, и никогда не откажется покурить дымный кальян.', 'керамика+силикон', 'smoke/sebek_head_bl.jpg'),
(3, 'Персональный мундштук \"SebekGold\"', '300 uah/11 usd', 'Gold для истинных гурманов кальянных балдежей. С таким мундштуков будете всегда в центре внимания.', 'керамика+силикон', 'smoke/sebek_head_gld.jpg'),
(4, 'Персональний мундштук \"SebekRose\"', '300 uah/11 usd', 'Для самых красивых девчат у нас есть лимитированная серия мундштука SebekRose. Яркий, красивый - точно не оставит равнодушным представительниц нежного пола.', 'керамика+силикон', 'smoke/sebek_head_rs.jpg'),
(5, 'Персональний мундштук \"BigBoss\"', '300 uah/11 usd', 'Хочешь почувствовать себя королем мира? Заказывай мундштук “01k” с лентой самый большой начальник. И будь в Топе.', 'керамика+силикон', 'smoke/big_boss.jpg'),
(6, 'Персональний мундштук \"WhiteBottle\"', '300 uah/11 usd', 'Отличное сочетание оригинальности, стиля и лаконичности. Такой мундштук украсит Ваш образ в любой ситуации.', 'силикон', 'smoke/wh_bottle.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mouthpieces`
--
ALTER TABLE `mouthpieces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `covers`
--
ALTER TABLE `covers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `mouthpieces`
--
ALTER TABLE `mouthpieces`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
