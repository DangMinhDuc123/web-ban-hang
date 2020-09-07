-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2020 lúc 09:26 AM
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
(4, 8, 2, 1, 30000000, 0, NULL, NULL);

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
(1, 'Máy Tính Bảng Sam Sung Tab 10.5 inch', 'may-tinh-bang-sam-sung-tab-105-inch', 5, 200000, 10, 0, 0, 1, 1, 0, '<p>M&aacute;y T&iacute;nh Bảng Sam Sung Tab 10.5 inch</p>', 'Máy Tính Bảng Sam Sung Tab 10.5 inch', 'Máy Tính Bảng Sam Sung Tab 10.5 inch', '2020-08-26__1577112522-5mclgkl6-oppo-f9-tim-1.png', 'Máy Tính Bảng Sam Sung Tab 10.5 inch', NULL, '2020-08-24 01:09:28', '2020-08-29 00:34:23'),
(2, 'Iphone 2022', 'iphone-2022', 4, 30000000, 0, 1, 0, 1, 1, 0, '<p>Đỉnh cao c&ocirc;ng nghệ 2022</p>', NULL, 'Đỉnh cao công nghệ 2022', '2020-08-26__1577099110-xflazbr3-huawei-mate20-pro-xanhla-3.jpg', 'Đỉnh cao công nghệ 2022', NULL, '2020-08-25 02:05:00', '2020-08-29 01:16:09'),
(3, 'Iphone XXX 2022', 'iphone-xxx-2022', 4, 500000000, 50, 0, 0, 1, 1, 0, '<p>Iphone XXX 2022</p>', NULL, 'Iphone XXX 2022', '2020-08-26__1577096095-xbfieoij-iphone-xs-max.jpg', 'Iphone XXX 2022', NULL, '2020-08-25 07:57:40', '2020-08-29 00:34:05'),
(4, 'Samsung Galaxy Note 10 Lite', 'samsung-galaxy-note-10-lite', 4, 55555555, 100, 0, 0, 1, 1, 0, '<p>Samsung Galaxy Note 10 Lite</p>', NULL, 'Samsung Galaxy Note 10 Lite', '2020-08-25__dienthoai.png', 'Samsung Galaxy Note 10 Lite', NULL, '2020-08-25 08:03:08', '2020-08-29 00:33:48');

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
(1, 3, 530000000, NULL, '0934518026', NULL, 0, NULL, NULL),
(2, 3, 530000000, NULL, '0934518026', NULL, 1, NULL, '2020-08-29 01:15:16'),
(3, 3, 530000000, NULL, '0934518026', NULL, 0, NULL, NULL),
(4, 3, 530000000, NULL, '0934518026', NULL, 0, NULL, NULL),
(5, 3, 530000000, NULL, '0934518026', NULL, 0, NULL, NULL),
(6, 3, 530000000, NULL, '0934518026', NULL, 0, NULL, NULL),
(7, 3, 30000000, 'Hỏa TỐC', '0934518026', 'Phú Diễn Hà Nội Thanh Xuan 222', 1, '2020-08-28 02:37:40', '2020-08-29 01:16:09'),
(8, 3, 30000000, 'okokokoko', '0934518026', 'Ba Dinh Ha Noi', 0, '2020-08-28 23:57:22', '2020-08-28 23:57:22');

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
(3, 'meo', 'abc110iabco1@gmail.com', '0934518026', NULL, 1, NULL, '$2y$10$2vt5Lt8Zp8fyMhdt7c0ruuoQ9aKftFQYUS50DpzJ5YGC1ku25DUdq', NULL, '2020-08-27 00:28:46', '2020-08-27 00:28:46');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
