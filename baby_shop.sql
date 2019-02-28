-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2018 lúc 03:21 PM
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
-- Cơ sở dữ liệu: `shopping_project_new`
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
(3, 'Màu xanh', 'Màu xanh', 'color', '2018-12-11 10:10:41', '2018-12-11 10:10:41'),
(4, 'Màu vàng', 'Màu vàng', 'color', '2018-12-11 10:11:38', '2018-12-11 10:11:38'),
(5, 'Màu hồng', 'Màu hồng', 'color', '2018-12-11 10:12:07', '2018-12-11 10:12:07'),
(6, 'XS', 'XS', 'size', '2018-12-11 10:12:41', '2018-12-11 10:12:41'),
(7, 'S', 'S', 'size', '2018-12-11 10:13:00', '2018-12-11 10:13:00'),
(8, 'M', 'M', 'size', '2018-12-11 10:13:25', '2018-12-11 10:13:25'),
(9, 'L', 'L', 'size', '2018-12-11 10:13:42', '2018-12-11 10:13:42'),
(10, 'XL', 'XL', 'size', '2018-12-11 10:13:54', '2018-12-11 10:13:54'),
(11, 'XXL', 'XXL', 'size', '2018-12-11 10:14:07', '2018-12-11 10:14:07'),
(12, 'Màu trắng xanh', 'Màu trắng xanh', 'color', '2018-12-11 20:12:18', '2018-12-11 20:38:40'),
(13, 'color', 'Màu trắng xanh', 'Màu trắng xanh', '2018-12-16 15:33:32', '2018-12-16 15:33:32'),
(14, 'Màu ghi', 'Màu ghi', 'color', '2018-12-16 20:49:30', '2018-12-16 20:49:30');

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
(47, 'KHĂN ADEN ANAIS & SƠ SINH XUẤT KHẨU', 'khan-aden-anais-so-sinh-xuat-khau', 0, '2018-12-07 09:58:50', '2018-12-08 19:47:43'),
(48, 'SỮA TRẺ EM', 'sua-tre-em', 0, '2018-12-07 09:59:12', '2018-12-07 09:59:12'),
(49, 'Bình sữa CÔMOTOMO', 'binh-sua-comotomo', 48, '2018-12-07 09:59:55', '2018-12-07 10:00:23');

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
(2, 1, 7, 'Có freeship không?', '2018-12-09 14:19:47', '2018-12-09 14:19:47'),
(3, 1, 21, '', '2018-12-09 15:04:37', '2018-12-09 15:04:37'),
(4, 1, 21, '', '2018-12-09 15:06:44', '2018-12-09 15:06:44'),
(5, 1, 7, '', '2018-12-09 15:12:13', '2018-12-09 15:12:13'),
(6, 9, 7, '', '2018-12-09 15:19:20', '2018-12-09 15:19:20'),
(7, 1, 7, '', '2018-12-09 15:22:40', '2018-12-09 15:22:40'),
(8, 1, 7, 'test thử xem', '2018-12-09 15:27:15', '2018-12-09 15:27:15'),
(9, 1, 28, 'Mua sl nhiều thì như thế nào ạ', '2018-12-10 14:50:07', '2018-12-10 14:50:07'),
(10, 1, 27, 'asadddssda', '2018-12-14 15:34:25', '2018-12-14 15:34:25'),
(11, 1, 27, 'dasdddsdssd', '2018-12-14 15:45:14', '2018-12-14 15:45:14'),
(12, 1, 19, 'abcabc', '2018-12-14 15:47:19', '2018-12-14 15:47:19'),
(13, 1, 7, 'ddfgddf', '2018-12-14 15:56:08', '2018-12-14 15:56:08'),
(14, 1, 10, 'dfgdrgrses', '2018-12-16 11:22:56', '2018-12-16 11:22:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `user_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(16, '', 1, 0, NULL, '2018-12-14 00:01:25', '2018-12-14 00:01:25'),
(17, '', 1, 0, NULL, '2018-12-14 09:05:19', '2018-12-14 09:05:19'),
(18, '', 1, 0, NULL, '2018-12-14 13:59:34', '2018-12-14 13:59:34'),
(19, '', 1, 0, NULL, '2018-12-14 14:05:42', '2018-12-14 14:05:42'),
(20, '', 1, 0, NULL, '2018-12-14 15:56:51', '2018-12-14 15:56:51'),
(21, '', 1, 0, NULL, '2018-12-16 11:33:11', '2018-12-16 11:33:11'),
(22, '', 1, 0, NULL, '2018-12-16 11:37:53', '2018-12-16 11:37:53');

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
(23, 22, 28, 3, 170000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(200) COLLATE utf8_unicode_ci DEFAULT '#',
  `content` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `images`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Trung Quốc đưa ra cam kết hơn 1.200 tỷ USD để \"đình chiến\" thương mại với Mỹ', 'pM1eh_trung-quoc-my-15438815835551663098864.jpg', '<h2><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Trung Quốc đã đưa ra cam kết thương mại hơn 1,2 nghìn tỷ USD theo một phần thảo thuận đạt được giữa Tổng thống Mỹ Donald Trump và Chủ tịch Trung Quốc Tập Cận Bình bên lề hội nghị thượng đỉnh G20 cuối tuần trước. Bắc Kinh tuyên bố sẽ có những bước đi ngay lập tức để thực hiện các cam kết này.</span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Theo Reuters, Bộ trưởng Tài chính Mỹ Steve Mnuchin ngày 3/12 cho biết, giới chức Trung Quốc đã thể hiện một sự thay đổi rõ rệt khi thảo luận với phái đoàn Mỹ bên lề hội nghị thượng đỉnh G20 ở Argentina. Cụ thể, Chủ tịch Trung Quốc Tập Cận Bình đã đưa ra cam kết rõ ràng về việc mở cửa thị trường Trung Quốc với các doanh nghiệp của Mỹ.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">\"Họ đã đưa lên bàn đàm phán một đề nghị về các cam kết bổ sung trị giá hơn 1,2 nghìn tỷ USD. Tuy nhiên, chi tiết cam kết đó vẫn cần đàm phán. Đây là lần đầu tiên chúng tôi có được cam kết như vậy từ họ và đây sẽ là một thỏa thuận thực sự\", Reuters dẫn lời Bộ trưởng Mnuchin.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Giám đốc Hội đồng kinh tế quốc gia Mỹ Larry Kudlow cho biết, Bộ trưởng Mnuchin và Đại diện thương mại Mỹ Robert Lighthizer đã ăn trưa cùng với Phó Thủ tướng Trung Quốc ở Argentina và quan chức Trung Quốc đã nói với họ rằng Bắc Kinh sẽ ngay lập tức thực hiện các cam kết mới.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">\"Họ không thể trì hoãn, quanh co. Tuyên bố của họ là: Ngay lập tức\", ông Kudlow nhấn mạnh.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Ông Kudlow cho biết với các phóng viên tại Nhà Trắng rằng, Washington muốn thấy kết quả nhanh chóng trong các vấn đề như vi phạm sở hữu trí tuệ, chuyển giao công nghệ. Các nhà đầu tư Mỹ sẽ lần đầu tiên có thể nắm cổ phần chi phối tại các doanh nghiệp Trung Quốc, ông Kudlow cho biết với CNBC.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Theo thỏa thuận đạt được với Chủ tịch Trung Quốc Tập Cận Bình, Tổng thống Trump đã nhất trí rằng từ ngày 1/1/2019, ông sẽ giữ mức thuế đối với 200 tỷ USD hàng hóa (của Trung Quốc) ở mức 10%, và sẽ không tăng lên 25% ở thời điểm này. Theo đó, Mỹ sẽ tạm hoãn tăng thuế với hàng hóa Trung Quốc trong vòng 90 ngày. Nếu sau thời gian này, hai bên vẫn không thể đạt được một thỏa thuận về thương mại, bao gồm các vấn đề về chuyển giao công nghệ, sở hữu trí tuệ, hàng rào phi thuế quan, nông nghiệp, mức thuế 10% sẽ tăng lên thành 25%.</span></span></p>', '2018-12-04 08:49:30', '2018-12-04 09:05:12'),
(2, 'HLV Park Hang Seo ca ngợi Văn Đức sau chiến thắng trước Philippines', 'MYADD_parkhangseo-1543758782874537601526.jpg', '<h2><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Vượt qua nhiều sức ép, đội tuyển Việt Nam đã đánh bại Philippines 2-1 tại Panaad ở bán kết lượt đi AFF Cup 2018. Sau trận đấu, HLV Park Hang Seo đã dành lợi ngợi khen cho tiền vệ Phan Văn Đức.</span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Đội tuyển Việt Nam đã có chiến thắng quan trọng 2-1 trước Philippines ngay trên sân khách ở bán kết lượt đi AFF Cup 2018. Hai bàn thắng của Anh Đức và Văn Đức đã giúp đoàn quân HLV Park Hang Seo có lợi thế lớn, trước cuộc tái đấu ở Mỹ Đình ngày 6/12.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Phát biểu trong buổi họp báo sau trận, HLV Park Hang Seo lại tỏ ra bình thản: “Tôi đánh giá cao nỗ lực của các học trò, khi chúng ta đã có chiến thắng quan trọng trên sân khách. Tất cả các cầu thủ đã nỗ lực hết mình và chiến thắng là xứng đáng”.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Về việc đội tuyển Việt Nam lần đầu thủng lưới ở giải năm nay, thầy Park chia sẻ: “Không có đội bóng nào hoàn hảo và việc thủng lưới 1 lần ở giải đấu lớn là chuyện bình thường.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Quan trọng nhất là các học trò của tôi đã chơi đúng chiến thuật đề ra ban đầu. Đội tuyển còn rất nhiều vấn đề cần cải thiện ở các trận đấu tiếp theo”.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Dù đội tuyển Việt Nam giành chiến thắng, tuy nhiên HLV Park Hang Seo vẫn cảm thấy tiếc nuối: “Chúng tôi đã bỏ lỡ những cơ hội ngon ăn của Công Phượng hay Đức Chinh. Nhưng tôi đánh giá cao việc vẫn tạo ra cơ hội ghi bàn, dù toàn đội đã giảm nhịp độ trận đấu”.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Cuối cùng, thầy Park dành lời khen ngợi cho tiền vệ Phan Văn Đức: “Phan Văn Đức đã chơi một trận đấu tuyệt vời, không chỉ bởi bàn thắng cậu ấy ghi được. Văn Đức đã tuân thủ đúng chiến thuật và yêu cầu tôi đề ra trước trận đấu.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">23 cầu thủ của tôi, kể cả Văn Toàn chấn thương đều có thể tỏa sáng khi được tung vào sân. Tất cả các cầu thủ đều thể hiện tốt trong suốt giải đấu này và tôi liên tục làm việc, để Việt Nam có đội hình ưng ý nhất trong từng trận đấu”.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2018-12-04 09:01:02', '2018-12-04 09:07:15'),
(4, 'CEO Satya Nadella đã giúp Microsoft trở thành công ty giá trị nhất thế giới như thế nào?', 'ilKIm_11-1543800949642711788313.jpg', '<h2><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Người có biệt danh \"gã hói\" đã gắn kết những mảnh vỡ tại Microsoft trong giai đoạn khó khăn, giúp các nhân viên đoàn kết và đồng thuận. Thành quả ngọt ngào nhất mà CEO Satya Nadella đạt được là vào cuối tháng 11 vừa qua, Microsoft đã chính thức vượt Apple để trở thành công ty giá trị nhất thế giới.</span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Khi Satya Nadella lần đầu tiên nắm lấy cương vị Giám đốc điều hành của Microsoft vào tháng 2/2014, công ty đang trải qua một trong những giai đoạn \"hụt hơi\" và hoàn toàn kém nổi bật.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Microsoft Windows 8 được coi là một thảm họa. Nhân viên của Microsoft tại khắp nơi thì liên tục tranh cãi phía sau hậu trường về những dự án của công ty. Trong lúc đó, người tiêu dùng và các nhà phát triển cũng đã mất niềm tin vào Microsoft.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Tuy nhiên mọi thứ đã thay đổi.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Khi thị trường đóng cửa vào ngày cuối cùng của tháng 11, giá trị vốn hóa của Microsoft đã vượt qua Apple lần đầu tiên trong vòng 5 năm. Đây là một \"dấu chấm than\" về triều đại của Satya Nadella tại Microsoft, giúp công ty trở lại con đường đúng và được nâng lên một tầm cao mới.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(0, 0, 0)\">Quan trọng hơn hết, Nadella là người đã gắn kết những mảnh vỡ tại Microsoft trong giai đoạn khó khăn, giúp các nhân viên đoàn kết và đồng thuận. \"Những lời than phiền đã không còn\", CEO Nadella từng nói sau khi \"thu nạp\" tổng cộng 150 giám đốc dưới quyền tại Microsoft vào đầu năm 2018.</span></span></span></p>', '2018-12-04 09:01:24', '2018-12-04 09:36:40');

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
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `hot_sale` tinyint(4) NOT NULL DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `list_attr_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `category_id`, `images`, `content`, `price`, `sale_price`, `status`, `hot_sale`, `view`, `list_attr_id`, `created_at`, `updated_at`) VALUES
(7, 'Lullaby Bộ body câu chuyện 3 người bạn thỏ HỒNG - cún XANH - mèo TRẮNG', 'lullaby-bo-body-cau-chuyen-3-nguoi-ban-tho-hong-cun-xanh-meo-trang', 36, 'qp7xhQ_Body-3-nguoi-ban(1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 215000.000, 180000.000, 1, 1, 0, '', '2018-12-07 13:59:58', '2018-12-09 11:32:02'),
(8, 'Lullaby bộ đồ 3 người bạn thỏ Hồng - cún Xanh - mèo Trắng_ băng lông', 'lullaby-bo-do-3-nguoi-ban-tho-hong-cun-xanh-meo-trang-bang-long', 36, 'Yk3Wbp_Bo-do-3-nguoi-ban(1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 215000.000, 180000.000, 1, 0, 0, '', '2018-12-07 15:14:48', '2018-12-07 15:14:48'),
(9, 'Uala Rogo Áo Gile Trần Bông Kẻ XANH-HỒNG-GHI, Trơn HỒNG- XANH', 'uala-rogo-ao-gile-tran-bong-ke-xanh-hong-ghi-tron-hong-xanh', 38, 'DcA0BS_1 (1)_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Là hiện thân tình yêu của những người làm cha mẹ dành cho bé: mềm mại, thân thương, ôm ấp và chở che, sản phẩm Uala &amp; Rogo ưu tiên sử dụng những chất liệu tự nhiên, thân thiện với môi trường, mềm dịu và an toàn trên da bé.</span></span></span></p>', 140000.000, 125000.000, 1, 1, 0, '', '2018-12-07 15:18:14', '2018-12-09 11:32:23'),
(10, 'Chaang cúc vai KẺ XANH LÁ (vải dày)', 'chaang-cuc-vai-ke-xanh-la-vai-day-', 45, 'uzm4dy_Bo-cuc-vai-ke-xanh-la(1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 230000.000, 207000.000, 1, 0, 0, '', '2018-12-08 19:51:47', '2018-12-08 19:51:47'),
(11, 'Chaang cúc vai KẺ GHI (vải dày)', 'chaang-cuc-vai-ke-ghi-vai-day-', 45, '827IIp_Bo-cuc-vai-ke-ghi.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 230000.000, 207000.000, 1, 0, 0, '', '2018-12-08 19:53:08', '2018-12-08 19:53:08'),
(12, 'Chaang cúc vai KẺ XANH NHŨ TIM (2 lớp)', 'chaang-cuc-vai-ke-xanh-nhu-tim-2-lop-', 45, 'CNzofn_Bo-cuc-vai-tim-ke-xanh(2).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 230000.000, 207000.000, 1, 0, 0, '', '2018-12-08 19:55:14', '2018-12-08 19:55:14'),
(13, 'Chaang Bộ đồ raglan - warm cotton BE (vải dày)', 'chaang-bo-do-raglan-warm-cotton-be-vai-day-', 45, 'YyhHUH_Bo-raglan-be.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 230000.000, 207000.000, 1, 0, 0, '', '2018-12-08 19:57:14', '2018-12-08 19:57:14'),
(14, 'Chaang Quần jogger - set 2 BÉ TRAI', 'chaang-quan-jogger-set-2-be-trai', 45, 'uO0otX_Jogger-be-trai.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 190000.000, 170000.000, 1, 0, 0, '', '2018-12-08 19:58:34', '2018-12-08 19:58:34'),
(15, 'Chaang body KẺ HỒNG NHŨ TIM (2 lớp)', 'chaang-body-ke-hong-nhu-tim-2-lop-', 45, 'hxCo24_Body-ke-tim-hong.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 230000.000, 207000.000, 1, 1, 0, '', '2018-12-08 20:00:20', '2018-12-09 11:31:43'),
(16, 'Chaang Áo len CỔ TRÒN XANH', 'chaang-ao-len-co-tron-xanh', 46, 'M18FUF_Ao-len-cuc-giua-xanh(1).jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"font-size:14px\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 320000.000, 290000.000, 1, 0, 0, '', '2018-12-08 20:02:21', '2018-12-08 20:02:21'),
(17, 'Chaang Áo khoác có mũ CHẤM TRÒN HỒNG', 'chaang-ao-khoac-co-mu-cham-tron-hong', 46, 'NJaH2d_Ao-khoac-co-mu-tron-hong1).jpg', '<p><span style=\"font-size:14px\"><span style=\"color:rgb(12, 12, 12); font-family:arial,sans-serif\"><span style=\"font-family:times new roman,times,serif\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 200000.000, 180000.000, 1, 1, 0, '', '2018-12-08 20:04:36', '2018-12-09 11:31:14'),
(18, 'Chaang Áo len CỔ TRÒN HỒNG', 'chaang-ao-len-co-tron-hong', 46, 'GXvg4j_Ao-len-cuc-giua-hong(1).jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">CHAANG hướng tới những sản phẩm sử dụng chất liệu 100% cotton thân thiện với làn da trẻ, màu sắc tự nhiên, trong sáng. CHAANG cam kết đem lại những gì tốt nhất cho bé và sự hài lòng tuyệt đối cho cha mẹ</span></span></span></p>', 320000.000, 290000.000, 1, 1, 0, '', '2018-12-08 20:06:29', '2018-12-09 11:31:02'),
(19, '(CHÍNH HÃNG) Bình Sữa COMOTOMO Silicon 150ml, 250ml, Tem Nhập Khẩu ÁNH DƯƠNG', '-chinh-hang-binh-sua-comotomo-silicon-150ml-250ml-tem-nhap-khau-anh-duong', 49, 'UllswB_Binh-Como(4).jpg', '<p><span style=\"color:rgba(0, 0, 0, 0.8); font-family:helvetica neue,helvetica,arial,\\\\6587泉驛正黑,wenquanyi zen hei,hiragino sans gb,\\\\5137黑pro,lihei pro,heiti tc,\\\\5fae軟正黑體,microsoft jhenghei ui,microsoft jhenghei,sans-serif; font-size:14px\">(CHÍNH HÃNG) BÌNH SƯA COMOTOMO Silicon cho bé - Giải pháp tối ưu dành cho bé lười ty </span></p>', 450000.000, 399000.000, 1, 0, 0, '', '2018-12-08 20:08:30', '2018-12-08 20:08:30'),
(20, 'Uala Rogo Bộ QA Kẻ Caro Khuy Vai HỒNG- VÀNG-XANH', 'uala-rogo-bo-qa-ke-caro-khuy-vai-hong-vang-xanh', 38, 'XPuYxm_1(13).jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8)\">Là hiện thân tình yêu của những người làm cha mẹ dành cho bé: mềm mại, thân thương, ôm ấp và chở che, sản phẩm Uala &amp; Rogo ưu tiên sử dụng những chất liệu tự nhiên, thân thiện với môi trường, mềm dịu và an toàn trên da bé. </span></span></p>', 230000.000, 207000.000, 1, 0, 0, '', '2018-12-08 20:11:30', '2018-12-08 20:11:30'),
(21, 'Uala Rogo Giày tập đi cho bé UR 2026 HỒNG - XANH - VÀNG', 'uala-rogo-giay-tap-di-cho-be-ur-2026-hong-xanh-vang', 39, 'IPs0Ds_2026_result_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày tập đi cho bé được thiết kế cực dễ thương chắc chắn sẽ khiến bé yêu thích. </span></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày được thiết kế đặc biệt êm ái và an toàn dành cho lứa tuổi tập đi, để bé có được những bước đi đầu đời thật vững chắc. Đây sẽ là món quà ý nghĩa dành tặng cho các bé yêu. </span></span></p>', 145000.000, 130000.000, 1, 1, 0, '', '2018-12-08 20:14:38', '2018-12-09 11:30:37'),
(22, 'Uala Rogo Giày Tập Đi Cho Bé UR 7005 HỒNG - XANH - ĐỎ', 'uala-rogo-giay-tap-di-cho-be-ur-7005-hong-xanh-do', 39, 'uqQXVN_7005_result_result_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày tập đi cho bé được thiết kế cực dễ thương chắc chắn sẽ khiến bé yêu thích. </span></span></p>\r\n\r\n<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">– Giày được thiết kế đặc biệt êm ái và an toàn dành cho lứa tuổi tập đi, để bé có được những bước đi đầu đời thật vững chắc. Đây sẽ là món quà ý nghĩa dành tặng cho các bé yêu. </span></span></p>', 145000.000, 130000.000, 1, 1, 0, '', '2018-12-08 20:16:36', '2018-12-09 11:30:20'),
(23, 'Uala Rogo Yếm Trơn Màu HỒNG - CAM - XANH', 'uala-rogo-yem-tron-mau-hong-cam-xanh', 40, 'kuUre2_yem2.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgba(0, 0, 0, 0.8); font-size:14px\">Là hiện thân tình yêu của những người làm cha mẹ dành cho bé: mềm mại, thân thương, ôm ấp và chở che, sản phẩm Uala &amp; Rogo ưu tiên sử dụng những chất liệu tự nhiên, thân thiện với môi trường, mềm dịu và an toàn trên da bé. </span></span></p>', 50000.000, 45000.000, 1, 0, 0, '', '2018-12-08 20:17:40', '2018-12-16 21:09:12'),
(24, 'Uala Rogo Mũ tai gấu màu HỒNG', 'uala-rogo-mu-tai-gau-mau-hong', 40, 'dLJ8Eu_Mu_result.png', NULL, 50000.000, 45000.000, 1, 0, 0, '', '2018-12-08 20:18:48', '2018-12-08 20:18:48'),
(25, 'Uala Rogo gối bông màu XANH - HỒNG', 'uala-rogo-goi-bong-mau-xanh-hong', 40, 'fQGLMM_Goibong_2_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(146, 146, 146); font-size:14px\">Với vỏ gối được may bằng vải xô hai lớp 100% organic cotton mềm mại, với khả năng thấm hút tuyệt vời giúp cho bé luôn thoải mái khi ngủ.</span><br />\r\n<span style=\"color:rgb(146, 146, 146); font-size:14px\">Ruột gối Bông được sản xuất bằng công nghệ Nano kháng khuẩn tự nhiên, có khả năng chống ngạt cho bé khi ngủ.</span><br />\r\n<span style=\"color:rgb(146, 146, 146); font-size:14px\">Mặt khác gối Uala&amp;Rogo Bông thiết kế mỏng phù hợp với trẻ sơ sinh, bông được dàn đều, không vón cục: dễ lưu thông máu lên não khi ngủ, giúp bé phát triển trí não tốt hơn ngay từ trong giấc ngủ.</span></span></p>', 185000.000, 165000.000, 1, 1, 0, '', '2018-12-08 20:20:32', '2018-12-09 11:30:10'),
(26, 'Uala Rogo Bộ gối chặn màu XANH - HỒNG', 'uala-rogo-bo-goi-chan-mau-xanh-hong', 40, 'jdE14U_Bogoichan_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Bộ gối bao gồm:<br />\r\nVỏ gối được làm từ 60% Bamboo – 40% Organic Cotton.<br />\r\nThấm hút mồ hôi tốt hơn 60% so với vải Cotton.<br />\r\nSiêu mềm mại.<br />\r\nBền màu bền vải.<br />\r\nKhông gây kích ứng da.<br />\r\nKháng khuẩn tự nhiên chống mùi mồ hôi, ẩm mốc.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Ruột gối và bộ chặn được làm từ:<br />\r\nBông Nano kháng khuẩn, không mùi.<br />\r\nKích thước quả chặn lớn, ôm vừa vặn vào cơ thể bé, định hình tư thế ngủ cho bé.<br />\r\nChống giật mình cho bé yêu cảm giác êm ái như đang nằm trong vòng tay của mẹ.<br />\r\nGối được thiết kế với độ dày vừa phải phù hợp với trẻ sơ sinh Việt Nam.</span></span></p>', 350000.000, 315000.000, 1, 1, 0, '', '2018-12-08 20:23:00', '2018-12-09 11:29:51'),
(27, 'LULLABY bộ đồ khúc hát giao mùa màu HỒNG - VÀNG - XANH', 'lullaby-bo-do-khuc-hat-giao-mua-mau-hong-vang-xanh', 36, 'hVzWwz_Bo-do-cai-vai-2-lop (2)_result.jpg', '<p><span style=\"font-family:times new roman,times,serif\"><span style=\"font-size:14px\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 130000.000, 110000.000, 1, 1, 0, '', '2018-12-09 16:12:06', '2018-12-09 16:14:39'),
(28, 'Lullaby Áo gile len cài vai màu HỒNG - VÀNG -XANH', 'lullaby-ao-gile-len-cai-vai-mau-hong-vang-xanh', 36, 'pfmw9I_gile-len-lullaby (4)_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 200000.000, 170000.000, 1, 0, 0, '|3||4||5||6||7||8||9||10|', '2018-12-09 16:14:28', '2018-12-16 20:47:38'),
(29, 'Lullaby Bộ lông liền quần tất màu VÀNG - HỒNG - XANH - GHI', 'lullaby-bo-long-lien-quan-tat-mau-vang-hong-xanh-ghi', 36, 'Jp1zNA_body-long-lullaby_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 240000.000, 204000.000, 1, 0, 0, '', '2018-12-09 16:17:27', '2018-12-09 16:17:27'),
(30, 'Lullaby Áo khoác lông có mũ màu HỒNG - VÀNG -XANH - GHI', 'lullaby-ao-khoac-long-co-mu-mau-hong-vang-xanh-ghi', 36, '7D3ZSo_khoac-long-lullaby_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 205000.000, 174000.000, 1, 1, 0, '|3||4||5||14||6||7||8||9||10||11|', '2018-12-09 16:29:55', '2018-12-16 20:51:33'),
(31, 'Lullaby Bộ quần áo len cài vai màu HỒNG - VÀNG -XANH', 'lullaby-bo-quan-ao-len-cai-vai-mau-hong-vang-xanh', 36, 'mFJfXm_Bo-do-len-lullaby (3)_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 490000.000, 416000.000, 1, 0, 0, '|3||4||5||6||7||8||9||10||11|', '2018-12-09 16:33:05', '2018-12-16 20:50:37'),
(32, 'Lullaby Áo gile lông kéo khóa màu HỒNG - VÀNG - XANH - GHI', 'lullaby-ao-gile-long-keo-khoa-mau-hong-vang-xanh-ghi', 36, '8tTelr_gile-long-lullaby_result.jpg', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><span style=\"color:rgb(12, 12, 12)\">Dòng sản phẩm sơ sinh Lullaby</span><span style=\"color:rgb(12, 12, 12)\">&nbsp;được làm từ nguyên liệu 100% cotton mềm, mịn, an toàn cho làn da em bé. Họa tiết trên các sản phẩm được in theo công nghệ và nguyên vật liệu nhập khẩu 100% từ Nhật Bản, đạt theo tiêu chuẩn quốc tế, không gây kích ứng cho làn da nhạy cảm của bé. Đặc biệt dành cho lứa tuổi sơ sinh từ 0 đến 2 tuổi. Ngoài ra, dòng sản phẩm có nhiều màu sắc và hình thù xinh xắn, ngộ nghĩnh cho các mẹ lựa chọn.</span></span></span></p>', 145000.000, 123000.000, 1, 0, 0, '|3||4||5||14||6||7||8||9||10|', '2018-12-09 16:35:53', '2018-12-16 20:50:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attribute`
--

CREATE TABLE `product_attribute` (
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL
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
(84, '29542727_10204229558455271_8214409835273007931_n.jpg', 22),
(85, '30261261_10204265362430348_7110948715316511365_n - Copy.jpg', 22),
(86, '30261868_10204265361230318_7448917604046947411_n - Copy.jpg', 22),
(87, '30261868_10204265361230318_7448917604046947411_n.jpg', 22);

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
(4, 'Slide 4', 'Pu9u5_quan-ao-tre-em-1.jpg', 'google.com', '<p>Slide 4</p>', '2018-12-04 01:11:31', '2018-12-04 01:11:31'),
(5, 'Slide 5', 'G6lTP_38444836_859479317572784_7128045024293421056_n.jpg', 'google.com', '<p>Slide 5</p>', '2018-12-05 09:21:59', '2018-12-05 09:21:59');

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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `note`, `gender`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vuong313', 'vuong313@gmail.com', '$2y$10$jEPJOgaUOeEbANQ6n4DGOeZJ2FhFFc4pw3vWKl5dgX0k8eoxDq1nu', '0868.422.467', '477 Xuân Đỉnh, Bắc Từ Liêm, Hà Nội', NULL, 1, 1, 'IS9FtMiKidmSruknZfrui0UO2u2qAJNzPacYPjkNR1o3XEpMsfQFggBM582P', '2018-12-03 15:14:27', '2018-12-16 11:22:03'),
(2, 'vuong3103', 'vuong3103@gmail.com', '$2y$10$GtA99H2mhitIXB0U38xAHetytdxGsUAboDIhK3S6X0ZxymBeQAoQe', '093.437.9020', 'Giao Tiến, Giao Thủy, Nam Định', NULL, 1, 1, 'N8kx8bU8iW1QqKOJ9JLmdz38Op2NRfyaYKvSB3HjIFDniETeTmQBbavgKu93', '2018-12-04 10:24:01', '2018-12-04 10:38:48'),
(3, 'donald303', 'donaldvuong303@gmail.com', '$2y$10$CRPHIlF9I1cEd4iuOFJfDeYTK.JzIZ3WJ7rWeQPH1k3jbxaXO1zdC', '0868.422.466', 'Xuân Đỉnh, Bắc Từ Liêm, Hà Nội', NULL, 1, 1, NULL, '2018-12-04 10:27:03', '2018-12-04 10:27:03'),
(8, 'user2', 'user2@gmail.com', '$2y$10$88L5dys6GNRyhu8IpWtTUOpO3/McB/X7r3JArp0VxQVF4wMo8AOsi', '038.697.7166', 'Hà Khẩu, Quảng Ninh', NULL, 0, 0, 'UTanDPSpxRHt1FHVCdhfS6kJwxG0Z8ZJglH5sgYerWPSTWfU3xhZNdgxk4oj', '2018-12-04 11:08:02', '2018-12-04 14:16:00'),
(9, 'user3', 'user3@gmail.com', '$2y$10$bt8s/7e/3Yheb8ZDg/jH7OEKTf3ko.0UqkrQFXwBG8.G25CHn600S', '0984.666.777', 'Từ Sơn, Bắc Ninh', NULL, 0, 0, NULL, '2018-12-04 11:10:10', '2018-12-04 11:18:54'),
(10, 'user1', 'user1@gmail.com', '$2y$10$poZiZdwEbMW.57JJtOIZ9.ZCe3EkVg8GKBLp8g/iUZpMpc0X5fJr6', '0366244472', 'Thanh Sơn, Phú Thọ', NULL, 0, 0, 'Mkhb3KT0IKsIr1MUxftdvHCHP6u8E3MHiyhNTPOjKLTPO1dykaQX2jud584W', '2018-12-04 14:14:26', '2018-12-08 23:52:04'),
(11, 'user4', 'user4@gmail.com', '$2y$10$LiST3QJ1fKKQIBT/bZbHhuCVoqbjWSaoQ8dm6wfZdL3YIH0wpym3.', '0985.444.222', 'Yên Thế, bắc Giang', NULL, 1, 0, NULL, '2018-12-04 14:15:40', '2018-12-04 14:15:40'),
(12, 'user5', 'user5@gmail.com', '$2y$10$A/ELnciELgvJwFFHHJEYKuMEwIXmgjfos/9ROkQ26jVtaxocywQcm', '0914.111.222', 'Chương Mỹ, Hà Nội', NULL, 0, 0, '33Ec5VDFWDeex3aV2AIio9OSz1bfWYi78zooujVu8klVmYlhW67uqLY42XzL', '2018-12-04 14:17:51', '2018-12-04 14:17:51'),
(13, 'user6', 'user6@gmail.com', '$2y$10$wNaB448D6l.4jRH8HNe5NOPDlkQ4Fh.wMZfLImy4jDo4vDh.xyTu6', '0914.386.2310', 'Phủ Lý, Hà Nam', NULL, 0, 0, 'ow8Zd2U9hWfTVyYKbN7zIE55JGWew2UkzTZykyFJq9jFJ65JiSKrqMGeSjz6', '2018-12-04 14:37:13', '2018-12-04 14:37:13'),
(14, 'user10', 'user10@gmail.com', '$2y$10$N0U8iDcbToJhuyWHFhd3i.YC/j3MvNbfTcbtDFeCYc4bPlYFmUTe2', '083444555', 'Châu Thành, Long An', NULL, 0, 0, NULL, '2018-12-09 00:04:06', '2018-12-14 15:12:38'),
(15, 'user11', 'user11@gmail.com', '$2y$10$pCeSU6hxR/.wVEJ5sPkhuOWRQkTkfNy.5N1.lHAsVXpH3h5b687My', '0984567865', '485 Xuân Đỉnh, Bắc Từ Liêm, Hà Nội', NULL, 1, 0, NULL, '2018-12-14 15:11:29', '2018-12-14 15:11:29');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
