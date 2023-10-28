-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2023 a las 10:23:01
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_joker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conf_password` varchar(50) NOT NULL,
  `tipo_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `correo`, `password`, `conf_password`, `tipo_user`) VALUES
(0, 'Brayan', 'Sneider', 'ssifhasifas', 'fsisjfaofj@gmail.com', 'asdasdsfas', 'fasfsafsf', 'user'),
(4, 'Camilita', 'Hermosa', 'AB', 'ardila@gmail.com', '0320', '0320', 'Admin'),
(12, 'Sam', 'Som', 'aware', 'awar@gmail.com', 'awar', '', 'Admin'),
(18, 'aaaaa', 'asdfawefadfsa', 'alejo34', 'a@gmail.com', '1234', '', 'user'),
(19, 'adfsadawefawe4', 'juju', 'jajajaja', 'o@gmail.com', '', '', 'user'),
(21, 'Paolita', 'Mimai', 'Axelavir', 'wo@gmail.com', '', '', 'Admin'),
(22, '', '', '', '', '', '', ''),
(23, 'Tania', 'Negra', 'Negrita', 'aaaaa@gmail.com', '8080', '', 'user'),
(24, 'cam', 'ard', 'camar', 'cccms@gmail.com', '1234', '', 'user'),
(25, 'pablo', 'ardila', 'pablito123', 'sss@gmail.com', '123', '', 'user'),
(26, 'paola', 'seguro', 'paolita', 'pao@gmail.com', '789', '', 'user'),
(27, 'camila', 'ardila', 'camilita', 'camila38@gmail.com', '987', '', 'user'),
(28, 'juan pa', 'jara', 'juanpis', 'juanchis@gmail.com', '456', '', 'user'),
(29, 'pablo', 'jara', 'pablito', 'pablito@gmail.com', '567', '', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
