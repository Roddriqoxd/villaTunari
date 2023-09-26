-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 03:30:27
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
(3, 'Feria del Chicharron', '“Invitamos a toda nuestra población cochabambina y sacabeña a participar de la gran feria del Chicharrón sacabeño, estarán grupos de renombre para deleitar a la población, quedan todos invitados a la feria, este mes de junio estamos cumpliendo 262 años de la creación de nuestra Villa San Pedro de Sacaba”, indicó el alcalde Pedro Gutiérrez Vidaurre. <br>\r\nLa feria del Chicharrón en Sacaba es la actividad gastronómica más grande e importante del departamento de Cochabamba debido a que en ella se instalan alrededor de 600 puestos.<br>\r\n“Esta feria es la más grande de Cochabamba, el Chicharrón es el plato bandera de Sacaba y del departamento, es nuestra identidad, nuestra cultura y nuestra gastronomía, en Sacaba se preparan los exquisitos chicharrones con mucho cariño”, indicó la presidenta de la Asociación de Chicharroneras de Sacaba, Elizabeth Hinojosa. \r\n', '2023-09-20', '2023-09-23', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30456.75144081547!2d-66.05840964963227!3d-17.40727934231225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37a79ff3a379f%3A0x8c9427a8dc4066af!2sSacaba%2C%20Bolivia!5e0!3m2!1ses!2sus!4v1695342917414!5m2!1ses!2sus\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'feria 12.jfif', 'poza 5.jfif'),
(4, 'Feria del fricase ', '2da Feria turistica EL CHORRO realizado en 30 y 31 de octubre el lugar a desarrollarse sera Av. Hans Greter y calle Beni en Villa Tunari, las actividades a desarrollarse son:\r\n\r\n    Voleybol de playa\r\n    Futbol de playa\r\n    Carrera pedestre\r\n    Eleccion Mis y Mr. Halloween\r\n\r\nLa actividad estara amenizada por los grupos:\r\n\r\n    TK-13\r\n    Amor Amor', '2023-09-13', NULL, 'asas', 'p 6.jfif', 'yura 5.jpg'),
(5, 'Feria de la agronomia y la casa de la cultura sin ', 'Feria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidado', '2023-09-23', '2023-09-30', 'Feria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidado', 'calendario.png', 'prin 1.jfif'),
(6, 'Feria de la agronomia y la casa de la cultura sin ', 'Feria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidado', '2023-09-01', NULL, 'Feria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidado', 'jungla.jpg', 'yura 4.jpg'),
(7, 'Feria de la agronomia y la casa de la cultura sin ', 'Feria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidado', '2023-09-15', NULL, 'Feria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidado', 'jungla 1.jpg', 'yura.jpg'),
(8, 'Feria de la agronomia y la casa de la cultura sin ', 'Feria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidadoFeria de la agronomia y la casa de la cultura sin cuidado', '2023-09-14', NULL, 'Feria de la agronomia y la casa de la cultura sin cuidado', 'jura 5.jpg', 'MACHIA 16.jpg'),
(9, 'sasaws', 'asas', '2023-09-20', NULL, 'asas', 'hormiga 1.webp', 'jungla 1.jpg'),
(10, 'Ferias del Pescado', 'El Gobierno Autonomo Municipal de Villa Tunari invita a la \"Feria Internacional del Pescado Villa Tunari 2022\" , el viernes 5 y 6 de agosto en el campo ferial, donde degustaran  la variedad de platos en base de pescado asi como tambien visitar los atractivos turisticos caracteristicos del municipio.<br>\r\nEl Gobierno Autonomo Municipal de Villa Tunari invita a la \"Feria Internacional del Pescado Villa Tunari 2022\" , el viernes 5 y 6 de agosto en el campo ferial, donde degustaran  la variedad de platos en base de pescado asi como tambien visitar los atractivos turisticos caracteristicos del municipio.', '2023-09-26', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d472.435415739235!2d-65.42043195319322!3d-16.972359441399504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1695690990606!5m2!1ses-419!2sbo\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'feria 14.jfif', 'leña 13.jpeg');

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
(8, 'Parque la Jungla', 'Parque recreativo de aventura, a 7 kilómetros de Villa Tunari, en el trópico cochabambino, para disfrutar de un emocionante día de descanso, distracción, adrenalina y del majetuoso ambiente que la naturaleza ofrece.\nPRINCIPALES ATRACTIVOS:\n                        El Parque Recreativo La Jungla, cuenta con varios columpios que van desde 3mts de altura\n                        (principiantes), hasta los 18 mts de altura(solo valientes), cuenta también con puentes\n                        colgantes sobre árboles, roldanas, rio con playas de arena aptas para nadar, áreas de camping y\n                        también ofrece servicio de restaurante.\n                        CÓMO LLEGAR:\n                        En Villa Tunari, en plena avenida principal, buscar la zona de taxis (Integración y Chuquisa)\n                        preguntar por aquellos que van al lado de Eterazama, empresas LIDER y NACIONAL.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.168256139994!2d-65.4045406240244!3d-16.916990551599994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e4413e54ece94d%3A0xd6a93e591d385994!2sParque%20La%20Jungla%20-%20Villa%20Tunari!5e0!3m2!1ses-419!2sbo!4v1695266732451!5m2!1ses-419!2sbo\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'de 8am a 11pm', 'de 8am a 11pm', 'de 8am a 11pm', 'de 8am a 11pm', 'de 8am a 11pm', 'todo el dia', 'todo el dia', '72290589 - 4700467', 'jungla 1.jpg', 'jungla 2.webp', 'jungla 3.jpg', 'jungla 4.jpg', 'jungla 5.jpg', 'jungla 6.jpg', 'Abierto al publico'),
(10, 'Parque LA JUNGLA', 'El Gobierno Autonomo Municipal de Villa Tunari invita a la \"Feria Internacional del Pescado Villa Tunari 2022\" , el viernes 5 y 6 de agosto en el campo ferial, donde degustaran  la variedad de platos en base de pescado asi como tambien visitar los atractivos turisticos caracteristicos del municipio.<br>\r\nEl Gobierno Autonomo Municipal de Villa Tunari invita a la \"Feria Internacional del Pescado Villa Tunari 2022\" , el viernes 5 y 6 de agosto en el campo ferial, donde degustaran  la variedad de platos en base de pescado asi como tambien visitar los atractivos turisticos caracteristicos del municipio.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1273.8289702822167!2d-65.4024457967219!3d-16.916705753188086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e4413e54ece94d%3A0xd6a93e591d385994!2sParque%20La%20Jungla%20-%20Villa%20Tunari!5e0!3m2!1ses-419!2sbo!4v1695691145836!5m2!1ses-419!2sbo\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'de 2 qa 12', 'de 2 qa 12', 'de 2 qa 12', 'de 2 qa 12', 'de 2 qa 12', 'de 2 qa 12', 'todo el dia', '74004674- 47004745', 'jungla 1.jpg', 'jungla 2.webp', 'jungla 3.jpg', 'jungla 4.jpg', 'leña 5.jfif', 'leña 12.jpg', 'En mantenimiento');

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

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `paterno`, `materno`, `correo`, `password`) VALUES
(1, 'Rodrigo', 'lopez', 'Fuentes', 'rodrigo@gmail.com', '123456'),
(11, 'Pedrito ', 'Pacheco', 'Rojas', 'pedro@gmail.com', '123'),
(12, 'Filiberto', 'Arratia', 'Jesus', 'fili@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` int(11) NOT NULL,
  `id_feria` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id`, `id_feria`, `correo`, `nombre`) VALUES
(28, 3, 'pedro@gmail.com', 'Pedrito  Pacheco'),
(29, 4, 'pedro@gmail.com', 'Pedrito  Pacheco'),
(33, 6, 'pedro@gmail.com', 'rodrigo Pacheco');

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
(4, 'admin', 'rodrigo', 'admin'),
(5, 'user', 'Jose Rodrigo Lopez', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
