-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-09-2022 a las 13:01:20
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19514117_balletparking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_formulario`
--

CREATE TABLE `tb_formulario` (
  `codigo` int(11) NOT NULL,
  `cedula` bigint(20) DEFAULT NULL,
  `matricula` varchar(250) DEFAULT NULL,
  `nivel_gasolina` varchar(250) DEFAULT NULL,
  `kilometraje` varchar(255) NOT NULL,
  `notas` text DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_formulario`
--

INSERT INTO `tb_formulario` (`codigo`, `cedula`, `matricula`, `nivel_gasolina`, `kilometraje`, `notas`, `estado`) VALUES
(2, 1034277490, 'cxm-048', '6galones', '1056', 'correcto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_guardia`
--

CREATE TABLE `tb_guardia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_guardia`
--

INSERT INTO `tb_guardia` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'ANTHONY', 'anthonygahr@gmail.com', '$2y$10$MJ6HYEWsuLFUCQUWuq/gUOhW/mPi5QdyaRMDr3nlFo7q7kXuL5Gfe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_persona`
--

CREATE TABLE `tb_persona` (
  `id_persona` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `apellido` varchar(250) DEFAULT NULL,
  `correo` varchar(250) DEFAULT NULL,
  `tipo_licencia` varchar(250) DEFAULT NULL,
  `fecha_ven_licen` varchar(255) NOT NULL,
  `celular` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_persona`
--

INSERT INTO `tb_persona` (`id_persona`, `cedula`, `nombre`, `apellido`, `correo`, `tipo_licencia`, `fecha_ven_licen`, `celular`) VALUES
(1, 1034277490, 'gabriel anthony', 'hurtado rivera', 'anthonygahr@gmail.com', 'B1-C1', '2031-12-22', '3188758634');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sub_guardia`
--

CREATE TABLE `tb_sub_guardia` (
  `id_guardia` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_sub_guardia`
--

INSERT INTO `tb_sub_guardia` (`id_guardia`, `nombre`, `contrasena`, `correo`) VALUES
(1, 'guardia', '$2y$10$umv/yW0m1.jMsjJ2qS8To.1aKdWoaL9STGHt3NRQEUudrcGpTxkaS', 'guardia1@guardia1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos`
--

CREATE TABLE `tb_vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `matricula` varchar(250) NOT NULL,
  `color` varchar(250) DEFAULT NULL,
  `modelo` varchar(250) DEFAULT NULL,
  `año` varchar(250) DEFAULT NULL,
  `marca` varchar(250) DEFAULT NULL,
  `kilometraje` bigint(20) NOT NULL,
  `soat` date NOT NULL,
  `tecno_mecanica` date NOT NULL,
  `derechos_rodamiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_vehiculos`
--

INSERT INTO `tb_vehiculos` (`id_vehiculo`, `matricula`, `color`, `modelo`, `año`, `marca`, `kilometraje`, `soat`, `tecno_mecanica`, `derechos_rodamiento`) VALUES
(1, 'cxm-048', 'negro', 'sorento', '2008', 'kia', 105000, '2023-01-03', '2023-01-03', '2023-01-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_formulario`
--
ALTER TABLE `tb_formulario`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_cedula` (`cedula`),
  ADD KEY `fk_matricula` (`matricula`);

--
-- Indices de la tabla `tb_guardia`
--
ALTER TABLE `tb_guardia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `tb_sub_guardia`
--
ALTER TABLE `tb_sub_guardia`
  ADD PRIMARY KEY (`id_guardia`);

--
-- Indices de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `tb_vehiculo` (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_formulario`
--
ALTER TABLE `tb_formulario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_guardia`
--
ALTER TABLE `tb_guardia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_sub_guardia`
--
ALTER TABLE `tb_sub_guardia`
  MODIFY `id_guardia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_formulario`
--
ALTER TABLE `tb_formulario`
  ADD CONSTRAINT `fk_cedula` FOREIGN KEY (`cedula`) REFERENCES `tb_persona` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_matricula` FOREIGN KEY (`matricula`) REFERENCES `tb_vehiculos` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
