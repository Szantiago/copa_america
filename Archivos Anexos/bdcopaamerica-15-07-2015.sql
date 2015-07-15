-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2015 a las 09:29:37
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdcopaamerica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbapuesta`
--

CREATE TABLE IF NOT EXISTS `tbapuesta` (
`idapuesta` int(11) NOT NULL,
  `marcadorlocal` int(2) NOT NULL,
  `marcadorvisit` int(2) NOT NULL,
  `idpartido` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbapuesta`
--

INSERT INTO `tbapuesta` (`idapuesta`, `marcadorlocal`, `marcadorvisit`, `idpartido`, `idusuario`) VALUES
(5, 2, 4, 4, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbciudad`
--

CREATE TABLE IF NOT EXISTS `tbciudad` (
`idciudad` int(11) NOT NULL,
  `nombreciudad` varchar(50) NOT NULL,
  `numerohab` int(11) NOT NULL,
  `estadioprinc` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbciudad`
--

INSERT INTO `tbciudad` (`idciudad`, `nombreciudad`, `numerohab`, `estadioprinc`) VALUES
(1, 'Antofagasta', 390832, 'Estadio Regional Calvo y Bascuñan'),
(2, 'La serena', 209651, 'Estadio La portada'),
(3, 'Viña del Mar', 288329, 'Estadio Sausalito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbciudadxgrupo`
--

CREATE TABLE IF NOT EXISTS `tbciudadxgrupo` (
`idciuxgru` int(11) NOT NULL,
  `idciudad` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbentrenador`
--

CREATE TABLE IF NOT EXISTS `tbentrenador` (
`iddt` int(11) NOT NULL,
  `nombredt` varchar(25) NOT NULL,
  `apellidodt` varchar(25) NOT NULL,
  `nacionalidaddt` int(11) NOT NULL,
  `fechanacdt` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbentrenador`
--

INSERT INTO `tbentrenador` (`iddt`, `nombredt`, `apellidodt`, `nacionalidaddt`, `fechanacdt`) VALUES
(1, 'Jorge', 'Sampaoli', 2, '1960-03-13'),
(2, 'Carlos Caetano', 'Dunga', 1, '1963-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbequipo`
--

CREATE TABLE IF NOT EXISTS `tbequipo` (
`idequipo` int(11) NOT NULL,
  `nomequi` varchar(25) NOT NULL,
  `fechafund` date NOT NULL,
  `paginaweb` varchar(50) DEFAULT NULL,
  `ciudadcap` varchar(30) NOT NULL,
  `grupo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbequipo`
--

INSERT INTO `tbequipo` (`idequipo`, `nomequi`, `fechafund`, `paginaweb`, `ciudadcap`, `grupo`) VALUES
(2, 'Chile', '1895-01-01', 'www.anfp.cl', 'Santiago de Chile', 1),
(3, 'Mexico', '1922-01-01', 'www.femexfut.org.mx', 'Mexico D.F.', 1),
(4, 'Ecuador', '1925-01-01', 'www.ecuafutbol.org', 'Quito', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbequipodirigido`
--

CREATE TABLE IF NOT EXISTS `tbequipodirigido` (
`idequipodir` int(11) NOT NULL,
  `equipodir` int(11) NOT NULL,
  `iddt` int(11) NOT NULL,
  `fechaini` date NOT NULL,
  `fechafin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgrupo`
--

CREATE TABLE IF NOT EXISTS `tbgrupo` (
`idgrupo` int(11) NOT NULL,
  `nombregrup` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbgrupo`
--

INSERT INTO `tbgrupo` (`idgrupo`, `nombregrup`) VALUES
(1, 'Grupo A'),
(2, 'Grupo B'),
(3, 'Grupo C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbnacionalidad`
--

CREATE TABLE IF NOT EXISTS `tbnacionalidad` (
`idnacionalidad` int(11) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `nombrenacio` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbnacionalidad`
--

INSERT INTO `tbnacionalidad` (`idnacionalidad`, `pais`, `nombrenacio`) VALUES
(1, 'Brasil', 'Brasilero'),
(2, 'Argentina', 'Argentino'),
(3, 'Colombia', 'Colombiano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpartidos`
--

CREATE TABLE IF NOT EXISTS `tbpartidos` (
`idpartido` int(11) NOT NULL,
  `equipolocal` int(11) NOT NULL,
  `equipovisit` int(11) NOT NULL,
  `horario` datetime NOT NULL,
  `idciudadestadio` int(11) NOT NULL,
  `marcadorlocal` int(2) DEFAULT NULL,
  `marcadorvisit` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbpartidos`
--

INSERT INTO `tbpartidos` (`idpartido`, `equipolocal`, `equipovisit`, `horario`, `idciudadestadio`, `marcadorlocal`, `marcadorvisit`) VALUES
(1, 2, 3, '2015-07-11 18:30:00', 1, 4, 1),
(2, 4, 3, '2015-07-06 20:30:00', 2, 3, 0),
(3, 2, 3, '2015-07-10 12:00:00', 3, 0, 0),
(4, 4, 2, '2015-07-24 13:00:00', 2, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipousuario`
--

CREATE TABLE IF NOT EXISTS `tbtipousuario` (
`idtipousuario` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbtipousuario`
--

INSERT INTO `tbtipousuario` (`idtipousuario`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtitulo`
--

CREATE TABLE IF NOT EXISTS `tbtitulo` (
`idtitulo` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `iddt` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
`idusuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `numdoc` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `tipouser` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`idusuario`, `nombre`, `apellido`, `numdoc`, `email`, `username`, `password`, `tipouser`) VALUES
(10, 'Andrea', 'Socha', '53911019', 'mariamendez@gmail.com', 'lilianas', '33e86b77bece12d3c806b45003e24c42f01e19bfb0a46704894dcf2af3af4190', 2),
(11, 'Wilmer Fabian', 'Triana Pulgarin', '1072661319', 'fabiantriana1072@gmail.com', 'admin', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbapuesta`
--
ALTER TABLE `tbapuesta`
 ADD PRIMARY KEY (`idapuesta`), ADD KEY `idpartido` (`idpartido`,`idusuario`), ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `tbciudad`
--
ALTER TABLE `tbciudad`
 ADD PRIMARY KEY (`idciudad`);

--
-- Indices de la tabla `tbciudadxgrupo`
--
ALTER TABLE `tbciudadxgrupo`
 ADD PRIMARY KEY (`idciuxgru`), ADD KEY `idciudad` (`idciudad`,`idgrupo`), ADD KEY `idgrupo` (`idgrupo`);

--
-- Indices de la tabla `tbentrenador`
--
ALTER TABLE `tbentrenador`
 ADD PRIMARY KEY (`iddt`), ADD KEY `nacionalidaddt` (`nacionalidaddt`);

--
-- Indices de la tabla `tbequipo`
--
ALTER TABLE `tbequipo`
 ADD PRIMARY KEY (`idequipo`), ADD KEY `entrenador` (`ciudadcap`,`grupo`), ADD KEY `grupo` (`grupo`);

--
-- Indices de la tabla `tbequipodirigido`
--
ALTER TABLE `tbequipodirigido`
 ADD PRIMARY KEY (`idequipodir`), ADD KEY `equipodir` (`equipodir`,`iddt`), ADD KEY `iddt` (`iddt`);

--
-- Indices de la tabla `tbgrupo`
--
ALTER TABLE `tbgrupo`
 ADD PRIMARY KEY (`idgrupo`);

--
-- Indices de la tabla `tbnacionalidad`
--
ALTER TABLE `tbnacionalidad`
 ADD PRIMARY KEY (`idnacionalidad`), ADD KEY `pais` (`pais`);

--
-- Indices de la tabla `tbpartidos`
--
ALTER TABLE `tbpartidos`
 ADD PRIMARY KEY (`idpartido`), ADD KEY `equipolocal` (`equipolocal`), ADD KEY `equipovisit` (`equipovisit`), ADD KEY `idciudadestadio` (`idciudadestadio`), ADD KEY `idciudadestadio_2` (`idciudadestadio`);

--
-- Indices de la tabla `tbtipousuario`
--
ALTER TABLE `tbtipousuario`
 ADD PRIMARY KEY (`idtipousuario`);

--
-- Indices de la tabla `tbtitulo`
--
ALTER TABLE `tbtitulo`
 ADD PRIMARY KEY (`idtitulo`), ADD KEY `iddt` (`iddt`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
 ADD PRIMARY KEY (`idusuario`), ADD KEY `tipouser` (`tipouser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbapuesta`
--
ALTER TABLE `tbapuesta`
MODIFY `idapuesta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbciudad`
--
ALTER TABLE `tbciudad`
MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbciudadxgrupo`
--
ALTER TABLE `tbciudadxgrupo`
MODIFY `idciuxgru` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbentrenador`
--
ALTER TABLE `tbentrenador`
MODIFY `iddt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbequipo`
--
ALTER TABLE `tbequipo`
MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbequipodirigido`
--
ALTER TABLE `tbequipodirigido`
MODIFY `idequipodir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbgrupo`
--
ALTER TABLE `tbgrupo`
MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbnacionalidad`
--
ALTER TABLE `tbnacionalidad`
MODIFY `idnacionalidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbpartidos`
--
ALTER TABLE `tbpartidos`
MODIFY `idpartido` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbtipousuario`
--
ALTER TABLE `tbtipousuario`
MODIFY `idtipousuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbtitulo`
--
ALTER TABLE `tbtitulo`
MODIFY `idtitulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbapuesta`
--
ALTER TABLE `tbapuesta`
ADD CONSTRAINT `tbapuesta_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `tbusuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbapuesta_ibfk_2` FOREIGN KEY (`idpartido`) REFERENCES `tbpartidos` (`idpartido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbciudadxgrupo`
--
ALTER TABLE `tbciudadxgrupo`
ADD CONSTRAINT `tbciudadxgrupo_ibfk_1` FOREIGN KEY (`idgrupo`) REFERENCES `tbgrupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbciudadxgrupo_ibfk_2` FOREIGN KEY (`idciudad`) REFERENCES `tbciudad` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbentrenador`
--
ALTER TABLE `tbentrenador`
ADD CONSTRAINT `tbentrenador_ibfk_1` FOREIGN KEY (`nacionalidaddt`) REFERENCES `tbnacionalidad` (`idnacionalidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbequipo`
--
ALTER TABLE `tbequipo`
ADD CONSTRAINT `tbequipo_ibfk_2` FOREIGN KEY (`grupo`) REFERENCES `tbgrupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbequipodirigido`
--
ALTER TABLE `tbequipodirigido`
ADD CONSTRAINT `tbequipodirigido_ibfk_1` FOREIGN KEY (`iddt`) REFERENCES `tbentrenador` (`iddt`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbequipodirigido_ibfk_2` FOREIGN KEY (`equipodir`) REFERENCES `tbequipo` (`idequipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbpartidos`
--
ALTER TABLE `tbpartidos`
ADD CONSTRAINT `tbpartidos_ibfk_1` FOREIGN KEY (`equipolocal`) REFERENCES `tbequipo` (`idequipo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbpartidos_ibfk_2` FOREIGN KEY (`equipovisit`) REFERENCES `tbequipo` (`idequipo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbpartidos_ibfk_3` FOREIGN KEY (`idciudadestadio`) REFERENCES `tbciudad` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbtitulo`
--
ALTER TABLE `tbtitulo`
ADD CONSTRAINT `tbtitulo_ibfk_1` FOREIGN KEY (`iddt`) REFERENCES `tbentrenador` (`iddt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
ADD CONSTRAINT `tbusuario_ibfk_1` FOREIGN KEY (`tipouser`) REFERENCES `tbtipousuario` (`idtipousuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
