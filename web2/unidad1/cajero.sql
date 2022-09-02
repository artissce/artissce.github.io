-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2022 a las 18:31:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cajero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulas`
--

CREATE TABLE `articulas` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulas`
--

INSERT INTO `articulas` (`id`, `cantidad`, `nombre`, `precio`) VALUES
(3, 4, 'manzana', 15.6),
(4, 6, 'papa', 5.59),
(5, 5, 'sandia', 20.4),
(6, 6, 'shampoo', 35.2),
(7, 2, 'papel de baño', 45.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arts_x_factura`
--

CREATE TABLE `arts_x_factura` (
  `folio_fact` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arts_x_factura`
--

INSERT INTO `arts_x_factura` (`folio_fact`, `id_art`, `cantidad`, `costo_total`) VALUES
(1, 4, 4, 345),
(2, 3, 3, 457),
(3, 7, 6, 343),
(4, 5, 5, 123),
(5, 6, 3, 234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `rfc` varchar(15) NOT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`rfc`, `correo`, `nombre`) VALUES
('VECJ880326 XXA', 'Ana@gmail.com', 'Ana'),
('VECJ880326 XXT', 'Pedro@gmail.com', 'Pedro'),
('VECJ880326 XXU', 'Pablo@hotmail.com', 'Pablo'),
('VECJ880326 XXX', 'si@gmail.com', 'Erick'),
('VECJ880326 XXZ', 'Laura@gmail.com', 'Laura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `cuenta` varchar(20) NOT NULL DEFAULT 'NE',
  `nombre` varchar(30) NOT NULL DEFAULT 'NE',
  `tipo` varchar(10) NOT NULL DEFAULT 'Credito',
  `saldo` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `cuenta`, `nombre`, `tipo`, `saldo`) VALUES
(1, '123', 'Erick', 'Credito', 1000),
(2, '456', 'Saul', 'Debito', 15000),
(3, '789', 'Jose', 'Credito', 222222000),
(4, '1234', 'Pepe peperrin', 'Debito', 13000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `folio` int(11) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `monto` float NOT NULL,
  `fecha_monto` date NOT NULL,
  `iva` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`folio`, `rfc`, `monto`, `fecha_monto`, `iva`) VALUES
(1, 'VECJ880326 XXA', 3453450, '2022-08-24', 23.2),
(2, 'VECJ880326 XXT', 15.5, '2022-08-24', 2.6),
(3, 'VECJ880326 XXU', 234.2, '2022-08-24', 2.9),
(4, 'VECJ880326 XXX', 234.9, '2022-08-24', 4.7),
(5, 'VECJ880326 XXX', 234.8, '2022-08-24', 1.8),
(6, 'VECJ880326 XXZ', 435.6, '2022-08-24', 3.7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulas`
--
ALTER TABLE `articulas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `arts_x_factura`
--
ALTER TABLE `arts_x_factura`
  ADD PRIMARY KEY (`folio_fact`),
  ADD KEY `id_art` (`id_art`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`rfc`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `rfc` (`rfc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulas`
--
ALTER TABLE `articulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `arts_x_factura`
--
ALTER TABLE `arts_x_factura`
  MODIFY `folio_fact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arts_x_factura`
--
ALTER TABLE `arts_x_factura`
  ADD CONSTRAINT `arts_x_factura_ibfk_1` FOREIGN KEY (`folio_fact`) REFERENCES `factura` (`folio`),
  ADD CONSTRAINT `arts_x_factura_ibfk_2` FOREIGN KEY (`id_art`) REFERENCES `articulas` (`id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`rfc`) REFERENCES `cliente` (`rfc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
