-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2023 a las 11:36:57
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
-- Base de datos: `desarrolladoras_laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Nombre` varchar(50) NOT NULL,
  `Primer apellido` varchar(50) NOT NULL,
  `Segundo apellido` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nombre usuario` varchar(20) NOT NULL,
  `Contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Nombre`, `Primer apellido`, `Segundo apellido`, `Email`, `Nombre usuario`, `Contrasena`) VALUES
('Pedro ', 'perez', 'rodriguez', 'pedro14@gmail.com', 'pedro14', '140889'),
('Maricarmen', 'Rojas', 'Castillo ', 'mari22@hotmail.com', 'maric22', '140889'),
('Jinnet Katherine', 'Castillo', 'Tejeda', 'jinnet14@gmail.com', 'jinnetK', '140889'),
('Araceli', 'Montilla', 'Castro', 'AraCastro@gmail.com', 'Araceli10', '121212'),
('Araceli', 'Montilla', 'Castro', 'AraCastro@gmail.com', 'Araceli10', '121212'),
('Araceli', 'Montilla', 'Castro', 'AraCastro@gmail.com', 'Araceli10', '121212'),
('Araceli', 'Montilla', 'Castro', 'AraCastro@gmail.com', 'Araceli10', '121212'),
('Juan ', 'perez', 'mena', 'perezjuan@gmail.com', 'perezmena', 'lunes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
