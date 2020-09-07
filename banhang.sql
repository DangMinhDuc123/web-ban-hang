-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2020 lúc 10:18 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MinhDuc', 'admin@gmail.com', NULL, NULL, 1, NULL, '$2y$10$sNh0B5f2cQ8enod6Nnz0fuJRHYaO.TOnh/oagWIhJnX8HrPjG2FdG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_total_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `c_active` tinyint(4) NOT NULL DEFAULT '1',
  `c_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_total_product`, `c_active`, `c_title_seo`, `c_description_seo`, `c_keyword_seo`, `created_at`, `updated_at`) VALUES
(4, 'Điện Thoại', 'dien-thoai', 'fa-mobile', NULL, '0', 1, 'Điện Thoại Mới Nhất 2020', 'Điện Thoại Mới Nhất 2022', NULL, '2020-08-22 00:23:14', '2020-08-22 01:26:52'),
(5, 'Máy Tính', 'may-tinh', 'fa-laptop', NULL, '0', 1, 'Máy Tính 2020', 'Máy Tính 2020', NULL, '2020-08-22 00:24:03', '2020-08-22 00:24:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_21_093857_creare_categories_table', 1),
(4, '2020_08_22_132940_create_products_table', 2),
(5, '2020_08_27_170133_create_transactions_table', 3),
(6, '2020_08_27_170152_create_oders_table', 3),
(7, '2020_08_31_083536_create_admins_tables', 4),
(8, '2020_08_31_083536_create_admins_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(11) NOT NULL DEFAULT '0',
  `or_product_id` int(11) NOT NULL DEFAULT '0',
  `or_qty` tinyint(4) NOT NULL DEFAULT '0',
  `or_price` int(11) NOT NULL DEFAULT '0',
  `or_sale` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 1, 30000000, 0, NULL, NULL),
(2, 6, 3, 1, 500000000, 0, NULL, NULL),
(3, 7, 2, 1, 30000000, 0, NULL, NULL),
(4, 8, 2, 1, 30000000, 0, NULL, NULL),
(5, 9, 5, 2, 5000000, 0, NULL, NULL),
(6, 9, 1, 1, 200000, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(11) NOT NULL DEFAULT '0',
  `pro_price` int(11) NOT NULL DEFAULT '0',
  `pro_number` tinyint(4) NOT NULL DEFAULT '0',
  `pro_pay` tinyint(4) NOT NULL DEFAULT '0',
  `pro_sale` tinyint(4) NOT NULL DEFAULT '0',
  `pro_active` tinyint(4) NOT NULL DEFAULT '1',
  `pro_hot` tinyint(4) NOT NULL DEFAULT '0',
  `pro_view` int(11) NOT NULL DEFAULT '0',
  `pro_content` longtext COLLATE utf8mb4_unicode_ci,
  `pro_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_number`, `pro_pay`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_content`, `pro_title_seo`, `pro_description`, `pro_avatar`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`) VALUES
