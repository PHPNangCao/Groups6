-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 27, 2020 lúc 10:12 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_shop1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `url`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cá', 'ca', '<p>Bơi lặn</p>', 'pexels-eberhard-grossgasteiger-1624496.jpg', 1, '2020-08-25 09:14:02', '2020-08-26 23:19:25'),
(2, 'Thịt', 'thit', '<p>tươi sống nhăn răng</p>', 'pexels-artem-beliaikin-853199.jpg', 1, '2020-08-26 23:19:46', '2020-08-26 23:19:46'),
(3, 'Rau', 'rau', '<p>tươi, sạch</p>', '20190425_063710_470758_rau_xanh.max-800x800.jpg', 1, '2020-08-27 00:18:37', '2020-08-27 00:56:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gso_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`id`, `title`, `note`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dsfsdf', 'dsfsdf', '<p>dsfsdfsd</p>', 'pexels-eberhard-grossgasteiger-1624496.jpg', 0, '2020-08-25 08:38:41', '2020-08-27 00:14:35'),
(4, 'Canh cà chua trứng thì ai cũng biết nhưng cho thêm nguyên liệu này thì độ ngon tăng lên gấp bội', 'sađâsd', '<p>sdfsdfdsfsgdgdfgdfgdqwrưẻte</p>', 'canh-ca-chua-trung-thi-ai-cung-biet-nhung-cho-them-nguyen-lieu-nay-thi-do-ngon-tang-len-gap-boi-202008271021295151.jpg', 1, '2020-08-27 00:00:04', '2020-08-27 00:00:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(142, '2020_08_25_132537_add_images_to_movie_table', 1),
(203, '2014_10_12_000000_create_users_table', 2),
(204, '2014_10_12_100000_create_password_resets_table', 2),
(205, '2019_08_19_000000_create_failed_jobs_table', 2),
(206, '2020_08_21_115126_create_type_user_table', 2),
(207, '2020_08_21_115715_create_category_table', 2),
(208, '2020_08_21_120027_create_product_table', 2),
(209, '2020_08_21_120814_create_supplier_table', 2),
(210, '2020_08_21_121144_create_shipment_table', 2),
(211, '2020_08_21_121755_create_shipment_detail_table', 2),
(212, '2020_08_21_122052_create_news_table', 2),
(213, '2020_08_21_122233_create__slide_table', 2),
(214, '2020_08_21_122336_create_comment_table', 2),
(215, '2020_08_21_122601_create_recruitment_table', 2),
(216, '2020_08_21_122748_create_customer_table', 2),
(217, '2020_08_21_123116_create_bills_table', 2),
(218, '2020_08_21_123720_create_bill_detail_table', 2),
(219, '2020_08_22_000001_create_provinces_table', 2),
(220, '2020_08_22_000002_create_districts_table', 2),
(221, '2020_08_22_000003_create_wards_table', 2),
(222, '2020_08_25_123820_create_food_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `url`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `status`, `hot`, `created_at`, `updated_at`) VALUES
(3, 'Cải Thìa 4KFarm túi 400-500g', 3, 'cai-thia-4kfarm-tui-400-500g', '<h2><strong>Quy tr&igrave;nh canh t&aacute;c</strong></h2>\r\n\r\n<p><img alt=\"\" data-index=\"0\" data-type=\"2\" height=\"304\" src=\"https://i.ytimg.com/vi/yrfVw77oBvo/sddefault.jpg\" width=\"540\" /></p>\r\n\r\n<h2><strong>Điểm kh&aacute;c biệt rau 4KFarm</strong></h2>\r\n\r\n<p><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/226023/bhx/files/khacbiet4kfarm1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/226023/bhx/files/khacbiet4kfarm1.jpg\" /></p>\r\n\r\n<h2><strong>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</strong></h2>\r\n\r\n<p><strong><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/1.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/2.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/2.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/3.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/3.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/4.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/4.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/5.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223839/bhx/files/5.jpg\" /></strong></p>\r\n\r\n<h2><strong>4KFarm l&agrave;&nbsp;ai?</strong></h2>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/rau\">4KFarm</a>&nbsp;l&agrave; TH&Agrave;NH VI&Ecirc;N MỚI của tập đo&agrave;n Thế Giới Di Động, tiền th&acirc;n l&agrave; Vifarm.<br />\r\nĐội ngũ chuy&ecirc;n gia về n&ocirc;ng nghiệp của 4KFarm chuyển giao c&ocirc;ng nghệ v&agrave; hỗ trợ n&ocirc;ng d&acirc;n trồng rau an to&agrave;n 4 KH&Ocirc;NG v&agrave; thu mua 100% sản lượng rau an to&agrave;n n&agrave;y cung cấp độc quyền cho chuỗi B&aacute;ch H&oacute;a Xanh.<br />\r\nXem th&ecirc;m th&ocirc;ng tin<a href=\"https://4kfarm.com/\">&nbsp;tại đ&acirc;y</a></p>', '15000', '13000', 'cai-thia-4kfarm-tui-400-500g-202006231312023713.jpg', 'g', 1, 1, 0, '2020-08-27 00:38:39', '2020-08-27 01:01:21'),
(4, 'Rau Dền 4KFarm túi 400-500g', 3, 'rau-den-4kfarm-tui-400-500g', '<h2><strong>Quy tr&igrave;nh canh t&aacute;c</strong></h2>\r\n\r\n<p><img alt=\"\" data-index=\"0\" data-type=\"2\" height=\"304\" src=\"https://i.ytimg.com/vi/yrfVw77oBvo/sddefault.jpg\" width=\"540\" /></p>\r\n\r\n<h2><strong>Điểm kh&aacute;c biệt rau 4KFarm</strong></h2>\r\n\r\n<p><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/226208/bhx/files/khacbiet4kfarm1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/226208/bhx/files/khacbiet4kfarm1.jpg\" /></p>\r\n\r\n<h2><strong>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</strong></h2>\r\n\r\n<p><strong><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/1.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/11.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/11.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/3.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/3.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/02.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/02.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/4.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/4.jpg\" /></strong></p>\r\n\r\n<h2><strong>4KFarm l&agrave;&nbsp;ai?</strong></h2>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/rau\">4KFarm</a>&nbsp;l&agrave; TH&Agrave;NH VI&Ecirc;N MỚI của tập đo&agrave;n Thế Giới Di Động, tiền th&acirc;n l&agrave; Vifarm.<br />\r\nĐội ngũ chuy&ecirc;n gia về n&ocirc;ng nghiệp của 4KFarm chuyển giao c&ocirc;ng nghệ v&agrave; hỗ trợ n&ocirc;ng d&acirc;n trồng rau an to&agrave;n 4 KH&Ocirc;NG v&agrave; thu mua 100% sản lượng rau an to&agrave;n n&agrave;y cung cấp độc quyền cho chuỗi B&aacute;ch H&oacute;a Xanh.<br />\r\nXem th&ecirc;m th&ocirc;ng tin<a href=\"https://4kfarm.com/\">&nbsp;tại đ&acirc;y</a></p>', '15000', '13500', 'rau-den-4kfarm-tui-400-500g-202008141325517671.jpg', 'g', 1, 1, 0, '2020-08-27 01:00:56', '2020-08-27 01:06:16'),
(5, 'Cải Ngọt 4KFarm túi 400-500g', 3, 'cai-ngot-4kfarm-tui-400-500g', '<h2><strong>Quy tr&igrave;nh canh t&aacute;c</strong></h2>\r\n\r\n<p><img alt=\"\" data-index=\"0\" data-type=\"2\" height=\"304\" src=\"https://i.ytimg.com/vi/yrfVw77oBvo/sddefault.jpg\" width=\"540\" /></p>\r\n\r\n<h2><strong>Điểm kh&aacute;c biệt rau 4KFarm</strong></h2>\r\n\r\n<p><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/226208/bhx/files/khacbiet4kfarm1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/226208/bhx/files/khacbiet4kfarm1.jpg\" /></p>\r\n\r\n<h2><strong>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</strong></h2>\r\n\r\n<p><strong><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/1.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/11.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/11.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/3.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/3.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/02.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/02.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/4.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/4.jpg\" /></strong></p>\r\n\r\n<h2><strong>4KFarm l&agrave;&nbsp;ai?</strong></h2>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/rau\">4KFarm</a>&nbsp;l&agrave; TH&Agrave;NH VI&Ecirc;N MỚI của tập đo&agrave;n Thế Giới Di Động, tiền th&acirc;n l&agrave; Vifarm.<br />\r\nĐội ngũ chuy&ecirc;n gia về n&ocirc;ng nghiệp của 4KFarm chuyển giao c&ocirc;ng nghệ v&agrave; hỗ trợ n&ocirc;ng d&acirc;n trồng rau an to&agrave;n 4 KH&Ocirc;NG v&agrave; thu mua 100% sản lượng rau an to&agrave;n n&agrave;y cung cấp độc quyền cho chuỗi B&aacute;ch H&oacute;a Xanh.<br />\r\nXem th&ecirc;m th&ocirc;ng tin<a href=\"https://4kfarm.com/\">&nbsp;tại đ&acirc;y</a></p>', '15000', '14500', 'cai-ngot-4kfarm-tui-400-500g-202006101306035447.jpg', 'g', 1, 1, 0, '2020-08-27 01:06:01', '2020-08-27 01:06:27'),
(6, 'Cải Bẹ Xanh 4KFarm túi 400-500g', 3, 'cai-be-xanh-4kfarm-tui-400-500g', '<h2><strong>Quy tr&igrave;nh canh t&aacute;c</strong></h2>\r\n\r\n<p><img alt=\"\" data-index=\"0\" data-type=\"2\" height=\"304\" src=\"https://i.ytimg.com/vi/yrfVw77oBvo/sddefault.jpg\" width=\"540\" /></p>\r\n\r\n<h2><strong>Điểm kh&aacute;c biệt rau 4KFarm</strong></h2>\r\n\r\n<p><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/226208/bhx/files/khacbiet4kfarm1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/226208/bhx/files/khacbiet4kfarm1.jpg\" /></p>\r\n\r\n<h2><strong>H&igrave;nh ảnh canh t&aacute;c tại nh&agrave; m&agrave;ng</strong></h2>\r\n\r\n<p><strong><img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/1.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/1.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/11.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/11.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/3.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/3.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/02.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/02.jpg\" /><br />\r\n<img alt=\"\" data-src=\"//cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/4.jpg\" data-was-processed=\"true\" src=\"https://cdn.tgdd.vn/Products/Images//8784/223837/bhx/files/4.jpg\" /></strong></p>\r\n\r\n<h2><strong>4KFarm l&agrave;&nbsp;ai?</strong></h2>\r\n\r\n<p><a href=\"https://www.bachhoaxanh.com/rau\">4KFarm</a>&nbsp;l&agrave; TH&Agrave;NH VI&Ecirc;N MỚI của tập đo&agrave;n Thế Giới Di Động, tiền th&acirc;n l&agrave; Vifarm.<br />\r\nĐội ngũ chuy&ecirc;n gia về n&ocirc;ng nghiệp của 4KFarm chuyển giao c&ocirc;ng nghệ v&agrave; hỗ trợ n&ocirc;ng d&acirc;n trồng rau an to&agrave;n 4 KH&Ocirc;NG v&agrave; thu mua 100% sản lượng rau an to&agrave;n n&agrave;y cung cấp độc quyền cho chuỗi B&aacute;ch H&oacute;a Xanh.<br />\r\nXem th&ecirc;m th&ocirc;ng tin<a href=\"https://4kfarm.com/\">&nbsp;tại đ&acirc;y</a></p>', '15000', '14500', 'cai-be-xanh-4kfarm-tui-400-500g-202006161052000671.jpg', 'g', 1, 1, 0, '2020-08-27 01:07:16', '2020-08-27 01:07:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gso_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipment`
--

CREATE TABLE `shipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipment_detail`
--

CREATE TABLE `shipment_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipment_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `url`, `image`, `created_at`, `updated_at`) VALUES
(2, '', 'ios-11-earth-night-4k-pe-3840x2160.jpg', NULL, NULL),
(3, '', 'pexels-artem-beliaikin-853199.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_user`
--

CREATE TABLE `type_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_user`
--

INSERT INTO `type_user` (`id`, `user_id`, `type_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', '2020-08-26 23:22:03', '2020-08-26 23:22:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Tấn Phong', 'phongdream182000@gmail.com', NULL, '$2y$10$qZOaDYcGxOT3vMJvvpam/OOQtaKoswUBoR8uuWSSdyowcE8BJdw/.', '0909237473', 'xã Xuân Thới Sơn', 0, 'aQcfcR5E2F5PVQxwa1VvPl7H8AIknnfPX4tcx6mJ2AN2UVKvmNQI2fMt9S40', '2020-08-26 23:16:11', '2020-08-26 23:20:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gso_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_detail_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_province_id_foreign` (`province_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipment_supplier_id_foreign` (`supplier_id`);

--
-- Chỉ mục cho bảng `shipment_detail`
--
ALTER TABLE `shipment_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipment_detail_shipment_id_foreign` (`shipment_id`),
  ADD KEY `shipment_detail_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_user_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wards_district_id_foreign` (`district_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `shipment_detail`
--
ALTER TABLE `shipment_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`);

--
-- Các ràng buộc cho bảng `shipment_detail`
--
ALTER TABLE `shipment_detail`
  ADD CONSTRAINT `shipment_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `shipment_detail_shipment_id_foreign` FOREIGN KEY (`shipment_id`) REFERENCES `shipment` (`id`);

--
-- Các ràng buộc cho bảng `type_user`
--
ALTER TABLE `type_user`
  ADD CONSTRAINT `type_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `wards`
--
ALTER TABLE `wards`
  ADD CONSTRAINT `wards_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
