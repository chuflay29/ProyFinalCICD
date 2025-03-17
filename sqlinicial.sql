
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP TABLE IF EXISTS `diagnosticos_redes`;
CREATE TABLE IF NOT EXISTS `diagnosticos_redes` (
  `diagnosticos_red_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` int(11) DEFAULT NULL COMMENT '1 Entornos digitales, 2 juegos, 3 mensajeria, 4 conocer gente',
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`diagnosticos_red_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_26_170038_create_materiales_table', 1),
(6, '2022_04_26_170126_create_tipos_usuarios_table', 1),
(7, '2022_04_26_170148_create_test_tipos_usuarios_table', 1),
(8, '2022_04_26_170209_create_tests_table', 1),
(9, '2022_04_26_170239_create_tests_preguntas_table', 1),
(10, '2022_04_26_170309_create_tests_registros_table', 1),
(11, '2022_04_26_170329_create_tests_respuestas_accions_table', 1),
(12, '2022_04_26_170411_create_ruta_critica_formularios_table', 1),
(13, '2022_04_26_170430_create_informaciones_table', 1),
(14, '2022_04_26_170449_create_enlaces_interes_table', 1),
(15, '2022_04_26_170522_create_enlaces_interes_ubicaciones_table', 1),
(16, '2022_04_26_200648_create_materiales_asignacions_table', 1),
(17, '2022_05_18_185940_create_colums_in_mensajes', 1),
(18, '2022_05_18_190022_create_colums_in_pedidos_diferida_mensajes', 1),
(19, '2022_05_23_223138_create_table_informacion_enlaces', 1),
(20, '2022_05_23_223609_create_informacion_enlaces_table', 1),
(21, '2022_07_22_170111_create_log_inicios_table', 1),
(22, '2022_09_08_002856_create_paginas_table', 2),
(23, '2022_09_08_002940_create_diagnosticos_tipos_table', 2),
(24, '2022_09_08_003003_create_diagnosticos_redes_table', 2),
(25, '2022_09_08_003026_create_conceptos_table', 2),
(26, '2022_09_08_003044_create_concejos_table', 2),
(27, '2022_09_08_003108_create_conceptos_contenidos_table', 2),
(28, '2022_09_08_003127_create_registros_table', 2),
(29, '2022_09_16_011155_create_versiones_table', 3);


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'ariel@andina-soft.com', NULL, '$2y$10$stKZOpc/qtYbIF39qQR1vetp5L8j0JOzjcyGlfQJCvIbxhNwf6zP.', NULL, '2022-05-31 07:55:09', '2022-05-31 07:55:09'),
(3, 'Ruben Chacón', 'chacariel@gmail.com', NULL, '$2y$10$Jx4jVPFnZ.G1zSTr542wnOOS1KzqwlA22qEsxYKQSCDkOwe0jPSjS', NULL, '2022-05-31 11:12:49', '2022-05-31 11:26:49'),
(4, 'api', 'api@andina-soft.com', NULL, '$2y$10$3X4lRTkrsIjl9NCwIdkTHOOC6Wbzqq3ofPyhxTawK12DDuBEmQvd.', NULL, '2022-07-23 04:42:57', '2022-07-23 04:42:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