(1, 'Máy Tính Bảng Sam Sung Tab 10.5 inch', 'may-tinh-bang-sam-sung-tab-105-inch', 5, 200000, 10, 4, 0, 1, 1, 0, '<p>M&aacute;y T&iacute;nh Bảng Sam Sung Tab 10.5 inch</p>', 'Máy Tính Bảng Sam Sung Tab 10.5 inch', 'Máy Tính Bảng Sam Sung Tab 10.5 inch', '2020-08-26__1577112522-5mclgkl6-oppo-f9-tim-1.png', 'Máy Tính Bảng Sam Sung Tab 10.5 inch', NULL, '2020-08-24 01:09:28', '2020-09-07 01:15:26'),
(2, 'Iphone 2022', 'iphone-2022', 4, 30000000, 0, 4, 0, 1, 1, 0, '<p>Đỉnh cao c&ocirc;ng nghệ 2022</p>', NULL, 'Đỉnh cao công nghệ 2022', '2020-08-26__1577099110-xflazbr3-huawei-mate20-pro-xanhla-3.jpg', 'Đỉnh cao công nghệ 2022', NULL, '2020-08-25 02:05:00', '2020-09-07 01:15:18'),
(3, 'Iphone XXX 2022', 'iphone-xxx-2022', 4, 500000000, 50, 0, 0, 1, 1, 0, '<p>Iphone XXX 2022</p>', NULL, 'Iphone XXX 2022', '2020-08-26__1577096095-xbfieoij-iphone-xs-max.jpg', 'Iphone XXX 2022', NULL, '2020-08-25 07:57:40', '2020-08-29 00:34:05'),
(4, 'Samsung Galaxy Note 10 Lite', 'samsung-galaxy-note-10-lite', 4, 55555555, 100, 0, 0, 1, 1, 0, '<p>Samsung Galaxy Note 10 Lite</p>', NULL, 'Samsung Galaxy Note 10 Lite', '2020-08-25__dienthoai.png', 'Samsung Galaxy Note 10 Lite', NULL, '2020-08-25 08:03:08', '2020-08-29 00:33:48'),
(5, 'Samsung Galaxy Note 20', 'samsung-galaxy-note-20', 4, 5000000, 20, 4, 0, 1, 1, 0, '<h2><strong>Samsung Note 20 &ndash; M&agrave;n h&igrave;nh 2K tuyệt hảo v&agrave; b&uacute;t S-Pen cho trải nghiệm tiện &iacute;ch</strong></h2>\r\n\r\n<p>Sau h&agrave;ng loạt th&agrave;nh c&ocirc;ng từ những thế hệ&nbsp;<a href=\"https://cellphones.com.vn/mobile/samsung/galaxy-note.html\" target=\"_blank\" title=\"Samsung Galaxy Note chính hãng\">Galaxy Note</a>&nbsp;trước, Samsung lại tiếp tục khiến cộng đồng c&ocirc;ng nghệ phải ph&aacute;t cuồng với si&ecirc;u phẩm tiếp theo của m&igrave;nh &ndash;&nbsp;<strong>Samsung Galaxy Note 20</strong>, ra mắt c&ugrave;ng với&nbsp;<a href=\"https://cellphones.com.vn/samsung-galaxy-note-20-ultra.html\" target=\"_blank\">Note 20 Ultra</a>&nbsp;v&agrave; phi&ecirc;n bản 5G. Si&ecirc;u phẩm n&agrave;y hứa hẹn sẽ mang đến cho người d&ugrave;ng những trải nghiệm vượt trội hơn, mạnh mẽ hơn với một thiết kế tinh tế, ho&agrave;n hảo.</p>\r\n\r\n<h3><strong>Thiết kế kim loại nguy&ecirc;n khối v&agrave; mặt lưng k&iacute;nh cường lực tinh tế, sang trọng</strong></h3>\r\n\r\n<p>C&oacute; thể n&oacute;i, những thiết kế của Samsung lu&ocirc;n khiến cộng đồng đam m&ecirc; c&ocirc;ng nghệ phải say m&ecirc; khi v&ocirc; c&ugrave;ng tinh tế c&ugrave;ng với những gam m&agrave;u sang trọng. Sở hữu thiết kế kim loại nguy&ecirc;n khối, mặt lưng được l&agrave;m từ k&iacute;nh cường lực gi&uacute;p tăng độ b&oacute;ng bẩy cho smartphone, mang đến vẻ ngo&agrave;i đẳng cấp. Note 20 c&oacute; kiểu d&aacute;ng mạnh mẽ v&agrave; c&oacute; phần nam t&iacute;nh hơn với những g&oacute;c cạnh vu&ocirc;ng vức, mang đến cảm gi&aacute;c cầm tay chắc chắn.</p>\r\n\r\n<p><img alt=\"Thiết kế kim loại nguyên khối và mặt lưng kính cường lực tinh tế, sang trọng\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-8_1.jpg\" /></p>\r\n\r\n<p>Mặc d&ugrave; sở hữu m&agrave;n h&igrave;nh lớn nhưng k&iacute;ch thước của m&aacute;y vẫn kh&aacute; gọn nhờ viền m&agrave;n h&igrave;nh cực mỏng v&agrave; độ mỏng cũng v&ocirc; c&ugrave;ng ấn tượng, mang đến sự thanh tho&aacute;t, sang trọng.</p>\r\n\r\n<p><img alt=\"nhiều màu sắc lựa chọn\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-3_2.jpg\" /></p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh lớn 6.7 inch sử dụng c&ocirc;ng nghệ Dynamic AMOLED v&agrave; độ ph&acirc;n giải FullHD</strong></h3>\r\n\r\n<p>M&agrave;n h&igrave;nh 6.7 inch mở ra g&oacute;c nh&igrave;n lớn hơn, rộng hơn để bạn c&oacute; thể tận hưởng mọi thước phim, &ldquo;chiến&rdquo; game, xử l&yacute; h&igrave;nh ảnh, video,&hellip; ho&agrave;n hảo. Samsung lu&ocirc;n sử dụng những c&ocirc;ng nghệ ti&ecirc;n tiến nhất cho c&aacute;c sản phẩm smartphone của m&igrave;nh khi trang bị cho Note 20 m&agrave;n h&igrave;nh&nbsp;Dynamic AMOLED&nbsp;&ndash; m&agrave;n h&igrave;nh tốt nhất của Samsung. M&agrave;n h&igrave;nh Dynamic AMOLED với khả năng tự động điều chỉnh m&agrave;u sắc, 16 triệu m&agrave;u v&agrave; 100% dải m&agrave;u gi&uacute;p t&aacute;i tạo m&agrave;u sắc ch&acirc;n thực, ch&iacute;nh x&aacute;c, gần với thực tế để mang đến khung h&igrave;nh sống động, tuyệt vời.</p>\r\n\r\n<p><img alt=\"Màn hình lớn 6.7 inch sử dụng công nghệ Dynamic AMOLED và độ phân giải 2K\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-1_2.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, m&agrave;n h&igrave;nh&nbsp;<strong>Samsung Note 20</strong>&nbsp;với độ ph&acirc;n giải FullHD v&agrave; tỉ lệ m&agrave;n h&igrave;nh 19:9 cho mật độ điểm ảnh lớn, mang đến kh&ocirc;ng gian hiển thị sắc n&eacute;t. Ngo&agrave;i ra, với thiết kế m&agrave;n h&igrave;nh đục lỗ sẽ gi&uacute;p mở rộng viền m&agrave;n h&igrave;nh đến tối đa để bạn c&oacute; những trải nghiệm h&igrave;nh ảnh rộng hơn, tuyệt vời hơn.</p>\r\n\r\n<h3><strong>Tốc độ xử l&yacute; mạnh mẽ nhờ chip Snapdragon 865+/Exynos 990 v&agrave; RAM tới 8GB</strong></h3>\r\n\r\n<p>Galaxy Note 20 c&ograve;n c&oacute; hiệu năng vượt trội với tốc độ xử l&yacute; mạnh mẽ, xử l&yacute; mọi thao t&aacute;c t&aacute;c vụ một c&aacute;ch nhanh ch&oacute;ng nhờ chip xử l&yacute; Snapdragon 865/Exynos 990 v&agrave; RAM tới 8GB v&ocirc; c&ugrave;ng ấn tượng. Ở phi&ecirc;n bản US, điện thoại sẽ sở hữu con chip Snapdragon 865 v&agrave; ở c&aacute;c phi&ecirc;n bản c&ograve;n lại, chiếc si&ecirc;u phẩm n&agrave;y sẽ được trang bị con chip&nbsp;Exynos 990. Cả hai con chip n&agrave;y đều được sản xuất theo quy tr&igrave;nh 7nm v&agrave; c&oacute; khả năng hoạt động tương đương nhau để mang đến hiệu suất hoạt động như nhau ở cả 2 phi&ecirc;n bản.</p>\r\n\r\n<p><img alt=\"Tốc độ xử lý mạnh mẽ nhờ chip Snapdragon 865+/Exynos 990 và RAM tới 12GB\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-4_1.jpg\" /></p>\r\n\r\n<p>M&aacute;y c&oacute; bộ nhớ trong 256GB gi&uacute;p lưu trữ nhiều hơn những h&igrave;nh ảnh, video, b&agrave;i h&aacute;t,&hellip;</p>\r\n\r\n<h3><strong>Camera ch&iacute;nh với cảm biến cực khủng 64MP hỗ trợ nhiều t&iacute;nh năng chụp ảnh</strong></h3>\r\n\r\n<p>Camera của Samsung Galaxy Note 20 được n&acirc;ng cấp khi độ cảm biến của camera ch&iacute;nh được n&acirc;ng l&ecirc;n đến th&ocirc;ng số cực khủng 64MP. Với độ cảm biến 64MP chắc chắn bạn sẽ c&oacute; được những tấm ảnh v&ocirc; c&ugrave;ng sắc n&eacute;t v&agrave; xinh đẹp. B&ecirc;n cạnh đ&oacute;, m&aacute;y c&ograve;n hỗ trợ cho người d&ugrave;ng những t&iacute;nh năng chụp ảnh, quay phim th&ocirc;ng minh v&agrave; th&uacute; vị như quay si&ecirc;u chậm, Time Lapse, quay chậm, x&oacute;a ph&ocirc;ng, chụp ảnh g&oacute;c rộng v&agrave; g&oacute;c si&ecirc;u rộng, chống rung quang học,&hellip; để bạn c&oacute; thể ghi lại mọi khoảnh khắc một c&aacute;ch chuy&ecirc;n nghiệp, tạo ra những tấm ảnh v&ocirc; c&ugrave;ng ấn tượng.</p>\r\n\r\n<p><img alt=\"Camera chính với cảm biến cực khủng 108MP hỗ trợ nhiều tính năng chụp ảnh\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-5_1.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, camera selfie với độ cảm biến cao hỗ trợ quay video Full HD, l&agrave;m đẹp Beautify, Flash m&agrave;n h&igrave;nh,&hellip; sẽ gi&uacute;p bạn c&oacute; được những tấm ảnh selfie xinh đẹp, sắc n&eacute;t v&agrave; bạn c&oacute; thể sử dụng ch&iacute;nh chiếc điện thoại của m&igrave;nh quay những vlog hằng ng&agrave;y để chia sẻ với mọi người.</p>\r\n\r\n<h3><strong>B&uacute;t S-Pen hỗ trợ cho nhiều t&aacute;c vụ như ghi ch&eacute;p, chỉnh sửa ảnh,&hellip; si&ecirc;u tiện lợi</strong></h3>\r\n\r\n<p>Điểm nổi bật của d&ograve;ng Samsung Galaxy Note ch&iacute;nh l&agrave; b&uacute;t S-Pen si&ecirc;u tiện &iacute;ch với những hỗ trợ tuyệt vời cho người d&ugrave;ng trong qu&aacute; tr&igrave;nh sử dụng v&agrave;&nbsp;<strong>Note 20</strong>&nbsp;cũng kh&ocirc;ng ngoại lệ. B&uacute;t S-Pen được xem l&agrave; linh hồn của những chiếc Galaxy Note, gi&uacute;p bạn c&oacute; thể ghi ch&eacute;p th&ocirc;ng tin một c&aacute;ch nhanh ch&oacute;ng, đơn giản. B&ecirc;n cạnh đ&oacute;, b&uacute;t S-Pen c&ograve;n hoạt động như một chiếc điều khiển từ xa để bạn c&oacute; thể điều khiển smartphone của m&igrave;nh, chụp ảnh từ xa v&ocirc; c&ugrave;ng tiện lợi.</p>\r\n\r\n<p><img alt=\"Bút S-Pen hỗ trợ cho nhiều tác vụ như ghi chép, chỉnh sửa ảnh,… siêu tiện lợi\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-6_1.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, b&uacute;t S-Pen c&ograve;n hỗ trợ điều khiển bằng cử chỉ để bạn c&oacute; thể thực hiện c&aacute;c thao t&aacute;c như điều chỉnh ống k&iacute;nh camera, zoom, đổi m&agrave;u camera,&hellip;như đang sử dụng bằng tay.</p>\r\n\r\n<h3><strong>Pin ở mức 43000mAh hỗ trợ sạc nhanh 25W v&agrave; sạc kh&ocirc;ng d&acirc;y&nbsp;</strong></h3>\r\n\r\n<p>Với một chiếc si&ecirc;u phẩm như Samsung Note 20, việc trang bị một vi&ecirc;n pin c&oacute; dung lượng khủng để gi&uacute;p người d&ugrave;ng trải nghiệm smartphone l&acirc;u hơn l&agrave; điều v&ocirc; c&ugrave;ng cần thiết. Ch&iacute;nh v&igrave; thế m&agrave; smartphone sở hữu vi&ecirc;n pin dung lượng ở mức 4300mAh để người d&ugrave;ng c&oacute; thể sử dụng li&ecirc;n tục suốt ng&agrave;y d&agrave;i.</p>\r\n\r\n<p><img alt=\"Pin ở mức 5000mAh hỗ trợ sạc nhanh 55W và sạc không dây 25W\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-7_2.jpg\" /></p>\r\n\r\n<p>Hỗ trợ sạc nhanh 25W cung cấp năng lượng nhanh ch&oacute;ng, gi&uacute;p nạp nhanh pin cho smartphone để smartphone lu&ocirc;n sẵn s&agrave;ng mỗi khi sử dụng. Ngo&agrave;i ra, Samsung Galaxy Note 20 c&ograve;n hỗ trợ sạc kh&ocirc;ng d&acirc;y để bạn c&oacute; thể sạc pin tiện lợi hơn khi kh&ocirc;ng c&oacute; củ sạc.</p>\r\n\r\n<h3><strong>Cảm biến v&acirc;n tay v&agrave; mở kh&oacute;a gương mặt bảo mật an to&agrave;n, mở kh&oacute;a nhanh ch&oacute;ng</strong></h3>\r\n\r\n<p>Note 20 được trang bị cảm biến v&acirc;n tay dưới m&agrave;n h&igrave;nh v&agrave; nhận diện gương mặt gi&uacute;p mở kh&oacute;a smartphone nhanh hơn, kh&ocirc;ng cần phải nhập m&atilde; mỗi khi sử dụng điện thoại. B&ecirc;n cạnh đ&oacute;, cảm biến v&acirc;n tay v&agrave; gương mặt c&ograve;n c&oacute; t&iacute;nh bảo mật cao, gi&uacute;p bảo vệ c&aacute;c th&ocirc;ng tin ri&ecirc;ng tư của bạn an to&agrave;n hơn, kh&ocirc;ng sợ bị lộ mật khẩu điện thoại.</p>\r\n\r\n<p><img alt=\"Cảm biến vân tay và mở khóa gương mặt bảo mật an toàn, mở khóa nhanh chóng\" src=\"https://cdn.cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-note-20-9.jpg\" /></p>\r\n\r\n<h3><strong>Kết nối WiFi, bluetooth ổn định, cổng kết nối/cổng sạc 2 đầu Type-C</strong></h3>\r\n\r\n<p>Ở&nbsp;<strong>Galaxy Note 20</strong>, jack cắm 3.5mm sẽ bị loại bỏ, chỉ sử dụng một cổng sạc ki&ecirc;m cổng kết nối 2 đầu Type-C. Đ&acirc;y l&agrave; cổng kết nối phổ biến hiện tại v&agrave; cũng sở hữu những t&iacute;nh năng vượt trội hơn so với c&aacute;c cổng sạc th&ocirc;ng thường khi c&oacute; k&iacute;ch thước gọn hơn, hỗ trợ sạc pin, truyển tải dữ liệu, h&igrave;nh ảnh, kết nối với c&aacute;c thiết bị kh&aacute;c,&hellip; với tốc độ cao.</p>\r\n\r\n<p>Samsung Note 20 c&ograve;n hỗ trợ c&aacute;c kết nối kh&ocirc;ng d&acirc;y kh&aacute;c như kết nối WiFi chuẩn 802.11a/b/g/n/ac, WiFi Direct, WiFi hotspot, kết nối&nbsp;bluetooth 5.0, NFC gi&uacute;p chia sẻ dữ liệu, kết nối với c&aacute;c thiết bị bluetooth kh&aacute;c như tai nghe, loa,&hellip; với tốc độ nhanh ch&oacute;ng v&agrave; đường truyển ổn định.</p>\r\n\r\n<h2><strong>Mua điện thoại Galaxy Note 20 gi&aacute; tốt, ưu đ&atilde;i khủng tại CellphoneS</strong></h2>\r\n\r\n<p><strong>Samsung Galaxy Note 20 ch&iacute;nh h&atilde;ng</strong>&nbsp;sẽ l&agrave; chiếc si&ecirc;u phẩm đ&aacute;ng sở hữu nhất trong năm 2020 n&agrave;y khi sở hữu thiết kế thu h&uacute;t c&ugrave;ng với những t&iacute;nh năng v&ocirc; c&ugrave;ng tuyệt vời. Bạn c&oacute; thể đến ngay c&aacute;c cửa h&agrave;ng của CellphoneS tại H&agrave; Nội v&agrave; TP.HCM để sở hữu ngay chiếc si&ecirc;u phẩm n&agrave;y với mức gi&aacute; v&ocirc; c&ugrave;ng hấp dẫn. Cam kết sản phẩm ch&iacute;nh h&atilde;ng, c&oacute; bảo h&agrave;nh v&agrave; đổi trả ch&iacute;nh h&atilde;ng n&ecirc;n bạn c&oacute; thể tin tưởng v&agrave; y&ecirc;n t&acirc;m khi mua h&agrave;ng. Ngo&agrave;i ra, CellphoneS c&ograve;n hỗ trợ giao h&agrave;ng miễn ph&iacute; tận nơi to&agrave;n quốc v&agrave; hỗ trợ thanh to&aacute;n online cho kh&aacute;ch h&agrave;ng ở xa mua sản phẩm thuận tiện hơn.</p>', NULL, 'Samsung Galaxy Note 20', '2020-09-07__mint-final.jpg', NULL, NULL, '2020-09-07 00:51:38', '2020-09-07 01:15:26'),
(6, 'iPhone 11 128GB Chính hãng(VN/A)', 'iphone-11-128gb-chinh-hangvna', 4, 19000000, 22, 0, 0, 1, 1, 0, '<p>iPhone 11 128GB Ch&iacute;nh h&atilde;ng(VN/A)</p>', NULL, 'iPhone 11 128GB Chính hãng(VN/A)', '2020-09-07__iphone11-green-select-2019-2.jpg', NULL, NULL, '2020-09-07 00:55:15', '2020-09-07 00:55:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` int(11) NOT NULL DEFAULT '0',
  `tr_total` int(11) NOT NULL DEFAULT '0',
  `tr_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_phone`, `tr_address`, `tr_status`, `created_at`, `updated_at`) VALUES
