-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2020 a las 12:42:27
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgem_hotel`
--
DROP DATABASE IF EXISTS `sgem_hotel`;
CREATE DATABASE IF NOT EXISTS `sgem_hotel` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `sgem_hotel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nombre` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `preferencias` varchar(256) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `fecha_registro`, `nombre`, `preferencias`) VALUES
(1, '2020-01-31 09:17:49', 'Alfredo CanelA', 'Mucho papel higienico, ya que suele loorar en cantidades industriales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'Recepcion'),
(2, 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `fecha_operacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nombre` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `observaciones` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id` int(11) NOT NULL,
  `cama_matrimonio` int(11) NOT NULL,
  `cama_individual` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `precio_base` double NOT NULL,
  `ultima_limpieza` timestamp NULL DEFAULT NULL,
  `personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` double NOT NULL,
  `id_reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `limpiezas`
--

CREATE TABLE `limpiezas` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `observaciones` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `id_habitacion` int(11) NOT NULL,
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `numero_noches` int(11) NOT NULL,
  `fecha_entrada` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_salida` timestamp NULL DEFAULT NULL,
  `id_habitacion` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sueldos`
--

CREATE TABLE `sueldos` (
  `id` int(11) NOT NULL,
  `fecha_operacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cantidad` double NOT NULL,
  `paga_extra` set('Si','No') COLLATE utf8_spanish_ci NOT NULL,
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_baja` timestamp NULL DEFAULT NULL,
  `salario` double NOT NULL,
  `nombre` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `fijo` enum('Si','No') COLLATE utf8_spanish_ci NOT NULL,
  `puesto` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `fecha_alta`, `fecha_baja`, `salario`, `nombre`, `fijo`, `puesto`, `id_departamento`) VALUES
(1, '2020-01-31 11:35:23', NULL, 2500, 'Pablo Mendi', 'Si', 'Gerente', 2),
(2, '2020-01-31 11:35:23', NULL, 1000, 'Diego Valberdi', 'No', 'Botones', 1),
(3, '2020-01-31 11:37:00', '2020-02-04 08:00:00', 450, 'Carlos Casado', 'No', 'Ayudante Limpieza', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reserva` (`id_reserva`);

--
-- Indices de la tabla `limpiezas`
--
ALTER TABLE `limpiezas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_habitacion` (`id_habitacion`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_habitacion` (`id_habitacion`);

--
-- Indices de la tabla `sueldos`
--
ALTER TABLE `sueldos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `id_trabajador`) VALUES ('root', '1234', '1'), ('root0', '1234', '2');

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `limpiezas`
--
ALTER TABLE `limpiezas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sueldos`
--
ALTER TABLE `sueldos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`id_reserva`) REFERENCES `reservas` (`id`);

--
-- Filtros para la tabla `limpiezas`
--
ALTER TABLE `limpiezas`
  ADD CONSTRAINT `limpiezas_ibfk_1` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id`),
  ADD CONSTRAINT `limpiezas_ibfk_2` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajadores` (`id`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id`);

--
-- Filtros para la tabla `sueldos`
--
ALTER TABLE `sueldos`
  ADD CONSTRAINT `sueldos_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajadores` (`id`);

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `trabajadores_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajadores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
