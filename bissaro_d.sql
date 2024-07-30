-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2024 a las 00:19:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bissaro_d`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cuit` varchar(50) NOT NULL,
  `nombreyapellido` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cuit`, `nombreyapellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, '20-37771710-5', 'DIEGO BISSARO', 'diemar.ciudad@gmail.', '', '$2y$10$XoXAHTccMzz6TJt.yDKGPuMQskZ.IEKOhZhL3mNnN3sCfCPTcSZQK', 2, 'NO'),
(2, '20-37771710-3', 'DIEGO BISSARO2', 'diemar.ciudad2@gmail', '', '$2y$10$Oya8H4kcn65kFRfRgZzd4uJHAFUn8.iV3Tt1hdBfxQ3do/sEB7lLm', 2, 'NO'),
(3, '20319698265', 'DIEGOBISSARO3', '32762171', '', '$2y$10$.yCXeOb.rWUkMh70mnb.B.yAO8Zr301QcxH25tc3cqTEp8nnMDp3a', 2, 'NO'),
(4, '20319698265', 'ABC', 'die3mar.ciudad@gmail', '', '$2y$10$i..UhqvbJSjouELgMsQru.RoInlUh6syQSiAbma05y/xgTQ8TThO2', 2, 'NO'),
(5, '20318089265', 'JUAN PEREZ', 'juan_perez', '', '$2y$10$2JS66.fglnZYh3Of53PHRuvBBKuA93WHjoAfXaOVs7NwXIIR8J1Fi', 2, 'NO'),
(6, '10969867099', 'YANINAGOMEZ', 'yani_gomez', '', '$2y$10$AmVmc9w6P4rMUJdCR9YPnOrOBJrF5DTc3s7uI3SOkmsT1iWvxAv/2', 2, 'NO'),
(7, '1234567899', 'LUIS MARCELO', 'luis_marcelo', '', '$2y$10$xBfpgoQNFS6SdgO7tO0rZ.4njAewEIjY6hI35Hfg1pfF8fLjBfFKO', 2, 'NO'),
(8, '20319698880', 'GRACIELA GALARZA', 'graciela_gal', '', '$2y$10$D6Ld5mbhfNVv2gTVzxUpgODL.50dtdrsseo7tXtQV1ye38wNhx9A.', 2, 'NO'),
(9, '20551148260', 'JOAQUIN GALARZA', 'joaquin_galarza', '', '$2y$10$ywypbiBKikM/XrhasG00m.62741VbbORilM.wZjEjwGqjIRx4cs0.', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
