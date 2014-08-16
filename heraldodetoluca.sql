-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-08-2014 a las 17:02:12
-- Versión del servidor: 5.5.38-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `heraldodetoluca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_publicaciones`
--

CREATE TABLE IF NOT EXISTS `categorias_publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `nivel` int(11) NOT NULL,
  `tipo_categoria` int(11) NOT NULL,
  `cont_publicaciones` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_83FCFA7C727ACA70` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `categorias_publicaciones`
--

INSERT INTO `categorias_publicaciones` (`id`, `position`, `is_active`, `slug`, `categoria`, `parent_id`, `nivel`, `tipo_categoria`, `cont_publicaciones`) VALUES
(1, 1, 1, 'general', 'General', NULL, 0, 1, 3),
(2, 2, 1, 'nacional', 'Nacional', NULL, 0, 1, 5),
(3, 3, 1, 'entorno', 'Entorno', 1, 1, 1, 0),
(4, 4, 1, 'poder', 'Poder', 1, 1, 1, 0),
(5, 3, 1, 'mundo', 'Mundo', NULL, 0, 1, 0),
(6, 4, 1, 'negocios', 'Negocios', NULL, 0, 1, 0),
(7, 5, 1, 'municipios', 'Municipios', NULL, 0, 1, 0),
(8, 8, 1, 'oriente', 'Oriente', 7, 1, 1, 0),
(9, 9, 1, 'valle-de-mxico', 'Valle de México', 7, 1, 1, 0),
(10, 10, 1, 'valle-de-toluca', 'Valle de Toluca', 7, 1, 1, 0),
(11, 6, 1, 'trofeo', 'Trofeo', NULL, 0, 1, 0),
(12, 12, 1, 'local', 'Local', 11, 1, 1, 0),
(13, 13, 1, 'nacional', 'Nacional', 11, 1, 1, 0),
(14, 14, 1, 'internacional', 'Internacional', 11, 1, 1, 0),
(15, 7, 1, 'arte-y-gente', 'Arte y gente', NULL, 0, 1, 0),
(16, 16, 1, 'espectaculos', 'Espectaculos', 15, 1, 1, 0),
(17, 17, 1, 'cultura', 'Cultura', 15, 1, 1, 0),
(18, 18, 1, 'sociales', 'Sociales', 15, 1, 1, 0),
(19, 8, 1, 'ideas-y-voces', 'Ideas y voces', NULL, 0, 1, 0),
(20, 20, 1, 'caricaturas', 'Caricaturas', 19, 1, 1, 0),
(21, 9, 1, 'entrevista', 'Entrevista', NULL, 0, 1, 0),
(22, 21, 1, 'llamados', 'Llamados', NULL, 0, 2, 2),
(23, 22, 1, 'heraldo-tv', 'Heraldo Tv', NULL, 0, 3, 0),
(24, 23, 1, 'tu-espacio', 'Tu Espacio', NULL, 0, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publicacion_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipoArchivo` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F54B3FC09ACBB5E7` (`publicacion_id`),
  KEY `IDX_F54B3FC0727ACA70` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `publicacion_id`, `parent_id`, `username`, `email`, `message`, `status`, `archivo`, `tipoArchivo`, `nivel`, `created_at`) VALUES
