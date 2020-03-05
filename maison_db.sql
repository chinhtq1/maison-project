-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 08:10 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maison_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `date_public` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `created_at`, `updated_at`, `title`, `slug`, `is_public`, `date_public`, `content`, `description`, `fb_link`, `main_picture`, `thumbnail`, `user_id`) VALUES
(7, '2020-02-29 07:22:10', '2020-03-03 23:46:48', 'Test Tin Tức e', NULL, 1, '03/03/2020', '<p>Nội dung test</p>\r\n<p>hahahah</p>\r\n<p><img src=\"/articles/article-7/thumbnail.png\" alt=\"\" /></p>\r\n<p>dsdsds</p>', 'test mô tả ddfd', 'https://google.com.vn', 'articles/article-7/main-image.png', 'articles/article-7/thumbnail.png', 1),
(8, '2020-02-29 08:49:07', '2020-03-03 23:47:50', 'Test Tin Tức d', NULL, 1, '03/03/2020', '<p>Nội Dung</p>\r\n<p><img src=\"/articles/article-8/thumbnail.png\" /></p>', 'Mô Tả', 'https://google.com', 'https://maisondemocchau.vn/articles/article-8/main-image.png', 'https://maisondemocchau.vn/articles/article-8/thumbnail.png', 1),
(9, '2020-02-29 15:51:17', '2020-03-03 23:47:20', 'Test Tin Tức drrtr', NULL, 1, '03/03/2020', '<p>Test Nội Dung</p>', 'Test Mo Ta', 'https://google.com', 'articles/article-9/main-image.png', 'articles/article-9/thumbnail.png', 1),
(10, '2020-02-29 15:51:35', '2020-03-03 23:47:56', 'fdfdfdf', NULL, 1, '03/03/2020', '<p>fdfdfdfdf</p>', 'fredfe3fd', 'vcvcvcvc', 'articles/article-10/main-image.png', 'articles/article-10/thumbnail.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_14_034920_create_settings_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_02_16_085659_create_articles_table', 1),
(6, '2020_02_16_085659_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'string'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `content`, `type`) VALUES
(1, 'section', '{\"section1\":{\"content\":\"<p style=\\\"text-align: center;\\\">\\u200bC&oacute; m\\u1ed9t ch&aacute;n \\u0111\\u01b0\\u1ee3c g\\u1ecdi l&agrave; nh&agrave; v&agrave; c\\u0169ng l&agrave; n\\u01a1i tr&uacute; \\u1ea9n b&igrave;nh y&ecirc;n<\\/p>\\r\\n<p style=\\\"text-align: center;\\\">kh&ocirc;ng kh&oacute;i b\\u1ee5i, \\u1ed3n &agrave;o v&agrave; v\\u1ed9i v&atilde;. H&atilde;y tr\\u1edf v\\u1ec1 \\u0111\\u1ec3 c\\u1ea3m nh\\u1eadn m\\u1ed9t kh&ocirc;ng gian<\\/p>\\r\\n<p style=\\\"text-align: center;\\\">s\\u1ed1ng ri&ecirc;ng t\\u01b0, sang tr\\u1ecdng gi\\u1eefa l&ograve;ng Ch&acirc;u &Acirc;u bi\\u1ec7t l\\u1eadp v&agrave; ti\\u1ec7n nghi.<\\/p>\\r\\n<p style=\\\"text-align: center;\\\">\\u0110&oacute; l&agrave; ch\\u1ed1n thi&ecirc;n \\u0111\\u01b0\\u1eddng l&yacute; t\\u01b0\\u1edfng \\u0111\\u1ec3 t\\u1eadn h\\u01b0\\u1edfng m\\u1ed9t cu\\u1ed9c s\\u1ed1ng<\\/p>\\r\\n<p style=\\\"text-align: center;\\\">th\\u1eddi th\\u01b0\\u1ee3ng, an nhi&ecirc;n v&agrave; h\\u1ea1nh ph&uacute;c.<\\/p>\"},\"section2\":{\"title\":\"<p>Th\\u01b0\\u1edfng Ngo\\u1ea1n&nbsp;<strong>M\\u1ef9 C\\u1ea3nh<\\/strong><br \\/><strong>Ch&acirc;u &Acirc;u<\\/strong>&nbsp;Ngay T\\u1ea1i Nh&agrave;<\\/p>\",\"description\":\"<p>Maison de M\\u1ed9c Ch&acirc;u ch&iacute;nh l&agrave; vi&ecirc;n kim c\\u01b0\\u01a1ng v\\u1eb9n s\\u1eafc b&iacute;ch, s&aacute;ngl\\u1ea5p l&aacute;nh gi\\u1eefa n&uacute;i \\u0111\\u1ed3i T&acirc;y B\\u1eafc. C\\u1ea3nh s\\u1eafc Ch&acirc;u &Acirc;u sang tr\\u1ecdng,ki&ecirc;u sa c&ugrave;ng h\\u1ec7 th\\u1ed1ng ti\\u1ec7n &iacute;ch to&agrave;n m\\u1ef9 t\\u1ea1o n&ecirc;n m\\u1ed9t chu\\u1ea9n m\\u1ef1c s\\u1ed1ng \\u0111&ocirc; th\\u1ecb \\u0111\\u1eb3ng c\\u1ea5p m\\u1edbi l\\u1ea7n \\u0111\\u1ea7u ti&ecirc;n xu\\u1ea5t hi\\u1ec7n t\\u1ea1i M\\u1ed9c Ch&acirc;u.<\\/p>\",\"num-1\":\"30\",\"num-2\":\"50\",\"num-3\":\"70\",\"num-4\":\"20\",\"num-5\":\"90\",\"images\":[{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/small-image-detail-right.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section2\\/image-0.PNG\"},{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/big-image-detail-right.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section2\\/image-1.PNG\"}],\"slides\":[{\"title\":\"2\"}]},\"section3\":{\"title\":\"<h1>V\\u1ecb tr&iacute;&nbsp;<strong>Kim C\\u01b0\\u01a1ng<\\/strong><br \\/><strong>T\\u1ea7m Nh&igrave;n&nbsp;<\\/strong>\\u0110\\u1eaft Gi&aacute;<\\/h1>\",\"description\":\"<p>N\\u1eb1m t\\u1ef1a b&ecirc;n s\\u01b0\\u1eddn \\u0111\\u1ed3i th\\u1ea3o nguy&ecirc;n xanh ng&aacute;t, Maison de M\\u1ed9cCh&acirc;u \\u0111\\u01b0\\u1ee3c th\\u1eeba h\\u01b0\\u1edfng m\\u1ed9t v\\u1ecb tr&iacute; \\u0111\\u1eaft gi&aacute;, thu\\u1eadn ti\\u1ec7n k\\u1ebft n\\u1ed1i t\\u1edbi trung t&acirc;m h&agrave;nh ch&iacute;nh, kinh t\\u1ebf v&agrave; c&aacute;c \\u0111\\u1ecba \\u0111i\\u1ec3m tham quan du l\\u1ecbch n\\u1ed5i ti\\u1ebfng t\\u1eeb tr\\u1ee5c \\u0111\\u01b0\\u1eddng qu\\u1ed1c l\\u1ed9 43 nhanh ch&oacute;ng, d\\u1ec5 d&agrave;ng<\\/p>\",\"link\":\"https:\\/\\/github.com\\/Torann\\/laravel-meta-tags\",\"images\":[{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/tower.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section3\\/image-0.PNG\"}]},\"section4\":{\"title\":\"<h1><strong>Ti\\u1ec7n &Iacute;ch <\\/strong>To&agrave;n M\\u1ef9<\\/h1>\",\"description\":\"<p>Maison de M\\u1ed9c Ch&acirc;u t\\u1ea1o ra m\\u1ed9t mi\\u1ec1n s\\u1ed1ng m\\u1edbi v\\u01b0\\u1ee3t l&ecirc;n tr&ecirc;n c\\u1ea3 nh\\u1eefng chu\\u1ea9n m\\u1ef1c ti\\u1ec7n &iacute;ch t\\u1eebng c&oacute;. \\u0110&oacute; l&agrave; m\\u1ed9t \\u0111\\u1eb3ng<br \\/>c\\u1ea5p s\\u1ed1ng th\\u1eddi th\\u01b0\\u1ee3ng giao h&ograve;a gi\\u1eefa ngh\\u1ec7 thu\\u1eadt, thi&ecirc;n nhi&ecirc;n v&agrave; ti\\u1ec7n &iacute;ch<\\/p>\",\"images\":[{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/tien-ich.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section4\\/image-0.PNG\"}]},\"section5\":{\"title\":\"<h2><strong>Ki\\u1ebfn Tr&uacute;c Ch&acirc;u &Acirc;u<\\/strong><br \\/>Th\\u1eddi Th\\u01b0\\u1ee3ng<\\/h2>\",\"description\":\"<p>Ki\\u1ebfn tr&uacute;c ho&agrave;n m\\u1ef9 \\u0111\\u1eadm ch\\u1ea5t ngh\\u1ec7 thu\\u1eadt th\\u1eddi th\\u01b0\\u1ee3ng \\u0111\\u01b0\\u1ee3c ghi d\\u1ea5u trong t\\u1eebng chi ti\\u1ebft. M\\u1ed7i c\\u0103n bi\\u1ec7t th\\u1ef1 \\u0111\\u1ec1u \\u0111\\u01b0\\u1ee3c thi\\u1ebft k\\u1ebf trang nh&atilde;, tinh t\\u1ebf g\\u1ea7n g\\u0169i v\\u1edbi thi&ecirc;n nhi&ecirc;n k\\u1ebft h\\u1ee3p c&ugrave;ng h\\u1ec7 th\\u1ed1ng v&aacute;chk&iacute;nh an to&agrave;n trong ph&ograve;ng s\\u1ebd \\u0111em \\u0111\\u1ebfn cho gia ch\\u1ee7 g&oacute;c nh&igrave;n to&agrave;n c\\u1ea3nh n&uacute;i \\u0111\\u1ed3i th\\u01a1 m\\u1ed9ng.<\\/p>\",\"images\":[{\"url\":\"http:\\/\\/maison.host\\/laravel-filemanager\\/photos\\/folder\\/maison\\/design-building-left.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section5\\/image-0.PNG\"}],\"slides\":[{\"title\":\"2\"}]},\"section6\":{\"articles\":[\"2\",\"3\",\"4\"]},\"section7\":{\"slides\":[{\"title\":\"3\"}]},\"section8\":{\"images\":[{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/feed-left.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section8\\/image-0.PNG\"},{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/-right.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section8\\/image-1.PNG\"},{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/-right.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section8\\/image-2.PNG\"},{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/-right.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section8\\/image-3.PNG\"},{\"url\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/maison\\/settings\\/-right.png\",\"main_url\":\"http:\\/\\/maison.host\\/sections\\/section8\\/image-4.PNG\"}],\"slides\":[{\"title\":\"2\"},{\"title\":\"3\"},{\"title\":\"2\"},{\"title\":\"2\"},{\"title\":\"3\"}]}}', 'setting'),
(6, 'slides', '\"{\\\"_token\\\":\\\"X3YTHkn8kQpeQsjJU4HnBsWF1UjvJHbeQJqhCHsS\\\",\\\"slide_chu\\\":\\\"5\\\",\\\"text_slide_1\\\":\\\"Anh 1\\\",\\\"text_slide_2\\\":\\\"Anh 2\\\",\\\"text_slide_3\\\":\\\"Anh 3\\\",\\\"text_slide_4\\\":\\\"Anh 4\\\",\\\"text_slide_5\\\":\\\"Anh 5\\\",\\\"anh_slide_1\\\":\\\"static\\\\\\/anh_slide_1.jpg\\\",\\\"anh_slide_2\\\":\\\"static\\\\\\/anh_slide_2.png\\\",\\\"anh_slide_3\\\":\\\"static\\\\\\/anh_slide_3.jpg\\\",\\\"anh_slide_4\\\":\\\"static\\\\\\/anh_slide_4.png\\\",\\\"anh_slide_5\\\":\\\"static\\\\\\/anh_slide_5.jpg\\\"}\"', 'setting'),
(9, 'general', '\"{\\\"title\\\":\\\"Mai Son De Moc Chau\\\",\\\"keywords\\\":\\\"bat dong san, dau tu bat dong san\\\",\\\"description\\\":\\\"Maison de M\\\\u1ed9c Ch\\\\u00e2u ch\\\\u00ednh l\\\\u00e0 vi\\\\u00ean kim c\\\\u01b0\\\\u01a1ng v\\\\u1eb9n s\\\\u1eafc to\\\\u00e0n b\\\\u00edch, s\\\\u00e1ng l\\\\u1ea5p l\\\\u00e1nh gi\\\\u1eefa n\\\\u00fai \\\\u0111\\\\u1ed3i T\\\\u00e2y B\\\\u1eafc. C\\\\u1ea3nh s\\\\u1eafc Ch\\\\u00e2u \\\\u00c2u sang tr\\\\u1ecdng c\\\\u00f9ng h\\\\u1ec7 th\\\\u1ed1ng ti\\\\u1ec7n \\\\u00edch to\\\\u00e0n m\\\\u1ef9 t\\\\u1ea1o n\\\\u00ean m\\\\u1ed9t chu\\\\u1ea9n m\\\\u1ef1c s\\\\u1ed1ng \\\\u0111\\\\u00f4 th\\\\u1ecb m\\\\u1edbi \\\\u0111\\\\u1eb3ng c\\\\u1ea5p v\\\\u00e0 th\\\\u1eddi th\\\\u01b0\\\\u1ee3ng\\\",\\\"fb_link\\\":\\\"https:\\\\\\/\\\\\\/facebook.com\\\\\\/vuducthuan1994\\\",\\\"company_link\\\":\\\"https:\\\\\\/\\\\\\/google.com\\\\\\/vuducthuan1994\\\",\\\"google_analytic\\\":null,\\\"phone_number\\\":\\\"0962160910\\\",\\\"footer_text\\\":\\\"PH\\\\u00c1T TRI\\\\u1ec2N B\\\\u1edeI 379\\\",\\\"logo_desktop\\\":\\\"\\\\\\/static\\\\\\/logo_desktop.png\\\",\\\"logo_mobile\\\":\\\"https:\\\\\\/\\\\\\/maisondemocchau.vn\\\\\\/static\\\\\\/logo_mobile.png\\\",\\\"banner_desktop\\\":\\\"https:\\\\\\/\\\\\\/maisondemocchau.vn\\\\\\/static\\\\\\/banner_desktop.png\\\",\\\"banner_mobile\\\":\\\"https:\\\\\\/\\\\\\/maisondemocchau.vn\\\\\\/static\\\\\\/banner_mobile.png\\\",\\\"niem_tin_tron_ven\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/niem_tin_tron_ven.png\\\",\\\"home_image\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/home_image.png\\\",\\\"map_desktop\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/map_desktop.png\\\",\\\"map_mobile\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/map_mobile.png\\\",\\\"tien_ich_toan_my_image\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/tien_ich_toan_my_image.png\\\",\\\"kien_truc_chau_au_image\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/kien_truc_chau_au_image.png\\\",\\\"thuong_ngoan_my_canh_big\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/thuong_ngoan_my_canh_big.png\\\",\\\"vi_tri_kim_cuong_image\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/vi_tri_kim_cuong_image.png\\\",\\\"thuong_ngoan_my_canh_small\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/thuong_ngoan_my_canh_small.png\\\",\\\"mau_biet_thu_moi\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/mau_biet_thu_moi.pdf\\\",\\\"logo_poem\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/logo_poem.png\\\",\\\"logo_footer\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/logo_footer.png\\\",\\\"niem_tin_tron_ven_mobile\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/niem_tin_tron_ven_mobile.png\\\",\\\"des_big_image\\\":\\\"379 Real Estate\\\",\\\"des_small_image_1\\\":\\\"Athena Complex\\\",\\\"des_small_image_2\\\":\\\"Zakiru\\\",\\\"des_small_image_3\\\":\\\"Monkey d Luffy\\\",\\\"des_small_image_4\\\":\\\"Kusutri oden\\\",\\\"big_image\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/big_image.png\\\",\\\"small_image_1\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/small_image_1.png\\\",\\\"small_image_2\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/small_image_2.png\\\",\\\"small_image_3\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/small_image_3.png\\\",\\\"small_image_4\\\":\\\"http:\\\\\\/\\\\\\/maison.host\\\\\\/static\\\\\\/small_image_4.png\\\"}\"', 'setting'),
(11, 'text_single', '\"{\\\"_token\\\":\\\"vUV5Obk6cqD4Tqil5ACOtv0eXvLYU2dt4OT0Z3Lm\\\",\\\"poem_text\\\":\\\"<p>Maison de M\\\\u1ed9c Ch&acirc;u ch&iacute;nh l&agrave; vi&ecirc;n kim c\\\\u01b0\\\\u01a1ng v\\\\u1eb9n s\\\\u1eafc to&agrave;n b&iacute;ch, s&aacute;ng l\\\\u1ea5p l&aacute;nh gi\\\\u1eefa n&uacute;i \\\\u0111\\\\u1ed3i T&acirc;y B\\\\u1eafc. C\\\\u1ea3nh s\\\\u1eafc Ch&acirc;u &Acirc;u sang tr\\\\u1ecdng c&ugrave;ng h\\\\u1ec7 th\\\\u1ed1ng ti\\\\u1ec7n &iacute;ch to&agrave;n m\\\\u1ef9 t\\\\u1ea1o n&ecirc;n m\\\\u1ed9t chu\\\\u1ea9n m\\\\u1ef1c s\\\\u1ed1ng \\\\u0111&ocirc; th\\\\u1ecb m\\\\u1edbi \\\\u0111\\\\u1eb3ng c\\\\u1ea5p v&agrave; th\\\\u1eddi th\\\\u01b0\\\\u1ee3ng<\\\\\\/p>\\\",\\\"tien_ich_toan_my\\\":\\\"<h1><strong>Ti\\\\u1ec7n &Iacute;ch<\\\\\\/strong>&nbsp;To&agrave;n M\\\\u1ef9<\\\\\\/h1>\\\\r\\\\n\\\\r\\\\n<p>Maison de M\\\\u1ed9c Ch&acirc;u t\\\\u1ea1o ra m\\\\u1ed9t mi\\\\u1ec1n s\\\\u1ed1ng m\\\\u1edbi v\\\\u01b0\\\\u1ee3t l&ecirc;n tr&ecirc;n c\\\\u1ea3 nh\\\\u1eefng chu\\\\u1ea9n m\\\\u1ef1c ti\\\\u1ec7n &iacute;ch t\\\\u1eebng c&oacute;. \\\\u0110&oacute; l&agrave; m\\\\u1ed9t \\\\u0111\\\\u1eb3ng c\\\\u1ea5p s\\\\u1ed1ng th\\\\u1eddi th\\\\u01b0\\\\u1ee3ng giao h&ograve;a gi\\\\u1eefa ngh\\\\u1ec7 thu\\\\u1eadt, thi&ecirc;n nhi&ecirc;n v&agrave; ti\\\\u1ec7n &iacute;ch.<\\\\\\/p>\\\",\\\"vi_tri_kim_cuong\\\":\\\"<h1>V\\\\u1ecb tr&iacute;&nbsp;<strong>Kim C\\\\u01b0\\\\u01a1ng<\\\\\\/strong><br \\\\\\/>\\\\r\\\\n<strong>T\\\\u1ea7m Nh&igrave;n<\\\\\\/strong>&nbsp;\\\\u0110\\\\u1eaft Gi&aacute;<\\\\\\/h1>\\\\r\\\\n\\\\r\\\\n<p>N\\\\u1eb1m t\\\\u1ef1a b&ecirc;n s\\\\u01b0\\\\u1eddn \\\\u0111\\\\u1ed3i th\\\\u1ea3o nguy&ecirc;n xanh ng&aacute;t, Maison de M\\\\u1ed9c Ch&acirc;u \\\\u0111\\\\u01b0\\\\u1ee3c th\\\\u1eeba h\\\\u01b0\\\\u1edfng m\\\\u1ed9t v\\\\u1ecb tr&iacute; \\\\u0111\\\\u1eaft gi&aacute;, thu\\\\u1eadn ti\\\\u1ec7n k\\\\u1ebft n\\\\u1ed1i t\\\\u1edbi trung t&acirc;m h&agrave;nh ch&iacute;nh, kinh t\\\\u1ebf v&agrave; c&aacute;c \\\\u0111\\\\u1ecba \\\\u0111i\\\\u1ec3m tham quan du l\\\\u1ecbch n\\\\u1ed5i ti\\\\u1ebfng t\\\\u1eeb tr\\\\u1ee5c \\\\u0111\\\\u01b0\\\\u1eddng qu\\\\u1ed1c l\\\\u1ed9 43 nhanh ch&oacute;ng, d\\\\u1ec5 d&agrave;ng.<\\\\\\/p>\\\",\\\"kien_truc_chau_au\\\":\\\"<h1><strong>Ki\\\\u1ebfn Tr&uacute;c Ch&acirc;u &Acirc;u<\\\\\\/strong><br \\\\\\/>\\\\r\\\\nTh\\\\u1eddi Th\\\\u01b0\\\\u1ee3ng<\\\\\\/h1>\\\\r\\\\n\\\\r\\\\n<p>Ki\\\\u1ebfn tr&uacute;c ho&agrave;n m\\\\u1ef9 \\\\u0111\\\\u1eadm ch\\\\u1ea5t ngh\\\\u1ec7 thu\\\\u1eadt th\\\\u1eddi th\\\\u01b0\\\\u1ee3ng \\\\u0111\\\\u01b0\\\\u1ee3c ghi d\\\\u1ea5u trong t\\\\u1eebng chi ti\\\\u1ebft. M\\\\u1ed7i c\\\\u0103n bi\\\\u1ec7t th\\\\u1ef1 \\\\u0111\\\\u1ec1u \\\\u0111\\\\u01b0\\\\u1ee3c thi\\\\u1ebft k\\\\u1ebf trang nh&atilde;, tinh t\\\\u1ebf g\\\\u1ea7n g\\\\u0169i v\\\\u1edbi thi&ecirc;n nhi&ecirc;n k\\\\u1ebft h\\\\u1ee3p c&ugrave;ng h\\\\u1ec7 th\\\\u1ed1ng v&aacute;chk&iacute;nh an to&agrave;n trong ph&ograve;ng s\\\\u1ebd \\\\u0111em \\\\u0111\\\\u1ebfn cho gia ch\\\\u1ee7 g&oacute;c nh&igrave;n to&agrave;n c\\\\u1ea3nh n&uacute;i \\\\u0111\\\\u1ed3i th\\\\u01a1 m\\\\u1ed9ng.<\\\\\\/p>\\\",\\\"thuong_ngoan_my_canh\\\":\\\"<h1>Th\\\\u01b0\\\\u1edfng Ngo\\\\u1ea1n&nbsp;<strong>M\\\\u1ef9 C\\\\u1ea3nh<\\\\\\/strong><br \\\\\\/>\\\\r\\\\n<strong>Ch&acirc;u &Acirc;u<\\\\\\/strong>&nbsp;Ngay T\\\\u1ea1i Nh&agrave;<\\\\\\/h1>\\\\r\\\\n\\\\r\\\\n<p>L\\\\u1ea7n \\\\u0111\\\\u1ea7u ti&ecirc;n t\\\\u1ea1i M\\\\u1ed9c Ch&acirc;u, 24 c\\\\u0103n bi\\\\u1ec7t th\\\\u1ef1 li\\\\u1ec1n k\\\\u1ec1 c&ugrave;ng h\\\\u1ec7 th\\\\u1ed1ng c\\\\u1ea3nh quan ti\\\\u1ec7n &iacute;ch \\\\u0111\\\\u01b0\\\\u1ee3c x&acirc;y d\\\\u1ef1ng v&agrave; quy ho\\\\u1ea1ch \\\\u0111\\\\u1ed3ng b\\\\u1ed9 theo phong c&aacute;ch ki\\\\u1ebfn tr&uacute;c Ch&acirc;u &Acirc;u t&acirc;n c\\\\u1ed5 \\\\u0111i\\\\u1ec3n sang tr\\\\u1ecdng, bi\\\\u1ec7t l\\\\u1eadp. S\\\\u1edf h\\\\u1eefu Maison de M\\\\u1ed9c Ch&acirc;u ch&iacute;nh l&agrave; s\\\\u1edf h\\\\u1eefu m&oacute;n t&agrave;i s\\\\u1ea3n qu&yacute; gi&aacute; b\\\\u1edfi s\\\\u1ed1 l\\\\u01b0\\\\u1ee3ng h\\\\u1eefu h\\\\u1ea1n ch\\\\u1ec9 d&agrave;nh ri&ecirc;ng cho c\\\\u1ed9ng \\\\u0111\\\\u1ed3ng c\\\\u01b0 d&acirc;n \\\\u0111\\\\u1eb3ng c\\\\u1ea5p.<\\\\\\/p>\\\"}\"', 'setting');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `date_public` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `type`, `created_at`, `updated_at`, `title`, `is_public`, `date_public`, `description`, `fb_link`, `data`, `user_id`) VALUES
(5, 'text', '2020-03-02 08:42:12', '2020-03-02 23:02:37', 'Slider Text Trang Chủ', 1, ' 2 Tháng 3 Năm 2020', 'Slider Text Trang Chủ', 'NOT', '{\"slides\":[{\"text\":\"<h1>Vi&ecirc;n Kim C\\u01b0\\u01a1ng V\\u1eb9n S\\u1eafc To&agrave;n B&iacute;ch<\\/h1>\\r\\n<p>\\u01a0 k&igrave;a! Xu&acirc;n \\u0111&atilde; v\\u1ec1<br \\/>M&acirc;n m&ecirc; ch&ugrave;m kh\\u1ebf ng\\u1ecdt<br \\/>L&iacute;u lo ng&agrave;n chim h&oacute;t<br \\/>Nh\\u1ea3y nh&oacute;t m\\u1eebng Xu&acirc;n sang.<\\/p>\",\"type\":\"Slide ch\\u1eef\"},{\"text\":\"<h1>Vi&ecirc;n Kim C\\u01b0\\u01a1ng V\\u1eb9n S\\u1eafc To&agrave;n B&iacute;ch<\\/h1>\\r\\n<p>N\\u1eb7ng tr\\u0129u c&agrave;nh t&aacute;o v&agrave;ng<br \\/>Mai, \\u0110&agrave;o khoe s\\u1eafc th\\u1eafm<br \\/>M\\u01b0a c\\u01b0\\u1eddi r\\u01a1i l\\u1ea5m t\\u1ea5m<br \\/>N\\u1eafng xu&acirc;n tr&agrave;n l&ecirc;n m&ocirc;i.<\\/p>\",\"type\":\"Slide ch\\u1eef\"},{\"text\":\"<h1>Vi&ecirc;n Kim C\\u01b0\\u01a1ng V\\u1eb9n S\\u1eafc To&agrave;n B&iacute;ch<\\/h1>\\r\\n<p>Xa t&iacute;t t\\u1eadn tr&ugrave;ng kh\\u01a1i<br \\/>Xu&acirc;n l\\u1ea7n theo n&ograve;ng ph&aacute;o<br \\/>C&ugrave;ng c&aacute;c anh l&iacute;nh \\u0111\\u1ea3o<br \\/>Gi\\u1eef b&igrave;nh y&ecirc;n qu&ecirc; nh&agrave;.<\\/p>\",\"type\":\"Slide ch\\u1eef\"},{\"text\":\"<h1>Vi&ecirc;n Kim C\\u01b0\\u01a1ng V\\u1eb9n S\\u1eafc To&agrave;n B&iacute;ch<\\/h1>\\r\\n<p>Xu&acirc;n bay theo l\\u1eddi ca<br \\/>\\u0110\\u1ebfn nh&agrave; nh&agrave; g&otilde; c\\u1eeda<br \\/>Bao ng\\u01b0\\u1eddi d\\u1eady nh&oacute;m l\\u1eeda<br \\/>C&ugrave;ng gi&oacute; xu&acirc;n b\\u1eadp b&ugrave;ng.<\\/p>\",\"type\":\"Slide ch\\u1eef\"}]}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 3,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@abc.com', '$2y$10$EUH52iZWbeIaWM81tZbJ9e.OYMxc5F//a2TBKwAN4XuZSTSHXUF0G', 1, NULL, 3, 'qCe1mkD8XaoeATzaHHy2w8ysmkrSHR2KsDHKvjVQHGMFxPRWop6clW1hn98z', '2020-02-26 09:42:56', '2020-02-26 09:42:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
