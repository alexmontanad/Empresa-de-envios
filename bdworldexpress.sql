-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2022 a las 04:14:16
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
-- Base de datos: `bdworldexpress`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE `afiliado` (
  `idAfiliado` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `credenciales` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`idAfiliado`, `nombre`, `apellido`, `nit`, `credenciales`) VALUES
(1, 'Maria Isabel', 'Diaz Serna', '39717699', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `idCamion` int(50) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `encargado` int(11) DEFAULT NULL,
  `coordenada1` varchar(50) NOT NULL,
  `coordenada2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`idCamion`, `placa`, `encargado`, `coordenada1`, `coordenada2`) VALUES
(1, 'CVF123', NULL, '1', '1'),
(2, 'YOU13', 2, '1', '1'),
(3, 'XMC459', 3, '1', '1'),
(4, 'OPI125', 1, '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `NIT` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `credenciales` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`NIT`, `nombre`, `apellido`, `ciudad`, `direccion`, `celular`, `credenciales`) VALUES
(1, 'Cliente1', 'Cliente1', 'Bogota', 'AV 14 # 54 SUR', '7391964', 10),
(1000353959, 'Alex', 'Montaña', 'Bogota', 'Calle 48 Q SUR #5C - 59', '3502357524', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `idConductor` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `camion` int(50) DEFAULT NULL,
  `credenciales` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idConductor`, `nombre`, `apellido`, `nit`, `camion`, `credenciales`) VALUES
(1, 'Juan Frnaciso', 'Montaña Bravo', '80362833', 4, 7),
(2, 'Juan', 'Saenz', '2739456', 2, 8),
(3, 'Julian David', 'Gomez', '27195645', 3, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatario`
--

CREATE TABLE `destinatario` (
  `idDestinatario` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `destinatario`
--

INSERT INTO `destinatario` (`idDestinatario`, `nombre`, `apellido`, `ciudad`, `direccion`, `celular`) VALUES
(1, 'Deiver Alexander', 'Diaz', 'Bogota', 'Calle 48 Q SUR #5C - 59', '0'),
(2, 'Deiver Alexander', 'Diaz', 'Bogota', 'Calle 48 Q SUR #5C - 59', '0'),
(3, 'Kevin', 'Rodriguez', 'Medellin', 'Tranversal 14C # 48', '0'),
(4, 'Erika', 'Martinez', 'Medellin', 'AV 14', '3533887578'),
(5, 'Erika', 'Martinez', 'Bogota', 'AV 14', '0'),
(6, 'Erika', 'Martinez', 'Bogota', 'AV 14', '0'),
(7, 'Erika', 'Martinez', 'Barranquilla', 'AV 14', '0'),
(8, 'Alex', 'xd', 'Bogota', 'CALLE 48 Q SUR #5C - 59', '3256213'),
(9, 'Jose', 'Lucumi', 'Bogota', 'CALLE 48 Q SUR #5C - 59', '3202607184'),
(10, 'Jose', 'Lucumi', 'Bogota', 'CALLE 48 Q SUR #5C - 59', '3202607184'),
(11, 'Jose', 'Lucumi', 'Bogota', 'CALLE 48 Q SUR #5C - 59', '3202607184'),
(12, 'Jose', 'Lucumi', 'Bogota', 'CALLE 48 Q SUR #5C - 59', '3202607184'),
(13, 'Jose', 'Lucumi', 'Bogota', 'CALLE 48 Q SUR #5C - 59', '3202607184'),
(14, 'Alex', 'Lucumi', 'Bogota', 'CALLE 48 Q SUR #5C - 59', '3202601784');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `idEnvio` int(50) NOT NULL,
  `paquete` int(50) NOT NULL,
  `cliente` int(50) NOT NULL,
  `camion` int(50) DEFAULT NULL,
  `destinatario` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`idEnvio`, `paquete`, `cliente`, `camion`, `destinatario`, `estado`) VALUES
(1, 2, 1000353959, 1, 2, 'Reparto'),
(2, 3, 1000353959, 1, 3, 'Reparto'),
(3, 4, 1000353959, 3, 4, 'Reparto'),
(4, 8, 1000353959, 3, 8, 'Reparto'),
(5, 9, 1, 3, 9, 'Reparto'),
(6, 11, 1, NULL, 11, 'Recogido'),
(7, 10, 1, 3, 10, 'Reparto'),
(8, 12, 1, 3, 12, 'Reparto'),
(9, 13, 1, 3, 13, 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `idpaquete` int(6) NOT NULL,
  `peso` int(50) NOT NULL,
  `altura` int(50) NOT NULL,
  `anchura` int(50) NOT NULL,
  `profundidad` int(50) NOT NULL,
  `precio` int(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`idpaquete`, `peso`, `altura`, `anchura`, `profundidad`, `precio`, `descripcion`) VALUES
(1, 66, 66, 66, 66, 66666, 'hola'),
(2, 66, 66, 66, 66, 66666, 'hola'),
(3, 5, 10, 12, 20, 9000, 'Tecnologia'),
(4, 21, 11, 11, 11, 3000, 'Productos de belleza'),
(5, 21, 11, 11, 11, 3000, 'Productos de belleza'),
(6, 21, 11, 11, 11, 3000, 'Productos de belleza'),
(7, 21, 11, 11, 11, 3000, 'Productos de belleza'),
(8, 45, 10, 10, 10, 10, 'xd'),
(9, 45, 20, 20, 20, 13500, 'xd'),
(10, 45, 20, 20, 20, 13500, 'xd'),
(11, 45, 20, 20, 20, 13500, 'xd'),
(12, 45, 20, 20, 20, 13500, 'xd'),
(13, 45, 20, 20, 20, 13500, 'xd'),
(14, 45, 20, 20, 10, 13500, 'xd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `idSolicitud` int(50) NOT NULL,
  `cliente` int(50) NOT NULL,
  `paquete` int(50) NOT NULL,
  `destinatario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`idSolicitud`, `cliente`, `paquete`, `destinatario`) VALUES
