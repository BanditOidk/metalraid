-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2023 a las 23:12:14
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario_metalraid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(100) NOT NULL,
  `objetivo` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `persona` varchar(100) NOT NULL,
  `logistico` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `tiempo` varchar(100) NOT NULL,
  `trabajo` varchar(100) NOT NULL,
  `prioridad` varchar(100) NOT NULL,
  `accesibilidad` varchar(100) NOT NULL,
  `disponibilidad` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `anticorrupcion` varchar(100) NOT NULL,
  `valorizacion` varchar(100) NOT NULL,
  `negocio` varchar(100) NOT NULL,
  `alcance` varchar(100) NOT NULL,
  `mano` varchar(100) NOT NULL,
  `materiales` varchar(100) NOT NULL,
  `servicios` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `tipotrabajo` varchar(100) NOT NULL,
  `epp` varchar(100) NOT NULL,
  `equipos` varchar(100) NOT NULL,
  `procedimientos` varchar(100) NOT NULL,
  `jefe` varchar(100) NOT NULL,
  `riesgos` varchar(100) NOT NULL,
  `observaciones` text NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `nombre`, `fecha`, `descripcion`, `objetivo`, `area`, `persona`, `logistico`, `ubicacion`, `tiempo`, `trabajo`, `prioridad`, `accesibilidad`, `disponibilidad`, `horario`, `anticorrupcion`, `valorizacion`, `negocio`, `alcance`, `mano`, `materiales`, `servicios`, `cliente`, `tipotrabajo`, `epp`, `equipos`, `procedimientos`, `jefe`, `riesgos`, `observaciones`, `imagen`) VALUES
(1022, '', '2023-03-05', '', '', '', '', '', '', '', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', '', '', '', '', 'files/fue_mi_pene_v.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`) VALUES
(1, 'sebitas123', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
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
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
