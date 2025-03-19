CREATE DATABASE  IF NOT EXISTS `example_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `example_db`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: estacion_app
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `cliente_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paterno` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materno` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_empresa` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` int(11) DEFAULT NULL COMMENT '0 habilitado, 1 eliminado',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cliente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Ariel','chacon','ramos','4938441','70147366','asd@asd.com','ANDINA',NULL,'2024-05-14 07:32:23','2024-05-14 07:32:23'),(2,'asss','asaaa','dddddd','49384412',NULL,'abc@abc.com',NULL,NULL,'2024-05-15 07:07:45','2024-05-15 07:07:45'),(3,'asdasa sasd','asdasdasd','asdsads','2342342','3242342','asdas@asdpp.com','asdasdasdasd',NULL,'2025-03-13 05:54:44','2025-03-13 05:54:44'),(4,'werwerwree','sdfsdf sdf sdfs','ew fsdfsdfs','4534534534','345345345','asdasd@asdasd.com','sdfsdfsdsdf',NULL,'2025-03-13 05:57:44','2025-03-13 05:57:44');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diagnosticos_redes`
--

DROP TABLE IF EXISTS `diagnosticos_redes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diagnosticos_redes` (
  `diagnosticos_red_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` int(11) DEFAULT NULL COMMENT '1 Entornos digitales, 2 juegos, 3 mensajeria, 4 conocer gente',
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`diagnosticos_red_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diagnosticos_redes`
--

LOCK TABLES `diagnosticos_redes` WRITE;
/*!40000 ALTER TABLE `diagnosticos_redes` DISABLE KEYS */;
/*!40000 ALTER TABLE `diagnosticos_redes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DocumentoIdentidad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cargo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FechaIngreso` date NOT NULL,
  `Salario` decimal(10,2) DEFAULT NULL,
  `Estado` enum('Activo','Inactivo') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `empleados_documentoidentidad_unique` (`DocumentoIdentidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Ariel','Chacon','89898','Dev','2025-01-01',5000.00,'Activo','2025-03-14 05:37:12','2025-03-14 05:37:12'),(2,'Juan','Peres','4556456','qwerwew','2025-01-02',666.00,'Activo','2025-03-14 05:53:24','2025-03-14 05:53:24');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_04_26_170038_create_materiales_table',1),(6,'2022_04_26_170126_create_tipos_usuarios_table',1),(7,'2022_04_26_170148_create_test_tipos_usuarios_table',1),(8,'2022_04_26_170209_create_tests_table',1),(9,'2022_04_26_170239_create_tests_preguntas_table',1),(10,'2022_04_26_170309_create_tests_registros_table',1),(11,'2022_04_26_170329_create_tests_respuestas_accions_table',1),(12,'2022_04_26_170411_create_ruta_critica_formularios_table',1),(13,'2022_04_26_170430_create_informaciones_table',1),(14,'2022_04_26_170449_create_enlaces_interes_table',1),(15,'2022_04_26_170522_create_enlaces_interes_ubicaciones_table',1),(16,'2022_04_26_200648_create_materiales_asignacions_table',1),(17,'2022_05_18_185940_create_colums_in_mensajes',1),(18,'2022_05_18_190022_create_colums_in_pedidos_diferida_mensajes',1),(19,'2022_05_23_223138_create_table_informacion_enlaces',1),(20,'2022_05_23_223609_create_informacion_enlaces_table',1),(21,'2022_07_22_170111_create_log_inicios_table',1),(22,'2022_09_08_002856_create_paginas_table',2),(23,'2022_09_08_002940_create_diagnosticos_tipos_table',2),(24,'2022_09_08_003003_create_diagnosticos_redes_table',2),(25,'2022_09_08_003026_create_conceptos_table',2),(26,'2022_09_08_003044_create_concejos_table',2),(27,'2022_09_08_003108_create_conceptos_contenidos_table',2),(28,'2022_09_08_003127_create_registros_table',2),(29,'2022_09_16_011155_create_versiones_table',3),(30,'2024_05_14_022708_create_clientes_table',4),(31,'2024_05_14_050044_create_vehiculos_table',5),(32,'2025_03_14_005534_create_empleados_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ruta_critica_formularios`
--

DROP TABLE IF EXISTS `ruta_critica_formularios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ruta_critica_formularios` (
  `ruta_critica_formulario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_usuario_id` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `telefono_usuario` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_confianza` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta_ids` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_enviado` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ruta_critica_formulario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruta_critica_formularios`
--

LOCK TABLES `ruta_critica_formularios` WRITE;
/*!40000 ALTER TABLE `ruta_critica_formularios` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruta_critica_formularios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','ariel@chacon.com',NULL,'$2y$10$stKZOpc/qtYbIF39qQR1vetp5L8j0JOzjcyGlfQJCvIbxhNwf6zP.',NULL,'2022-05-31 07:55:09','2022-05-31 07:55:09'),(3,'Ruben Chacón','chacariel@gmail.com',NULL,'$2y$10$Jx4jVPFnZ.G1zSTr542wnOOS1KzqwlA22qEsxYKQSCDkOwe0jPSjS',NULL,'2022-05-31 11:12:49','2022-05-31 11:26:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehiculos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `placa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehiculos_user_id_foreign` (`user_id`),
  CONSTRAINT `vehiculos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (1,3,'abc123','toyota','rav4','2020','/storage/imagenes/zNseLChmuX16TfF24hcCm0olx2SO7d97eIgFmdp2.jpg','2024-05-15 07:09:15','2024-05-15 07:09:15'),(2,3,'aabb','aassss','ddd','aaa','/storage/imagenes/i7rTuWmiLYZPWYHm0dtodXooXPN8XZj0D6uQXShs.jpg','2025-03-13 05:51:27','2025-03-13 05:51:27'),(3,3,'2324sdfsd','sdfsdfs','sdfsdfs','sdfsdfs','/storage/imagenes/kArXR4zEPp8UWtAmDr25h34OLIRL9QAcbOSXgKV8.jpg','2025-03-13 05:58:01','2025-03-13 05:58:01');
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-14 23:33:35

CREATE TABLE productos (
  id bigint(20) UNSIGNED NOT NULL,
  nombre varchar(255) NOT NULL,
  descripcion text DEFAULT NULL,
  precio decimal(10,2) NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