(1, 7, NULL, 'Ricardo Alcantara', 'richpolis@gmail.com', 'me gusta tu css', 0, NULL, 1, 0, '2014-08-16 08:36:45'),
(2, 7, NULL, 'Ricardo Alcantara', 'richpolis@gmail.com', 'me gusta tu css', 0, NULL, 1, 0, '2014-08-16 08:48:56'),
(3, 10, NULL, 'Ricardo Alcantara', 'richpolis@gmail.com', 'comentario en publicacion en nacional 1', 0, NULL, 1, 0, '2014-08-16 08:59:44'),
(4, 10, 3, 'Ernestina', 'ernestina@gmail.com', 'comentario de respuesta.', 0, NULL, 1, 1, '2014-08-16 10:44:55'),
(5, 10, 4, 'Ricardo Alcantara', 'richpolis@gmail.com', 'respuesta a la respuesta de ernestina', 0, NULL, 1, 2, '2014-08-16 11:09:58'),
(7, 10, NULL, 'Francisco Aguirre', 'jav_0808@hotmail.com', 'Algun comentario con un nuevo hilo', 0, NULL, 1, 0, '2014-08-16 11:25:00'),
(8, 4, NULL, 'Ricardo Alcantara', 'richpolis@gmail.com', 'es fin del mundo como lo conocemos.', 0, '67084eff4fc451fcb8c184721005098a503dce2a.jpeg', 1, 0, '2014-08-16 11:51:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Comment`
--

CREATE TABLE IF NOT EXISTS `Comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ancestors` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `depth` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5BC96BF0E2904019` (`thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE IF NOT EXISTS `configuraciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `configuracion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_archivo` int(11) NOT NULL,
  `texto` longtext COLLATE utf8_unicode_ci,
  `is_active` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `configuraciones`
--

INSERT INTO `configuraciones` (`id`, `configuracion`, `tipo_archivo`, `texto`, `is_active`, `slug`) VALUES
(1, 'email-contacto', 4, 'richpolis@gmail.com', 1, 'email-contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EdicionPdf`
--

CREATE TABLE IF NOT EXISTS `EdicionPdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaPublicacion` date NOT NULL,
  `position` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elfinder_file`
--

CREATE TABLE IF NOT EXISTS `elfinder_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longblob NOT NULL,
  `size` int(11) NOT NULL,
  `mtime` int(11) NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `read` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `write` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locked` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hidden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `parent_name` (`parent_id`,`name`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE IF NOT EXISTS `galerias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_archivo` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `titulo`, `descripcion`, `thumbnail`, `archivo`, `tipo_archivo`, `position`, `is_active`) VALUES
(1, 'b7f858995d6d1e01e1ed5e45b88683a414e96109', NULL, '7c4167fc3cc15606b9bdfbcbb59237d5da2171d5.jpg', '7c4167fc3cc15606b9bdfbcbb59237d5da2171d5.jpg', 1, 1, 1),
(2, '056ac663d4c480abec1439eb568eb51d03f086de', NULL, '3ff7ec06c21084f1e6c45492b58ef19707acc281.jpg', '3ff7ec06c21084f1e6c45492b58ef19707acc281.jpg', 1, 2, 1),
(3, '09e8cf685978e1e3a131bde3a5f24fcc77595dff', NULL, '2f74f057bfc8e02085e984ff319c1702a14f0e57.jpg', '2f74f057bfc8e02085e984ff319c1702a14f0e57.jpg', 1, 3, 1),
(4, '651a878cd78a210c3175ad5ccc983865e21f0729', NULL, '1ca24ab046ff196a3718ba235802a61945b4950f.jpg', '1ca24ab046ff196a3718ba235802a61945b4950f.jpg', 1, 3, 1),
(5, '9cf78383ebb7a249dd3865e8e168a5ace4c2dd81', NULL, '9bd2051ec4619fffaac13aa3b77c7244cb467b53.jpg', '9bd2051ec4619fffaac13aa3b77c7244cb467b53.jpg', 1, 4, 1),
(6, '056ac663d4c480abec1439eb568eb51d03f086de', NULL, 'db22508da0ebf01b04583908c4e2ed7f37862374.jpg', 'db22508da0ebf01b04583908c4e2ed7f37862374.jpg', 1, 2, 1),
(7, '09e8cf685978e1e3a131bde3a5f24fcc77595dff', NULL, 'e70dbd6e626faa8711ff06cc0d5ea32603ed5135.jpg', 'e70dbd6e626faa8711ff06cc0d5ea32603ed5135.jpg', 1, 1, 1),
(8, 'b7f858995d6d1e01e1ed5e45b88683a414e96109', NULL, 'ee603fa92d1e2e54095838872140028e08c1d71d.jpg', 'ee603fa92d1e2e54095838872140028e08c1d71d.jpg', 1, 5, 1),
(9, 'Swift, la forma fácil de programar apps para iPhone', '', 'http://i.ytimg.com/vi/Zrypxp6rwhM/hqdefault.jpg', 'http://www.youtube.com/watch?v=Zrypxp6rwhM', 3, 6, 1),
(10, 'Hollywood odia las interfaces de PC | Ophelia Pastrana @OphCourse en Mejorando.la Canvas', '', 'http://i.ytimg.com/vi/GSZ7NbYuy-g/hqdefault.jpg', 'http://www.youtube.com/watch?v=GSZ7NbYuy-g', 3, 7, 1),
(11, 'Tecnología para ayudar o para asustar: "internet of things" o internet de las cosas', '', 'http://i.ytimg.com/vi/c2XgXLV1dAA/hqdefault.jpg', 'http://www.youtube.com/watch?v=c2XgXLV1dAA', 3, 8, 1),
(12, 'Branding Personal: qué es y cómo crearlo', '', 'http://i.ytimg.com/vi/dPlRZdGT9YA/hqdefault.jpg', 'http://www.youtube.com/watch?v=dPlRZdGT9YA', 3, 9, 1),
(13, 'Skynet: el plan maestro de Facebook, Google, Twitter, Apple y Microsoft', '', 'http://i.ytimg.com/vi/ggcqf0wK2Es/hqdefault.jpg', 'http://www.youtube.com/watch?v=ggcqf0wK2Es', 3, 10, 1),
(14, 'Caminando', NULL, 'a0ff754199e0e2fcce437f15f01e64a21b3e9a61.jpg', 'a0ff754199e0e2fcce437f15f01e64a21b3e9a61.jpg', 1, 11, 1),
(15, 'Discutiendo', NULL, 'fb8d367012bfddd096744d101fa6c623755014a3.jpg', 'fb8d367012bfddd096744d101fa6c623755014a3.jpg', 1, 12, 1),
(16, 'Cambiando', NULL, 'a66418ff9611739ac33455b43c701eac27c72e83.jpg', 'a66418ff9611739ac33455b43c701eac27c72e83.jpg', 1, 13, 1),
(17, 'Tigre', NULL, 'dd3e044a472fe20ae84b07e2f1266eed5d98f82b.jpg', 'dd3e044a472fe20ae84b07e2f1266eed5d98f82b.jpg', 1, 14, 1),
(18, 'Cobra', NULL, '992cc18e1467e82ecc7fbf00ee83ed25bae187ec.jpg', '992cc18e1467e82ecc7fbf00ee83ed25bae187ec.jpg', 1, 15, 1),
(19, 'Gorila', NULL, 'a059758a349dcfd781928f87ed05fe951a53844a.jpg', 'a059758a349dcfd781928f87ed05fe951a53844a.jpg', 1, 16, 1),
(20, '651a878cd78a210c3175ad5ccc983865e21f0729', NULL, '71037edc0bd477df19baffdfd63da59a3b232b13.jpg', '71037edc0bd477df19baffdfd63da59a3b232b13.jpg', 1, 17, 1),
(21, '9cf78383ebb7a249dd3865e8e168a5ace4c2dd81', NULL, '446fed725c416e40b0f92bd754ca996cfa7f3c45.jpg', '446fed725c416e40b0f92bd754ca996cfa7f3c45.jpg', 1, 18, 1),
(22, '056ac663d4c480abec1439eb568eb51d03f086de', NULL, 'dba152d6e3bf3eede5d958f183aa4b63b38ecfd1.jpg', 'dba152d6e3bf3eede5d958f183aa4b63b38ecfd1.jpg', 1, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagina` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `pagina`, `imagen`, `contenido`) VALUES
(1, 'historia', NULL, '<p>Historia del Heraldo de Toluca</p>'),
(2, 'nosotros', NULL, '<p>Pagina de nosotros</p>'),
(3, 'contacto', NULL, '<p>Pagina de contacto</p>'),
(4, 'edicion-pdf', NULL, '<iframe width="600" height="500" src="//e.issuu.com/embed.html#7938276/8842096" frameborder="0" allowfullscreen=""></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_galeria`
--

CREATE TABLE IF NOT EXISTS `pagina_galeria` (
  `pagina_id` int(11) NOT NULL,
  `galeria_id` int(11) NOT NULL,
  PRIMARY KEY (`pagina_id`,`galeria_id`),
  KEY `IDX_93AEAADA57991ECF` (`pagina_id`),
  KEY `IDX_93AEAADAD31019C` (`galeria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `categoria_publicacion_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_principal` tinyint(1) NOT NULL,
  `is_carrusel` tinyint(1) NOT NULL,
  `status` int(11) NOT NULL,
  `cont_visitas` int(11) NOT NULL,
  `cont_comentarios` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A3A706C0DB38439E` (`usuario_id`),
  KEY `IDX_A3A706C0D8F09E0F` (`categoria_publicacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `usuario_id`, `categoria_publicacion_id`, `position`, `slug`, `tags`, `imagen`, `created_at`, `updated_at`, `titulo`, `descripcion`, `is_principal`, `is_carrusel`, `status`, `cont_visitas`, `cont_comentarios`) VALUES
(1, 7, 1, 1, 'prueba-de-publicacion', NULL, NULL, '2014-07-25 22:37:21', '2014-08-16 16:11:08', 'Prueba de publicacion', '<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>', 1, 1, 4, 8, 0),
(4, 9, 24, 1, 'nuevo-tema-del-dia', NULL, 'bcd7938be1f7269187d3e91ffd202c25b728b92e.jpeg', '2014-07-30 12:38:39', '2014-08-16 11:51:11', 'Nuevo tema del dia', '<p>Alguna personas dices ue bla bla bla bla bla&nbsp;</p>', 0, 0, 4, 2, 1),
(5, 9, 23, 1, 'galeria-videos-varios', NULL, NULL, '2014-07-30 12:49:35', '2014-08-16 15:10:28', 'Galeria videos varios', '<p>Galeria de videos varios</p>', 0, 0, 4, 2, 0),
(6, 9, 5, 1, 'publicacion-en-mundo', NULL, NULL, '2014-07-30 13:13:56', '2014-08-09 15:55:25', 'Publicacion en mundo', '<p>publicacion en mundo</p>', 0, 1, 4, 1, 0),
(7, 7, 22, 1, 'publicacion-en-llamado-1', NULL, NULL, '2014-07-30 16:29:11', '2014-08-16 08:48:57', 'Publicacion en llamado 1', '<p>publicacion en llamados 1</p>', 0, 0, 4, 3, 2),
(8, 7, 2, 4, 'publicacion-en-nacional', NULL, NULL, '2014-07-31 17:17:32', '2014-08-16 08:58:06', 'Publicacion en Nacional', '<p>Publicacion en Nacional</p>', 0, 1, 4, 3, 0),
(9, 7, 1, 2, 'prueba-de-publicacion', NULL, NULL, '2014-08-05 22:41:54', '2014-08-09 17:13:17', 'prueba de publicacion', '<p>publicacion con imagenes desde mis repositorios</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="../../../uploads/repositorios/usuario/publicacion%20x/d50c2ef1dfd18486337279bc7c4df318d3b170a2.jpg" alt="" width="396" height="540" /></p>\r\n<p>&nbsp;</p>\r\n<p>Luego vuelvo a escribir lo que yo necesite poner.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>ahora sigo editando y sigo editando.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 0, 0, 4, 0, 0),
(10, 7, 2, 3, 'publicacion-en-nacional-1', NULL, '880c4a3ab56d0c8cb273a6895bbca428f7e65d8b.jpeg', '2014-08-09 12:23:56', '2014-08-16 11:25:00', 'Publicacion en Nacional', '<p>Prueba de slug title, si es correcto, esta publicacion deberia de tener un slug como: " publiacion-en-nacional-1", prueba 2</p>', 0, 0, 4, 4, 5),
(11, 7, 2, 2, 'publicacion-en-nacional-2', NULL, 'b16101278981bc8c327261b641012bf847af8bde.jpeg', '2014-08-09 12:48:14', '2014-08-16 16:14:50', 'Publicacion en Nacional', '<p>tercera publicacion en nacional, esta publicacion tiene que cambiar su slug a "publicacion-en-nacional-2", hagamos la prueba 2</p>', 0, 0, 4, 2, 0),
(12, 7, 2, 1, 'publicacion-en-nacional-3', NULL, '11984c880c89bd10bb9cfba43b0226cd2a0f6521.jpeg', '2014-08-09 12:59:37', '2014-08-16 08:57:52', 'Publicacion en Nacional', '<p>publicacion en nacional, esta prueba es para ver el resultado de slug, esperemos que esta vez si funcione correctamente, publicacion en nacional 3, esperemos que esta vez si funcione. prueba 2, ya esta depurada la funcion.&nbsp;</p>', 0, 1, 4, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones_galeria`
--

CREATE TABLE IF NOT EXISTS `publicaciones_galeria` (
  `publicacion_id` int(11) NOT NULL,
  `galeria_id` int(11) NOT NULL,
  PRIMARY KEY (`publicacion_id`,`galeria_id`),
  KEY `IDX_C7B086E99ACBB5E7` (`publicacion_id`),
  KEY `IDX_C7B086E9D31019C` (`galeria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `publicaciones_galeria`
--

INSERT INTO `publicaciones_galeria` (`publicacion_id`, `galeria_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(7, 14),
(7, 15),
(7, 16),
(8, 17),
(8, 18),
(8, 19),
(9, 20),
(9, 21),
(9, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE IF NOT EXISTS `publicidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `vigencia` date DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_archivo` int(11) NOT NULL,
  `tipo_publicidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`id`, `empresa`, `position`, `isActive`, `createdAt`, `updatedAt`, `vigencia`, `link`, `archivo`, `tipo_archivo`, `tipo_publicidad`) VALUES
(1, 'Google', 1, 1, '2014-08-09 16:42:54', '2014-08-09 16:42:54', '2014-09-09', 'http://www.google.com.mx', '06ad96ade64968ad9de8835078a26cae74329b84.jpeg', 1, 1),
(2, 'Volaris', 2, 1, '2014-08-09 16:44:08', '2014-08-09 16:44:08', '2014-09-09', 'http://www.volaris.com', '0f215f224be8b5fc2fbd128a1269ff019fa98c5e.jpeg', 1, 1),
(3, 'Google', 3, 1, '2014-08-09 16:45:01', '2014-08-09 16:45:01', '2014-09-09', 'http://www.google.com.mx', '1801fe5df5fb4fea889e1c99e49cee39d9681504.jpeg', 1, 2),
(4, 'IBM', 4, 1, '2014-08-09 16:45:33', '2014-08-09 16:45:33', '2014-09-09', 'http://www.ibm.com.mx', 'ffd1692b044a98ca1cbca009081e26d31abbff6b.jpeg', 1, 2),
(5, 'Toks', 5, 1, '2014-08-09 16:46:15', '2014-08-09 16:46:15', '2014-09-09', 'http://www.toks.com.mx', 'b0e258e341b8ecdb3d2428af2fbf1b73f38fc5a0.jpeg', 1, 3),
(6, 'Vips', 6, 1, '2014-08-09 16:46:44', '2014-08-09 16:46:44', '2014-09-09', 'http://www.vips.com.mx', '24cf8078d814f5ed5e52f9d7cc9c2c4fc0eb1439.jpeg', 1, 3),
(7, 'Google', 7, 1, '2014-08-09 16:47:42', '2014-08-09 16:47:42', '2014-09-09', 'http://www.google.com.mx', '3882acf4054f187c9a44f0aa48a781b55401abab.jpeg', 1, 4),
(8, 'Windows', 8, 1, '2014-08-09 16:48:29', '2014-08-09 16:48:29', '2014-09-09', 'http://www.windows.com', '35b52dc4d9c596b3c85c58e06f51ce8ad4cb2a0e.jpeg', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servicio_es` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `servicio_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_es` longtext COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_galeria`
--

CREATE TABLE IF NOT EXISTS `servicios_galeria` (
  `servicio_id` int(11) NOT NULL,
  `galeria_id` int(11) NOT NULL,
  PRIMARY KEY (`servicio_id`,`galeria_id`),
  KEY `IDX_9D252E9671CAA3E7` (`servicio_id`),
  KEY `IDX_9D252E96D31019C` (`galeria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Thread`
--

CREATE TABLE IF NOT EXISTS `Thread` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_commentable` tinyint(1) NOT NULL,
  `num_comments` int(11) NOT NULL,
  `last_comment_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grupo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`, `salt`, `nombre`, `twitter`, `facebook`, `grupo`, `imagen`, `created_at`, `updated_at`) VALUES
(7, 'richpolis', 'iRJbJpRsmOAT7YPK3vP1RUfmtE3SenqwQV13/A+L+OgEoEWFGSjbkXQcLxFFjwhqwYFeKpPqjAzZTb1R6aFWrA==', 'richpolis@gmail.com', '8e351gipy2kgoc8gc088kwg4s8kgkks', 'Ricardo Alcantara Gomez', 'Richpolis', 'RICHPOLIS', '3', NULL, '2014-07-15 23:22:13', '2014-07-15 23:22:13'),
(8, 'Admin', 'lnt7jngsohErWSiEe1OmqwyzkCFe1Klbj5pl6TJStaRnG+BgrPnAasi8RRhvUyB88+K1VRTNdUv/nu4NYQzFPA==', 'admin@heraldodetoluca.com', '5nd383tfmso4c8ookocssgg8owkcoo0', 'Administrador general', 'admin', NULL, '2', NULL, '2014-07-15 23:22:13', '2014-07-15 23:22:13'),
(9, 'usuario1', '', 'usuario1@heraldodetoluca.com', 'odfgy46vz4g8gc8co08w0wc4cko0kw4', 'Nombre de usuario uno', NULL, 'usuarioNormal', '1', '05a34082d53140b344edc32683cea9d509f1f18a.jpeg', '2014-07-15 23:22:13', '2014-07-30 12:06:25');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias_publicaciones`
--
ALTER TABLE `categorias_publicaciones`
  ADD CONSTRAINT `FK_83FCFA7C727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `categorias_publicaciones` (`id`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `FK_F54B3FC0727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `comentarios` (`id`),
  ADD CONSTRAINT `FK_F54B3FC09ACBB5E7` FOREIGN KEY (`publicacion_id`) REFERENCES `publicaciones` (`id`);

--
-- Filtros para la tabla `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `FK_5BC96BF0E2904019` FOREIGN KEY (`thread_id`) REFERENCES `Thread` (`id`);

--
-- Filtros para la tabla `pagina_galeria`
--
ALTER TABLE `pagina_galeria`
  ADD CONSTRAINT `FK_93AEAADA57991ECF` FOREIGN KEY (`pagina_id`) REFERENCES `paginas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_93AEAADAD31019C` FOREIGN KEY (`galeria_id`) REFERENCES `galerias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `FK_A3A706C0D8F09E0F` FOREIGN KEY (`categoria_publicacion_id`) REFERENCES `categorias_publicaciones` (`id`),
  ADD CONSTRAINT `FK_A3A706C0DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `publicaciones_galeria`
--
ALTER TABLE `publicaciones_galeria`
  ADD CONSTRAINT `FK_C7B086E99ACBB5E7` FOREIGN KEY (`publicacion_id`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C7B086E9D31019C` FOREIGN KEY (`galeria_id`) REFERENCES `galerias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `servicios_galeria`
--
ALTER TABLE `servicios_galeria`
  ADD CONSTRAINT `FK_9D252E9671CAA3E7` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9D252E96D31019C` FOREIGN KEY (`galeria_id`) REFERENCES `galerias` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
