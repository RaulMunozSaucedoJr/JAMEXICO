-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2022 a las 01:54:13
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `mobile_number` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `house_number` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `curp` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `degree` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `last_name`, `mobile_number`, `house_number`, `curp`, `degree`, `email`) VALUES
(68, 'jasiel', 'saucedo', '55555555', '55555555', 'MUSR940609HDFXCL00', 'ingeniero', 'correo@hotmail.com'),
(69, 'pepe', 'pepe', '88888888', '88888888', 'MUSR940609HDFXCL00', 'inge', 'correo@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`) VALUES
(11, 'JUEGO DE ANDROID', '<p>JUEGO DE ANDROID JUEGO DE ANDROID JUEGO DE'),
(12, 'LOFITECH', ':D'),
(13, 'pepe', 'pepe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `cel_phone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `website` varchar(45) NOT NULL,
  `profesional_studies` varchar(45) NOT NULL,
  `skills` varchar(45) NOT NULL,
  `laboral_experience` varchar(45) NOT NULL,
  `laboral_links` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cv`
--

INSERT INTO `cv` (`id`, `full_name`, `address`, `cel_phone`, `email`, `website`, `profesional_studies`, `skills`, `laboral_experience`, `laboral_links`) VALUES
(11, 'Raul', 'Av. 543 #215', '5557713418', 'correo@gmail.com', 'www.google.com', 'Ingenieria', '[{\"value\":\"php\"},{\"value\":\"bootstrap\"},{\"valu', 'Siccob\r\nDesarrollador Web - FrontEnd', '[{\"value\":\"www.google.com\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title_job` varchar(45) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `job_address` varchar(45) NOT NULL,
  `salary` varchar(45) NOT NULL,
  `type_job` varchar(45) NOT NULL,
  `job_description` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jobs`
--

INSERT INTO `jobs` (`id`, `title_job`, `company_name`, `job_address`, `salary`, `type_job`, `job_description`, `email`) VALUES
(13, 'programador', 'siccob', 'av 543 #215', '787978', 'completo', 'descripcion                ', 'correo@gmail.com'),
(14, 'diseñador', 'siccob', 'av 543', '88777', 'completo', 'descripcion                ', 'correo@gmail.com'),
(15, 'Diseñador', 'JAMEXICO', 'Av. 543 #215', '16666', 'Completo', '1. Programacion basica en html\r\n2. Programaci', 'correo@hotmal.com'),
(16, 'jasiel', 'siccob', 'av 543', '989898', 'cmpleto', 'descripcion                ', 'correo@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'rodrigo', '123456789', '2022-05-24 00:45:56'),
(2, 'pedro', '$2y$10$i6JKYnveKsHDYdgNBwqUiOR1neo5mcCgBo4APDoNtobQ0Q7/uDSnS', '2022-05-24 01:10:39'),
(3, 'pepe', '$2y$10$2eJundKFRAvcrYUZbx64keNmvr1JL0gEo7rfnAgAnRq4A96hN14Lm', '2022-05-24 01:30:49'),
(4, 'juan', '$2y$10$icnfSv6mv1qnalJ6hCufA.wrW67c0I2ArZVE80yMlKl8sX4mwYYLG', '2022-05-24 10:59:41'),
(5, 'jose', '$2y$10$9OwiXoHaJJCtR09QgCJZqe1AUhyypmeiC7TkPXfoIhYcfy210qBnS', '2022-05-25 01:05:11'),
(6, 'ricardo', '$2y$10$PA1//83zxmQQFsMoUqU3eukLYParrMxjG1zTnmRulu3epkc5O7iX6', '2022-05-25 12:46:01'),
(7, 'slobo', '$2y$10$nn5NS/1S0uuuigo7rv1Dje1ywYtN/kP7bd.BAL4b.mNwRLZz2jnUi', '2022-05-25 12:47:27'),
(8, 'jasiel', '$2y$10$MFRi6Sk3BU2gkGPsukj9Lem1FOKGDCPFjqSl2NoPLnDYKna385tNu', '2022-05-26 10:17:08'),
(9, 'uriel', '$2y$10$4.IiHXkT4OczFYmsrwirleRE6S.Ow8Bh3MdzIJgcJVnLaUeLAI4h6', '2022-05-26 10:17:52'),
(10, 'miguel', '$2y$10$PPT84zTm73JjqVauGuJvluoaMBWqNS7xc56lkgsAUZBINrv7h1cHC', '2022-05-26 11:19:52'),
(11, 'pancho', '$2y$10$lH8dPeOM0DB46VPfKTBQM.SRg2En8wom1y23.2of26Lc3qg0SzzNi', '2022-05-26 11:27:56'),
(12, 'asdasd', '$2y$10$xmzZPx/7sIoDk2ZO.AcLVOVvIOdLvlzSVfWVvphQMn/UP6a9.88R.', '2022-05-26 11:54:13'),
(13, 'raulraul', '$2y$10$XNr/m4CsWj6pAGmlOLhStOArVYymvRNKYLBv9hZdqxqTXuePFL6Ae', '2022-06-06 12:07:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntiers`
--

CREATE TABLE `voluntiers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `mobile_number` varchar(45) NOT NULL,
  `house_number` varchar(45) NOT NULL,
  `curp` varchar(45) NOT NULL,
  `degree` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `voluntiers`
--
ALTER TABLE `voluntiers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `voluntiers`
--
ALTER TABLE `voluntiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
