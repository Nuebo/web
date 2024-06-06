-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2023 a las 23:28:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`) VALUES
(13, 'h@gmail.com', '$2y$10$2H2kZI9H0Y7nzDZIbS2RneeQIWhmLwhqFlwzz35N8qqXl0FEcVHy.', ''),
(14, 't@gmail.com', '$2y$10$mzAbgKUE1L5RzOWsUVL9s.grZwebkWgvnKqQ7HsJr7XOlpI05./d6', ''),
(15, 'jhondeiviasd@gmail.com', '$2y$10$TSUfQ/Ty0FIGipJZfO7IA.B2ROYxiepCruPxkSAlGuhLRsCE37GTS', ''),
(16, 'y@gmail.com', '$2y$10$zt20H6HtE52dJNHVWAdSluY9ymhS/jrlCLTisTgV4HefeShMgWG7u', ''),
(17, 'dxxxdeiviproxxx@gmail.com ', '$2y$10$3mDHazDlMMiXyo8dbWi/FuTBHPnBJA6YQJG1DVn/LNueV3sRmgDiS', ''),
(18, 'g@gmail.com', '$2y$10$t9BoByediY8Boq/JcZvOheaHnd4pF9dVUDw/PFjW61dm/tt0pK7GW', 'deivi'),
(19, 'j@ass@.com', '$2y$10$7.OhslxZpqrpf/plJSpAeeGhYQHmmaO.5.XNNuoyuV2ujSc6S5QFK', 'Deivi'),
(20, 'j@ass@.com', '$2y$10$AIC4BGsodjyxAdDxbO5uKup0Cpw5hysh/7JLAQJsfTn0ffy4dvVb.', 'Deivi'),
(21, 'j@gmail.com', '$2y$10$x9ZlnNmWO3YpcXsMrytjlOrXL5vw9c2OTBqTGMDEE0Q3x8xIJIAY.', 'Deivi'),
(22, '123@gmail.com', '$2y$10$JuWVGa/hQkNi0lY1g2A1N.WkizMGXnxw10qonPyCvcageGmupb6UK', 'Jhon'),
(23, '123@gmail.com', '$2y$10$qHSd5tRjzHfBxx9O1VBcrePN2UWJyDKIFeSdsUU09OIqgSm.HhLXK', 'Jhon'),
(24, 'ñ@gmail.com', '$2y$10$0HgGZB.VNN3m7vQxlwxwc.1AQl/hZbGpU/UxS7VlxSoI/bCL2Zui6', 'Yeis'),
(25, 'k@gmail.com', '$2y$10$zHuO5JlDmx8QoQnkwoF5dOLdIocMGA9.Y0cekbONEvHaneD9GTbcC', 'Tobby');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
