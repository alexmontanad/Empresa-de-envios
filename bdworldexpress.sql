-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2022 a las 19:45:22
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `idCamion` int(50) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `coordenada1` varchar(50) NOT NULL,
  `coordenada2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`idCamion`, `placa`, `coordenada1`, `coordenada2`) VALUES
(1, 'XCQ126', '1', '1'),
(2, 'XCQ125', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `NIT` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `credenciales` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`NIT`, `nombre`, `apellido`, `departamento`, `ciudad`, `direccion`, `celular`, `credenciales`) VALUES
(1000353959, 'alex', 'montaña', 'Cundinamarca', 'Bogota', 'AV 14 # 54 SUR', '7391964', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `idConductor` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `camion` int(50) NOT NULL,
  `credenciales` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinatario`
--

CREATE TABLE `destinatario` (
  `idDestinatario` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `destinatario`
--

INSERT INTO `destinatario` (`idDestinatario`, `nombre`, `apellido`, `ciudad`, `direccion`) VALUES
(1, 'Juan', 'Saenz', 'Bogota', 'Calle 18');

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
(1, 1, 1000353959, 1, 1, 'Reparto');

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
(1, 45, 20, 20, 20, 13500, 'hola'),
(2, 45, 20, 20, 20, 13500, 'hola'),
(3, 12, 10, 10, 10, 12000, 'yisus'),
(4, 12, 10, 10, 10, 12000, 'yisus');

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
(1, 1000353959, 1, 1);

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
(23, 'alex', 'alex1234', 'alexmontanad@gmail.com', 4),
(24, 'Juan', 'alex123', 'v@gmail.com', 4);

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
  ADD PRIMARY KEY (`idCamion`);

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
  MODIFY `idAfiliado` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `camion`
--
ALTER TABLE `camion`
  MODIFY `idCamion` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `idConductor` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `destinatario`
--
ALTER TABLE `destinatario`
  MODIFY `idDestinatario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `idEnvio` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD CONSTRAINT `afiliado_ibfk_1` FOREIGN KEY (`credenciales`) REFERENCES `users` (`idUser`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `envios_ibfk_2` FOREIGN KEY (`paquete`) REFERENCES `paquete` (`idpaquete`) ON UPDATE CASCADE,
  ADD CONSTRAINT `envios_ibfk_3` FOREIGN KEY (`camion`) REFERENCES `camion` (`idCamion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `envios_ibfk_4` FOREIGN KEY (`destinatario`) REFERENCES `destinatario` (`idDestinatario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`NIT`) ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`paquete`) REFERENCES `paquete` (`idpaquete`) ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_3` FOREIGN KEY (`destinatario`) REFERENCES `destinatario` (`idDestinatario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
