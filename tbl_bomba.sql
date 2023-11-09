-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 05:58:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pemex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bomba`
--

CREATE TABLE `tbl_bomba` (
  `idBomba` int(11) NOT NULL,
  `tipoBomba` varchar(50) DEFAULT NULL,
  `tipoCombustible` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `capacidad` decimal(10,2) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `numEmpleados` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbl_bomba`
--

INSERT INTO `tbl_bomba` (`idBomba`, `tipoBomba`, `tipoCombustible`, `estado`, `capacidad`, `ubicacion`, `numEmpleados`, `fechaRegistro`) VALUES
(45, 'Mecanica', 'Magna', 'Activo', 30000.00, 'Isla 2', 5, '2023-11-08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bomba`
--
ALTER TABLE `tbl_bomba`
  ADD PRIMARY KEY (`idBomba`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bomba`
--
ALTER TABLE `tbl_bomba`
  MODIFY `idBomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
