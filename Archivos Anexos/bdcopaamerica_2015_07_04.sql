-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2015 a las 05:40:36
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

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
  `idapuesta` int(11) NOT NULL AUTO_INCREMENT,
  `marcadorlocal` int(2) NOT NULL,
  `marcadorvisit` int(2) NOT NULL,
  `idpartido` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idapuesta`),
  KEY `idpartido` (`idpartido`,`idusuario`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbciudad`
--

CREATE TABLE IF NOT EXISTS `tbciudad` (
  `idciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreciudad` varchar(50) NOT NULL,
  `numerohab` int(11) NOT NULL,
  `estadioprinc` varchar(50) NOT NULL,
  PRIMARY KEY (`idciudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
  `idciuxgru` int(11) NOT NULL AUTO_INCREMENT,
  `idciudad` int(11) NOT NULL,
  `idgrupo` int(11) NOT NULL,
  PRIMARY KEY (`idciuxgru`),
  KEY `idciudad` (`idciudad`,`idgrupo`),
  KEY `idgrupo` (`idgrupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbentrenador`
--

CREATE TABLE IF NOT EXISTS `tbentrenador` (
  `iddt` int(11) NOT NULL AUTO_INCREMENT,
  `nombredt` varchar(25) NOT NULL,
  `apellidodt` varchar(25) NOT NULL,
  `nacionalidaddt` int(11) NOT NULL,
  `fechanacdt` date NOT NULL,
  PRIMARY KEY (`iddt`),
  KEY `nacionalidaddt` (`nacionalidaddt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
  `idequipo` int(11) NOT NULL AUTO_INCREMENT,
  `nomequi` varchar(25) NOT NULL,
  `fechafund` date NOT NULL,
  `paginaweb` varchar(50) DEFAULT NULL,
  `ciudadcap` varchar(30) NOT NULL,
  `grupo` int(11) NOT NULL,
  PRIMARY KEY (`idequipo`),
  KEY `entrenador` (`ciudadcap`,`grupo`),
  KEY `grupo` (`grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
  `idequipodir` int(11) NOT NULL AUTO_INCREMENT,
  `equipodir` int(11) NOT NULL,
  `iddt` int(11) NOT NULL,
  `fechaini` date NOT NULL,
  `fechafin` date DEFAULT NULL,
  PRIMARY KEY (`idequipodir`),
  KEY `equipodir` (`equipodir`,`iddt`),
  KEY `iddt` (`iddt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgrupo`
--

CREATE TABLE IF NOT EXISTS `tbgrupo` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombregrup` varchar(10) NOT NULL,
  PRIMARY KEY (`idgrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
  `idnacionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(30) NOT NULL,
  `nombrenacio` varchar(30) NOT NULL,
  PRIMARY KEY (`idnacionalidad`),
  KEY `pais` (`pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
  `idpartido` int(11) NOT NULL AUTO_INCREMENT,
  `equipolocal` int(11) NOT NULL,
  `equipovisit` int(11) NOT NULL,
  `horario` datetime NOT NULL,
  `idciudadestadio` int(11) NOT NULL,
  `marcadorlocal` int(2) DEFAULT NULL,
  `marcadorvisit` int(2) DEFAULT NULL,
  PRIMARY KEY (`idpartido`),
  KEY `equipolocal` (`equipolocal`),
  KEY `equipovisit` (`equipovisit`),
  KEY `idciudadestadio` (`idciudadestadio`),
  KEY `idciudadestadio_2` (`idciudadestadio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbpartidos`
--

INSERT INTO `tbpartidos` (`idpartido`, `equipolocal`, `equipovisit`, `horario`, `idciudadestadio`, `marcadorlocal`, `marcadorvisit`) VALUES
(1, 2, 3, '2015-07-11 18:30:00', 1, NULL, NULL),
(2, 4, 3, '2015-07-11 20:30:00', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipousuario`
--

CREATE TABLE IF NOT EXISTS `tbtipousuario` (
  `idtipousuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`idtipousuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
  `idtitulo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `iddt` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idtitulo`),
  KEY `iddt` (`iddt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `numdoc` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `tipouser` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `tipouser` (`tipouser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`idusuario`, `nombre`, `apellido`, `numdoc`, `email`, `username`, `password`, `tipouser`) VALUES
(2, 'Pepito', 'Perez', '1072666555', 'pepe@gmail.com', 'DonPepe', '7c9e7c1494b2684', 1);

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
