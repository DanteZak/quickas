-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2019 a las 21:28:57
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quickas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` smallint(6) NOT NULL,
  `cat_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nombre`) VALUES
(1, 'Lacteos'),
(2, 'Vegetales'),
(3, 'Harinas'),
(4, 'Vinos'),
(5, 'Pastas y arroz'),
(6, 'Gaseosas'),
(7, 'Picadas'),
(8, 'Frutas'),
(9, 'Panaderia'),
(10, 'Verduras'),
(11, 'Aderezos'),
(12, 'Infusiones'),
(13, 'Conservas'),
(14, 'Aceites');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE `local` (
  `usr_id` int(11) NOT NULL,
  `loc_cuit` int(4) NOT NULL,
  `loc_dirreccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`usr_id`, `loc_cuit`, `loc_dirreccion`) VALUES
(3, 9, 'French 2000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `pub_id` int(11) NOT NULL,
  `pub_titulo` varchar(100) NOT NULL,
  `pub_descripcion` varchar(500) NOT NULL,
  `pub_imagen` varchar(50) NOT NULL,
  `pub_precio` decimal(10,0) NOT NULL,
  `cat_id` smallint(6) NOT NULL,
  `usr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`pub_id`, `pub_titulo`, `pub_descripcion`, `pub_imagen`, `pub_precio`, `cat_id`, `usr_id`) VALUES
(1, 'Manteca Sancor 500g', 'Manteca marca Sancor de 200g', 'manteca.jpg', '70', 1, 1),
(2, 'Bananas 1Kg', '1kg de bananas.', 'banana.jpg', '26', 2, 2),
(3, 'Mandarinas 1Kg', '1KG de mandarinas frescas', 'mandarina.jpg', '30', 8, 3),
(4, 'Harina \"0000\" 1Kg', 'Harina refinada \"0000\" marca Blancaflor 1Kg', 'harina.jpg', '62', 3, 3),
(5, 'Vino Toro', 'Vino marca Toro', 'vino.jpg', '40', 4, 3),
(6, 'Manaos de uva 2.25L', 'Nueva Manaos sabor uva de 2.25L', 'manaos_uva.png', '50', 6, 3),
(7, 'Papas fritas Lays 250g', 'Papas fritas sabor original marca Lays 250g', 'lays.jpg', '45', 7, 3),
(8, 'Aceite de Oliva Cocinero 500ml', 'Aceite de oliva marca Cocinero de 500ml', 'aceite.jpg', '130', 14, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_nombre` varchar(30) NOT NULL,
  `usr_nick` varchar(20) NOT NULL,
  `usr_password` varchar(12) NOT NULL,
  `usr_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_nombre`, `usr_nick`, `usr_password`, `usr_email`) VALUES
(1, 'Emmanuel', 'DanteZak', '4444', 'emma@gmail.com'),
(2, 'Nicolas', 'Venom', '0000', 'nico@outlook.com'),
(3, 'Universo', 'Super Universo', '12345', 'universo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD KEY `usr_id` (`usr_id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `usr_nick` (`usr_nick`,`usr_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `local_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorias` (`cat_id`),
  ADD CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`usr_id`) REFERENCES `usuarios` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