(10, 1000353959, 14, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` int(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `permisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `usuario`, `password`, `correo`, `permisos`) VALUES
(1, 'Alex', 'admin', 'alex9azul@gmail.com', 4),
(2, 'admin', 'admin', 'admin@admin.com', 1),
(4, 'maria123', 'maria123', '', 3),
(7, 'juan123', 'juan123', 'juan@gmail.com', 2),
(8, 'juan123', 'juan123', 'juan@gmail.com', 2),
(9, 'juli123', 'juli123', 'juli@gmail.com', 2),
(10, 'cliente1', 'cliente1', 'cliente1@gmail.com', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD PRIMARY KEY (`idAfiliado`),
  ADD KEY `credenciales` (`credenciales`);

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`idCamion`),
  ADD KEY `encargado` (`encargado`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`NIT`),
  ADD KEY `credenciales` (`credenciales`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`idConductor`),
  ADD KEY `credenciales` (`credenciales`),
  ADD KEY `camion` (`camion`);

--
-- Indices de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  ADD PRIMARY KEY (`idDestinatario`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`idEnvio`),
  ADD KEY `paquete` (`paquete`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `camion` (`camion`),
  ADD KEY `destinatario` (`destinatario`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`idpaquete`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`),
  ADD KEY `destinatario` (`destinatario`),
  ADD KEY `paquete` (`paquete`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  MODIFY `idAfiliado` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `camion`
--
ALTER TABLE `camion`
  MODIFY `idCamion` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `idConductor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  MODIFY `idDestinatario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `idEnvio` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `idpaquete` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD CONSTRAINT `afiliado_ibfk_1` FOREIGN KEY (`credenciales`) REFERENCES `users` (`idUser`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `camion`
--
ALTER TABLE `camion`
  ADD CONSTRAINT `camion_ibfk_1` FOREIGN KEY (`encargado`) REFERENCES `conductor` (`idConductor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`credenciales`) REFERENCES `users` (`idUser`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`camion`) REFERENCES `camion` (`idCamion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `conductor_ibfk_2` FOREIGN KEY (`credenciales`) REFERENCES `users` (`idUser`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `envios`
--
ALTER TABLE `envios`
  ADD CONSTRAINT `envios_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`NIT`) ON UPDATE CASCADE,
  ADD CONSTRAINT `envios_ibfk_3` FOREIGN KEY (`camion`) REFERENCES `camion` (`idCamion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `envios_ibfk_4` FOREIGN KEY (`destinatario`) REFERENCES `destinatario` (`idDestinatario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `envios_ibfk_5` FOREIGN KEY (`paquete`) REFERENCES `paquete` (`idpaquete`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`NIT`) ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_3` FOREIGN KEY (`destinatario`) REFERENCES `destinatario` (`idDestinatario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_4` FOREIGN KEY (`paquete`) REFERENCES `paquete` (`idpaquete`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
