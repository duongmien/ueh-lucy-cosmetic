-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2022 lúc 07:39 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lucycossmetics`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`user_id`, `product_id`, `product_quantity`) VALUES
(1, 27, 2),
(1, 32, 1),
(1, 42, 2),
(2, 26, 1),
(2, 32, 2),
(2, 44, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `order_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `order_date`, `order_status`) VALUES
(1, 1, '2022-05-17', 0),
(2, 2, '2022-05-17', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_id`, `product_id`, `product_quantity`) VALUES
(1, 6, 2),
(1, 11, 1),
(1, 36, 2),
(1, 38, 1),
(2, 16, 1),
(2, 20, 2),
(2, 26, 1),
(2, 45, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_producer`
--

CREATE TABLE `tbl_producer` (
  `producer_id` int(11) NOT NULL,
  `producer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_producer`
--

INSERT INTO `tbl_producer` (`producer_id`, `producer_name`) VALUES
(1, 'LILYBYRED'),
(2, 'MAYBELLINE'),
(3, 'UNPA'),
(4, 'ROMAND'),
(5, 'CARENEL'),
(6, 'MERZY'),
(7, 'EXCLUSIVE COSMETIC'),
(8, 'IPEK'),
(9, 'LAMEILA'),
(10, 'L\'OREAL'),
(11, 'BNBG'),
(12, 'JKOSMEC'),
(13, 'CEIBA'),
(14, 'THE COCOON'),
(15, 'BODY SCRUBBER'),
(16, 'A BONNE'),
(17, 'DERLADIE'),
(18, 'NOT4U'),
(19, 'MISEEN'),
(20, 'GIRLZ ONLY'),
(21, 'PALETA'),
(22, 'MALISSA KISS'),
(23, 'BODYHOLIC'),
(24, 'DE MEMORIA'),
(25, 'W.DRESSROOM'),
(26, 'WELLDERMA'),
(27, 'P/S'),
(28, 'LIFETRONS'),
(29, 'HALIO'),
(30, 'K.SKIN'),
(31, 'BIBURY');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_sold` int(255) NOT NULL,
  `product_thumbnail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `product_preview` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `producer_id`, `category_id`, `product_name`, `product_price`, `product_sold`, `product_thumbnail`, `product_preview`) VALUES
(1, 1, 1, 'Son Thỏi Lì, Lên Màu Chuẩn Lilybyred Mood Cinema Velvet Epilogue 3.5g', 149000, 18, 'https://product.hstatic.net/1000006063/product/lilybyred_ee8a9bed80f1457c98d596bae18cff9d_1024x1024.jpg', NULL),
(2, 2, 1, 'Mascara Làm Dài Và Cong Mi, Không Lem Không Trôi Maybelline The Hyper Curl Mascara', 102000, 34, 'https://product.hstatic.net/1000006063/product/7_f3ebda96634545b5813cb70bb822005e_1024x1024.jpg', NULL),
(3, 3, 1, 'Mặt Nạ Ngủ Môi Dưỡng Ẩm Chống Lão Hóa Unpa Bubi Bubi Lip Mask 9g', 199000, 25, 'https://product.hstatic.net/1000006063/product/4622_0864548d0beb4d8dafc46f342aa943b2_1024x1024_cd94c0d1f1a84866bc51aafddd22d0bc_1024x1024.jpg', NULL),
(4, 4, 1, 'Son Kem Lì, Mịn Mượt Như Nhung Romand Milk Tea Velvet Tint 4.4g', 149000, 63, 'https://product.hstatic.net/1000006063/product/4912_121f6d9cde23493a912b2289a824c7df_1024x1024.jpg', NULL),
(5, 3, 1, 'Son Dưỡng Dưỡng Ẩm Cho Môi Căng Mọng Unpa Bubi Bubi Lip Ampule 10ml', 99000, 33, 'https://product.hstatic.net/1000006063/product/4942_33bed52e11e84eb9815b770fba58ce4d_1024x1024.jpg', NULL),
(6, 2, 1, 'Bút Kẻ Mắt Nước Siêu Sắc Mảnh, Không Lem Trôi Maybelline New York Hyper Sharp Liner Extreme 0.4g', 148000, 22, 'https://product.hstatic.net/1000006063/product/06_276b41f8b7c343deaf05a1d47f6819d3_1024x1024.jpg', NULL),
(7, 2, 1, 'Kem Lót Làm Mịn Da, Che Khuyết Điểm, Se Khít Lỗ Chân Lông Maybelline Baby Skin Pore Eraser 22ml', 115000, 74, 'https://product.hstatic.net/1000006063/product/6902395260646_6450cd5173324ebb83100516deea16cc_1024x1024.png', NULL),
(8, 5, 1, 'Mặt Nạ Ngủ Môi Dưỡng Ẩm, Loại Bỏ Da Chết Cho Môi Hồng Hào Căng Mọng Hàn Quốc Carenel Lip Night Mask 5g', 49000, 35, 'https://product.hstatic.net/1000006063/product/ddd_72d521f64b884fc7a16490a9881cf8d0_1024x1024_ad4f0a6b408f40c1ba1dbb4978c1e35f_1024x1024.jpg', NULL),
(9, 7, 2, 'Tẩy Da Chết Quế Hồi, Cam Chanh Body Eksklyuziv Kosmetik Gel Scrub 380g', 166000, 35, 'https://product.hstatic.net/1000006063/product/80e5335a57474629d1d7ffbbc6579a80-removebg-preview_d75ce29a968148b6a7f942dfaaeaeffd_1024x1024.png', NULL),
(10, 8, 2, 'Bông tẩy Trang 100% Cotton Thổ Nhĩ Kỳ Ipek Klasik Cotton Pads - 150 Miếng', 92000, 111, 'https://product.hstatic.net/1000006063/product/ipek-e-4_82ca528bf71544b4bbcc4c6ef909255c_1024x1024.jpg', NULL),
(11, 9, 2, 'Bông Tẩy Trang Lameila Makeup Cotton 3 Lớp Dày Dặn Làm Sạch Da CXT002', 57000, 13, 'https://product.hstatic.net/1000006063/product/4523_a571b39def4a4b9fa98fa9b5875cbe0e_1024x1024.jpg', NULL),
(12, 10, 2, 'Nước Tẩy Trang Làm Sạch Tươi Mát Cho Da Dầu và Nhạy cảm L\'Oreal Micellar Water 3-in-1 Refreshing Even For Sensitive Skin 400ml', 130000, 52, 'https://product.hstatic.net/1000006063/product/05_93363a869b4a45308dd980c50b9c2c48_1024x1024.jpg', NULL),
(13, 11, 2, 'Mặt Nạ Miếng Dưỡng Ẩm, Dưỡng Trắng, Giảm Mụn, Phục Hồi Da Hàn Quốc BNBG (Vitamin A, B C, E)', 170000, 52, 'https://product.hstatic.net/1000006063/product/392_1d2b73ca9cf1465cb3c33364d259dcd7_1024x1024.jpg', NULL),
(14, 12, 2, 'Mặt Nạ Tinh Chất Cấp Ẩm Chuyên Sâu Jkosmec Ultimate Hydrating Essence Mask', 140000, 83, 'https://product.hstatic.net/1000006063/product/jkosmec_new_2_b7b800dd5b194eafbbe82da51ce4a43a_1024x1024.jpg', NULL),
(15, 10, 2, 'Nước Tẩy Trang Làm Sạch Sâu 3 In 1 L\'Oreal Micellar Water Deep Cleansing 400ml', 148000, 36, 'https://product.hstatic.net/1000006063/product/m11_2af753c77e8642e994754f740cd7fe85_1024x1024.png', NULL),
(16, 13, 2, 'Bông Tẩy Trang 100% Cotton Ceiba Tree', 25000, 76, 'https://product.hstatic.net/1000006063/product/140_1d1b9997c39e431c956dc9aeaf179f3a_1024x1024.jpg', NULL),
(17, 7, 3, 'Tẩy Da Chết Quế Hồi, Cam Chanh Body Eksklyuziv Kosmetik Gel Scrub 380g', 166000, 73, 'https://product.hstatic.net/1000006063/product/80e5335a57474629d1d7ffbbc6579a80-removebg-preview_d75ce29a968148b6a7f942dfaaeaeffd_1024x1024.png', NULL),
(18, 14, 3, 'Tẩy Da Chết Body Làm Đều Màu Da Và Dưỡng Mịn Da Chiết Xuất Cà Phê Dak Lak The Cocoon Dak Lak Coffee Body Polish', 160000, 72, 'https://product.hstatic.net/1000006063/product/02_f3a422d0a72046ebb573f49de8d2bd3c_1024x1024.jpg', NULL),
(19, 15, 3, 'Găng Tay Tắm Tẩy Tế Bào Chết Đa Năng Chống Trượt Làm Sạch, Làm Sáng Da Body Scrubber Glove', 9000, 27, 'https://product.hstatic.net/1000006063/product/b16_master_a6cdbdb069744d4faf365f62940b76f3_1024x1024-removebg-preview_5b022413e7c34530be2c5e2163826c60_1024x1024.png', NULL),
(20, 14, 3, 'Combo Cocoon 04: Daklak Coffe - 2 Sản Phẩm (Tẩy Da Chết The Cocoon Dak Lak Coffee Body Polish, Kem Tẩy Da Chết The Cocoon Dak Lak Coffee Face Polish 150ml)', 233000, 95, 'https://product.hstatic.net/1000006063/product/z3342087418648_62f145548a63a74eb0666d8ca5fceb64_ddbceb2718a945c893e0f6bf58182724_1024x1024.jpg', NULL),
(21, 16, 3, 'Muối Tắm Sữa Bò Tẩy Tế Bào Chết Cơ Thể, Làm Sáng Da, Dưỡng Da Mịn Màng A Bonne Spa Milk Salt', 25000, 84, 'https://product.hstatic.net/1000006063/product/a_bonne_d82fc4697a6b48a6a5e772f37658f005_1024x1024.jpg', NULL),
(22, 14, 3, 'Bộ Sản Phẩm Tẩy Tế Bào Chết Môi Và Toàn Thân Chiết Xuất Cà Phê Đăk Lăk The Cocoon', 135000, 95, 'https://product.hstatic.net/1000006063/product/12_d4e08266bd8b41b895bb2562d0fd95b0_1024x1024.jpg', NULL),
(23, 17, 3, 'Xà Phòng Giảm Mụn Cơ Thể Derladie Body Cleansing Bar For Blemish Skin 50g', 98000, 47, 'https://product.hstatic.net/1000006063/product/8809713360355_3d70406a90c7466ba23e6cac7d698f64_1024x1024.png', NULL),
(24, 18, 3, 'Xịt trị mụn lưng, toàn thân Not4U Clear Body Mist 200ml', 279000, 37, 'https://product.hstatic.net/1000006063/product/1_4d1c9cdb4b2040aeb8b5bc6a7b99f0a8_1024x1024.jpg', NULL),
(25, 14, 4, 'Nước Dưỡng Tóc Giảm Gãy Rụng Và Làm Mềm Tóc Tinh Dầu Bưởi The Cocoon Pomelo Hair Tonic 140ml', 228000, 37, 'https://product.hstatic.net/1000006063/product/1_b7aae5e44375479ca5eba1d661489fd5_1024x1024.jpg', NULL),
(26, 20, 4, 'Dầu Gội Khô Girlz Only Dry Shampoo (Party Nights/ Dawn Til Dusk/ Dazzling Volume/ No Residue Nude)', 86000, 27, 'https://product.hstatic.net/1000006063/product/02851bf9e8f2f9445d77772cde9644e2_d28cd37354ce427dbcdcfca2066daa10_1024x1024.jpeg', NULL),
(27, 10, 4, 'Dầu Gội Giúp Tóc Suôn Mượt Chiết Xuất Tinh Dầu Hoa L\'Oreal Elseve Extraordinary Oil Shampoo', 150000, 73, 'https://product.hstatic.net/1000006063/product/12_66735293b14e43eb966d898c16a5ff50_1024x1024.jpg', NULL),
(28, 10, 4, 'Dầu Dưỡng Tóc Từ Tinh Dầu Hoa L\'Oreal Elseve Extraordinary Oil 100ml', 144000, 83, 'https://product.hstatic.net/1000006063/product/14_758f43536cea4467bc7df638adaa00be_1024x1024.jpg', NULL),
(29, 10, 4, 'Kem Ủ Tóc Suôn Mượt Chiết Xuất Tinh Dầu Hoa L\'Oreal Elseve Extraordinary Oil Ultra Nourishing Mask 200ml', 99000, 37, 'https://product.hstatic.net/1000006063/product/73_ea7e2ca63f8d43bbbcf0b2e900d91d6d_1024x1024.jpg', NULL),
(30, 19, 4, 'Dầu Gội Dưỡng Ẩm Phục Hồi Tóc Mise En Scène Scene Shining Moisture (date 10/2022)', 9000, 36, 'https://product.hstatic.net/1000006063/product/25.3_d85d86be0aa4485e980e264ec4b40ac0_1024x1024.png', NULL),
(31, 10, 4, 'Kem Ủ Phục Hồi Tóc L\'Oreal Elseve Total Repair 5 Deep Reparing Mask 200ml', 99000, 26, 'https://product.hstatic.net/1000006063/product/20_f91d4a14e9054437b0d21d1a30c9b923_1024x1024.jpg', NULL),
(32, 10, 4, 'Dầu Gội Phục Hồi Tóc Hư Tổn L\'Oreal Elseve Total Repair 5 Shampoo', 55000, 73, 'https://product.hstatic.net/1000006063/product/19_ace1739a048a46a0be9a980ff9c8bd53_1024x1024.jpg', NULL),
(33, 21, 5, 'Nước Hoa Dạng Xịt Không Cồn, Mùi Thơm Dịu Nhẹ Tự Nhiên Paleta Perfume 20ml', 176000, 37, 'https://product.hstatic.net/1000006063/product/90_d8b3913b703846d2a92bee121cedbcf7_1024x1024.png', NULL),
(34, 22, 5, 'Xịt Thơm Toàn Thân Hương Nước Hoa Malissa Kiss Body Mist Angel 88ml', 127000, 69, 'https://product.hstatic.net/1000006063/product/dd2_1b3623d728e44bf3b81fc4cfcb2e839a_1024x1024.jpg', NULL),
(35, 23, 5, 'Xịt Thơm Toàn Thân Bodyholic Stay Nudie Hair & Body Mist 100ml', 189000, 46, 'https://product.hstatic.net/1000006063/product/1_68a12832f01b4ac78f2a9b14bb0dde60_1024x1024.jpg', NULL),
(36, 24, 5, 'Nước Hoa Dạng Xịt De Memoria 30ml', 355000, 77, 'https://product.hstatic.net/1000006063/product/44_dd6a3aa865564a2baf6d95ef0318ddf3_1024x1024.jpg', NULL),
(37, 25, 5, 'Xịt Thơm Toàn Thân, Quần Áo W.Dressroom Dress & Living Clear Perfume 70ml', 111000, 36, 'https://product.hstatic.net/1000006063/product/1_20dc9dad637e4a7ca0f5b6e65b92e293_1024x1024.jpg', NULL),
(38, 22, 5, 'Xịt Thơm Toàn Thân Hương Nước Hoa Malissa Kiss Perfume Mist - Blossom 88ml', 131000, 47, 'https://product.hstatic.net/1000006063/product/d2_24f59bb5c40848a6b264062630ee6582_1024x1024.jpg', NULL),
(39, 22, 5, 'Xịt Thơm Toàn Thân Hương Nước Hoa Malissa Kiss Body Mist Sunshine 88ml', 131000, 89, 'https://product.hstatic.net/1000006063/product/dd1_e52d6e651fda49d48ae0939de9989c4a_1024x1024.jpg', NULL),
(40, 23, 5, 'Xịt Thơm Toàn Thân Và Tóc Bodyholic Hair & Body Mist 50ml', 129000, 66, 'https://product.hstatic.net/1000006063/product/201_c472bf90651945db80433505019e0700_1024x1024.jpg', NULL),
(41, 26, 6, 'Máy Rửa Mặt Làm Sạch Sâu, Kết Hợp Chức Năng Massage WellDerma Cleansing Fish', 267000, 34, 'https://product.hstatic.net/1000006063/product/t10_a70ef0a5cfd14537ba4a60da9ae13e04_1024x1024.png', NULL),
(42, 27, 6, 'Bàn Chải Điện Sạch Sâu, Công Nghệ Sóng Âm P/S S100 Pro Expertcare', 908000, 43, 'https://product.hstatic.net/1000006063/product/1_c9ea1a3c67a345f59c1293b9fac1f81c_1024x1024.png', NULL),
(43, 28, 6, 'Máy Massage Chống Lão Hóa Vùng Da Mắt Lifetrons EM-100', 623000, 72, 'https://product.hstatic.net/1000006063/product/98b145330fbe96e4734a5323a5284d2d_quot_4a96fe59a5ac42c98e3c3d6490e9953b_1024x1024.jpg', NULL),
(44, 29, 6, 'Máy Triệt Lông Cá Nhân Halio IPL Hair Removal Device', 3199000, 44, 'https://product.hstatic.net/1000006063/product/8_75b3bad3b445447f8e8fed8f7787d06d_1024x1024.png', NULL),
(45, 30, 6, 'Lược Chải Đa Năng Làm Thẳng Và Uốn Tóc K.Skin Hair Straigtener Comb KD380', 889000, 62, 'https://product.hstatic.net/1000006063/product/hinhdaidien_2bf14441ec6744ba8d7fd40602050e88_1024x1024.jpg', NULL),
(46, 28, 6, 'Máy Massage Chống Lão Hóa, Trị Liệu Mắt Lifetrons EM-700', 899000, 36, 'https://product.hstatic.net/1000006063/product/f3c8dcce79bd3703e4f0c135c5c0a42e_quot_13e021c8804a48d2832da33e6d6096df_1024x1024.jpg', NULL),
(47, 29, 6, 'Máy Đẩy Tinh Chất Dưỡng Trắng Halio Ion Cleansing & Moisturizing Beauty Device', 969000, 35, 'https://product.hstatic.net/1000006063/product/10_7298da62556944188a8e8faed5b13552_1024x1024.png', NULL),
(48, 31, 6, '\"SIÊU CÔNG NGHỆ TRẺ HÓA KHUÔN MẶT 4.0\" Mặt Nạ Ánh Sáng Dưỡng Trắng, Hỗ Trợ Trị Mụn, Chống Lão Hóa Da Bibury Skin Therapy Light Therapy Mask', 1199000, 25, 'https://product.hstatic.net/1000006063/product/cleansing__4min___8__8a272e88ee064ca99875b8c09f3eb90d_1024x1024.png', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`category_id`, `category_name`) VALUES
(1, 'Trang điểm'),
(2, 'Chăm sóc da'),
(3, 'Body Care'),
(4, 'Chăm sóc tóc'),
(5, 'Nước hoa'),
(6, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_phone`, `user_password`, `user_name`, `user_address`) VALUES
(1, '0911999001', '123456', 'User 1', '234 abc'),
(2, '0911999002', '123456', 'User 2', '312 ma');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `fk_cart_product` (`product_id`),
  ADD KEY `fk_cart_user_id` (`user_id`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dfdd` (`user_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_producer`
--
ALTER TABLE `tbl_producer`
  ADD PRIMARY KEY (`producer_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_Category` (`category_id`),
  ADD KEY `producer_id` (`producer_id`);

--
-- Chỉ mục cho bảng `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_producer`
--
ALTER TABLE `tbl_producer`
  MODIFY `producer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`);

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `fk_dtl_order` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`);

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `fk_Category` FOREIGN KEY (`category_id`) REFERENCES `tbl_product_category` (`category_id`),
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`producer_id`) REFERENCES `tbl_producer` (`producer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
