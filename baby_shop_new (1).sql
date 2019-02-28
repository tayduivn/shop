-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 28, 2019 lúc 03:55 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baby_shop_new`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Màu trắng', 'Màu trắng', 'color', '2018-12-11 09:22:48', '2018-12-11 09:22:48'),
(2, 'Màu đỏ', 'Màu đỏ', 'color', '2018-12-11 09:25:17', '2018-12-11 09:25:17'),
(3, 'Màu xanh lam', 'Màu xanh lam', 'color', '2018-12-11 10:10:41', '2018-12-25 14:06:27'),
(4, 'Màu vàng', 'Màu vàng', 'color', '2018-12-11 10:11:38', '2018-12-11 10:11:38'),
(5, 'Màu hồng', 'Màu hồng', 'color', '2018-12-11 10:12:07', '2018-12-11 10:12:07'),
(6, 'XS', 'XS', 'size', '2018-12-11 10:12:41', '2018-12-11 10:12:41'),
(7, 'S', 'S', 'size', '2018-12-11 10:13:00', '2018-12-11 10:13:00'),
(8, 'M', 'M', 'size', '2018-12-11 10:13:25', '2018-12-11 10:13:25'),
(9, 'L', 'L', 'size', '2018-12-11 10:13:42', '2018-12-11 10:13:42'),
(10, 'XL', 'XL', 'size', '2018-12-11 10:13:54', '2018-12-11 10:13:54'),
(11, 'XXL', 'XXL', 'size', '2018-12-11 10:14:07', '2018-12-11 10:14:07'),
(12, 'Màu trắng xanh', 'Màu trắng xanh', 'color', '2018-12-11 20:12:18', '2018-12-11 20:38:40'),
(13, 'Màu xanh lá cây', 'Màu xanh lá cây', 'color', '2018-12-16 15:33:32', '2018-12-25 14:42:37'),
(14, 'Màu ghi', 'Màu ghi', 'color', '2018-12-16 20:49:30', '2018-12-16 20:49:30'),
(15, 'vải thường', 'vải thường', 'material', '2018-12-25 14:40:33', '2018-12-25 14:40:33'),
(16, 'vải thiên nhiên', 'vải thiên nhiên', 'material', '2018-12-25 14:44:11', '2018-12-25 14:44:11'),
(17, 'vải nhung', 'vải nhung', 'material', '2018-12-25 14:48:14', '2018-12-25 14:48:14'),
(18, 'vải cotton', 'vải cotton', 'material', '2018-12-25 14:49:02', '2018-12-25 14:49:02'),
(19, 'vải dạ', 'vải dạ', 'material', '2018-12-25 14:49:42', '2018-12-25 14:49:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(24, 'LULLABY BABY', 'lullaby-baby', 0, '2018-12-06 12:35:31', '2018-12-07 09:49:42'),
(27, 'UALA ROGO BABY', 'uala-rogo-baby', 0, '2018-12-06 16:09:39', '2018-12-07 09:50:12'),
(36, 'Lullaby quần áo sơ sinh - 4 tuổi', 'lullaby-quan-ao-so-sinh-4-tuoi', 24, '2018-12-06 23:48:07', '2018-12-07 09:51:59'),
(38, 'Uala Rogo Quần áo cho bé sơ sinh - 4 tuổi', 'uala-rogo-quan-ao-cho-be-so-sinh-4-tuoi', 27, '2018-12-07 08:06:49', '2018-12-07 09:53:49'),
(39, 'Uala Rogo Giầy cho bé', 'uala-rogo-giay-cho-be', 27, '2018-12-07 08:22:02', '2018-12-07 09:54:13'),
(40, 'Uala Rogo Chăn, gối, yếm, mũ, bao tay chân cho bé', 'uala-rogo-chan-goi-yem-mu-bao-tay-chan-cho-be', 27, '2018-12-07 08:44:38', '2018-12-07 09:54:40'),
(42, 'Lullaby Khăn ủ, bao tay chân, mũ cho bé', 'lullaby-khan-u-bao-tay-chan-mu-cho-be', 24, '2018-12-07 09:53:07', '2018-12-07 09:53:07'),
(44, 'CHAANG BABY', 'chaang-baby', 0, '2018-12-07 09:57:45', '2018-12-07 09:57:45'),
(45, 'Chaang Bộ đồ cho bé', 'chaang-bo-do-cho-be', 44, '2018-12-07 09:57:59', '2018-12-07 09:57:59'),
(46, 'Chaang khoác, len, gile cho bé', 'chaang-khoac-len-gile-cho-be', 44, '2018-12-07 09:58:14', '2018-12-07 09:58:14'),
(47, 'ĐỒ CHƠI TRẺ EM', 'do-choi-tre-em', 0, '2018-12-07 09:58:50', '2018-12-17 11:03:40'),
(48, 'SỮA TRẺ EM', 'sua-tre-em', 0, '2018-12-07 09:59:12', '2018-12-07 09:59:12'),
(49, 'Bình sữa CÔMOTOMO', 'binh-sua-comotomo', 48, '2018-12-07 09:59:55', '2018-12-07 10:00:23'),
(50, 'Sữa bột cho bé', 'sua-bot-cho-be', 48, '2018-12-19 18:33:09', '2018-12-19 18:33:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `product_id`, `content`, `created_at`, `updated_at`) VALUES
(9, 1, 28, 'Mua sl nhiều thì như thế nào ạ', '2018-12-10 14:50:07', '2018-12-10 14:50:07'),
(16, 11, 7, 'Phí ship 100 sp đi Thanh Hóa là bn vậy?', '2018-12-26 17:00:12', '2018-12-26 17:00:12'),
(17, 11, 7, 'Nếu mua 200sp thì chiết khấu ra sao?', '2018-12-26 17:01:45', '2018-12-26 17:01:45'),
(18, 1, 32, 'Ship đi Nam Định không bạn ơi?', '2019-01-26 01:44:12', '2019-01-26 01:44:12'),
(19, 1, 30, 'Tuyệt vời', '2019-01-26 09:11:46', '2019-01-26 09:11:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Bá Thanh', '0986.625.784', 'Xóm 10 Hồng Thuận Giao Thủy Nam Định', 1, '2018-12-26 12:37:42', '2018-12-26 12:37:42'),
(2, 'Nguyễn Bá Thanh', '0986.625.784', 'Xóm 10 Hồng Thuận Giao Thủy Nam Định', 1, '2018-12-26 12:38:43', '2018-12-26 12:38:43'),
(3, 'Phạm xuân Mạnh', '0868.422.436', 'E123 Khu tập thể Nghĩa Tân Cầu Giấy Hà Nội', 1, '2018-12-26 12:45:38', '2018-12-26 12:45:38'),
(4, 'Hoàng Xuân mạnh', '0984.123.456', 'E53 Khu tập thể Nghĩ tân Cầu Giấy Hà Nội', 1, '2018-12-26 12:47:39', '2018-12-26 12:47:39'),
(5, 'Hoàng Xuân mạnh', '0984.123.456', 'E53 Khu tập thể Nghĩ tân Cầu Giấy Hà Nội', 1, '2018-12-26 12:48:33', '2018-12-26 12:48:33'),
(6, 'Hoàng Thị Thu hạnh', '0366248471', 'T31 KDT Văn Khê Hà Đông hà Nội', 0, '2018-12-26 13:18:14', '2018-12-26 13:18:14'),
(7, 'Hoàng hải Nam', '0984.666.715', 'Châu Thành, Trà Vinh', 1, '2018-12-26 17:34:17', '2018-12-26 17:34:17'),
(8, 'Phạm Hoa', '033.457.8800', 'Giao Tiến, Giao Thủy, Nam Định', 0, '2018-12-26 17:54:32', '2018-12-26 17:54:32'),
(9, 'Cao Minh Công', '0386967163', 'Từ Sơn, Bắc Ninh', 1, '2019-01-26 01:33:07', '2019-01-26 01:33:07'),
(10, 'Dung Dương', '0123456789', 'Hoàng mai hà Nôi', 1, '2019-01-26 09:14:09', '2019-01-26 09:14:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_orders`
--

CREATE TABLE `customer_orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `note` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_orders`
--

