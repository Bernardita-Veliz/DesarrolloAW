-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2022 a las 04:30:14
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
-- Base de datos: `daw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-07-05-221344', 'App\\Database\\Migrations\\TablaUsuarios', 'default', 'App', 1658164180, 1),
(2, '2022-07-09-013848', 'App\\Database\\Migrations\\TablaProducto', 'default', 'App', 1658164180, 1),
(3, '2022-07-09-015302', 'App\\Database\\Migrations\\TablaBodega', 'default', 'App', 1658164180, 1),
(4, '2022-07-10-024830', 'App\\Database\\Migrations\\TablaProyectos', 'default', 'App', 1658164180, 1),
(5, '2022-07-13-035126', 'App\\Database\\Migrations\\TablaTipoUsuario', 'default', 'App', 1658164180, 1),
(6, '2022-07-17-204214', 'App\\Database\\Migrations\\TablaBodegaProducto', 'default', 'App', 1658164180, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_bodega`
--

CREATE TABLE `tabla_bodega` (
  `id` int(5) UNSIGNED NOT NULL,
  `Código` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_bodega_producto`
--

CREATE TABLE `tabla_bodega_producto` (
  `id_bodega_producto` int(5) UNSIGNED NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `id_producto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_productos`
--

CREATE TABLE `tabla_productos` (
  `id_producto` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `Código` int(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_proyectos`
--

CREATE TABLE `tabla_proyectos` (
  `id_proyecto` int(5) UNSIGNED NOT NULL,
  `nombre_proyecto` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` int(5) NOT NULL,
  `id_material` int(5) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_tipo_usuario`
--

CREATE TABLE `tabla_tipo_usuario` (
  `id_tipo_usuario` int(5) UNSIGNED NOT NULL,
  `tipo_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_usuarios`
--

CREATE TABLE `tabla_usuarios` (
  `id_usuario` int(5) UNSIGNED NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_usuarios`
--

INSERT INTO `tabla_usuarios` (`id_usuario`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'admin', '$2y$10$EYqRHEqjUBOHjfEkoNJ5Nezl67FwdnpfJKLDwG4GJsEcfV1Qj7MU6', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla_bodega`
--
ALTER TABLE `tabla_bodega`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla_bodega_producto`
--
ALTER TABLE `tabla_bodega_producto`
  ADD PRIMARY KEY (`id_bodega_producto`);

--
-- Indices de la tabla `tabla_productos`
--
ALTER TABLE `tabla_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tabla_proyectos`
--
ALTER TABLE `tabla_proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `tabla_tipo_usuario`
--
ALTER TABLE `tabla_tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tabla_bodega`
--
ALTER TABLE `tabla_bodega`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_bodega_producto`
--
ALTER TABLE `tabla_bodega_producto`
  MODIFY `id_bodega_producto` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_productos`
--
ALTER TABLE `tabla_productos`
  MODIFY `id_producto` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_proyectos`
--
ALTER TABLE `tabla_proyectos`
  MODIFY `id_proyecto` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_tipo_usuario`
--
ALTER TABLE `tabla_tipo_usuario`
  MODIFY `id_tipo_usuario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  MODIFY `id_usuario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
