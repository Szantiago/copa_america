-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2015 a las 10:51:31
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbciudad`
--

CREATE TABLE IF NOT EXISTS `tbciudad` (
`idciudad` int(11) NOT NULL,
  `nombreciudad` varchar(50) NOT NULL,
  `numerohab` int(11) NOT NULL,
  `estadioprinc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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
  `fechanacdt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbequipo`
--

CREATE TABLE IF NOT EXISTS `tbequipo` (
`idequipo` int(11) NOT NULL,
  `nomequi` varchar(25) NOT NULL,
  `fechafund` datetime NOT NULL,
  `paginaweb` varchar(50) DEFAULT NULL,
  `ciudadcap` int(11) NOT NULL,
  `grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbequipodirigido`
--

CREATE TABLE IF NOT EXISTS `tbequipodirigido` (
`idequipodir` int(11) NOT NULL,
  `equipodir` int(11) NOT NULL,
  `iddt` int(11) NOT NULL,
  `fechaini` datetime NOT NULL,
  `fechafin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgrupo`
--

CREATE TABLE IF NOT EXISTS `tbgrupo` (
`idgrupo` int(11) NOT NULL,
  `nombregrup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbnacionalidad`
--

CREATE TABLE IF NOT EXISTS `tbnacionalidad` (
`idnacionalidad` int(11) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `nombrenacio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipousuario`
--

CREATE TABLE IF NOT EXISTS `tbtipousuario` (
`idtipousuario` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `password` varchar(15) NOT NULL,
  `tipouser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
 ADD PRIMARY KEY (`idpartido`,`equipolocal`,`equipovisit`), ADD KEY `equipolocal` (`equipolocal`), ADD KEY `equipovisit` (`equipovisit`), ADD KEY `idciudadestadio` (`idciudadestadio`), ADD KEY `idciudadestadio_2` (`idciudadestadio`);

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
MODIFY `idapuesta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbciudad`
--
ALTER TABLE `tbciudad`
MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbciudadxgrupo`
--
ALTER TABLE `tbciudadxgrupo`
MODIFY `idciuxgru` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbentrenador`
--
ALTER TABLE `tbentrenador`
MODIFY `iddt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbequipo`
--
ALTER TABLE `tbequipo`
MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbequipodirigido`
--
ALTER TABLE `tbequipodirigido`
MODIFY `idequipodir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbgrupo`
--
ALTER TABLE `tbgrupo`
MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbnacionalidad`
--
ALTER TABLE `tbnacionalidad`
MODIFY `idnacionalidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbpartidos`
--
ALTER TABLE `tbpartidos`
MODIFY `idpartido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbtipousuario`
--
ALTER TABLE `tbtipousuario`
MODIFY `idtipousuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbtitulo`
--
ALTER TABLE `tbtitulo`
MODIFY `idtitulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
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
ADD CONSTRAINT `tbequipo_ibfk_1` FOREIGN KEY (`ciudadcap`) REFERENCES `tbciudad` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE,
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
