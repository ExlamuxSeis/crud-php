-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-03-2024 a las 05:48:34
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cru`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `paterno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `paterno`, `materno`, `nombre`, `sexo`, `telefono`, `email`, `municipio`, `estado`) VALUES
(1, 'Albarrán', 'Ayala', 'Esteban', 'H', 7321095174, 'alayes@gmail.com', 'Tlapehuala', 'Guerrero'),
(2, 'Ángel', 'Flores', 'Albertano', 'H', 7321099354, 'anflal@gmail.com', 'Ajuchitlán del Progreso', 'Guerrero'),
(3, 'Arevalo', 'Flores', 'Marcela', 'M', 7321087757, 'arflma@gmail.com', 'Pungarabato', 'Guerrero'),
(4, 'Arenas', 'Mendoza', 'Pedro', 'H', 7321059883, 'armepe@gmail.com', 'Tlalchapa', 'Guerrero'),
(5, 'Avicena', 'Muñoz', 'Saturnina', 'M', 7321034657, 'avmusa@gmail.com', 'Coyuca de Catalán', 'Guerrero'),
(6, 'Alonzo', 'Muñoz', 'Zeferino', 'H', 7321014751, 'almuze@gmail.com', 'San Miguel Totolapan', 'Guerrero'),
(7, 'Apolonio', 'Rayo', 'Antonio', 'H', 7321006846, 'apraan@gmail.com', 'Arcelia', 'Guerrero'),
(8, 'Aguirre', 'Reyes', 'Eva', 'M', 7321099278, 'agreev@gmail.com', 'Cutzamala', 'Guerrero'),
(9, 'Aguario', 'Romulo', 'José', 'H', 7321095440, 'agrojo@gmail.com', 'Tlapehuala', 'Guerrero'),
(10, 'Azucar', 'Diaz', 'José', 'H', 7321070493, 'azdijo@gmail.com', 'Ajuchitlán del Progreso', 'Guerrero'),
(11, 'Antunez', 'Chamu', 'Damaso', 'H', 7321033504, 'anchda@gmail.com', 'Pungarabato', 'Guerrero'),
(12, 'Urquidez', 'León', 'Víctor Manuel', 'H', 7676798976, 'ti21_victor.ul@uttc.edu.mx', 'Tlapehuala', 'Guerrero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
