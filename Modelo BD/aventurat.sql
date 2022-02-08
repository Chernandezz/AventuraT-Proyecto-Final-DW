-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2022 a las 17:29:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Base de datos: `aventurat`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
    `id` int (11) NOT NULL,
    `titulo` varchar(60) DEFAULT NULL,
    `precio` decimal (10,
        2) DEFAULT NULL,
    `imagen` varchar(200) DEFAULT NULL,
    `descripcion` longtext DEFAULT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `titulo`, `precio`, `imagen`, `descripcion`)
        VALUES (2, 'Medellin', '458000.00', '181b3e461cc00b7b74ddcc195d16a2aa.png', 'asdasdas'), (3, 'san Andres', '22451616.00', '6360b8a25ff1d80769a5fbbb60c90b53.png', 'Hola mundo'), (4, 'Playas Milagrosas', '5600000.00', '27c1684662e92758a06a24cff1de501e.png', 'Viaje a unas playas hermosas, magicas');
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
    `id` int (11) NOT NULL,
    `titulo` varchar(60) DEFAULT NULL,
    `precio` decimal (10,
        2) DEFAULT NULL,
    `imagen` varchar(200) DEFAULT NULL,
    `descripcion` longtext DEFAULT NULL,
    `cantidad` int (5) DEFAULT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `cantidad`)
        VALUES (5, 'Mochila de viaje', '250000.00', 'e191f7aea17b6ebdef8a07ecb2d3aa92.png', 'Hermosa Mochila viajera', 4), (6, 'Navaja de viaje', '98000.00', '732e930c19fa58d92b98f0a983694f94.png', 'Navaja muy afilada', 3), (7, 'Gafas de nieve', '86000.00', '8125424295485f46ab588c4080513762.png', 'Increibles gafas para la nieve reforzadas', 8), (8, 'Botas para la selva', '210000.00', '7ecf90064b54ff982e3bfe45d0a57dca.png', 'Muy comodas botas para la selva o cualquier lugar', 3), (9, 'Parrilla aventurera', '150000.00', 'bd2e84a503aa88fb3a846f3dd45728fb.png', 'Parrilla para un viaje de aventura', 5), (10, 'Prueba Producto', '12000.00', 'c8179c6931201402ac570889e4de1f21.png', 'Magia', 3);
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
    `id` int (11) NOT NULL,
    `email` varchar(45) DEFAULT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id`, `email`)
        VALUES (1, 'adua@gmauk.com'), (2, 'luis@gmail.com');
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
    `id` int (11) NOT NULL,
    `email` varchar(50) DEFAULT NULL,
    `password` char(60) DEFAULT NULL,
    `usuario` varchar(45) DEFAULT NULL,
    `tipousuario` varchar(45) DEFAULT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `usuario`, `tipousuario`)
        VALUES (1, 'chernandez@unal.com', '$2y$10$Q1GNV.HiKPkIgP5oNVbLxOHi9CwayByFIBrikjqn8h3oQP/Eu5TcK', 'cristian', 'usuario'), (3, 'carolina@gmail.com', '$2y$10$uyHvNDrS2MPRFWCw0RjTpeXC6HLsJSFFYXriX6/eHQ3fj/OQkH3tm', 'Carolina', 'admin'), (4, 'carlos@gmail.com', '$2y$10$yruP12WridrCTv6Pep8AoeuN63/2zMaXo3isQGQPqO0u8OW7SYkRS', 'carlos', 'usuario');
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `paquetes`
--

ALTER TABLE `paquetes`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--

ALTER TABLE `productos`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscripciones`
--

ALTER TABLE `suscripciones`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--

ALTER TABLE `usuarios`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `paquetes`
--

ALTER TABLE `paquetes` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT de la tabla `productos`
--

ALTER TABLE `productos` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--

ALTER TABLE `suscripciones` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--

ALTER TABLE `usuarios` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
