-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2023 a las 04:57:42
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
-- Base de datos: `tecnoprector`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `icono` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `informacion` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `trabajo` varchar(50) NOT NULL,
  `nacimiento` varchar(50) NOT NULL,
  `comida` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `archivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `icono`, `nombre`, `apellido`, `informacion`, `direccion`, `telefono`, `trabajo`, `nacimiento`, `comida`, `correo`, `archivo`) VALUES
(1, '', 'Jose Manuel ', '', '', '', 0, '', '', '', '', 'alumno2.png'),
(2, '', 'Jose Manuel ', '', '', '', 0, '', '', '', '', 'alumno2.png'),
(3, '', 'Jose Manuel ', '', '', '', 0, '', '', '', '', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(4, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 3030303, 'CHE', '2023-08-30', 'pasta', 'jomapuru03@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(5, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 40404, 'CHE', '2023-08-27', 'pasta', 'jomapuru03@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(6, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 404, 'CHE', '2023-09-06', 'pasta', 'jomapuru03@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(7, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 4, 'CHE', '2023-01-10', 'pasta', 'David@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(8, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 33030, 'CHE', '2023-08-04', 'pasta', 'David@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(9, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 3303, 'CHE', '2023-09-13', 'pasta', 'jomapuru003@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(10, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 300330, 'CHE', '2023-09-21', 'pasta', 'jomapuru003@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(11, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 404, 'CHE', '2023-09-14', 'pasta', 'David@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(12, '', 'Jose Manuel ', 'pawpepe', 'PEPE', 'si?', 30303, 'CHE', '2023-09-21', 'pasta', 'jomapuru03@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(13, '', 'Jose Manuel ', '', 'PEPE', '', 0, '', '', '', 'jomapuru03@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(14, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 30, 'CHE', '0332-01-01', 'pasta', 'David@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(15, '', 'Jose Manuel ', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(16, '', 'Jose Manuel ', '', '', '', 0, '', '', '', 'David@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(17, '', 'Jose Manuel ', '', 'PEPE', '', 0, '', '', '', 'jomapuru03@gmail.com', 'WhatsApp Image 2023-09-26 at 5.10.35 PM.jpeg'),
(18, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 330, 'CHE', '2023-08-30', 'pasta', 'David@gmail.com', 'yo_bebe.jpeg'),
(19, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 330, 'CHE', '2023-08-30', 'pasta', 'David@gmail.com', 'yo_bebe.jpeg'),
(20, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 330, 'CHE', '2023-08-30', 'pasta', 'David@gmail.com', 'yo_bebe.jpeg'),
(21, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(22, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(23, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(24, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(25, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(26, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(27, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(28, '', 'PEPE', 'HOYOS', 'SEXO', 'no se', 33003, 'A MÁS SEXO', '2023-08-28', 'food', 'David@gmail.com', 'yo_bebe.jpeg'),
(29, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(30, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(31, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(32, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(33, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(34, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(35, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(36, '', '', '', '', '', 0, '', '', '', 'jomapuru03@gmail.com', 'yo_bebe.jpeg'),
(37, '', '', '', '', '', 0, '', '', '', 'David@gmail.com', 'yo_bebe.jpeg'),
(38, '', '', '', '', '', 0, '', '', '', 'David@gmail.com', 'yo_bebe.jpeg'),
(39, '', '', '', '', '', 0, '', '', '', 'David@gmail.com', 'yo_bebe.jpeg'),
(40, '', '', '', '', '', 0, '', '', '', 'David@gmail.com', 'yo_bebe.jpeg'),
(41, '', '', '', '', '', 0, '', '', '', 'David@gmail.com', 'yo_bebe.jpeg'),
(42, '', '', '', '', '', 0, '', '', '', 'David@gmail.com', 'yo_bebe.jpeg'),
(43, '', '', '', '', '', 0, '', '', '', 'David@gmail.com', 'yo_bebe.jpeg'),
(44, '', 'Jose Manuel ', 'Pulgarin Rueda', 'SEXO', 'no se', 30300400, 'A MÁS SEXO', '2023-09-06', 'pasta', 'David@gmail.com', '2.png'),
(45, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 40404, 'CHE', '2023-09-21', 'pasta', 'David@gmail.com', '2.png'),
(46, '', 'Jose Manuel ', 'Pulgarin Rueda', 'PEPE', 'si?', 3003, 'CHE', '2023-08-31', 'pasta', 'David@gmail.com', '1.png'),
(47, '', 'Jose Manuel ', 'pawpepe', 'PEPE', 'si?', 30303, 'CHE', '2023-09-05', 'pasta', 'David@gmail.com', '1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(21) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `password`, `correo`, `tipo`) VALUES
(1, 'Jose Manuel', 'cardenasvsorlando', '123', 'orlandogames@gmail.com', 'user'),
(2, 'Jose Manuel', 'cardenasvsorlando', '123', 'orlandogames@gmail.com', 'user'),
(3, 'cardenas', 'orlandomelapela', '123', 'orlandotipos@gmail.com', 'user'),
(4, 'cardenas', 'orlandomelapela', '123', 'orlandotipos@gmail.com', 'user'),
(5, 'cardenas123', 'orlandomelapela123', '1234', 'orlandotipos123@gmail.com', 'user'),
(6, 'cardenas123', 'orlandomelapela123', '1234', 'orlandotipos123@gmail.com', 'user'),
(7, 'cardenas1234', 'esperame', '123123', 'orlandogames@gmail.com', 'user'),
(8, 'Goliat', 'pepegallo123', 'orlando', 'dicarupi24@gmail.com', 'user'),
(9, 'Goliat', 'pepegallo123', 'orlando', 'dicarupi24@gmail.com', 'user'),
(10, 'Jose Manuel', 'pepegallo123', 'orlando', 'jomapuru03@gmail.com', 'user'),
(11, 'Jose Manuel', 'pepegallo123', 'orlando', 'jomapuru03@gmail.com', 'user'),
(12, 'Jose Manuel', 'miloco', 'papu', 'jomapuru03@gmail.com', 'user'),
(13, 'Jose Manuel', 'miloco', 'pepe', 'jomapuru03@gmail.com', 'user'),
(14, 'Jose Manuel', 'pepazo', 'papa', 'jomapuru03@gmail.com', 'user'),
(15, 'Jose Manuel', 'pepazo', 'papa', 'jomapuru03@gmail.com', 'user'),
(16, 'Jose Manuel', 'pepazo', 'papa', 'jomapuru03@gmail.com', 'user'),
(17, 'Jose Manuel', 'pepazo', 'papa', 'jomapuru03@gmail.com', 'user'),
(18, 'Jose Manuel', 'pepazo', 'papa', 'jomapuru03@gmail.com', 'user'),
(19, 'Tulio', 'Tulioen69', 'pajin', 'unmovimientomuysexy@gmail.com', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
