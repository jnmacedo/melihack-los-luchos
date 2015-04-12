-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-04-2015 a las 14:41:50
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `meli_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_meli`
--

CREATE TABLE `preguntas_meli` (
`id` int(11) NOT NULL,
  `pregunta_meli_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `articulo_meli_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pregunta` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas_meli`
--

INSERT INTO `preguntas_meli` (`id`, `pregunta_meli_id`, `pregunta_id`, `articulo_meli_id`, `pregunta`) VALUES
(19, '3514602159', 5, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(20, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(21, '3514602159', 4, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(22, '3514602159', 6, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(23, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(24, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(25, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(26, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(27, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(28, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(29, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(30, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(31, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(32, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(33, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(34, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(35, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(36, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(37, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(38, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(39, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(40, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(41, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(42, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(43, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(44, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(45, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(46, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(47, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(48, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(49, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(50, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(51, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(52, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(53, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peÃ±arol montevideo estan impecablesÂ¿'),
(54, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(55, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(56, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(57, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(58, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(59, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(60, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(61, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(62, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(63, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(64, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(65, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(66, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(67, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(68, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(69, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(70, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(71, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(72, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(73, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(74, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android'),
(75, '3514602159', 0, 'MLU425673396', 'Hola los tenes te sirven 500 soy de barrio peñarol montevideo estan impecables¿'),
(76, '3513592775', 0, 'MLU425673396', 'Hola. Los tenes todavia? \n\nEnviado desde MercadoLibre para Android');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_vendedor`
--

CREATE TABLE `preguntas_vendedor` (
`id` int(11) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL,
  `hit` int(11) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas_vendedor`
--

INSERT INTO `preguntas_vendedor` (`id`, `pregunta`, `respuesta`, `hit`, `keywords`) VALUES
(1, '¿De que color es?', 'Verde', 3, 'color'),
(2, '¿Que talle es?', '9.5', 12, 'talle'),
(3, '¿Cual es tu dirección?', 'Bulevar Artigas 1234', 7, 'direccion,local,zona,ubicacion'),
(4, 'Cual es el estado?', 'Son usados pero no tienen marcas de uso.', 0, 'estado,nuevos,impecables,usados,marcas,uso'),
(5, 'En que barrio estas?', 'Me encuentro en la zona de Pocitos', 0, 'barrio,pocitos,localidad'),
(6, 'Podrias hacerme un descuento?', 'Lamentablemente el precio es el publicado.', 0, 'precio,descuento,500');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas_meli`
--
ALTER TABLE `preguntas_meli`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas_vendedor`
--
ALTER TABLE `preguntas_vendedor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas_meli`
--
ALTER TABLE `preguntas_meli`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `preguntas_vendedor`
--
ALTER TABLE `preguntas_vendedor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
