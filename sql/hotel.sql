-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2022 a las 21:15:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `64_clients`
--

DROP TABLE IF EXISTS `64_clients`;
CREATE TABLE `64_clients` (
  `cliente_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `tlf` int(11) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `64_clients`
--

INSERT INTO `64_clients` (`cliente_id`, `nombre`, `apellido`, `tlf`, `dni`, `email`, `direccion`, `tipo_usuario`) VALUES
(1, 'Eduard', 'Gallardo Vidal', 647382912, '41682113X', 'dawbevidalgallardo@iesjoanramis.org', 'C/ Sa Sinia, 29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `64_estat_reserva`
--

DROP TABLE IF EXISTS `64_estat_reserva`;
CREATE TABLE `64_estat_reserva` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `64_estat_reserva`
--

INSERT INTO `64_estat_reserva` (`id`, `nom`) VALUES
(1, 'Reservada'),
(2, 'Check-in'),
(3, 'Check-out'),
(4, 'No-Show'),
(5, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `64_habitacio`
--

DROP TABLE IF EXISTS `64_habitacio`;
CREATE TABLE `64_habitacio` (
  `id` int(11) NOT NULL,
  `tipo_habitacion` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `numerovar` varchar(255) DEFAULT NULL,
  `cerrada` tinyint(1) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `observacions` varchar(400) DEFAULT NULL,
  `fotos` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `64_habitacio`
--

INSERT INTO `64_habitacio` (`id`, `tipo_habitacion`, `numero`, `numerovar`, `cerrada`, `descripcion`, `observacions`, `fotos`) VALUES
(23, 23, 12, '12-M', 1, 'Vistas al mar', 'asasasasas', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,'),
(24, 21, 12, '12-M', 0, 'huhuhuh', 'tftftftftft', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,'),
(25, 22, 12, '12-M', 1, 'lpllp', 'kokokokok', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `64_pensio`
--

DROP TABLE IF EXISTS `64_pensio`;
CREATE TABLE `64_pensio` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `64_pensio`
--

INSERT INTO `64_pensio` (`id`, `nom`) VALUES
(1, 'SA'),
(2, 'AD'),
(3, 'MP'),
(4, 'PC'),
(5, 'TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `64_reserves`
--

DROP TABLE IF EXISTS `64_reserves`;
CREATE TABLE `64_reserves` (
  `reserva_id` int(11) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `entrada` date NOT NULL,
  `salida` date NOT NULL,
  `habitacion_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `noches` int(11) DEFAULT NULL,
  `precio` float(6,2) DEFAULT NULL,
  `pension_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `64_reserves`
--
DROP TRIGGER IF EXISTS `contNoches`;
DELIMITER $$
CREATE TRIGGER `contNoches` AFTER INSERT ON `64_reserves` FOR EACH ROW UPDATE 64_reserves
SET noches = DATEDIFF(NEW.entrada, NEW.salida )
WHERE reserva_id = NEW.reserva_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `64_tipushabitacio`
--

DROP TABLE IF EXISTS `64_tipushabitacio`;
CREATE TABLE `64_tipushabitacio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` float(6,2) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `capacidad_max` int(11) DEFAULT NULL,
  `codigo` varchar(255) NOT NULL,
  `foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `64_tipushabitacio`
--

INSERT INTO `64_tipushabitacio` (`id`, `nombre`, `precio`, `descripcion`, `capacidad`, `capacidad_max`, `codigo`, `foto`) VALUES
(0, 'Juegos', 469.00, 'Habitación para jugar', 8, NULL, 'XXX420', 'https://ibizamotel.com.ec/wp-content/uploads/2019/04/Foto-Junior.jpg'),
(1, 'Triple', 200.00, 'Espejo en el techo', 3, NULL, 'XYZ789', 'https://media-magazine.trivago.com/wp-content/uploads/2018/11/21130220/hoteles-sexis-pelirocco-cama-circular-con-espejo-en-el-techo.jpeg'),
(2, 'Doble', 50.00, 'Vistas al mar', 2, NULL, 'ABC123', 'https://www.hotelcalipolis.com/content/imgsxml/galerias/panel_galeriahabitaciones/1/m-mar1414.jpg'),
(3, 'Prueba', 255.00, 'Holaaa', 7, NULL, 'HGF423', 'https://ichef.bbci.co.uk/news/640/cpsprodpb/35F4/production/_116221831_mediaitem116221830.jpg'),
(4, 'Prueba', 169.00, 'Tipo de Prueba', 9, 11, '089PRV', 'https://blog.igus.de/wp-content/uploads/2019/07/m.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `64_tipus_usuari`
--

DROP TABLE IF EXISTS `64_tipus_usuari`;
CREATE TABLE `64_tipus_usuari` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `64_tipus_usuari`
--

INSERT INTO `64_tipus_usuari` (`id`, `nom`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `64_clients`
--
ALTER TABLE `64_clients`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `64_estat_reserva`
--
ALTER TABLE `64_estat_reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `64_habitacio`
--
ALTER TABLE `64_habitacio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `64_pensio`
--
ALTER TABLE `64_pensio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `64_reserves`
--
ALTER TABLE `64_reserves`
  ADD PRIMARY KEY (`reserva_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `estado_id` (`estado_id`),
  ADD KEY `habitacion_id` (`habitacion_id`),
  ADD KEY `pension_id` (`pension_id`);

--
-- Indices de la tabla `64_tipushabitacio`
--
ALTER TABLE `64_tipushabitacio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `64_tipus_usuari`
--
ALTER TABLE `64_tipus_usuari`
  ADD PRIMARY KEY (`id`,`nom`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `64_clients`
--
ALTER TABLE `64_clients`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `64_habitacio`
--
ALTER TABLE `64_habitacio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `64_pensio`
--
ALTER TABLE `64_pensio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `64_habitacio`
--
ALTER TABLE `64_habitacio`
  ADD CONSTRAINT `64_habitacio_ibfk_1` FOREIGN KEY (`tipo_habitacion`) REFERENCES `64_tipushabitacio` (`id`);

--
-- Filtros para la tabla `64_reserves`
--
ALTER TABLE `64_reserves`
  ADD CONSTRAINT `64_reserves_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `64_clients` (`cliente_id`),
  ADD CONSTRAINT `64_reserves_ibfk_2` FOREIGN KEY (`estado_id`) REFERENCES `64_estat_reserva` (`id`),
  ADD CONSTRAINT `64_reserves_ibfk_3` FOREIGN KEY (`habitacion_id`) REFERENCES `64_habitacio` (`id`),
  ADD CONSTRAINT `64_reserves_ibfk_4` FOREIGN KEY (`pension_id`) REFERENCES `64_pensio` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
