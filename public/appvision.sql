-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2015 a las 05:28:35
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appvision`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_30_004940_create_resultados_table', 1),
('2015_11_30_012717_create_session_table', 2),
('2015_11_30_034918_create_sessions_table', 3),
('2015_12_01_042651_create_registros2_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(10) unsigned NOT NULL,
  `session_id` int(11) NOT NULL,
  `pregunta` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `session_id`, `pregunta`, `valor`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '2015-12-01 09:39:41', '2015-12-01 09:39:41'),
(2, 1, 2, 4, '2015-12-01 09:39:44', '2015-12-01 09:39:44'),
(3, 1, 3, 4, '2015-12-01 09:39:45', '2015-12-01 09:39:45'),
(4, 1, 4, 4, '2015-12-01 09:39:48', '2015-12-01 09:39:48'),
(5, 1, 5, 4, '2015-12-01 09:39:50', '2015-12-01 09:39:50'),
(6, 3, 1, 2, '2015-12-01 09:53:53', '2015-12-01 09:53:53'),
(7, 3, 2, 1, '2015-12-01 09:53:55', '2015-12-01 09:53:55'),
(8, 3, 3, 3, '2015-12-01 09:53:57', '2015-12-01 09:53:57'),
(9, 3, 4, 1, '2015-12-01 09:53:58', '2015-12-01 09:53:58'),
(10, 3, 5, 2, '2015-12-01 09:54:00', '2015-12-01 09:54:00'),
(11, 4, 1, 2, '2015-12-02 06:57:35', '2015-12-02 06:57:35'),
(12, 4, 2, 3, '2015-12-02 06:57:38', '2015-12-02 06:57:38'),
(13, 4, 3, 2, '2015-12-02 07:00:37', '2015-12-02 07:00:37'),
(14, 4, 4, 3, '2015-12-02 07:00:40', '2015-12-02 07:00:40'),
(15, 4, 5, 3, '2015-12-02 07:00:42', '2015-12-02 07:00:42'),
(16, 5, 1, 4, '2015-12-03 05:33:58', '2015-12-03 05:33:58'),
(17, 5, 2, 4, '2015-12-03 05:34:00', '2015-12-03 05:34:00'),
(18, 5, 3, 4, '2015-12-03 05:34:03', '2015-12-03 05:34:03'),
(19, 5, 4, 4, '2015-12-03 05:34:05', '2015-12-03 05:34:05'),
(20, 5, 5, 4, '2015-12-03 05:34:07', '2015-12-03 05:34:07'),
(21, 6, 1, 3, '2015-12-03 06:04:12', '2015-12-03 06:04:12'),
(22, 6, 2, 1, '2015-12-03 06:04:13', '2015-12-03 06:04:13'),
(23, 6, 3, 4, '2015-12-03 06:04:17', '2015-12-03 06:04:17'),
(24, 6, 4, 4, '2015-12-03 06:04:19', '2015-12-03 06:04:19'),
(25, 6, 5, 3, '2015-12-03 06:04:21', '2015-12-03 06:04:21'),
(26, 7, 1, 2, '2015-12-03 06:16:54', '2015-12-03 06:16:54'),
(27, 7, 2, 4, '2015-12-03 06:16:57', '2015-12-03 06:16:57'),
(28, 8, 1, 1, '2015-12-03 06:40:55', '2015-12-03 06:40:55'),
(29, 8, 2, 1, '2015-12-03 06:40:57', '2015-12-03 06:40:57'),
(30, 8, 3, 2, '2015-12-03 06:40:59', '2015-12-03 06:40:59'),
(31, 8, 4, 1, '2015-12-03 06:41:01', '2015-12-03 06:41:01'),
(32, 8, 5, 4, '2015-12-03 06:41:02', '2015-12-03 06:41:02'),
(33, 9, 1, 2, '2015-12-03 06:41:57', '2015-12-03 06:41:57'),
(34, 9, 2, 4, '2015-12-03 06:41:58', '2015-12-03 06:41:58'),
(35, 9, 3, 4, '2015-12-03 06:42:00', '2015-12-03 06:42:00'),
(36, 9, 4, 4, '2015-12-03 06:42:01', '2015-12-03 06:42:01'),
(37, 9, 5, 4, '2015-12-03 06:42:03', '2015-12-03 06:42:03'),
(38, 10, 1, 1, '2015-12-03 06:51:34', '2015-12-03 06:51:34'),
(39, 10, 2, 3, '2015-12-03 06:51:44', '2015-12-03 06:51:44'),
(40, 10, 3, 4, '2015-12-03 06:51:51', '2015-12-03 06:51:51'),
(41, 10, 4, 4, '2015-12-03 06:51:55', '2015-12-03 06:51:55'),
(42, 10, 5, 3, '2015-12-03 06:51:57', '2015-12-03 06:51:57'),
(43, 11, 1, 4, '2015-12-03 07:03:03', '2015-12-03 07:03:03'),
(44, 11, 2, 4, '2015-12-03 07:03:07', '2015-12-03 07:03:07'),
(45, 11, 3, 3, '2015-12-03 07:03:15', '2015-12-03 07:03:15'),
(46, 11, 4, 1, '2015-12-03 07:03:18', '2015-12-03 07:03:18'),
(47, 11, 5, 3, '2015-12-03 07:03:21', '2015-12-03 07:03:21'),
(48, 12, 1, 2, '2015-12-03 09:51:11', '2015-12-03 09:51:11'),
(49, 12, 2, 4, '2015-12-03 09:51:15', '2015-12-03 09:51:15'),
(50, 12, 3, 2, '2015-12-03 09:51:18', '2015-12-03 09:51:18'),
(51, 12, 4, 4, '2015-12-03 09:51:25', '2015-12-03 09:51:25'),
(52, 12, 5, 2, '2015-12-03 09:51:33', '2015-12-03 09:51:33'),
(53, 13, 1, 4, '2015-12-04 06:18:55', '2015-12-04 06:18:55'),
(54, 13, 2, 1, '2015-12-04 06:18:58', '2015-12-04 06:18:58'),
(55, 13, 3, 3, '2015-12-04 06:19:00', '2015-12-04 06:19:00'),
(56, 13, 4, 4, '2015-12-04 06:19:02', '2015-12-04 06:19:02'),
(57, 13, 5, 4, '2015-12-04 06:19:03', '2015-12-04 06:19:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(10) unsigned NOT NULL,
  `cookie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `platform` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `versionpla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `session`
--

INSERT INTO `session` (`id`, `cookie`, `ip`, `browser`, `version`, `platform`, `versionpla`, `device`, `created_at`, `updated_at`) VALUES
(1, '565cfe85ea3a8', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-01 06:57:26', '2015-12-01 06:57:26'),
(2, '565cfea30c092', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-01 06:57:55', '2015-12-01 06:57:55'),
(3, '565d27e006231', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-01 09:53:52', '2015-12-01 09:53:52'),
(4, '565e500c31a47', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-02 06:57:32', '2015-12-02 06:57:32'),
(5, '565f8df3ad117', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-03 05:33:55', '2015-12-03 05:33:55'),
(6, '565f950a6a4a2', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-03 06:04:10', '2015-12-03 06:04:10'),
(7, '565f980517e4a', NULL, 'Firefox', '42.0', 'Firefox', '6.1', '0', '2015-12-03 06:16:53', '2015-12-03 06:16:53'),
(8, '565f9da6347b5', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-03 06:40:54', '2015-12-03 06:40:54'),
(9, '565f9de3626b0', NULL, 'Firefox', '42.0', 'Firefox', '6.1', '0', '2015-12-03 06:41:55', '2015-12-03 06:41:55'),
(10, '565fa02243761', NULL, 'Chrome', '46.0.2490.76', 'Chrome', '4.2.2', 'WebKit', '2015-12-03 06:51:30', '2015-12-03 06:51:30'),
(11, '565fa2d1eecc0', NULL, 'Safari', '4.0', 'Safari', '4.2.2', 'WebKit', '2015-12-03 07:02:58', '2015-12-03 07:02:58'),
(12, '565fc156ce785', NULL, 'Chrome', '46.0.2490.76', 'Chrome', '4.2.2', 'WebKit', '2015-12-03 09:13:11', '2015-12-03 09:13:11'),
(13, '5660e9fb64bcd', NULL, 'Chrome', '46.0.2490.86', 'Chrome', '6.1', 'WebKit', '2015-12-04 06:18:51', '2015-12-04 06:18:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `payload`, `last_activity`) VALUES
('67e06d41ad345511b8b867acd571501db093c37c', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSk4wbEVsSGJxOW9kYW5zRjh4eDEyYUt6WktiajZsak1uYWtSZnNvbyI7czoxMDoic2Vzc2lvbl9pZCI7czoxMzoiNTY1YmU3Y2QwOTM0OCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0NDg4NjM2OTM7czoxOiJjIjtpOjE0NDg4NjM2OTM7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1448863693);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
