-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 28, 2020 lúc 10:47 AM
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
(4, 'Nộm bắp cải bò khô', '<h2><span style=\"font-family:Arial,Helvetica,sans-serif;\">Nộm bắp cải gi&ograve;n ngon thấm vị chua ngọt đậm đ&agrave; k&egrave;m với những sợi b&ograve; kh&ocirc; cay cay dai dai, ăn m&atilde;i m&agrave; kh&ocirc;ng ch&aacute;n.</span></h2>', '<p><span style=\"font-size:14px;\"><strong>Nguy&ecirc;n liệu:</strong></span></p>\r\n\r\n<center>\r\n<table border=\"0\" cellpadding=\"3\" cellspacing=\"2\" width=\"90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150308_ANKT_NomBapCai%20(2)-3540e/nom-bap-cai-bo-kho-chua-gion-quyen-ru.jpg\" /><br />\r\n			1 bắp cải<br />\r\n			100g b&ograve; kh&ocirc;<br />\r\n			Nước mắm, muối, rau thơm, h&agrave;nh, tỏi, ớt, chanh.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</center>\r\n\r\n<p><span style=\"font-size:14px;\"><strong>Thực hiện:</strong></span></p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">1</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150308_ANKT_NomBapCai%20(3)-3540e/nom-bap-cai-bo-kho-chua-gion-quyen-ru.jpg\" /><br />\r\n			Bắp cải chọn b&oacute;c l&aacute; non, th&aacute;i sợi mỏng 5mm.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">2</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150308_ANKT_NomBapCai%20(4)-3540e/nom-bap-cai-bo-kho-chua-gion-quyen-ru.jpg\" /><br />\r\n			Th&aacute;i nhuyễn h&agrave;nh t&iacute;m, tỏi, ớt, rau thơm.<br />\r\n			Pha nước mắm tỏi, ớt, chanh.<br />\r\n			Trong khi đ&oacute; cho bắp cải ng&acirc;m qua nước muối lo&atilde;ng.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">3</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150308_ANKT_NomBapCai%20(6)-3540e/nom-bap-cai-bo-kho-chua-gion-quyen-ru.jpg\" /><br />\r\n			Cho h&agrave;nh v&agrave;o chảo dầu n&oacute;ng phi thơm.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">4</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150308_ANKT_NomBapCai%20(7)-3540e/nom-bap-cai-bo-kho-chua-gion-quyen-ru.jpg\" /><br />\r\n			Trong l&uacute;c chờ dầu nguội th&igrave; vớt bắp cải ra để r&aacute;o nước rồi trộn với hỗn hợp nước mắm.<br />\r\n			<br />\r\n			<img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150308_ANKT_NomBapCai%20(8)-3540e/nom-bap-cai-bo-kho-chua-gion-quyen-ru.jpg\" /><br />\r\n			Cho h&agrave;nh phi v&agrave; lượng dầu vừa phải v&agrave;o &acirc;u trộn đều. Khi c&aacute;c gia vị đ&atilde; quyện đều với bắp cải th&igrave; rắc b&ograve; kh&ocirc; v&agrave; rau thơm đ&atilde; th&aacute;i nhỏ v&agrave;o, trộn đều lần nữa m&oacute;n nộm bắp cải đ&atilde; ho&agrave;n th&agrave;nh!</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:14px;\">Kh&ocirc;ng chỉ l&agrave; m&oacute;n ăn k&egrave;m ngon cơm, nộm bắp cải b&ograve; kh&ocirc; c&ograve;n c&oacute; thể l&agrave; m&oacute;n ăn tuyệt vời cho c&aacute;c anh x&atilde; nh&acirc;m nhi l&agrave;m m&oacute;n nhắm trong những dịp tụ tập bạn b&egrave;. Bắp cải gi&ograve;n ngon thấm vị chua ngọt đậm đ&agrave; k&egrave;m với những sợi b&ograve; kh&ocirc; cay cay dai dai, ăn m&atilde;i m&agrave; kh&ocirc;ng ch&aacute;n đ&acirc;u nh&eacute;!</span></p>', 'COOPImage.jpg', 1, '2020-08-27 00:00:04', '2020-08-28 01:46:04'),
(5, 'Tôm rang hành cho bữa tối ngon cơm', '<p><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:16px;\">T&ocirc;m rang h&agrave;nh thơm phức với lớp vỏ ngo&agrave;i được giữ nguy&ecirc;n tăng cường bổ sung canxi v&agrave; khiến m&oacute;n t&ocirc;m trở n&ecirc;n gi&ograve;n ngon hơn bao giờ hết!</span></span></p>', '<p><span style=\"font-size:14px;\"><strong>Nguy&ecirc;n liệu:</strong></span></p>\r\n\r\n<center>\r\n<table border=\"0\" cellpadding=\"3\" cellspacing=\"2\" width=\"90%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:14px;\">400g t&ocirc;m s&ocirc;ng<br />\r\n			H&agrave;nh, gừng, tỏi<br />\r\n			Gia vị: 5ml nước tương, 15ml rượu, một &iacute;t đường, muối</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</center>\r\n\r\n<p><span style=\"font-size:14px;\"><strong>Thực hiện:</strong></span></p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">1</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(1)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			Rửa sạch t&ocirc;m, bỏ phần đu&ocirc;i v&agrave; ch&acirc;n t&ocirc;m, sau đ&oacute; cho v&agrave;o đĩa lớn, th&ecirc;m rượu v&agrave;o, đảo đều rồi để ướp khoảng 30 ph&uacute;t.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">2</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(2)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			Chuẩn bị chảo n&oacute;ng với &iacute;t dầu, cho t&ocirc;m v&agrave;o chi&ecirc;n.<br />\r\n			<br />\r\n			<img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(3)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			Khi t&ocirc;m chuyển m&agrave;u đỏ hồng v&agrave; ch&iacute;n th&igrave; bạn vớt ra, để r&aacute;o dầu.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">3</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(4)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			Chừa lại một &iacute;t dầu trong chảo, cho h&agrave;nh gừng tỏi băm nhỏ v&agrave;o phi thơm.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<thead>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">4</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(5)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			Kế đến, bạn cho t&ocirc;m ngược trở lại v&agrave;o chảo.<br />\r\n			<br />\r\n			<img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(6)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			Th&ecirc;m &iacute;t nước tương, đường.<br />\r\n			<br />\r\n			<img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(7)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			T&ugrave;y theo khẩu vị của bản th&acirc;n m&agrave; n&ecirc;m nếm th&ecirc;m ch&uacute;t muối cho vừa ăn.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"5\" cellspacing=\"5\" width=\"98%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" valign=\"top\"><span style=\"font-size:14px;\">5</span></td>\r\n			<td><span style=\"font-size:14px;\"><img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(8)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			X&agrave;o đều tay v&agrave;i lượt rồi tắt bếp.<br />\r\n			<br />\r\n			<img alt=\"\" src=\"http://afamily1.vcmedia.vn/k:thumb_w/400/Wu7WDLWoryYaHiuIgQpJe1qNJ4ax/Image/2015/03/20150305_ANKT_TomRangHanh%20(9)-96aad/lam-nhanh-tom-rang-hanh-cho-bua-toi-ngon-com.jpg\" /><br />\r\n			Lấy t&ocirc;m rang h&agrave;nh ra đĩa, d&ugrave;ng với cơm trắng.</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:14px;\">T&ocirc;m rang h&agrave;nh thơm phức với lớp vỏ ngo&agrave;i được giữ nguy&ecirc;n tăng cường bổ sung canxi v&agrave; khiến m&oacute;n t&ocirc;m trở n&ecirc;n gi&ograve;n ngon hơn bao giờ hết. V&igrave; t&ocirc;m đ&atilde; được chi&ecirc;n qua n&ecirc;n khi chi&ecirc;n lần hai bạn kh&ocirc;ng cần chừa lại qu&aacute; nhiều dầu. Khi thấy phần vỏ hơi bắt đầu t&aacute;ch rời với phần thịt t&ocirc;m th&igrave; bạn c&oacute; thể vớt t&ocirc;m ra được rồi, để giữ độ gi&ograve;n tươi của t&ocirc;m.</span></p>', 'COOPImage (1).jpg', 1, '2020-08-28 01:31:31', '2020-08-28 01:44:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_permission`
--

CREATE TABLE `group_permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `group_permission`
--

INSERT INTO `group_permission` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', '2020-08-27 04:48:54', '2020-08-27 04:48:54');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_08_21_115715_create_category_table', 1),
(4, '2020_08_21_120027_create_product_table', 1),
(5, '2020_08_21_120814_create_supplier_table', 1),
(6, '2020_08_21_121144_create_shipment_table', 1),
(7, '2020_08_21_121755_create_shipment_detail_table', 1),
(8, '2020_08_21_122052_create_news_table', 1),
(9, '2020_08_21_122233_create__slide_table', 1),
(10, '2020_08_21_122336_create_comment_table', 1),
(11, '2020_08_21_122601_create_recruitment_table', 1),
(12, '2020_08_21_122748_create_customer_table', 1),
(13, '2020_08_21_123116_create_bills_table', 1),
(14, '2020_08_21_123720_create_bill_detail_table', 1),
(15, '2020_08_22_000001_create_provinces_table', 1),
(16, '2020_08_22_000002_create_districts_table', 1),
(17, '2020_08_22_000003_create_wards_table', 1),
(18, '2020_08_25_123820_create_food_table', 1),
(19, '2020_08_26_164138_create_role_table', 1),
(20, '2020_08_26_164233_create_permission_table', 1),
(21, '2020_08_26_164302_create_permission_role_table', 1),
(22, '2020_08_26_164303_create_users_table', 1),
(23, '2020_08_27_115126_create_type_user_table', 1),
(24, '2020_08_28_033058_create_role_user_table', 1);

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
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
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
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
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
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `status`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Tấn Phong', 'phongdream182000@gmail.com', NULL, '$2y$10$qZOaDYcGxOT3vMJvvpam/OOQtaKoswUBoR8uuWSSdyowcE8BJdw/.', '0909237473', 'xã Xuân Thới Sơn', 0, NULL, 'aQcfcR5E2F5PVQxwa1VvPl7H8AIknnfPX4tcx6mJ2AN2UVKvmNQI2fMt9S40', '2020-08-26 23:16:11', '2020-08-26 23:20:36');

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
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_name_unique` (`name`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

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
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permission`
--
ALTER TABLE `permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
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
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `wards`
--
ALTER TABLE `wards`
  ADD CONSTRAINT `wards_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