(7, 3, 30000000, 'Hỏa TỐC', '0934518026', 'Phú Diễn Hà Nội Thanh Xuan 222', 1, '2020-08-28 02:37:40', '2020-08-29 01:16:09'),
(8, 3, 30000000, 'okokokoko', '0934518026', 'Ba Dinh Ha Noi', 0, '2020-08-28 23:57:22', '2020-08-28 23:57:22'),
(9, 4, 10200000, 'Giao hàng sớm nhất có thể', '0934518023', 'Lào Cao Yên Bái', 1, '2020-09-07 00:58:37', '2020-09-07 01:02:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'meo', 'abc110iabco1@gmail.com', '0934518026', NULL, 1, NULL, '$2y$10$2vt5Lt8Zp8fyMhdt7c0ruuoQ9aKftFQYUS50DpzJ5YGC1ku25DUdq', NULL, '2020-08-27 00:28:46', '2020-08-27 00:28:46'),
(4, 'Minh Duc', 'lovecode@gmail.com', '0934518023', NULL, 1, NULL, '$2y$10$njuzuE4PZRNgZA1NP.KRNOBwkz3B8GSeBepjxi59Hmsvtzq5T.60a', NULL, '2020-09-07 00:39:14', '2020-09-07 00:39:14');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_active_index` (`active`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD UNIQUE KEY `c_name_2` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`),
  ADD KEY `c_name` (`c_name`),
  ADD KEY `c_name_3` (`c_name`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oders_or_transaction_id_index` (`or_transaction_id`),
  ADD KEY `oders_or_product_id_index` (`or_product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_category_id_index` (`pro_category_id`),
  ADD KEY `products_pro_author_id_index` (`pro_pay`),
  ADD KEY `products_pro_active_index` (`pro_active`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_index` (`tr_user_id`),
  ADD KEY `transactions_tr_status_index` (`tr_status`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