INSERT INTO `customer_orders` (`id`, `customer_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 0, NULL, '2018-12-26 12:38:43', '2019-01-06 22:02:54'),
(2, 5, 1, 'Giao hàng ngay', '2018-12-26 12:48:33', '2019-01-06 22:01:56'),
(3, 6, 2, 'Giao hàng ngay nhé!', '2018-12-26 13:18:14', '2019-01-06 22:02:35'),
(4, 7, 3, 'Giao hàng trong 3 ngày nhé!', '2018-12-26 17:34:17', '2019-01-06 22:02:16'),
(5, 8, 2, 'Giao hàng sớm cho em', '2018-12-26 17:54:32', '2019-01-06 22:03:10'),
(6, 9, 0, 'Giao Hàng ngay', '2019-01-26 01:33:08', '2019-01-26 01:33:08'),
(7, 10, 1, 'Giao hàng ngay hôm nay', '2019-01-26 09:14:09', '2019-01-26 09:15:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_order_detail`
--

CREATE TABLE `customer_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_order_detail`
--

INSERT INTO `customer_order_detail` (`id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(1, 1, 9, 125000, 3),
(2, 1, 24, 45000, 2),
(3, 1, 25, 165000, 2),
(4, 2, 9, 125000, 3),
(5, 2, 7, 180000, 4),
(6, 3, 19, 399000, 2),
(7, 3, 38, 370000, 4),
(8, 3, 37, 279000, 7),
(9, 4, 7, 180000, 3),
(10, 4, 8, 180000, 2),
(11, 4, 27, 110000, 2),
(12, 5, 39, 199000, 4),
(13, 5, 22, 130000, 4),
(14, 5, 21, 130000, 3),
(15, 6, 37, 279000, 3),
(16, 6, 38, 370000, 5),
(17, 7, 7, 207000, 3),
(18, 7, 12, 207000, 2),
(19, 7, 20, 207000, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(16, 1, 2, NULL, '2018-12-14 00:01:25', '2019-01-07 13:57:44'),
(17, 1, 1, NULL, '2018-12-14 09:05:19', '2019-01-06 21:23:43'),
(18, 1, 1, NULL, '2018-12-14 13:59:34', '2019-01-06 21:50:33'),
(19, 1, 1, NULL, '2018-12-14 14:05:42', '2019-01-06 21:49:09'),
(20, 1, 3, NULL, '2018-12-14 15:56:51', '2019-01-26 09:04:40'),
(21, 1, 0, NULL, '2018-12-16 11:33:11', '2018-12-16 11:33:11'),
(22, 1, 0, NULL, '2018-12-16 11:37:53', '2018-12-16 11:37:53'),
(23, 1, 1, NULL, '2018-12-17 11:17:25', '2019-01-08 00:36:04'),
(24, 8, 2, NULL, '2018-12-18 00:30:35', '2019-01-06 21:36:57'),
(25, 8, 2, NULL, '2018-12-18 00:47:25', '2019-01-06 21:37:14'),
(26, 9, 2, NULL, '2018-12-24 12:45:18', '2019-01-07 02:08:32'),
(27, 9, 1, NULL, '2018-12-25 00:57:16', '2019-01-07 02:09:01'),
(28, 9, 0, NULL, '2018-12-25 16:11:17', '2018-12-25 16:11:17'),
(29, 9, 0, 'Giao hàng ngay', '2018-12-25 16:19:38', '2018-12-25 16:19:38'),
(30, 1, 1, 'Giao hàng trong vòng 3 ngày', '2018-12-25 16:26:18', '2019-01-07 02:14:35'),
(31, 1, 3, 'Giao hàng ngay nhé!', '2018-12-25 21:52:36', '2019-01-07 02:15:45'),
(32, 9, 0, 'Giao hàng ngay', '2018-12-25 21:54:36', '2018-12-25 21:54:36'),
(35, 1, 0, NULL, '2018-12-26 09:48:47', '2018-12-26 09:48:47'),
(39, 9, 2, 'Giao hàng sớm', '2018-12-26 10:16:05', '2019-01-07 02:09:21'),
(40, 11, 0, 'Giao hàng trước Tết dương lịch', '2018-12-26 11:15:15', '2018-12-26 11:15:15'),
(41, 11, 2, 'Giao hàng sớm nhé!', '2018-12-26 13:20:23', '2019-01-07 02:16:07'),
(42, 2, 0, 'Giao hàng ngay', '2019-01-07 15:21:27', '2019-01-07 15:21:27'),
(43, 2, 0, 'Giao hàng ngay', '2019-01-07 15:22:50', '2019-01-07 15:22:50'),
(44, 2, 0, NULL, '2019-01-07 15:32:42', '2019-01-07 15:32:42'),
(45, 2, 0, NULL, '2019-01-07 15:49:11', '2019-01-07 15:49:11'),
(46, 2, 0, NULL, '2019-01-07 15:50:23', '2019-01-07 15:50:23'),
(47, 2, 0, NULL, '2019-01-07 15:51:04', '2019-01-07 15:51:04'),
(48, 2, 0, 'Gia hàng ngay', '2019-01-07 16:02:00', '2019-01-07 16:02:00'),
(49, 2, 0, NULL, '2019-01-07 16:04:02', '2019-01-07 16:04:02'),
(50, 2, 0, NULL, '2019-01-07 16:04:06', '2019-01-07 16:04:06'),
(51, 2, 0, NULL, '2019-01-07 16:06:40', '2019-01-07 16:06:40'),
(52, 1, 0, NULL, '2019-01-07 23:43:13', '2019-01-07 23:43:13'),
(53, 1, 0, NULL, '2019-01-07 23:48:17', '2019-01-07 23:48:17'),
(54, 1, 0, NULL, '2019-01-07 23:50:13', '2019-01-07 23:50:13'),
(55, 1, 0, NULL, '2019-01-07 23:50:32', '2019-01-07 23:50:32'),
(56, 1, 0, NULL, '2019-01-07 23:51:44', '2019-01-07 23:51:44'),
(57, 1, 0, NULL, '2019-01-07 23:52:54', '2019-01-07 23:52:54'),
(58, 3, 2, 'Giao hàng ngay', '2019-01-08 00:10:08', '2019-01-08 00:32:16'),
(59, 3, 2, NULL, '2019-01-08 00:11:04', '2019-01-08 00:32:35'),
(60, 1, 0, NULL, '2019-01-11 21:40:24', '2019-01-11 21:40:24'),
(61, 1, 0, NULL, '2019-01-11 21:40:27', '2019-01-11 21:40:27'),
(62, 1, 0, NULL, '2019-01-11 21:42:55', '2019-01-11 21:42:55'),
(63, 1, 0, NULL, '2019-01-11 21:44:32', '2019-01-11 21:44:32'),
(64, 1, 0, NULL, '2019-01-11 22:45:31', '2019-01-11 22:45:31'),
(65, 3, 0, NULL, '2019-01-12 00:00:25', '2019-01-12 00:00:25'),
(66, 1, 2, 'Giao hàng ngay', '2019-01-26 09:16:29', '2019-01-26 09:22:38'),
(67, 1, 0, NULL, '2019-01-28 13:35:32', '2019-01-28 13:35:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 16, 8, 3, 180000),
(2, 16, 28, 1, 170000),
(3, 16, 7, 2, 180000),
(4, 16, 22, 6, 130000),
(5, 16, 21, 1, 130000),
(6, 17, 7, 2, 180000),
(7, 17, 28, 4, 170000),
(8, 17, 27, 2, 110000),
(9, 17, 8, 3, 180000),
(10, 18, 20, 4, 207000),
(11, 18, 9, 5, 125000),
(12, 19, 13, 2, 207000),
(13, 19, 12, 6, 207000),
(14, 19, 11, 2, 207000),
(15, 20, 7, 3, 180000),
(16, 20, 8, 4, 180000),
(17, 20, 28, 1, 170000),
(18, 21, 9, 2, 125000),
(19, 21, 20, 3, 207000),
(20, 21, 10, 4, 207000),
(21, 21, 11, 1, 207000),
(22, 21, 12, 1, 207000),
(23, 22, 28, 3, 170000),
(24, 23, 8, 4, 180000),
(25, 23, 27, 3, 110000),
(26, 23, 28, 2, 170000),
(27, 23, 29, 4, 204000),
(28, 24, 19, 2, 399000),
(29, 24, 10, 3, 207000),
(30, 24, 27, 4, 110000),
(31, 24, 13, 2, 207000),
(32, 25, 22, 2, 130000),
(33, 25, 21, 4, 130000),
(34, 25, 27, 5, 110000),
(35, 25, 28, 1, 170000),
(36, 26, 9, 1, 125000),
(37, 26, 27, 2, 110000),
(38, 26, 35, 7, 40000),
(39, 26, 12, 3, 207000),
(40, 26, 13, 1, 207000),
(41, 27, 9, 3, 125000),
(42, 27, 7, 5, 180000),
(43, 28, 7, 5, 180000),
(44, 28, 22, 3, 130000),
(45, 28, 9, 2, 125000),
(46, 28, 10, 4, 207000),
(47, 29, 35, 11, 40000),
(48, 29, 34, 2, 499000),
(49, 29, 33, 5, 50000),
(50, 30, 19, 3, 399000),
(51, 30, 20, 2, 207000),
(52, 30, 11, 5, 207000),
(53, 31, 19, 2, 399000),
(54, 31, 9, 5, 125000),
(55, 32, 20, 3, 207000),
(56, 32, 35, 4, 40000),
(57, 32, 7, 2, 180000),
(58, 32, 38, 7, 370000),
(59, 35, 7, 2, 180000),
(60, 35, 20, 3, 207000),
(61, 35, 13, 3, 207000),
(62, 35, 35, 50, 40000),
(63, 35, 36, 1, 700000),
(79, 39, 7, 6, 180000),
(80, 39, 13, 2, 207000),
(81, 39, 26, 2, 315000),
(82, 39, 23, 4, 45000),
(83, 39, 38, 2, 370000),
(84, 40, 20, 4, 207000),
(85, 40, 7, 9, 180000),
(86, 41, 21, 3, 130000),
(87, 41, 22, 3, 130000),
(88, 41, 39, 2, 199000),
(89, 42, 7, 3, 180000),
(90, 42, 21, 4, 130000),
(91, 43, 7, 3, 180000),
(92, 43, 21, 4, 130000),
(93, 44, 7, 3, 180000),
(94, 44, 21, 4, 130000),
(95, 45, 9, 4, 125000),
(96, 45, 35, 5, 40000),
(97, 45, 34, 1, 499000),
(98, 46, 9, 4, 125000),
(99, 46, 35, 5, 40000),
(100, 46, 34, 1, 499000),
(101, 47, 9, 4, 125000),
(102, 47, 35, 5, 40000),
(103, 47, 34, 1, 499000),
(104, 48, 22, 3, 130000),
(105, 48, 37, 4, 279000),
(106, 49, 22, 3, 130000),
(107, 49, 37, 4, 279000),
(108, 50, 22, 3, 130000),
(109, 50, 37, 4, 279000),
(110, 51, 7, 4, 180000),
(111, 51, 28, 3, 170000),
(112, 51, 8, 3, 180000),
(113, 52, 34, 2, 499000),
(114, 52, 35, 10, 40000),
(115, 52, 7, 4, 180000),
(116, 53, 34, 2, 499000),
(117, 53, 35, 10, 40000),
(118, 53, 7, 4, 180000),
(119, 54, 34, 2, 499000),
(120, 54, 35, 10, 40000),
(121, 54, 7, 4, 180000),
(122, 55, 34, 2, 499000),
(123, 55, 35, 10, 40000),
(124, 55, 7, 4, 180000),
(125, 56, 34, 2, 499000),
(126, 56, 35, 10, 40000),
(127, 56, 7, 4, 180000),
(128, 57, 34, 2, 499000),
(129, 57, 35, 10, 40000),
(130, 57, 7, 4, 180000),
(131, 58, 7, 4, 180000),
(132, 58, 36, 1, 700000),
(133, 58, 12, 2, 207000),
(134, 58, 39, 2, 199000),
(135, 58, 21, 2, 130000),
(136, 59, 7, 4, 180000),
(137, 59, 36, 1, 700000),
(138, 59, 12, 2, 207000),
(139, 59, 39, 2, 199000),
(140, 59, 21, 2, 130000),
(141, 60, 34, 5, 499000),
(142, 60, 33, 11, 50000),
(143, 61, 34, 5, 499000),
(144, 61, 33, 11, 50000),
(145, 62, 33, 5, 50000),
(146, 62, 34, 5, 499000),
(147, 63, 33, 3, 50000),
(148, 63, 34, 3, 499000),
(149, 64, 33, 2, 50000),
(150, 64, 34, 2, 499000),
(151, 65, 33, 3, 50000),
(152, 65, 34, 10, 499000),
(153, 66, 21, 5, 130000),
(154, 66, 22, 3, 130000),
(155, 66, 39, 2, 199000),
(156, 67, 10, 3, 207000),
(157, 67, 12, 2, 207000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(200) COLLATE utf8_unicode_ci DEFAULT '#',
  `content` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `slug`, `images`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Trung Quốc đưa ra cam kết 1.200 tỷ USD để \"đình chiến\" thương mại với Mỹ', 'trung-quoc-dua-ra-cam-ket-1-200-ty-usd-de-dinh-chien-thuong-mai-voi-my', 'pM1eh_trung-quoc-my-15438815835551663098864.jpg', '<h2><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Trung Quốc đã đưa ra cam kết thương mại hơn 1,2 nghìn tỷ USD theo một phần thảo thuận đạt được giữa Tổng thống Mỹ Donald Trump và Chủ tịch Trung Quốc Tập Cận Bình bên lề hội nghị thượng đỉnh G20 cuối tuần trước. Bắc Kinh tuyên bố sẽ có những bước đi ngay lập tức để thực hiện các cam kết này.</span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Theo Reuters, Bộ trưởng Tài chính Mỹ Steve Mnuchin ngày 3/12 cho biết, giới chức Trung Quốc đã thể hiện một sự thay đổi rõ rệt khi thảo luận với phái đoàn Mỹ bên lề hội nghị thượng đỉnh G20 ở Argentina. Cụ thể, Chủ tịch Trung Quốc Tập Cận Bình đã đưa ra cam kết rõ ràng về việc mở cửa thị trường Trung Quốc với các doanh nghiệp của Mỹ.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">\"Họ đã đưa lên bàn đàm phán một đề nghị về các cam kết bổ sung trị giá hơn 1,2 nghìn tỷ USD. Tuy nhiên, chi tiết cam kết đó vẫn cần đàm phán. Đây là lần đầu tiên chúng tôi có được cam kết như vậy từ họ và đây sẽ là một thỏa thuận thực sự\", Reuters dẫn lời Bộ trưởng Mnuchin.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Giám đốc Hội đồng kinh tế quốc gia Mỹ Larry Kudlow cho biết, Bộ trưởng Mnuchin và Đại diện thương mại Mỹ Robert Lighthizer đã ăn trưa cùng với Phó Thủ tướng Trung Quốc ở Argentina và quan chức Trung Quốc đã nói với họ rằng Bắc Kinh sẽ ngay lập tức thực hiện các cam kết mới.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">\"Họ không thể trì hoãn, quanh co. Tuyên bố của họ là: Ngay lập tức\", ông Kudlow nhấn mạnh.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Ông Kudlow cho biết với các phóng viên tại Nhà Trắng rằng, Washington muốn thấy kết quả nhanh chóng trong các vấn đề như vi phạm sở hữu trí tuệ, chuyển giao công nghệ. Các nhà đầu tư Mỹ sẽ lần đầu tiên có thể nắm cổ phần chi phối tại các doanh nghiệp Trung Quốc, ông Kudlow cho biết với CNBC.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Theo thỏa thuận đạt được với Chủ tịch Trung Quốc Tập Cận Bình, Tổng thống Trump đã nhất trí rằng từ ngày 1/1/2019, ông sẽ giữ mức thuế đối với 200 tỷ USD hàng hóa (của Trung Quốc) ở mức 10%, và sẽ không tăng lên 25% ở thời điểm này. Theo đó, Mỹ sẽ tạm hoãn tăng thuế với hàng hóa Trung Quốc trong vòng 90 ngày. Nếu sau thời gian này, hai bên vẫn không thể đạt được một thỏa thuận về thương mại, bao gồm các vấn đề về chuyển giao công nghệ, sở hữu trí tuệ, hàng rào phi thuế quan, nông nghiệp, mức thuế 10% sẽ tăng lên thành 25%.</span></span></p>', '2018-12-04 08:49:30', '2018-12-26 15:15:38'),
(2, 'HLV Park Hang Seo ca ngợi Anh Đức sau chiến thắng trước Philippines', 'hlv-park-hang-seo-ca-ngoi-anh-duc-sau-chien-thang-truoc-philippines', 'MYADD_parkhangseo-1543758782874537601526.jpg', '<h2><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Vượt qua nhiều sức ép, đội tuyển Việt Nam đã đánh bại Philippines 2-1 tại Panaad ở bán kết lượt đi AFF Cup 2018. Sau trận đấu, HLV Park Hang Seo đã dành lợi ngợi khen cho tiền vệ Phan Văn Đức.</span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Đội tuyển Việt Nam đã có chiến thắng quan trọng 2-1 trước Philippines ngay trên sân khách ở bán kết lượt đi AFF Cup 2018. Hai bàn thắng của Anh Đức và Văn Đức đã giúp đoàn quân HLV Park Hang Seo có lợi thế lớn, trước cuộc tái đấu ở Mỹ Đình ngày 6/12.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Phát biểu trong buổi họp báo sau trận, HLV Park Hang Seo lại tỏ ra bình thản: “Tôi đánh giá cao nỗ lực của các học trò, khi chúng ta đã có chiến thắng quan trọng trên sân khách. Tất cả các cầu thủ đã nỗ lực hết mình và chiến thắng là xứng đáng”.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Về việc đội tuyển Việt Nam lần đầu thủng lưới ở giải năm nay, thầy Park chia sẻ: “Không có đội bóng nào hoàn hảo và việc thủng lưới 1 lần ở giải đấu lớn là chuyện bình thường.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Quan trọng nhất là các học trò của tôi đã chơi đúng chiến thuật đề ra ban đầu. Đội tuyển còn rất nhiều vấn đề cần cải thiện ở các trận đấu tiếp theo”.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Dù đội tuyển Việt Nam giành chiến thắng, tuy nhiên HLV Park Hang Seo vẫn cảm thấy tiếc nuối: “Chúng tôi đã bỏ lỡ những cơ hội ngon ăn của Công Phượng hay Đức Chinh. Nhưng tôi đánh giá cao việc vẫn tạo ra cơ hội ghi bàn, dù toàn đội đã giảm nhịp độ trận đấu”.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Cuối cùng, thầy Park dành lời khen ngợi cho tiền vệ Phan Văn Đức: “Phan Văn Đức đã chơi một trận đấu tuyệt vời, không chỉ bởi bàn thắng cậu ấy ghi được. Văn Đức đã tuân thủ đúng chiến thuật và yêu cầu tôi đề ra trước trận đấu.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">23 cầu thủ của tôi, kể cả Văn Toàn chấn thương đều có thể tỏa sáng khi được tung vào sân. Tất cả các cầu thủ đều thể hiện tốt trong suốt giải đấu này và tôi liên tục làm việc, để Việt Nam có đội hình ưng ý nhất trong từng trận đấu”.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2018-12-04 09:01:02', '2018-12-26 15:16:24'),
(4, 'CEO Satya Nadella đã đưa Microsoft trở thành công ty giá trị nhất thế giới như thế nào?', 'ceo-satya-nadella-da-dua-microsoft-tro-thanh-cong-ty-gia-tri-nhat-the-gioi-nhu-the-nao-', 'ilKIm_11-1543800949642711788313.jpg', '<h2><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Người có biệt danh \"gã hói\" đã gắn kết những mảnh vỡ tại Microsoft trong giai đoạn khó khăn, giúp các nhân viên đoàn kết và đồng thuận. Thành quả ngọt ngào nhất mà CEO Satya Nadella đạt được là vào cuối tháng 11 vừa qua, Microsoft đã chính thức vượt Apple để trở thành công ty giá trị nhất thế giới.</span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Khi Satya Nadella lần đầu tiên nắm lấy cương vị Giám đốc điều hành của Microsoft vào tháng 2/2014, công ty đang trải qua một trong những giai đoạn \"hụt hơi\" và hoàn toàn kém nổi bật.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Microsoft Windows 8 được coi là một thảm họa. Nhân viên của Microsoft tại khắp nơi thì liên tục tranh cãi phía sau hậu trường về những dự án của công ty. Trong lúc đó, người tiêu dùng và các nhà phát triển cũng đã mất niềm tin vào Microsoft.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Tuy nhiên mọi thứ đã thay đổi.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Khi thị trường đóng cửa vào ngày cuối cùng của tháng 11, giá trị vốn hóa của Microsoft đã vượt qua Apple lần đầu tiên trong vòng 5 năm. Đây là một \"dấu chấm than\" về triều đại của Satya Nadella tại Microsoft, giúp công ty trở lại con đường đúng và được nâng lên một tầm cao mới.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(0, 0, 0)\">Quan trọng hơn hết, Nadella là người đã gắn kết những mảnh vỡ tại Microsoft trong giai đoạn khó khăn, giúp các nhân viên đoàn kết và đồng thuận. \"Những lời than phiền đã không còn\", CEO Nadella từng nói sau khi \"thu nạp\" tổng cộng 150 giám đốc dưới quyền tại Microsoft vào đầu năm 2018.</span></span></span></p>', '2018-12-04 09:01:24', '2018-12-26 15:16:57'),
(5, 'VinCity Ocean Park: Nhiều điểm mới trong giao thông kết nối đến dự án', 'vincity-ocean-park-nhieu-diem-moi-trong-giao-thong-ket-noi-den-du-an', 'dBjMcL_img20181226132726080-c0c38.jpg', '<h2><span style=\"font-family:times new roman,times,serif\">Là một trong những cái tên được nhắc đến nhiều nhất dịp cuối năm, VinCity Ocean Park không chỉ làm nóng thị trường bởi lượng giao dịch lớn mà còn bởi những thay đổi nhanh chóng về mặt hạ tầng giao thông quanh khu vực dự án.</span></h2>\r\n\r\n<div class=\"fon34 mt3 mr2 fon43 detail-content\" id=\"divNewsContent\" style=\"margin: 15px 10px 9.39063px 0px; padding: 0px; outline: none; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12pt; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">\r\n<p>&nbsp;<strong>Những đột phá đáng mong chờ</strong></p>\r\n\r\n<p style=\"text-align:justify\">Không chỉ mang thương hiệu nhà ở của Vingroup đến với nhiều khách hàng hơn, Chủ đầu tư Vinhomes còn chứng minh tầm nhìn khi triển khai nâng cấp, tu sửa các tuyến đường liên quan đến dự án VinCity Ocean Park.</p>\r\n\r\n<p style=\"text-align:justify\">Để tạo lối đi thông thoáng, thuận tiện của cư dân, chủ đầu tư đã sửa sang 2 tuyến đường dẫn vào dự án. Một là đoạn đường trên tuyến 179 ở địa phận khu vực làng nghề với chiều dài khoảng 600m. Đoạn đường thứ hai dài 1,2 km từ nút đường Đông Dư – Dương Xá tới cao tốc 5B Hà Nội – Hải Phòng.</p>\r\n\r\n<p style=\"text-align:justify\">Ở cả hai đoạn đường, chủ đầu tư đều đặt tiêu chuẩn cao về chất lượng thi công. Cả hai đoạn đường sau khi sửa sang đã được bù phụ các ổ voi, ổ gà, rải lớp base dày 15cm, đồng thời trải thảm lớp Asphalts nhựa chặt, thảm bê tông nhựa dày 6cm. Giờ đây, những khách hàng quan tâm Vincity Ocean Park đã có thêm những lối đi mới thông thoáng và thuận lợi hơn để tiếp cận dự án. Điều đó cũng chứng tỏ Vingroup vẫn tiếp tục đóng vai trò dẫn dắt và nhanh chóng mang đến bộ mặt mới về hạ tầng bên trong dự án cũng như khu vực xung quanh cho bất kỳ nơi nào mà tập đoàn này đầu tư.</p>\r\n\r\n<p style=\"text-align:justify\">Tọa lạc ở vị trí chiến lược cách cao tốc Hà Nội – Hải Phòng chỉ 100m, từ đại siêu thị Aeon Mall đến đại đô thị VinCity Ocean Park chỉ mất khoảng 7 phút di chuyển. Trong tương lai dự kiến giao thông quanh dự án sẽ còn thuận lợi hơn rất nhiều với những đột phá mới đáng mong chờ.</p>\r\n\r\n<p style=\"text-align:justify\">Theo quy hoạch, một vòng xuyến hiện đại sẽ được đầu tư xây dựng tại nút giao 3Km+720, nối thẳng từ đường cao tốc Hà Nội – Hải Phòng đến tuyến đường huyết mạch rộng tới 52m của dự án. Đây là tuyến đường xương sống trong bản đồ giao thông nội khu thông minh của VinCity Ocean Park, kết nối liền mạch tới 4 phân khu căn hộ hiện đại cùng các tiện ích trọng yếu như Trường đại học tiêu chuẩn Quốc tế VinUni, Bệnh viện đa khoa Vinmec, hồ lớn trung tâm 24,5ha,…</p>\r\n</div>', '2018-12-26 16:22:54', '2018-12-26 16:24:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `images` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `price` float(12,3) DEFAULT NULL,
  `sale_price` float(12,3) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `hot_sale` tinyint(4) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `stock` smallint(5) UNSIGNED NOT NULL,
  `list_attr_id` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `category_id`, `images`, `content`, `price`, `sale_price`, `status`, `hot_sale`, `view`, `stock`, `list_attr_id`, `created_at`, `updated_at`) VALUES
(7, 'Chaang cúc vai KẺ XANH BIỂN (vải dày)', 'chaang-cuc-vai-ke-xanh-bien-vai-day-', 45, 'zCEHW6_Bo-cuc-vai-xanh-da-troi1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 227700.000, 207000.000, 1, NULL, 0, 27, '|1||2||6||7||8||9||10||11||15||16||18|', '2018-12-07 13:59:58', '2019-01-26 09:10:54'),
(8, 'Lullaby bộ đồ 3 người bạn thỏ Hồng - cún Xanh - mèo Trắng_ băng lông', 'lullaby-bo-do-3-nguoi-ban-tho-hong-cun-xanh-meo-trang-bang-long', 36, 'Yk3Wbp_Bo-do-3-nguoi-ban(1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 198000.000, 180000.000, 1, NULL, 0, 60, NULL, '2018-12-07 15:14:48', '2019-01-26 09:10:54'),
(9, 'Uala Rogo Áo Gile Trần Bông Kẻ XANH-HỒNG-GHI, Trơn HỒNG- XANH', 'uala-rogo-ao-gile-tran-bong-ke-xanh-hong-ghi-tron-hong-xanh', 38, 'DcA0BS_1 (1)_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Là hiện thân tình yêu của những người làm cha mẹ dành cho bé: mềm mại, thân thương, ôm ấp và chở che, sản phẩm Uala &amp; Rogo ưu tiên sử dụng những chất liệu tự nhiên, thân thiện với môi trường, mềm dịu và an toàn trên da bé.</span></span></span></p>', 137500.000, 125000.000, 1, 1, 0, 38, NULL, '2018-12-07 15:18:14', '2019-01-26 09:10:54'),
(10, 'Chaang cúc vai KẺ XANH LÁ (vải dày)', 'chaang-cuc-vai-ke-xanh-la-vai-day-', 45, 'uzm4dy_Bo-cuc-vai-ke-xanh-la(1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 227700.000, 207000.000, 1, NULL, 0, 17, NULL, '2018-12-08 19:51:47', '2019-01-26 09:10:54'),
(11, 'Chaang cúc vai KẺ GHI (vải dày)', 'chaang-cuc-vai-ke-ghi-vai-day-', 45, '827IIp_Bo-cuc-vai-ke-ghi.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 227700.000, 207000.000, 1, NULL, 0, 15, NULL, '2018-12-08 19:53:08', '2019-01-26 09:10:54'),
(12, 'Chaang cúc vai KẺ XANH NHŨ TIM (2 lớp)', 'chaang-cuc-vai-ke-xanh-nhu-tim-2-lop-', 45, 'CNzofn_Bo-cuc-vai-tim-ke-xanh(2).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 227700.000, 207000.000, 1, NULL, 0, 11, '|4||12||6||7||8||9||10|', '2018-12-08 19:55:14', '2019-01-26 09:10:54'),
(13, 'Chaang Bộ đồ raglan - warm cotton BE (vải dày)', 'chaang-bo-do-raglan-warm-cotton-be-vai-day-', 45, 'YyhHUH_Bo-raglan-be.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 227700.000, 207000.000, 1, NULL, 0, 14, NULL, '2018-12-08 19:57:14', '2019-01-26 09:10:54'),
(14, 'Chaang Quần jogger - set 2 BÉ TRAI', 'chaang-quan-jogger-set-2-be-trai', 45, 'uO0otX_Jogger-be-trai.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 187000.000, 170000.000, 1, NULL, 0, 15, NULL, '2018-12-08 19:58:34', '2019-01-26 09:10:54'),
(15, 'Chaang body KẺ HỒNG NHŨ TIM (2 lớp)', 'chaang-body-ke-hong-nhu-tim-2-lop-', 45, 'hxCo24_Body-ke-tim-hong.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 227700.000, 207000.000, 1, 1, 0, 15, NULL, '2018-12-08 20:00:20', '2019-01-26 09:10:54'),
(16, 'Chaang Áo len CỔ TRÒN XANH', 'chaang-ao-len-co-tron-xanh', 46, 'M18FUF_Ao-len-cuc-giua-xanh(1).jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"font-size:14px\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 319000.000, 290000.000, 1, NULL, 0, 11, NULL, '2018-12-08 20:02:21', '2019-01-26 09:10:54'),
(17, 'Chaang Áo khoác có mũ CHẤM TRÒN HỒNG', 'chaang-ao-khoac-co-mu-cham-tron-hong', 46, 'NJaH2d_Ao-khoac-co-mu-tron-hong1).jpg', '<p><span style=\"font-size:14px\"><span style=\"color:rgb(12, 12, 12); font-family:arial,sans-serif\"><span style=\"font-family:times new roman,times,serif\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 198000.000, 180000.000, 1, 1, 0, 22, '|2||5||6||7||8||9||10|', '2018-12-08 20:04:36', '2019-01-26 09:10:54'),
(18, 'Chaang Áo len CỔ TRÒN HỒNG', 'chaang-ao-len-co-tron-hong', 46, 'GXvg4j_Ao-len-cuc-giua-hong(1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 319000.000, 290000.000, 1, 1, 0, 28, NULL, '2018-12-08 20:06:29', '2019-01-26 09:10:54'),
(19, '(CHÍNH HÃNG) Bình Sữa COMOTOMO Silicon 150ml, 250ml, Tem Nhập Khẩu ÁNH DƯƠNG', '-chinh-hang-binh-sua-comotomo-silicon-150ml-250ml-tem-nhap-khau-anh-duong', 49, 'UllswB_Binh-Como(4).jpg', '<p><span style=\"color:rgba(0, 0, 0, 0.8); font-family:helvetica neue,helvetica,arial,\\\\6587泉驛正黑,wenquanyi zen hei,hiragino sans gb,\\\\5137黑pro,lihei pro,heiti tc,\\\\5fae軟正黑體,microsoft jhenghei ui,microsoft jhenghei,sans-serif; font-size:14px\">(CHÍNH HÃNG) BÌNH SƯA COMOTOMO Silicon cho bé - Giải pháp tối ưu dành cho bé lười ty </span></p>', 438900.000, 399000.000, 1, NULL, 0, 15, NULL, '2018-12-08 20:08:30', '2019-01-26 09:10:54'),
(20, 'Uala Rogo Bộ QA Kẻ Caro Khuy Vai HỒNG- VÀNG-XANH', 'uala-rogo-bo-qa-ke-caro-khuy-vai-hong-vang-xanh', 38, 'XPuYxm_1(13).jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8)\">Là hiện thân tình yêu của những người làm cha mẹ dành cho bé: mềm mại, thân thương, ôm ấp và chở che, sản phẩm Uala &amp; Rogo ưu tiên sử dụng những chất liệu tự nhiên, thân thiện với môi trường, mềm dịu và an toàn trên da bé. </span></span></p>', 227700.000, 207000.000, 1, NULL, 0, 10, NULL, '2018-12-08 20:11:30', '2019-01-26 09:10:54'),
(21, 'Uala Rogo Giày tập đi cho bé UR 2026 HỒNG - XANH - VÀNG', 'uala-rogo-giay-tap-di-cho-be-ur-2026-hong-xanh-vang', 39, 'IPs0Ds_2026_result_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày tập đi cho bé được thiết kế cực dễ thương chắc chắn sẽ khiến bé yêu thích. </span></span></p>\n\n<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày được thiết kế đặc biệt êm ái và an toàn dành cho lứa tuổi tập đi, để bé có được những bước đi đầu đời thật vững chắc. Đây sẽ là món quà ý nghĩa dành tặng cho các bé yêu. </span></span></p>', 143000.000, 130000.000, 1, 1, 0, 15, '|3||5||14||6||7||8|', '2018-12-08 20:14:38', '2019-01-26 09:10:54'),
(22, 'Uala Rogo Giày Tập Đi Cho Bé UR 7005 HỒNG - XANH - ĐỎ', 'uala-rogo-giay-tap-di-cho-be-ur-7005-hong-xanh-do', 39, 'uqQXVN_7005_result_result_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày tập đi cho bé được thiết kế cực dễ thương chắc chắn sẽ khiến bé yêu thích. </span></span></p>\n\n<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày được thiết kế đặc biệt êm ái và an toàn dành cho lứa tuổi tập đi, để bé có được những bước đi đầu đời thật vững chắc. Đây sẽ là món quà ý nghĩa dành tặng cho các bé yêu. </span></span></p>', 143000.000, 130000.000, 1, 1, 0, 14, '|2||3||5||6||7||8|', '2018-12-08 20:16:36', '2019-01-26 09:10:54'),
(23, 'Uala Rogo Yếm Trơn Màu HỒNG - CAM - XANH', 'uala-rogo-yem-tron-mau-hong-cam-xanh', 40, 'kuUre2_yem2.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">Là hiện thân tình yêu của những người làm cha mẹ dành cho bé: mềm mại, thân thương, ôm ấp và chở che, sản phẩm Uala &amp; Rogo ưu tiên sử dụng những chất liệu tự nhiên, thân thiện với môi trường, mềm dịu và an toàn trên da bé. </span></span></p>', 49500.000, 45000.000, 1, NULL, 0, 22, NULL, '2018-12-08 20:17:40', '2019-01-26 09:10:54'),
(24, 'Uala Rogo Mũ tai gấu màu HỒNG', 'uala-rogo-mu-tai-gau-mau-hong', 40, 'dLJ8Eu_Mu_result.png', NULL, 49500.000, 45000.000, 1, NULL, 0, 4, NULL, '2018-12-08 20:18:48', '2019-01-26 09:10:54'),
(25, 'Uala Rogo gối bông màu XANH - HỒNG', 'uala-rogo-goi-bong-mau-xanh-hong', 40, 'fQGLMM_Goibong_2_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(146, 146, 146); font-size:14px\">Với vỏ gối được may bằng vải xô hai lớp 100% organic cotton mềm mại, với khả năng thấm hút tuyệt vời giúp cho bé luôn thoải mái khi ngủ.</span><br />\n<span style=\"color:rgb(146, 146, 146); font-size:14px\">Ruột gối Bông được sản xuất bằng công nghệ Nano kháng khuẩn tự nhiên, có khả năng chống ngạt cho bé khi ngủ.</span><br />\n<span style=\"color:rgb(146, 146, 146); font-size:14px\">Mặt khác gối Uala&amp;Rogo Bông thiết kế mỏng phù hợp với trẻ sơ sinh, bông được dàn đều, không vón cục: dễ lưu thông máu lên não khi ngủ, giúp bé phát triển trí não tốt hơn ngay từ trong giấc ngủ.</span></span></p>', 181500.000, 165000.000, 1, 1, 0, 8, NULL, '2018-12-08 20:20:32', '2019-01-26 09:10:55'),
(26, 'Uala Rogo Bộ gối chặn màu XANH - HỒNG', 'uala-rogo-bo-goi-chan-mau-xanh-hong', 40, 'jdE14U_Bogoichan_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Bộ gối bao gồm:<br />\nVỏ gối được làm từ 60% Bamboo – 40% Organic Cotton.<br />\nThấm hút mồ hôi tốt hơn 60% so với vải Cotton.<br />\nSiêu mềm mại.<br />\nBền màu bền vải.<br />\nKhông gây kích ứng da.<br />\nKháng khuẩn tự nhiên chống mùi mồ hôi, ẩm mốc.</span></span></p>\n\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Ruột gối và bộ chặn được làm từ:<br />\nBông Nano kháng khuẩn, không mùi.<br />\nKích thước quả chặn lớn, ôm vừa vặn vào cơ thể bé, định hình tư thế ngủ cho bé.<br />\nChống giật mình cho bé yêu cảm giác êm ái như đang nằm trong vòng tay của mẹ.<br />\nGối được thiết kế với độ dày vừa phải phù hợp với trẻ sơ sinh Việt Nam.</span></span></p>', 346500.000, 315000.000, 1, 1, 0, 14, NULL, '2018-12-08 20:23:00', '2019-01-26 09:10:55'),
(27, 'LULLABY bộ đồ khúc hát giao mùa màu HỒNG - VÀNG - XANH', 'lullaby-bo-do-khuc-hat-giao-mua-mau-hong-vang-xanh', 36, 'hVzWwz_Bo-do-cai-vai-2-lop (2)_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"font-size:14px\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 121000.000, 110000.000, 1, 1, 0, 6, NULL, '2018-12-09 16:12:06', '2019-01-26 09:10:55'),
(28, 'Lullaby Áo gile len cài vai màu HỒNG - VÀNG -XANH', 'lullaby-ao-gile-len-cai-vai-mau-hong-vang-xanh', 36, 'pfmw9I_gile-len-lullaby (4)_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 187000.000, 170000.000, 1, NULL, 0, 10, '|3||4||5||6||7||8||9||10|', '2018-12-09 16:14:28', '2019-01-26 09:10:55'),
(29, 'Lullaby Bộ lông liền quần tất màu VÀNG - HỒNG - XANH - GHI', 'lullaby-bo-long-lien-quan-tat-mau-vang-hong-xanh-ghi', 36, 'Jp1zNA_body-long-lullaby_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 224400.000, 204000.000, 1, NULL, 0, 30, NULL, '2018-12-09 16:17:27', '2019-01-26 09:10:55'),
(30, 'Lullaby Áo khoác lông có mũ màu HỒNG - VÀNG -XANH - GHI', 'lullaby-ao-khoac-long-co-mu-mau-hong-vang-xanh-ghi', 36, '7D3ZSo_khoac-long-lullaby_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 191400.000, 174000.000, 1, 1, 0, 25, '|3||4||5||14||6||7||8||9||10||11|', '2018-12-09 16:29:55', '2019-01-26 09:10:55'),
(31, 'Lullaby Bộ quần áo len cài vai màu HỒNG - VÀNG -XANH', 'lullaby-bo-quan-ao-len-cai-vai-mau-hong-vang-xanh', 36, 'mFJfXm_Bo-do-len-lullaby (3)_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 457600.000, 416000.000, 1, NULL, 0, 17, '|3||4||5||6||7||8||9||10||11|', '2018-12-09 16:33:05', '2019-01-26 09:10:55'),
(32, 'Lullaby Áo gile lông kéo khóa màu HỒNG - VÀNG - XANH - GHI', 'lullaby-ao-gile-long-keo-khoa-mau-hong-vang-xanh-ghi', 36, '8tTelr_gile-long-lullaby_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 135300.000, 123000.000, 1, NULL, 0, 29, '|2||3||4||5||14||6||7||8||9||10||11||15||16|', '2018-12-09 16:35:53', '2019-01-26 09:10:55'),
(33, 'Đồ chơi xe đà chú lợn lái ô tô', 'do-choi-xe-da-chu-lon-lai-o-to', 47, '6QbxlS_dc-chu-lon-lai-oto-119638_1.jpg', '<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\"><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><em><strong>Chất liệu cao cấp&nbsp;</strong></em></span></span></div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\">&nbsp;</div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\"><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><u>Đồ chơi xe đà</u>&nbsp;chú lợn lái ô tô được làm từ chất liệu nhựa tổng hợp cao cấp, bền đẹp và chắc chắn, không chứa chất độc hại, không gây ảnh hưởng tới sức khỏe của bé. Bề mặt sản phẩm được phủ một lớp sơn màu đẹp mắt, trơn nhẵn, với mọi chi tiết góc cạnh đều được bo tròn cẩn thận và những chiếc ốc vít nhọn được thiết kế khuất trong lỗ sâu, không gây trầy xước bề mặt da của bé.</span></span></div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\">&nbsp;</div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\">&nbsp;</div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\"><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><em><strong>Thiết kế ngộ nghĩnh, chạy đà linh hoạt</strong></em></span></span></div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\">&nbsp;</div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\"><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">- Sản phẩm mang đến hình ảnh ngộ nghĩnh và vô cùng dễ thương của bạn lợn đáng yêu đang điều khiển chiếc xe ô tô 4 bánh sinh động. Thiết kế chiếc xe với màu sắc tươi sáng, cùng hình ảnh chú lợn đang mỉm cười vui tươi, sản phẩm sẽ trở thành người bạn thân thiết, bên cạnh bé những lúc vui - buồn.</span></span></div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\">&nbsp;</div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\"><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">- Tất cả 4 bánh đà được gắn thêm vòng nhựa dẻo tăng cường ma sát, từ đó cho xe đà chạy nhanh và khoẻ hơn. Kích thước vừa tay cầm của bé giúp bé dễ dàng đẩy xe về phía trước, phía sau để xe tự mình di chuyển.</span></span></div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\">&nbsp;</div>\n\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial; text-align: justify;\"><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">- Với thiết kế ngộ nghĩnh, đáng yêu, ngập tràn màu sắc tươi sáng, bên cạnh việc vui chơi, đồ chơi đà còn là vật trang trí nổi bật trong không gian phòng hay góc học tập của bé.</span></span></div>\n\n<p>&nbsp;</p>', 55000.000, 50000.000, 1, NULL, 0, 80, '|3||12||8|', '2018-12-19 18:20:47', '2019-01-26 09:10:55'),
(34, 'Thú nhún bơm hơi hình hươu vàng', 'thu-nhun-bom-hoi-hinh-huou-vang', 47, 'FIBnR0_thu-nhun-bom-hoi-hinh-con-nai-mau-vang-118931-1_1.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(0, 0, 0)\">Bên cạnh bập bênh, cầu trượt, những bạn thú nhún bơm hơi cũng là món&nbsp;</span><a class=\"desctiption-tag-link\" href=\"https://bibomart.com.vn/do-choi-tre-em-t513.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none; font-weight: bold; font-style: italic; font-family: Arial;\" title=\"đồ chơi\">đồ chơi</a><span style=\"color:rgb(0, 0, 0)\">&nbsp;vận động đầy thú vị mà bố mẹ có thể cho các bé làm quen trong giai đoạn đầu đời. Các bạn thú nhún mang đến sự thú vị nhờ độ đàn hồi của chất liệu, của hơi bơm căng bên trong, tạo nên độ nảy nhẹ nhàng và êm ái cho cơ thể bé bật nhún lên xuống đầy vui nhộn. Không nằm ngoài những đặc điểm ấy,&nbsp;</span><strong>thú nhún bơm hơi</strong><span style=\"color:rgb(0, 0, 0)\">&nbsp;hình hươu vàng dưới đây sẽ là gợi ý để bố mẹ làm thành món quà ý nghĩa dành tặng bé. Bạn hươu vàng với thiết kế ngộ nghĩnh, màu sắc bắt mắt, chắc chắn sẽ càng thu hút bé và đem đến những giây phút vui chơi đầy thư giãn, hào hứng.</span></span></span></p>', 548900.000, 499000.000, 1, NULL, 0, 10, '|4||11|', '2018-12-19 18:23:35', '2019-01-26 09:10:55'),
(35, 'Đồ chơi cót hình cá', 'do-choi-cot-hinh-ca', 47, 'C98j6a_do-choi-ca-cot-119534_1.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(0, 0, 0)\">Những món&nbsp;</span><a class=\"desctiption-tag-link\" href=\"https://bibomart.com.vn/do-choi-tre-em-t513.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none; font-weight: bold; font-style: italic; font-family: Arial;\" title=\"đồ chơi\">đồ chơi</a><span style=\"color:rgb(0, 0, 0)\">&nbsp;mà bố mẹ lựa chọn cho bé yêu nhà mình luôn được ưu tiên về chất liệu, đảm bảo an toàn cho trẻ chính vì vậy&nbsp;</span><strong><a class=\"desctiption-tag-link\" href=\"https://bibomart.com.vn/be-choi-ma-hoc-c131.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none; font-style: italic;\" title=\"đồ chơi\">đồ chơi</a>&nbsp;cót hình cá</strong><span style=\"color:rgb(0, 0, 0)\">&nbsp;DD1763 sau đây sẽ là một gợi ý giúp bố mẹ yên tâm lựa chọn. Món đồ chơi được làm bằng chất liệu nhựa cao cấp, không chứa chất độc hại, an toàn với sức khỏe của trẻ nhỏ. Cùng với thiết kế ngộ nghĩnh, đáng yêu vừa vặn với bàn tay nhỏ xinh của các bé giúp bé có thể dễ dàng cầm nắm, màu sắc bắt mắt sẽ làm các bé thích thú khi chơi. Đồ chơi đơn giản, dễ chơi chỉ cần lên dây cót là cá sẽ di chuyển về phía trước làm cho các bé cảm thấy hào hứng, hò reo.</span></span></span></p>', 44000.000, 40000.000, 1, NULL, 0, 100, '|3||7|', '2018-12-19 18:25:17', '2019-01-26 09:10:55'),
(36, 'Xe máy điện cảnh sát', 'xe-may-dien-canh-sat', 47, 'mIdryT_do-choi-tre-em-xe-may-canh-sat-118820-1_1.jpg', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:12px\">Những chiếc xe máy điện là&nbsp;</span><a class=\"desctiption-tag-link\" href=\"https://bibomart.com.vn/do-choi-tre-em-t513.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none; font-weight: bold; font-style: italic; font-family: Arial;\" title=\"đồ chơi\">đồ chơi</a><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:12px\">&nbsp;vận động mang lại cảm giác mới lạ, thích thú cho các bé, đang ngày càng nhận được nhiều sự quan tâm và ưa chuộng và tin dùng của nhiều bậc phụ huynh. Với thiết kế phong phú, đa dạng và vô cùng bắt mắt sẽ tăng cường sự hứng thú của bé để bé thỏa sức tham gia các hoạt động vui chơi và vận động ngoài trời. Tất cả các dòng xe đều được sản xuất hướng đến mục tiêu an toàn, cũng như thuận tiện cho bé thoải mái di chuyển. Sản phẩm&nbsp;</span><strong>xe máy điện cảnh sát</strong><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:12px\">&nbsp;FT-999 dưới đây, với kiểu dáng cùng những tính năng vô cùng nổi bật, dễ dàng sử dụng sẽ là một gợi ý thú vị cho bố mẹ dành tặng cho con yêu của mình. Xe được thiết kế mô phỏng chiếc xe cảnh sát với chất liệu nhựa cao cấp, an toàn cho sức khỏe của trẻ nhỏ nên bố mẹ có thể yên tâm chọn lựa cho bé</span></p>', 770000.000, 700000.000, 1, NULL, 0, 10, '|1||11|', '2018-12-19 18:27:55', '2019-01-26 09:10:55'),
(37, 'SỮA PEDIASURE BA 400G', 'sua-pediasure-ba-400g', 50, 'tJi5D9_sua-pediasure-ba-huong-vani-400g-1-10-tuoi-100956_1.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><strong><a class=\"desctiption-tag-link\" href=\"https://bibomart.com.vn/sua-bot-pediasure-t510.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none; font-style: italic;\" title=\"sữa pediasure\">Sữa PediaSure</a>&nbsp;BA</strong><span style=\"color:rgb(0, 0, 0)\">&nbsp;</span><span style=\"color:rgb(0, 0, 0)\">được đặc chế khoa học để&nbsp;cung cấp nguồn&nbsp;dinh dưỡng&nbsp;đầy đủ và cân đối cho trẻ 1 - 10 tuổi, giúp trẻ nhanh chóng bắt kịp và tiếp tục đà tăng trưởng tối ưu cả về thể chất lẫn trí tuệ.&nbsp;</span><a class=\"desctiption-tag-link\" href=\"https://bibomart.com.vn/sua-cho-be-t558.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none; font-weight: bold; font-style: italic; font-family: Arial;\" title=\"sữa\">Sữa</a><span style=\"color:rgb(0, 0, 0)\">&nbsp;phù hợp cho các bé biếng ăn, còi xương, suy dinh dưỡng, dùng để bổ sung hoặc thay thế hoàn toàn bữa ăn của trẻ. Với hệ dưỡng chất tiên tiến TRIPLE SURE,&nbsp;</span><a class=\"desctiption-tag-link\" href=\"https://bibomart.com.vn/sua-bot-pediasure-c586.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 12px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none; font-weight: bold; font-style: italic; font-family: Arial;\" title=\"pediasure\">PediaSure</a><span style=\"color:rgb(0, 0, 0)\">&nbsp;BA sẽ giúp bổ sung kịp thời sự thiếu hụt của bữa ăn, cải thiện tình trạng suy dinh dưỡng, cho trẻ khỏe mạnh và phát triển tốt mà không bị béo phì, đặc biệt tốt khi dùng thường xuyên và lâu dài cho trẻ.</span></span></span><br />\n&nbsp;</p>', 306900.000, 279000.000, 1, NULL, 0, 50, NULL, '2018-12-19 18:35:10', '2019-01-26 09:10:55'),
(38, 'Sữa Abbott Grow Gold 3+ hương vani 900g', 'sua-abbott-grow-gold-3-huong-vani-900g', 50, 'vjdcwv_sua-grow_1.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(0, 0, 0)\">Giai đoạn từ 3 đến 6 tuổi, bé bước sang lứa tuổi mầm non - lứa tuổi bắt đầu đến trường lớp, học hỏi cũng như giao tiếp nhiều hơn với mọi người xung quanh và thế giới bên ngoài. Do đó, bé yêu cần được cung cấp đầy đủ dinh dưỡng để đáp ứng nhu cầu phát triển nhanh về thể chất và trí tuệ. Đến từ tập đoàn Abbott Hoa Kỳ,&nbsp;</span><strong><a href=\"https://bibomart.com.vn/sua-grow-c639.html\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); text-decoration-line: none;\">sữa Abbott Grow</a>&nbsp;Gold 3+</strong><span style=\"color:rgb(0, 0, 0)\">&nbsp;sẽ mang đến cho bé một sản phẩm đặc chế giúp cân đối dinh dưỡng cho bé từ 3 đến 6 tuổi. Với hệ dưỡng chất tiên tiến G Power+ giàu vi chất và protein chất lượng cao, đủ 9 acid amin thiết yếu, Abbott Grow Gold 3+ sẽ hỗ trợ quá trình phát triển toàn diện cả về thể chất lẫn trí não của bé trong giai đoạn này.</span></span></span><br />\n&nbsp;</p>', 407000.000, 370000.000, 1, NULL, 0, 50, NULL, '2018-12-19 18:38:03', '2019-01-26 09:10:55'),
(39, 'Uala Rogo Giầy Tập Đi 7070 HỒNG-XANH-GHI', 'uala-rogo-giay-tap-di-7070-hong-xanh-ghi', 39, 'mtje9v_7070_result_result_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8)\">– Giày tập đi cho bé được thiết kế cực dễ thương chắc chắn sẽ khiến bé yêu thích. </span></span></p>\n\n<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8)\">– Giày được thiết kế đặc biệt êm ái và an toàn dành cho lứa tuổi tập đi, để bé có được những bước đi đầu đời thật vững chắc. Đây sẽ là món quà ý nghĩa dành tặng cho các bé yêu.</span></span></p>', 218900.000, 199000.000, 1, NULL, 0, 50, '|1||2||5||6||7||8|', '2018-12-25 15:04:52', '2019-01-26 09:10:55'),
(40, 'Chaang cúc vai KẺ XANH BIỂN (vải dày)', 'chaang-cuc-vai-ke-xanh-bien-vai-day-', 45, 'zCEHW6_Bo-cuc-vai-xanh-da-troi1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 242000.000, 220000.000, 1, NULL, 0, 27, '|1||2||6||7||8||9||10||11||15||16||18|', '2018-12-25 15:50:52', '2019-01-26 09:10:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attribute`
--

CREATE TABLE `product_attribute` (
  `product_id` int(11) DEFAULT NULL,
  `attribute_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `link`, `product_id`) VALUES
(24, 'Bo-do-3-nguoi-ban(2).jpg', 8),
(25, 'Bo-do-3-nguoi-ban(3).jpg', 8),
(26, 'bo-do-bang-long-lullaby (3)_result.jpg', 8),
(27, '1 (3)_result.jpg', 9),
(28, '1 (4)_result.jpg', 9),
(29, '1(2).jpg', 9),
(30, 'Body-3-nguoi-ban(2).jpg', 7),
(31, 'Body-3-nguoi-ban(3).jpg', 7),
(32, 'body-bang-long (1)_result.jpg', 7),
(33, 'Bo-cuc-vai-ke-xanh-la(3).jpg', 10),
(34, 'Bo-cuc-vai-ke-xanh-la2).jpg', 10),
(35, 'Bo-cuc-vai-tim-ke-xanh(3).jpg', 12),
(36, 'Bo-cuc-vai-tim-ke-xanh1).jpg', 12),
(37, 'Ao-len-cuc-giua-xanh(2).jpg', 16),
(38, 'Ao-khoac-co-mu-tron-hong2).jpg', 17),
(39, 'Ao-len-cuc-giua-hong(2).jpg', 18),
(40, '1(14).jpg', 20),
(41, '1(15).jpg', 20),
(42, '1(16).jpg', 20),
(43, 'giay2026(1)_result.jpg', 21),
(44, 'giay2026(2)_result.jpg', 21),
(45, 'giay2026(3)_result.jpg', 21),
(46, 'giay7005(1)_result.jpg', 22),
(47, 'giay7005(2)_result.jpg', 22),
(48, 'giay7005(3)_result.jpg', 22),
(49, 'Goibong_result (1).jpg', 25),
(50, 'Goibong_result.jpg', 25),
(51, 'Goibong1_result.jpg', 25),
(52, 'Bogoichan (1)_2_result.jpg', 26),
(53, 'Bogoichan (2)_2_result.jpg', 26),
(54, 'Bogoichan (5)_2_result.jpg', 26),
(55, 'Bo-do-khuc-hat-giao-mua(1).jpg', 27),
(56, 'Bo-do-khuc-hat-giao-mua(2).jpg', 27),
(57, 'Bo-do-khuc-hat-giao-mua(3).jpg', 27),
(58, 'Gile-len-cotton(1).jpg', 28),
(59, 'Gile-len-cotton(2).jpg', 28),
(60, 'Gile-len-cotton(3).jpg', 28),
(61, 'Bo-lien-long(2).jpg', 29),
(62, 'Bo-lien-long(3).jpg', 29),
(63, 'Bo-lien-long(4).jpg', 29),
(64, 'Ao-khoac-bon(5).jpg', 30),
(65, 'Ao-khoac-bon(6).jpg', 30),
(66, 'Ao-khoac-bon(7).jpg', 30),
(67, 'Ao-khoac-bon(8).jpg', 30),
(68, 'Bo-do-len-cotton(1).jpg', 31),
(69, 'Bo-do-len-cotton(2).jpg', 31),
(70, 'Bo-do-len-cotton(3).jpg', 31),
(71, 'Gile-long(1).jpg', 32),
(72, 'Gile-long(2).jpg', 32),
(73, 'Gile-long(4).jpg', 32),
(88, 'dc-chu-lon-lai-oto-119638-1_1.jpg', 33),
(121, 'thu-nhun-bom-hoi-hinh-con-nai-mau-vang-118931-2_1.jpg', 34),
(122, 'thu-nhun-bom-hoi-hinh-con-nai-mau-vang-118931-3_1.jpg', 34),
(123, 'thu-nhun-bom-hoi-hinh-con-nai-mau-vang-118931-4_1.jpg', 34),
(124, 'thu-nhun-bom-hoi-hinh-con-nai-mau-vang-118931-5_1.jpg', 34),
(125, 'do-choi-tre-em-xe-may-canh-sat-118820-2_1.jpg', 36),
(126, 'do-choi-tre-em-xe-may-canh-sat-118820-3_1.jpg', 36),
(127, 'do-choi-tre-em-xe-may-canh-sat-118820-4_1.jpg', 36),
(128, 'do-choi-tre-em-xe-may-canh-sat-118820-6_1.jpg', 36),
(129, 'do-choi-tre-em-xe-may-canh-sat-118820-10_1.jpg', 36),
(130, 'sua-pediasure-ba-huong-vani-400g-1-10-tuoi-100956-1_1.jpg', 37),
(131, 'sua-pediasure-ba-huong-vani-400g-1-10-tuoi-100956-2_1.jpg', 37),
(132, 'sua-pediasure-ba-huong-vani-400g-1-10-tuoi-100956-3_1.jpg', 37),
(133, 'sua-pediasure-ba-huong-vani-400g-1-10-tuoi-100956-4_1.jpg', 37),
(134, 'sua-grow-1_1.jpg', 38),
(135, 'sua-grow-2_1.jpg', 38),
(140, 'Bo-cuc-vai-xanh-da-troi(2).jpg', 40),
(141, 'Bo-cuc-vai-xanh-da-troi(3).jpg', 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT '#',
  `content` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `images`, `link`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Slide 1', 'iMw6h_khuyen-mai-thoi-trang-tre-em-htkids.jpg', 'google.com', '<p>Slide 1</p>', '2018-12-04 01:10:20', '2018-12-04 01:10:20'),
(2, 'Slide 2', 'zTwRP_quan-ao-tre-em-viet-nam 02.jpg', 'google.com', '<p>Slide 2</p>', '2018-12-04 01:10:49', '2018-12-04 01:10:49'),
(6, 'Slide 3', '7Ah87c_quan-ao-tre-em-2.png', 'google.com', '<p>Slide 3</p>', '2018-12-17 11:01:46', '2018-12-17 11:01:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `gender` tinyint(4) NOT NULL DEFAULT '1',
  `level` tinyint(4) DEFAULT '0',
  `remember_token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `note`, `gender`, `level`, `remember_token`, `reset_token`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng Gia Vương', 'vuong313@gmail.com', '$2y$10$S3oRz0hI/vgFnK.i4Nr.mOLozfuMaHalwXnjrTb8TB7Xozg.9/Zk2', '0868.422.468', '477 Xuân Đỉnh, Bắc Từ Liêm, Hà Nội', 'Đây là admin có quyền cao nhất', 1, 1, 'ALT17aXkfTuvZiEJjOA8Nc6JME8xVLpZaUuEcI9ZK9WBByhKHcvE7UXuB6uW', '5efqEnhIDwgLoRvjpaWdswX9sO86HiCRiXghO3829piXSZJWhK', '2018-12-03 15:14:27', '2019-01-26 09:42:02'),
(2, 'vuong3103', 'vuong3103@gmail.com', '$2y$10$GtA99H2mhitIXB0U38xAHetytdxGsUAboDIhK3S6X0ZxymBeQAoQe', '093.437.9020', 'Giao Tiến, Giao Thủy, Nam Định', NULL, 1, 1, 'xoeR6NengrPhtsUIVoPUc2kSOYhRK8TmEruN4qs2hVoyGL5DtVg1XtwYNxX0', NULL, '2018-12-04 10:24:01', '2019-01-05 10:40:00'),
(3, 'donald303', 'donaldvuong303@gmail.com', '$2y$10$D6CaIbVm9fLgLFDSmgmVruzdPwvnxcsF8vnVpDqEpg./5fLswrFLe', '0868.422.466', 'Xuân Đỉnh, Bắc Từ Liêm, Hà Nội', NULL, 1, 1, NULL, 'fBd57eUeg28ILC8NHEJ9gzBSyJzGBMYN8EXPDY6oLWsqcpx3uX', '2018-12-04 10:27:03', '2019-01-22 16:43:22'),
(8, 'user2', 'user2@gmail.com', '$2y$10$88L5dys6GNRyhu8IpWtTUOpO3/McB/X7r3JArp0VxQVF4wMo8AOsi', '038.697.7166', 'Hà Khẩu, Quảng Ninh', NULL, 0, 0, 'dy7IsDK61nreeNaUAEkGtwuOQyLYLAG26Kmo4dl9SW8mfnchFRkovLgfpsyu', NULL, '2018-12-04 11:08:02', '2019-01-05 10:40:00'),
(9, 'user3', 'user3@gmail.com', '$2y$10$bt8s/7e/3Yheb8ZDg/jH7OEKTf3ko.0UqkrQFXwBG8.G25CHn600S', '0984.666.777', 'Từ Sơn, Bắc Ninh', NULL, 0, 0, 'FBf6WrBup97NGVzh5U1vdYnFZgZYUH5ScCS0cbjhyHOCjmBbJB7dsIuMIY0U', NULL, '2018-12-04 11:10:10', '2019-01-05 10:40:00'),
(10, 'user1', 'user1@gmail.com', '$2y$10$poZiZdwEbMW.57JJtOIZ9.ZCe3EkVg8GKBLp8g/iUZpMpc0X5fJr6', '0366244472', 'Thanh Sơn, Phú Thọ', NULL, 0, 0, 'Mkhb3KT0IKsIr1MUxftdvHCHP6u8E3MHiyhNTPOjKLTPO1dykaQX2jud584W', NULL, '2018-12-04 14:14:26', '2019-01-05 10:40:00'),
(11, 'user4', 'user4@gmail.com', '$2y$10$LiST3QJ1fKKQIBT/bZbHhuCVoqbjWSaoQ8dm6wfZdL3YIH0wpym3.', '0985.444.222', 'Yên Thế, bắc Giang', NULL, 1, 0, 'MHip6EThDN9Izb0eaaVHZmocaLcpuvWvzEUU2OERtfWW4SP43G5ELZu3kbiP', NULL, '2018-12-04 14:15:40', '2019-01-05 10:40:00'),
(12, 'user5', 'user5@gmail.com', '$2y$10$A/ELnciELgvJwFFHHJEYKuMEwIXmgjfos/9ROkQ26jVtaxocywQcm', '0914.111.222', 'Chương Mỹ, Hà Nội', NULL, 0, 0, '33Ec5VDFWDeex3aV2AIio9OSz1bfWYi78zooujVu8klVmYlhW67uqLY42XzL', NULL, '2018-12-04 14:17:51', '2019-01-05 10:40:00'),
(13, 'user6', 'user6@gmail.com', '$2y$10$wNaB448D6l.4jRH8HNe5NOPDlkQ4Fh.wMZfLImy4jDo4vDh.xyTu6', '0914.386.2310', 'Phủ Lý, Hà Nam', NULL, 0, 0, 'ow8Zd2U9hWfTVyYKbN7zIE55JGWew2UkzTZykyFJq9jFJ65JiSKrqMGeSjz6', NULL, '2018-12-04 14:37:13', '2019-01-05 10:40:00'),
(14, 'user10', 'user10@gmail.com', '$2y$10$N0U8iDcbToJhuyWHFhd3i.YC/j3MvNbfTcbtDFeCYc4bPlYFmUTe2', '083444555', 'Châu Thành, Long An', NULL, 0, 0, NULL, NULL, '2018-12-09 00:04:06', '2019-01-05 10:40:00'),
(15, 'user12', 'user11@gmail.com', '$2y$10$pCeSU6hxR/.wVEJ5sPkhuOWRQkTkfNy.5N1.lHAsVXpH3h5b687My', '0984567865', '485 Xuân Đỉnh, Bắc Từ Liêm, Hà Nội', NULL, 1, 0, NULL, NULL, '2018-12-14 15:11:29', '2019-01-05 10:40:00'),
(16, 'user12', 'user12@gmail.com', '$2y$10$L0rxGkVMcL/x6GrSc1ZcXOYj11B/5JWoYeTw/.tiTqMN8gk2YZ4i.', '0934561289', 'Quận 3 TP HCM', NULL, 0, 0, NULL, NULL, '2019-01-22 17:00:55', '2019-01-22 17:00:55'),
(17, 'user13', 'user13@gmail.com', '$2y$10$cTZSLkt31B65hzzm8k4cH.LKplOZ.brG5/EIwIN/OalLatlrgUjjq', '0984624673', '477 Xuân Đỉnh, Bắc Từ Liêm, Hà Nội', NULL, 0, 0, '5rLz2nB556q8HxiXYEQUveQ0WOmFGovtgY3E61cQrjE88wL0aDXNDIrW9BZs', NULL, '2019-01-26 01:35:31', '2019-01-26 01:35:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `FK_category_pcategory` (`parent_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comment_users` (`user_id`),
  ADD KEY `FK_comment_product` (`product_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_customer_orders_customers` (`customer_id`);

--
-- Chỉ mục cho bảng `customer_order_detail`
--
ALTER TABLE `customer_order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_customer_order_detail_customers` (`order_id`),
  ADD KEY `FK_customer_order_detail_product` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_users` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_order_detail_orders` (`order_id`),
  ADD KEY `FK_order_detail_product` (`product_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_category` (`category_id`);

--
-- Chỉ mục cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD KEY `FK_product_attribute_product` (`product_id`),
  ADD KEY `FK_product_attribute_attributes` (`attribute_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_image_product` (`product_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `customer_order_detail`
--
ALTER TABLE `customer_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_comment_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_comment_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD CONSTRAINT `FK_customer_orders_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `customer_order_detail`
--
ALTER TABLE `customer_order_detail`
  ADD CONSTRAINT `FK_customer_order_detail_customers` FOREIGN KEY (`order_id`) REFERENCES `customer_orders` (`id`),
  ADD CONSTRAINT `FK_customer_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order_detail_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `FK_product_attribute_attributes` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `FK_product_attribute_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `FK_product_image_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
