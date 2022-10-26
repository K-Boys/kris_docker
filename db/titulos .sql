-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 02:08:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `titulos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bachillerato`
--

CREATE TABLE `bachillerato` (
  `pk_bachillerato` smallint(6) NOT NULL,
  `nombre_bachillerato` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bachillerato`
--

INSERT INTO `bachillerato` (`pk_bachillerato`, `nombre_bachillerato`, `fk_estado`) VALUES
(8, 'COBAES42', 5),
(31, 'CBTIS', 9),
(32, 'CONALEP', 6),
(33, 'UAS', 5),
(34, 'SEP', 5),
(35, 'SEP', 5),
(36, 'CONAM', 11),
(37, 'SEPIC', 5),
(38, 'SEPMAC', 6),
(39, 'ETMA', 10),
(40, 'UNAMA', 14),
(41, 'GEE', 11),
(42, 'CBTIS', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `pk_carrera` smallint(6) NOT NULL,
  `nombre_carrera` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` char(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`pk_carrera`, `nombre_carrera`, `estatus`) VALUES
(297, 'ENFERMERIA', '1'),
(304, 'GASTRONOMIA', '1'),
(305, 'TURISMO', '1'),
(306, 'MECATRóNICA ', '1'),
(307, 'DERECHO', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `pk_categoria` smallint(6) NOT NULL,
  `nombre_cat` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`pk_categoria`, `nombre_cat`) VALUES
(1, 'LICENCIADO'),
(2, 'LICENCIADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `pk_estado` smallint(6) NOT NULL,
  `nombre_estado` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`pk_estado`, `nombre_estado`) VALUES
(5, 'Mexico'),
(6, 'Sonora '),
(9, 'Sinaloa'),
(10, 'Baja California Sur'),
(11, 'Baja California '),
(12, 'Puebla'),
(14, 'TAMAULIPAS'),
(15, 'Jalisco'),
(16, 'Guerrero'),
(17, 'baja california');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_prof`
--

CREATE TABLE `examen_prof` (
  `pk_examen_prof` smallint(6) NOT NULL,
  `dia` int(6) NOT NULL,
  `mes` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `año` int(11) NOT NULL,
  `fk_titulo` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `examen_prof`
--

INSERT INTO `examen_prof` (`pk_examen_prof`, `dia`, `mes`, `año`, `fk_titulo`) VALUES
(4, 1, 'OCTUBRE', 2021, 1),
(5, 1, 'ENERO', 2021, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulado`
--

CREATE TABLE `titulado` (
  `pk_titulado` smallint(6) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ap` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `am` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nacionalidad` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `curp` varchar(22) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sexo` char(1) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `periodo_bachillerato` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `periodo_tsu` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `periodo_licenciatura` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `lic_inst` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fk_bachillerato` smallint(6) DEFAULT NULL,
  `fk_carrera` smallint(6) DEFAULT NULL,
  `fk_categoria` smallint(6) DEFAULT NULL,
  `estatus` smallint(6) DEFAULT NULL,
  `fk_estado` smallint(6) DEFAULT NULL,
  `folio2` int(6) NOT NULL,
  `libro2` int(11) NOT NULL,
  `foja2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `titulado`
--

INSERT INTO `titulado` (`pk_titulado`, `nombre`, `ap`, `am`, `nacionalidad`, `curp`, `sexo`, `periodo_bachillerato`, `periodo_tsu`, `periodo_licenciatura`, `lic_inst`, `fk_bachillerato`, `fk_carrera`, `fk_categoria`, `estatus`, `fk_estado`, `folio2`, `libro2`, `foja2`) VALUES
(12, 'KRISTIAN BOYS', 'MARTÍNEZ', 'ALTAMIRANO', 'MEXICANA', 'MAAK2600hHRHR2', 'M', '2020-2022', '2022-2024', '2019-2021', 'UNIVERSIDAD TECNOLOGICA DE ESCUINAPA', 33, 297, 1, 1, 5, 1, 1, 1),
(35, 'LUIS', 'DE LA PAZ', 'RAMOS', 'MEXICANA', 'ADADADN1830012', 'M', '2020-2022', '2022-2025', '', '', 40, 297, 1, 1, 5, 0, 0, 0),
(36, 'JAIR', 'SINELLA', 'SEVILLA', 'MEXICANA', 'BARRON', 'F', '2020-2022', '2022-2025', '', '', 36, 297, 2, 0, 5, 0, 0, 0),
(39, 'JESUS', 'ANGEL', 'MONTAÑO', 'MEXICANA', 'LOPEZ', 'M', '2021-2023', '2022-2025', '', '', 36, 297, 1, 1, 5, 0, 0, 0),
(40, 'ALMA', 'ESTRADA', 'LÓPEZ', 'MÉXICANA', 'ALES021221KAOIS', 'F', '2020-2022', '2019-2020', '2019-2020', 'UNIVERSIDAD TECNOLOGICA DE ESCUINAPA', 40, 297, 2, 1, 5, 0, 0, 0),
(45, 'chein', 'Estrella', 'SEVILLA', 'MÉXICO', '1213r13r13', 'M', '2021-2023', '2022-2025', '2019-2020', '', 39, 297, 1, 1, 5, 0, 0, 0),
(46, 'chein22', 'Estrella', '', 'MÉXICO', 'BARRON', 'F', '', '', '', '', 36, 297, 2, 1, 5, 0, 0, 0),
(47, 'kamisato', 'ayaka', '', 'MÉXICO', 'BARRON', 'F', '', '', '', '', 8, 297, 2, 1, 5, 0, 0, 0),
(49, 'vaal', 'SINELLA', 'sdaw', 'MÉXICO', 'AKjhaidjai983u9uj', 'F', '2020-2022', '2019-2021', '2019-2020', 'utesc', 36, 297, 2, 1, 5, 0, 0, 0),
(50, 'keera', 'Estrella', '', 'MÉXICO', '1213r13r13', 'F', '', '', '', 'utesc', 36, 297, 2, 0, 5, 0, 0, 0),
(52, 'Mona', 'Estrella', 'SEVILLA', 'MÉXICO', 'BARRON', 'F', '2021-2023', '2019-2020', '2019-2020', 'UAS', 31, 297, 2, 1, 9, 0, 0, 0),
(55, 'Estefania', 'Estrella', '2', 'MÉXICO', 'AKjhaidjai983u9uj', 'M', '2021-2023', '2019-2020', '122', 'UAS', 40, 305, 2, 1, 10, 0, 0, 0),
(56, 'SOFIA', 'Estrella', '2', 'MÉXICO', 'AKjhaidjai983u9uj', 'M', '2021-2023', '2019-2020', '122', 'UAS', 32, 297, NULL, 1, 10, 0, 0, 0),
(57, 'BOYS', 'MARTINEZ', 'ALTAMIRANO', 'MÉXICO', 'MAAK011026HSLRLRA2', 'M', '2020-2022', '2022-2025', '2019-2020', 'UTESC', 40, 305, 1, 1, 9, 0, 0, 0),
(67, 'JAZMINE', 'JAMES', 'JONAS', 'MÉXICO', 'XRL8IO123HDGSHI2', 'F', '2020-2022', '2019-2020', '2019-2020', 'UTESC', 8, 297, NULL, 1, 9, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `pk_titulo` smallint(6) NOT NULL,
  `folio` smallint(6) NOT NULL,
  `libro` smallint(6) NOT NULL,
  `foja` smallint(6) NOT NULL,
  `fk_titulado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `titulo`
--

INSERT INTO `titulo` (`pk_titulo`, `folio`, `libro`, `foja`, `fk_titulado`) VALUES
(1, 1, 1, 1, 12),
(2, 2, 1, 1, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `pk_usuario` smallint(6) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`pk_usuario`, `nombre_usuario`, `contraseña`, `estatus`) VALUES
(1, 'boys', 'boys', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bachillerato`
--
ALTER TABLE `bachillerato`
  ADD PRIMARY KEY (`pk_bachillerato`),
  ADD KEY `fk_estado` (`fk_estado`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`pk_carrera`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`pk_categoria`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`pk_estado`);

--
-- Indices de la tabla `examen_prof`
--
ALTER TABLE `examen_prof`
  ADD PRIMARY KEY (`pk_examen_prof`),
  ADD KEY `fk_titulo` (`fk_titulo`);

--
-- Indices de la tabla `titulado`
--
ALTER TABLE `titulado`
  ADD PRIMARY KEY (`pk_titulado`),
  ADD KEY `fk_bachillerato` (`fk_bachillerato`),
  ADD KEY `fk_carrera` (`fk_carrera`),
  ADD KEY `fk_categoria` (`fk_categoria`),
  ADD KEY `fk_estado` (`fk_estado`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`pk_titulo`),
  ADD KEY `fk_titulado` (`fk_titulado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`pk_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bachillerato`
--
ALTER TABLE `bachillerato`
  MODIFY `pk_bachillerato` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `pk_carrera` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `pk_categoria` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `pk_estado` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `examen_prof`
--
ALTER TABLE `examen_prof`
  MODIFY `pk_examen_prof` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `titulado`
--
ALTER TABLE `titulado`
  MODIFY `pk_titulado` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `pk_titulo` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `pk_usuario` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bachillerato`
--
ALTER TABLE `bachillerato`
  ADD CONSTRAINT `bachillerato_ibfk_1` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`pk_estado`);

--
-- Filtros para la tabla `examen_prof`
--
ALTER TABLE `examen_prof`
  ADD CONSTRAINT `examen_prof_ibfk_1` FOREIGN KEY (`fk_titulo`) REFERENCES `titulo` (`pk_titulo`);

--
-- Filtros para la tabla `titulado`
--
ALTER TABLE `titulado`
  ADD CONSTRAINT `titulado_ibfk_1` FOREIGN KEY (`fk_bachillerato`) REFERENCES `bachillerato` (`pk_bachillerato`),
  ADD CONSTRAINT `titulado_ibfk_2` FOREIGN KEY (`fk_carrera`) REFERENCES `carrera` (`pk_carrera`),
  ADD CONSTRAINT `titulado_ibfk_3` FOREIGN KEY (`fk_categoria`) REFERENCES `categoria` (`pk_categoria`),
  ADD CONSTRAINT `titulado_ibfk_4` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`pk_estado`);

--
-- Filtros para la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD CONSTRAINT `titulo_ibfk_1` FOREIGN KEY (`fk_titulado`) REFERENCES `titulado` (`pk_titulado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
