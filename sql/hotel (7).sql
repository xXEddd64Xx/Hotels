
/* CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel`; */

DROP TABLE IF EXISTS `64_reserves`;
DROP TABLE IF EXISTS `64_clients`;
DROP TABLE IF EXISTS `64_estat_reserva`;
DROP TABLE IF EXISTS `64_habitacio`;
DROP TABLE IF EXISTS `64_pensio`;
DROP TABLE IF EXISTS `64_tipushabitacio`;
DROP TABLE IF EXISTS `64_tipus_usuari`;


CREATE TABLE `64_clients` (
  `cliente_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `tlf` int(11) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `tipo_usuario` int(11) NOT NULL DEFAULT 2,
  `foto` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
);

INSERT INTO `64_clients` (`cliente_id`, `nombre`, `apellido`, `tlf`, `dni`, `email`, `direccion`, `pwd`, `tipo_usuario`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Eduard', 'Gallardo Vidal', 647382912, '41682113X', 'dawbevidalgallardo@iesjoanramis.com', 'C/ Sa Sinia, 290', '12345', 1, '41682113Xjpeg', NULL, NULL),


CREATE TABLE `64_estat_reserva` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
);

INSERT INTO `64_estat_reserva` (`id`, `nom`) VALUES
(1, 'Reservada'),
(2, 'Check-in'),
(3, 'Check-out'),
(4, 'No-Show'),
(5, 'Cancelada');

CREATE TABLE `64_habitacio` (
  `id` int(11) NOT NULL,
  `tipo_habitacion` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `numerovar` varchar(255) DEFAULT NULL,
  `cerrada` tinyint(1) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `observacions` varchar(400) DEFAULT NULL,
  `fotos` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
);

INSERT INTO `64_habitacio` (`id`, `tipo_habitacion`, `numero`, `numerovar`, `cerrada`, `descripcion`, `observacions`, `fotos`) VALUES
(23, 1, 12, '12-M', 1, 'Vistas al mar', 'asasasasas', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,'),
(24, 2, 12, '12-M', 0, 'huhuhuh', 'tftftftftft', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,'),
(25, 0, 12, '12-M', 1, 'lpllp', 'kokokokok', '61zBDr1hUML._AC_SY355_.jpg,450_1000.jpg,');

CREATE TABLE `64_pensio` (
  `id` int(11) NOT NULL,
  `codi` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
);

INSERT INTO `64_pensio` (`id`, `codi`, `nom`) VALUES
(1, 'SA', 'Solo Alojamiento'),
(2, 'AD', 'Alojamiento y Desayuno'),
(3, 'MP', 'Media Pension'),
(4, 'PC', 'Pension Completa'),
(5, 'TI', 'Todo Incluido');

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
);

INSERT INTO `64_reserves` (`reserva_id`, `cliente_id`, `entrada`, `salida`, `habitacion_id`, `estado_id`, `noches`, `precio`, `pension_id`) VALUES
(1, 1, '2022-02-01', '2022-02-03', 23, 1, 2, 100.00, 4),
(2, 1, '2022-02-01', '2022-02-10', 23, 1, 9, 450.00, 4),
(3, 1, '2022-02-01', '2022-02-05', 23, 1, 4, 800.00, 3);

CREATE TABLE `64_tipushabitacio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` float(6,2) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `capacidad_max` int(11) DEFAULT NULL,
  `codigo` varchar(255) NOT NULL,
  `foto` varchar(400) NOT NULL
);

INSERT INTO `64_tipushabitacio` (`id`, `nombre`, `precio`, `descripcion`, `capacidad`, `capacidad_max`, `codigo`, `foto`) VALUES
(0, 'Juegos', 469.00, 'Habitación para jugar', 8, 10, 'XXX420', 'https://ibizamotel.com.ec/wp-content/uploads/2019/04/Foto-Junior.jpg'),
(1, 'Triple', 200.00, 'Espejo en el techo', 3, 5, 'XYZ789', 'https://media-magazine.trivago.com/wp-content/uploads/2018/11/21130220/hoteles-sexis-pelirocco-cama-circular-con-espejo-en-el-techo.jpeg'),
(2, 'Doble', 50.00, 'Vistas al mar', 2, 4, 'ABC123', 'https://www.hotelcalipolis.com/content/imgsxml/galerias/panel_galeriahabitaciones/1/m-mar1414.jpg'),
(3, 'Prueba', 255.00, 'Holaaa', 7, 9, 'HGF423', 'https://ichef.bbci.co.uk/news/640/cpsprodpb/35F4/production/_116221831_mediaitem116221830.jpg'),
(4, 'Prueba', 169.00, 'Tipo de Prueba', 9, 11, '089PRV', 'https://blog.igus.de/wp-content/uploads/2019/07/m.jpg');

CREATE TABLE `64_tipus_usuari` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
);

INSERT INTO `64_tipus_usuari` (`id`, `nom`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

ALTER TABLE `64_clients`
  ADD PRIMARY KEY (`cliente_id`);

ALTER TABLE `64_estat_reserva`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `64_habitacio`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `64_pensio`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `64_reserves`
  ADD PRIMARY KEY (`reserva_id`);

ALTER TABLE `64_tipushabitacio`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `64_tipus_usuari`
  ADD PRIMARY KEY (`id`,`nom`);


ALTER TABLE `64_clients`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `64_habitacio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `64_pensio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `64_reserves`
  MODIFY `reserva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
