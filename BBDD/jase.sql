-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 12:55:38
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `email`, `post_id`, `created_at`, `status`) VALUES
(1, 'cblondellea', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', '', 1, '0000-00-00 00:00:00', 1),
(2, 'tsiggin0', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', '', 2, '0000-00-00 00:00:00', 0),
(3, 'fusherb', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', '', 3, '0000-00-00 00:00:00', 0),
(4, 'tadess2', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '', 4, '0000-00-00 00:00:00', 0),
(5, 'fhancox5', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsa', '', 5, '0000-00-00 00:00:00', 0),
(6, 'jinnett8', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '', 6, '0000-00-00 00:00:00', 0),
(7, 'gandreolli3', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula ', '', 7, '0000-00-00 00:00:00', 0),
(8, 'ccostin1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.', '', 8, '0000-00-00 00:00:00', 0),
(9, 'jdabbsc', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', '', 9, '0000-00-00 00:00:00', 0),
(10, 'jadey4', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', '', 10, '0000-00-00 00:00:00', 0),
(11, 'rdowsing7', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', '', 11, '0000-00-00 00:00:00', 0),
(12, 'lebben9', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', '', 12, '0000-00-00 00:00:00', 0),
(13, 'jbrimham6', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', '', 13, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brief` varchar(511) NOT NULL,
  `content` text NOT NULL,
  `image` mediumblob NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_on` date NOT NULL,
  `last_login` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `rol`) VALUES
(1, 'tsiggin0', '12345678', 'info@ventabiok.com', '0000-00-00', '2022-11-15', 0, 'Nafd', 'Jimenez Rivera', 1),
(2, 'ccostin1', 'OsyBg9', 'ccostin1@posterous.com', '0000-00-00', '0000-00-00', 1, 'Chaddie', 'Costin', 1),
(3, 'tadess2', 'uDIgeXD', 'tadess2@digg.com', '0000-00-00', '2022-11-15', 0, 'Teddy', 'Adess', 0),
(4, 'gandreolli3', 'MAnC4eXeadL6', 'gandreolli3@canalblog.com', '0000-00-00', '0000-00-00', 0, 'Guss', 'Andreolli', 0),
(5, 'jadey4', 'vizcpGZ', 'jadey4@yellowpages.com', '0000-00-00', '0000-00-00', 0, 'Jamie', 'Adey', 0),
(6, 'fhancox5', 'htCrIHxdp', 'fhancox5@mac.com', '0000-00-00', '0000-00-00', 0, 'Fayette', 'Hancox', 0),
(7, 'jbrimham6', 'ijZI4xN', 'jbrimham6@miibeian.gov.cn', '0000-00-00', '0000-00-00', 0, 'Janifer', 'Brimham', 0),
(8, 'rdowsing7', 's9wPzinNGl', 'rdowsing7@sphinn.com', '0000-00-00', '0000-00-00', 0, 'Randi', 'Dowsing', 0),
(9, 'jinnett8', 'nj9cbFpe', 'jinnett8@pcworld.com', '0000-00-00', '0000-00-00', 0, 'Juliann', 'Innett', 0),
(10, 'lebben9', '8MFB9RTPgmu', 'lebben9@pagesperso-orange.fr', '0000-00-00', '0000-00-00', 0, 'Livvie', 'Ebben', 0),
(11, 'cblondellea', 'e8dN8k', 'cblondellea@surveymonkey.com', '0000-00-00', '0000-00-00', 0, 'Claus', 'Blondelle', 0),
(12, 'fusherb', '4TDuxgAuYWRf', 'fusherb@csmonitor.com', '0000-00-00', '0000-00-00', 0, 'Fernande', 'Usher', 0),
(13, 'jdabbsc', 'gm3we584', 'jdabbsc@ed.gov', '0000-00-00', '0000-00-00', 0, 'Jenny', 'Dabbs', 0),
(14, 'tdarnelld', 'qJCQP9MSlNH', 'tdarnelld@army.mil', '0000-00-00', '0000-00-00', 0, 'Tarra', 'Darnell', 0),
(15, 'pattenbarrowe', 'QACiDJyFwckB', 'pattenbarrowe@theglobeandmail.com', '0000-00-00', '0000-00-00', 0, 'Peder', 'Attenbarrow', 0),
(16, 'wpoggf', '63ImoCFkhp', 'wpoggf@ameblo.jp', '0000-00-00', '0000-00-00', 0, 'Willow', 'Pogg', 0),
(17, 'cappleyardg', 'CZyCQwMN', 'cappleyardg@apache.org', '0000-00-00', '0000-00-00', 0, 'Celestyn', 'Appleyard', 0),
(18, 'rshipstonh', 'u6ELtS4wK', 'rshipstonh@mediafire.com', '0000-00-00', '0000-00-00', 0, 'Rice', 'Shipston', 0),
(19, 'abussti', 'rtAcehL', 'abussti@eventbrite.com', '0000-00-00', '0000-00-00', 0, 'Aili', 'Busst', 0),
(20, 'cburchattj', 'Xn7wlJP2gX', 'cburchattj@va.gov', '0000-00-00', '0000-00-00', 0, 'Cammy', 'Burchatt', 0),
(21, 'ikbsm', '12345678', 'anderss6@gmail.com', '2022-11-14', '2022-11-14', 1, 'Ander', 'Jimenez Rivera', 1),
(22, 'andoni', '12345678', 'andoni@gmail.com', '2022-11-14', '2022-11-14', 0, 'Andoni', 'Jimenez Rivera', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `name_3` (`name`),
  ADD UNIQUE KEY `name_4` (`name`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `name` (`name`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `user_id` (`userId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
