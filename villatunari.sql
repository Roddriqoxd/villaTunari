-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 00:06:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `villatunari`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ferias`
--

CREATE TABLE `ferias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `descripcion` longtext COLLATE utf16_spanish_ci NOT NULL,
  `inicio` date NOT NULL,
  `fin` date DEFAULT NULL,
  `ubicacion` longtext COLLATE utf16_spanish_ci NOT NULL,
  `img1` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `img2` varchar(50) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `ferias`
--

INSERT INTO `ferias` (`id`, `nombre`, `descripcion`, `inicio`, `fin`, `ubicacion`, `img1`, `img2`) VALUES
(3, 'Feria del Chicharron', '“Invitamos a toda nuestra población cochabambina y sacabeña a participar de la gran feria del Chicharrón sacabeño, estarán grupos de renombre para deleitar a la población, quedan todos invitados a la feria, este mes de junio estamos cumpliendo 262 años de la creación de nuestra Villa San Pedro de Sacaba”, indicó el alcalde Pedro Gutiérrez Vidaurre. <br>\r\nLa feria del Chicharrón en Sacaba es la actividad gastronómica más grande e importante del departamento de Cochabamba debido a que en ella se instalan alrededor de 600 puestos.<br>\r\n“Esta feria es la más grande de Cochabamba, el Chicharrón es el plato bandera de Sacaba y del departamento, es nuestra identidad, nuestra cultura y nuestra gastronomía, en Sacaba se preparan los exquisitos chicharrones con mucho cariño”, indicó la presidenta de la Asociación de Chicharroneras de Sacaba, Elizabeth Hinojosa. \r\n', '2023-09-20', '2023-09-23', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30456.75144081547!2d-66.05840964963227!3d-17.40727934231225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37a79ff3a379f%3A0x8c9427a8dc4066af!2sSacaba%2C%20Bolivia!5e0!3m2!1ses!2sus!4v1695342917414!5m2!1ses!2sus\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'feria 12.jfif', 'poza 5.jfif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parques`
--

CREATE TABLE `parques` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci DEFAULT NULL,
  `informacion` longtext COLLATE utf16_spanish_ci DEFAULT NULL,
  `ubicacion` longtext COLLATE utf16_spanish_ci DEFAULT NULL,
  `lunes` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `martes` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `miercoles` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `jueves` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `viernes` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `sabado` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `domingo` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `telefonos` varchar(50) COLLATE utf16_spanish_ci DEFAULT NULL,
  `img1` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `img2` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `img3` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `img4` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `img5` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `img6` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL,
  `estatus` varchar(20) COLLATE utf16_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `parques`
--

INSERT INTO `parques` (`id`, `nombre`, `informacion`, `ubicacion`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `telefonos`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `estatus`) VALUES
(8, 'Parque la Jungla', 'Parque recreativo de aventura, a 7 kilómetros de Villa Tunari, en el trópico cochabambino, para disfrutar de un emocionante día de descanso, distracción, adrenalina y del majetuoso ambiente que la naturaleza ofrece.\nPRINCIPALES ATRACTIVOS:\n                        El Parque Recreativo La Jungla, cuenta con varios columpios que van desde 3mts de altura\n                        (principiantes), hasta los 18 mts de altura(solo valientes), cuenta también con puentes\n                        colgantes sobre árboles, roldanas, rio con playas de arena aptas para nadar, áreas de camping y\n                        también ofrece servicio de restaurante.\n                        CÓMO LLEGAR:\n                        En Villa Tunari, en plena avenida principal, buscar la zona de taxis (Integración y Chuquisa)\n                        preguntar por aquellos que van al lado de Eterazama, empresas LIDER y NACIONAL.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.168256139994!2d-65.4045406240244!3d-16.916990551599994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e4413e54ece94d%3A0xd6a93e591d385994!2sParque%20La%20Jungla%20-%20Villa%20Tunari!5e0!3m2!1ses-419!2sbo!4v1695266732451!5m2!1ses-419!2sbo\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'de 8am a 11pm', 'de 8am a 11pm', 'de 8am a 11pm', 'de 8am a 11pm', 'de 8am a 11pm', 'todo el dia', 'todo el dia', '72290589 - 4700467', 'jungla 1.jpg', 'jungla 2.webp', 'jungla 3.jpg', 'jungla 4.jpg', 'jungla 5.jpg', 'jungla 6.jpg', 'Abierto al publico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `paterno` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `materno` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` int(11) NOT NULL,
  `id_feria` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `feria` varchar(50) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `clave`) VALUES
(4, 'admin', 'Fili', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ferias`
--
ALTER TABLE `ferias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parques`
--
ALTER TABLE `parques`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_feria_2` (`id_feria`),
  ADD KEY `id_feria` (`id_feria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ferias`
--
ALTER TABLE `ferias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `parques`
--
ALTER TABLE `parques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD CONSTRAINT `suscripciones_ibfk_1` FOREIGN KEY (`id_feria`) REFERENCES `ferias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
