-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2023 a las 23:44:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `Id_Bebidas` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Precio_Bebidas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`Id_Bebidas`, `Nombre`, `Precio_Bebidas`) VALUES
(1, 'Margarita', 80),
(2, 'Agua de horchata', 34),
(3, 'Agua fresca de mamey', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `Id` int(10) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Telefono` int(15) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Id_Metodo_Pagos` int(10) NOT NULL,
  `Id_Platos_Populares` int(10) NOT NULL,
  `Id_Postres` int(10) NOT NULL,
  `Id_Bebidas` int(10) NOT NULL,
  `Id_Repartidor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`Id`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Direccion`, `Id_Metodo_Pagos`, `Id_Platos_Populares`, `Id_Postres`, `Id_Bebidas`, `Id_Repartidor`) VALUES
(13, 'Saira', 'Erazo', 2147483647, 'saira@correo.com', 'torre 11', 1, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usu` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usu`, `pass`) VALUES
('stiven', '$2y$10$OMFU/0bpJTdCE/S7ja0vwOjaurNKzbh1KyNq6eLhwkMry1lHh8pmW'),
('juan', '$2y$10$0GOb9Ed04vDbgo.6K97nruZaZAmsYT4wpeK8aajAsjhbmYCyaiyHO'),
('diego', '$2y$10$tNZCfKrT.vIYF/R6VmFPIeile9074hhWOyLT12qn4cANoXm3XgMs2'),
('xamara55252', '$2y$10$W/zPATYsWQ.7GManq.YVqerLFtPk/XU9FBHYGihhrFsmmlzEg62I.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `Id_Metodo_Pagos` int(10) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `metodo_pago`
--

INSERT INTO `metodo_pago` (`Id_Metodo_Pagos`, `Nombre`) VALUES
(1, 'Tarjeta de credito'),
(2, 'Efectivo'),
(3, 'Tarjeta de debito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos_populares`
--

CREATE TABLE `platos_populares` (
  `Id_Platos_Populares` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Precio_Platos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `platos_populares`
--

INSERT INTO `platos_populares` (`Id_Platos_Populares`, `Nombre`, `Precio_Platos`) VALUES
(1, 'El Mole', 59),
(2, 'El Pozole', 94),
(3, 'Chiles en Nogada', 16),
(4, 'Pescado a la talla', 9),
(5, 'Pescado a la Veracruzana', 18),
(6, 'Tacos', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE `postres` (
  `Id_Postres` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Precio_Postres` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`Id_Postres`, `Nombre`, `Precio_Postres`) VALUES
(1, 'Pan de Muerto', 49),
(2, 'Pastel tres leches', 34),
(3, 'Flan napolitano', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidor`
--

CREATE TABLE `repartidor` (
  `Id_Repartidor` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Telefono` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repartidor`
--

INSERT INTO `repartidor` (`Id_Repartidor`, `Nombre`, `Telefono`) VALUES
(1, 'Mayerli', 3234567890),
(2, 'Jenifer', 312456870);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`Id_Bebidas`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Metodo_Pagos` (`Id_Metodo_Pagos`),
  ADD KEY `Id_Platos_Populares` (`Id_Platos_Populares`),
  ADD KEY `Id_Postres` (`Id_Postres`),
  ADD KEY `Id_Bebidas` (`Id_Bebidas`),
  ADD KEY `Id_Repartidor` (`Id_Repartidor`),
  ADD KEY `Id_Repartidor_2` (`Id_Repartidor`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`Id_Metodo_Pagos`);

--
-- Indices de la tabla `platos_populares`
--
ALTER TABLE `platos_populares`
  ADD PRIMARY KEY (`Id_Platos_Populares`);

--
-- Indices de la tabla `postres`
--
ALTER TABLE `postres`
  ADD PRIMARY KEY (`Id_Postres`);

--
-- Indices de la tabla `repartidor`
--
ALTER TABLE `repartidor`
  ADD PRIMARY KEY (`Id_Repartidor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `Id_Bebidas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `Id_Metodo_Pagos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `platos_populares`
--
ALTER TABLE `platos_populares`
  MODIFY `Id_Platos_Populares` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `Id_Postres` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `repartidor`
--
ALTER TABLE `repartidor`
  MODIFY `Id_Repartidor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD CONSTRAINT `domicilios_ibfk_1` FOREIGN KEY (`Id_Platos_Populares`) REFERENCES `platos_populares` (`Id_Platos_Populares`),
  ADD CONSTRAINT `domicilios_ibfk_2` FOREIGN KEY (`Id_Postres`) REFERENCES `postres` (`Id_Postres`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `domicilios_ibfk_3` FOREIGN KEY (`Id_Bebidas`) REFERENCES `bebidas` (`Id_Bebidas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `domicilios_ibfk_4` FOREIGN KEY (`Id_Metodo_Pagos`) REFERENCES `metodo_pago` (`Id_Metodo_Pagos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `domicilios_ibfk_5` FOREIGN KEY (`Id_Repartidor`) REFERENCES `repartidor` (`Id_Repartidor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
