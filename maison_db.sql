-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 06:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

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
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `date_public` datetime NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `picture_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `created_at`, `updated_at`, `title`, `slug`, `is_public`, `date_public`, `content`, `description`, `seo`, `fb_link`, `picture_data`, `user_id`) VALUES
(1, '2020-02-26 16:47:01', '2020-02-28 17:06:08', 'Bộ GD-ĐT phê duyệt thêm 7 cuốn sách giáo khoa mới', 'vu-duc-thuan-1994', 1, '2020-02-28 17:06:08', '<h2 class=\"sapo\">TTO - Bộ Gi&aacute;o dục v&agrave; đ&agrave;o tạo (GD-ĐT) vừa c&ocirc;ng bố thẩm định s&aacute;ch gi&aacute;o khoa mới đợt hai. Kết quả c&oacute; th&ecirc;m bảy cuốn s&aacute;ch gi&aacute;o khoa lớp 1 được ph&ecirc; duyệt để đưa v&agrave;o lựa chọn trong thời gian tới.</h2>', 'TTO - Bộ Giáo dục và đào tạo (GD-ĐT) vừa công bố thẩm định sách giáo khoa mới đợt hai. Kết quả có thêm bảy cuốn sách giáo khoa lớp 1 được phê duyệt để đưa vào lựa chọn trong thời gian tới.', 'dsdsdswedsd', 'chan vai', '{\"origin_url\":\"\\/photos\\/1\\/image-post.png\",\"thumb_data\":{\"width\":\"500\",\"height\":\"300\",\"url\":\"articles\\/article-1\\/article-1-thumbnail.JPG\"},\"main_picture_data\":{\"width\":\"1028\",\"height\":\"514\",\"url\":\"articles\\/article-1\\/article-1-main-picture.JPG\"}}', 1),
(2, '2020-02-26 16:47:22', '2020-02-27 19:10:01', 'Lãnh đạo TP.HCM giải thích lý do đề xuất chậm thời gian cho học sinh đi học lại', 'lanh-dao-tphcm-giai-thich-ly-do-de-xuat-cham-thoi-gian-cho-hoc-sinh-di-hoc-lai', 1, '2020-02-27 19:10:01', '<h2 class=\"sapo\">TTO - Tại cuộc họp tối 25-2 về t&igrave;nh h&igrave;nh ph&ograve;ng chống dịch COVID-19, cả B&iacute; thư Th&agrave;nh ủy TP.HCM Nguyễn Thiện Nh&acirc;n v&agrave; Chủ tịch UBND TP Nguyễn Th&agrave;nh Phong đều n&oacute;i về l&yacute; do tại sao TP phải chậm cho học sinh đi học trở lại.</h2>', 'TTO - Tại cuộc họp tối 25-2 về tình hình phòng chống dịch COVID-19, cả Bí thư Thành ủy TP.HCM Nguyễn Thiện Nhân và Chủ tịch UBND TP Nguyễn Thành Phong đều nói về lý do tại sao TP phải chậm cho học sinh đi học trở lại.', 'dfd', 'chan vai lo', '{\"origin_url\":\"\\/laravel-filemanager\\/photos\\/folder\\/maison\\/image-post.png\",\"thumb_data\":{\"width\":\"500\",\"height\":\"300\",\"url\":\"articles\\/article-2\\/article-2-thumbnail.JPG\"},\"main_picture_data\":{\"width\":\"1028\",\"height\":\"514\",\"url\":\"articles\\/article-2\\/article-2-main-picture.JPG\"}}', 1),
(3, '2020-02-26 16:47:45', '2020-02-27 18:47:38', 'Người Hàn Quốc tử vong tại Bắc Ninh âm tính với virus SARS-CoV-2', 'nguoi-han-quoc-tu-vong-tai-bac-ninh-am-tinh-voi-virus-sars-cov-2', 1, '2020-02-27 18:47:38', '<h2 class=\"sapo\">TTO - Kết quả x&eacute;t nghiệm của Viện Vệ sinh dịch tễ trung ương cho thấy người đ&agrave;n &ocirc;ng quốc tịch H&agrave;n Quốc tử vong gần cổng Bệnh viện Đa khoa tỉnh Bắc Ninh ng&agrave;y 25-2 &acirc;m t&iacute;nh với virus SARS-CoV-2.</h2>', 'TTO - Kết quả xét nghiệm của Viện Vệ sinh dịch tễ trung ương cho thấy người đàn ông quốc tịch Hàn Quốc tử vong gần cổng Bệnh viện Đa khoa tỉnh Bắc Ninh ngày 25-2 âm tính với virus SARS-CoV-2.', 'xcxcxcxcxcx', '#', '{\"origin_url\":\"\\/laravel-filemanager\\/photos\\/folder\\/maison\\/-right.png\",\"thumb_data\":{\"width\":\"500\",\"height\":\"300\",\"url\":\"articles\\/article-3\\/article-3-thumbnail.JPG\"},\"main_picture_data\":{\"width\":\"1028\",\"height\":\"514\",\"url\":\"articles\\/article-3\\/article-3-main-picture.JPG\"}}', 1);

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
(4, 'general', '{\"title\":\"Mai Son De Moc Chau\",\"keywords\":\"bat dong san\",\"description\":\"bat dong san\",\"fb_app_id\":null,\"fb_admin\":null,\"google_analytic\":null,\"phone_number\":\"0962160910\",\"logo_desktop\":\"\\/static\\/logo_desktop.png\",\"footer_text\":\"PH\\u00c1T TRI\\u1ec2N B\\u1edeI 379\",\"logo_poem\":\"http:\\/\\/maison.host\\/static\\/logo_poem.png\",\"banner_mobile\":\"http:\\/\\/maison.host\\/static\\/banner_mobile.png\",\"banner_desktop\":\"http:\\/\\/maison.host\\/static\\/banner_desktop.png\",\"logo_mobile\":\"http:\\/\\/maison.host\\/static\\/logo_mobile.png\",\"fb_link\":\"https:\\/\\/facebook.com\",\"company_link\":\"https:\\/\\/google.com\",\"logo_footer\":\"http:\\/\\/maison.host\\/static\\/logo_footer.png\",\"niem_tin_tron_ven\":\"http:\\/\\/maison.host\\/static\\/niem_tin_tron_ven.png\",\"map_desktop\":\"http:\\/\\/maison.host\\/static\\/map_desktop.png\",\"map_mobile\":\"http:\\/\\/maison.host\\/static\\/map_mobile.png\",\"mau_biet_thu\":[],\"hinh_anh_du_an\":\"http:\\/\\/maison.host\\/static\\/hinh_anh_du_an.pdf\",\"ban_do_vi_tri\":\"http:\\/\\/maison.host\\/static\\/ban_do_vi_tri.pdf\",\"mau_biet_thu_moi\":\"http:\\/\\/maison.host\\/static\\/mau_biet_thu_moi.pdf\"}', 'setting'),
(5, 'text_single', '{\"_token\":\"9QvNSqWYkZelHkl7jw95tx40jsbZQb5eyPUtgSQO\",\"poem_text\":\"<p>C&oacute; m\\u1ed9t n\\u01a1i \\u0111\\u01b0\\u1ee3c g\\u1ecdi l&agrave; nh&agrave; v&agrave; c\\u0169ng l&agrave; n\\u01a1i tr&uacute; \\u1ea9n b&igrave;nh y&ecirc;n<br \\/>\\r\\nkh&ocirc;ng kh&oacute;i b\\u1ee5i, \\u1ed3n &agrave;o v&agrave; v\\u1ed9i v&atilde;. H&atilde;y tr\\u1edf v\\u1ec1 \\u0111\\u1ec3 c\\u1ea3m nh\\u1eadn m\\u1ed9t kh&ocirc;ng gian<br \\/>\\r\\ns\\u1ed1ng ri&ecirc;ng t\\u01b0, sang tr\\u1ecdng gi\\u1eefa l&ograve;ng Ch&acirc;u &Acirc;u bi\\u1ec7t l\\u1eadp v&agrave; ti\\u1ec7n nghi.<br \\/>\\r\\n\\u0110&oacute; l&agrave; ch\\u1ed1n thi&ecirc;n \\u0111\\u01b0\\u1eddng l&yacute; t\\u01b0\\u1edfng \\u0111\\u1ec3 t\\u1eadn h\\u01b0\\u1edfng m\\u1ed9t cu\\u1ed9c s\\u1ed1ng<br \\/>\\r\\nth\\u1eddi th\\u01b0\\u1ee3ng, an nhi&ecirc;n v&agrave; h\\u1ea1nh ph&uacute;c.<\\/p>\",\"tien_ich_toan_my\":\"<h1><strong>Ti\\u1ec7n &Iacute;ch<\\/strong>&nbsp;To&agrave;n M\\u1ef9<\\/h1>\\r\\n\\r\\n<p>Maison de M\\u1ed9c Ch&acirc;u t\\u1ea1o ra m\\u1ed9t mi\\u1ec1n s\\u1ed1ng m\\u1edbi v\\u01b0\\u1ee3t l&ecirc;n tr&ecirc;n c\\u1ea3 nh\\u1eefng chu\\u1ea9n m\\u1ef1c ti\\u1ec7n &iacute;ch t\\u1eebng c&oacute;. \\u0110&oacute; l&agrave; m\\u1ed9t \\u0111\\u1eb3ng<br \\/>\\r\\nc\\u1ea5p s\\u1ed1ng th\\u1eddi th\\u01b0\\u1ee3ng giao h&ograve;a gi\\u1eefa ngh\\u1ec7 thu\\u1eadt, thi&ecirc;n nhi&ecirc;n v&agrave; ti\\u1ec7n &iacute;ch.<\\/p>\",\"vi_tri_kim_cuong\":\"<h1>V\\u1ecb tr&iacute;&nbsp;<strong>Kim C\\u01b0\\u01a1ng<\\/strong><br \\/>\\r\\n<strong>T\\u1ea7m Nh&igrave;n<\\/strong>&nbsp;\\u0110\\u1eaft Gi&aacute;<\\/h1>\\r\\n\\r\\n<p>N\\u1eb1m t\\u1ef1a b&ecirc;n s\\u01b0\\u1eddn \\u0111\\u1ed3i th\\u1ea3o nguy&ecirc;n xanh ng&aacute;t, Maison de M\\u1ed9c Ch&acirc;u \\u0111\\u01b0\\u1ee3c th\\u1eeba h\\u01b0\\u1edfng m\\u1ed9t v\\u1ecb tr&iacute; \\u0111\\u1eaft gi&aacute;, thu\\u1eadn ti\\u1ec7n k\\u1ebft n\\u1ed1i t\\u1edbi trung t&acirc;m h&agrave;nh ch&iacute;nh, kinh t\\u1ebf v&agrave; c&aacute;c \\u0111\\u1ecba \\u0111i\\u1ec3m tham quan du l\\u1ecbch n\\u1ed5i ti\\u1ebfng t\\u1eeb tr\\u1ee5c \\u0111\\u01b0\\u1eddng qu\\u1ed1c l\\u1ed9 43 nhanh ch&oacute;ng, d\\u1ec5 d&agrave;ng.<\\/p>\",\"kien_truc_chau_au\":\"<h1><strong>Ki\\u1ebfn Tr&uacute;c Ch&acirc;u &Acirc;u<\\/strong><br \\/>\\r\\nTh\\u1eddi Th\\u01b0\\u1ee3ng<\\/h1>\\r\\n\\r\\n<p>Ki\\u1ebfn tr&uacute;c ho&agrave;n m\\u1ef9 \\u0111\\u1eadm ch\\u1ea5t ngh\\u1ec7 thu\\u1eadt th\\u1eddi th\\u01b0\\u1ee3ng \\u0111\\u01b0\\u1ee3c ghi d\\u1ea5u trong t\\u1eebng chi ti\\u1ebft. M\\u1ed7i c\\u0103n bi\\u1ec7t th\\u1ef1 \\u0111\\u1ec1u \\u0111\\u01b0\\u1ee3c thi\\u1ebft k\\u1ebf trang nh&atilde;, tinh t\\u1ebf g\\u1ea7n g\\u0169i v\\u1edbi thi&ecirc;n nhi&ecirc;n k\\u1ebft h\\u1ee3p c&ugrave;ng h\\u1ec7 th\\u1ed1ng v&aacute;chk&iacute;nh an to&agrave;n trong ph&ograve;ng s\\u1ebd \\u0111em \\u0111\\u1ebfn cho gia ch\\u1ee7 g&oacute;c nh&igrave;n to&agrave;n c\\u1ea3nh n&uacute;i \\u0111\\u1ed3i th\\u01a1 m\\u1ed9ng.<\\/p>\",\"thuong_ngoan_my_canh\":\"<h1>Th\\u01b0\\u1edfng Ngo\\u1ea1n&nbsp;<strong>M\\u1ef9 C\\u1ea3nh<\\/strong><br \\/>\\r\\n<strong>Ch&acirc;u &Acirc;u<\\/strong>&nbsp;Ngay T\\u1ea1i Nh&agrave;<\\/h1>\\r\\n\\r\\n<p>Maison de M\\u1ed9c Ch&acirc;u ch&iacute;nh l&agrave; vi&ecirc;n kim c\\u01b0\\u01a1ng v\\u1eb9n s\\u1eafc b&iacute;ch, s&aacute;ngl\\u1ea5p l&aacute;nh gi\\u1eefa n&uacute;i \\u0111\\u1ed3i T&acirc;y B\\u1eafc. C\\u1ea3nh s\\u1eafc Ch&acirc;u &Acirc;u sang tr\\u1ecdng,ki&ecirc;u sa c&ugrave;ng h\\u1ec7 th\\u1ed1ng ti\\u1ec7n &iacute;ch to&agrave;n m\\u1ef9 t\\u1ea1o n&ecirc;n m\\u1ed9t chu\\u1ea9n m\\u1ef1c s\\u1ed1ng \\u0111&ocirc; th\\u1ecb \\u0111\\u1eb3ng c\\u1ea5p m\\u1edbi l\\u1ea7n \\u0111\\u1ea7u ti&ecirc;n xu\\u1ea5t hi\\u1ec7n t\\u1ea1i M\\u1ed9c Ch&acirc;u.<\\/p>\"}', 'setting');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `date_public` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `created_at`, `updated_at`, `title`, `slug`, `is_public`, `date_public`, `description`, `seo`, `fb_link`, `data`, `user_id`) VALUES
(2, '2020-02-26 16:56:44', '2020-02-26 16:56:47', 'Slide 1', 'slide-1', 1, '0000-00-00 00:00:00', 'redirect', '', '', '{\"slides\":[{\"originUrl\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/photo-1-15611130749171709766356.jpg\",\"type\":\"Slide \\u1ea3nh\",\"imageUrl\":\"http:\\/\\/localhost:8000\\/slides\\/slide-2\\/slide-0.PNG\"},{\"originUrl\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/images.jpg\",\"type\":\"Slide \\u1ea3nh\",\"imageUrl\":\"http:\\/\\/localhost:8000\\/slides\\/slide-2\\/slide-1.PNG\"}]}', 1),
(3, '2020-02-26 18:22:33', '2020-02-26 18:22:36', 'Toi la ai', 'toi-la-ai', 1, '0000-00-00 00:00:00', '{\"section1\":{\"content\":\"<p>Returns the error code of the last PCRE regex', '', '', '{\"slides\":[{\"originUrl\":\"http:\\/\\/localhost:8000\\/laravel-filemanager\\/photos\\/folder\\/images (2).jpg\",\"type\":\"Slide \\u1ea3nh\",\"imageUrl\":\"http:\\/\\/localhost:8000\\/slides\\/slide-3\\/slide-0.PNG\"},{\"text\":\"<p>{\\\"section1\\\":{\\\"content\\\":\\\"&lt;p&gt;Returns the error code of the last PCRE regex execution&lt;\\\\\\/p&gt;\\\"},\\\"section2\\\":{\\\"title\\\":\\\"&lt;p&gt;Returns the error code of the last PCRE regex executionsaaaaaaaaaaaaaaa&lt;\\\\\\/p&gt;\\\",\\\"description\\\":\\\"&lt;p&gt;Returns the error code of the last PCRE regex execution&lt;\\\\\\/p&gt;\\\",\\\"num-1\\\":\\\"12\\\",\\\"num-2\\\":\\\"23\\\",\\\"num-3\\\":\\\"123\\\",\\\"num-4\\\":\\\"123\\\",\\\"num-5\\\":\\\"2123\\\",\\\"images\\\":[{\\\"url\\\":\\\"http:\\\\\\/\\\\\\/localhost:8000\\\\\\/laravel-filemanager\\\\\\/photos\\\\\\/folder\\\\\\/thumb-1920-798778.jpg\\\",\\\"main_url\\\":\\\"http:\\\\\\/\\\\\\/localhost:8000\\\\\\/sections\\\\\\/section2\\\\\\/image-0.PNG\\\"},{\\\"url\\\":\\\"http:\\\\\\/\\\\\\/localhost:8000\\\\\\/laravel-filemanager\\\\\\/photos\\\\\\/folder\\\\\\/images.jpg\\\",\\\"main_url\\\":\\\"http:\\\\\\/\\\\\\/localhost:8000\\\\\\/sections\\\\\\/section2\\\\\\/image-1.PNG\\\"}]}}<\\/p>\",\"type\":\"Slide ch\\u1eef\"}]}', 1),
(4, '2020-02-27 13:30:03', '2020-02-27 13:30:03', 'Slide 3', 'slide-3', 1, '2020-02-27 13:30:03', 'What is Laravel Meta Manager? Laravel Meta Manager is an SEO tool that is used to improve the SEO of a website or specific page by adding recommended meta tags to your application', '', '', '{\"slides\":[{\"text\":\"<p>What is&nbsp;<strong>Laravel Meta<\\/strong>&nbsp;Manager?&nbsp;<strong>Laravel Meta<\\/strong>&nbsp;Manager is an SEO tool that is used to improve the SEO of a website or specific page by adding recommended&nbsp;<strong>meta tags<\\/strong>&nbsp;to your application<\\/p>\",\"type\":\"Slide ch\\u1eef\"},{\"originUrl\":\"http:\\/\\/127.0.0.1:8000\\/laravel-filemanager\\/photos\\/folder\\/images.jpg\",\"type\":\"Slide \\u1ea3nh\",\"imageUrl\":\"http:\\/\\/127.0.0.1:8000\\/slides\\/slide-4\\/slide-1.PNG\"},{\"text\":\"<p>What is&nbsp;<strong>Laravel Meta<\\/strong>&nbsp;Manager?&nbsp;<strong>Laravel Meta<\\/strong>&nbsp;Manager is an SEO tool that is used to improve the SEO of a website or specific page by adding recommended&nbsp;<strong>meta tags<\\/strong>&nbsp;to your application<\\/p>\",\"type\":\"Slide ch\\u1eef\"},{\"originUrl\":\"http:\\/\\/127.0.0.1:8000\\/laravel-filemanager\\/photos\\/folder\\/images (2).jpg\",\"type\":\"Slide \\u1ea3nh\",\"imageUrl\":\"http:\\/\\/127.0.0.1:8000\\/slides\\/slide-4\\/slide-3.PNG\"}]}', 1);

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
(1, 'Admin', 'admin@abc.com', '$2y$10$EUH52iZWbeIaWM81tZbJ9e.OYMxc5F//a2TBKwAN4XuZSTSHXUF0G', 1, NULL, 3, NULL, '2020-02-26 09:42:56', '2020-02-26 09:42:56');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
