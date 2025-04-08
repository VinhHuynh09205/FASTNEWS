-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2025 lúc 11:09 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'ngocvy@gmail.com', '1234'),
(3, 'quynhhuong@gmail.com', '1234'),
(4, 'nhathuy@gmail.com', '1234'),
(5, 'nhuphuc@gmail.com', '1234'),
(6, 'quangvinh@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `image`, `author`, `created_at`, `category`, `is_featured`) VALUES
(6, 'Malaysia ủng hộ cách tiếp cận của Việt Nam', 'Thủ tướng Phạm Minh Chính điện đàm với Thủ tướng Anwar Ibrahim, trong đó lãnh đạo Malaysia ủng hộ cách tiếp cận của Việt Nam trong vấn đề với Mỹ.', 'Thủ tướng Anwar Ibrahim chia sẻ rằng Malaysia và nhiều nước trong khu vực hoan nghênh, đánh giá cao Tổng Bí thư Tô Lâm có cuộc điện đàm với Tổng thống Trump, bày tỏ nhất trí và ủng hộ cách tiếp cận của Việt Nam trong vấn đề này.\r\n\r\nÔng Ibrahim cũng thông báo một số biện pháp của Malaysia trên cương vị Chủ tịch ASEAN để giải quyết vấn đề Myanmar, nhấn mạnh chủ trương của Malaysia thúc đẩy đối thoại và đảm bảo đoàn kết, thống nhất trong giải quyết vấn đề Myanmar.\r\n\r\nThủ tướng Phạm Minh Chính hoan nghênh những nỗ lực của Malaysia trên cương vị Chủ tịch ASEAN, đồng thời cho biết về các biện pháp hỗ trợ nhanh chóng của Việt Nam giúp Myanmar ngay sau khi xảy ra động đất, bao gồm cử lực lượng cứu hộ hơn 100 người cùng nhiều trang thiết bị, vật tư y tế, thuốc men đến Myanmar và viện trợ 300.000 USD hỗ trợ nước này.\r\n\r\nThủ tướng khẳng định Việt Nam sẽ tiếp tục tích cực đồng hành với Malaysia và các nước thành viên ASEAN, sẵn sàng làm trung gian, hòa giải trong nỗ lực chung thúc đẩy đối thoại và hòa giải dân tộc tại Myanmar.', '1744101786_IMG_20240825_163212.jpg', 'Hồ Ngọc Vy', '2025-04-06 16:19:13', 'Thế giới', 0),
(9, 'Malaysia ủng hộ cách tiếp cận của Việt Nam với Mỹ', 'Thủ tướng Phạm Minh Chính điện đàm với Thủ tướng Anwar Ibrahim, trong đó lãnh đạo Malaysia ủng hộ cách tiếp cận của Việt Nam trong vấn đề với Mỹ.', 'Thủ tướng Anwar Ibrahim chia sẻ rằng Malaysia và nhiều nước trong khu vực hoan nghênh, đánh giá cao Tổng Bí thư Tô Lâm có cuộc điện đàm với Tổng thống Trump, bày tỏ nhất trí và ủng hộ cách tiếp cận của Việt Nam trong vấn đề này.\r\n\r\nÔng Ibrahim cũng thông báo một số biện pháp của Malaysia trên cương vị Chủ tịch ASEAN để giải quyết vấn đề Myanmar, nhấn mạnh chủ trương của Malaysia thúc đẩy đối thoại và đảm bảo đoàn kết, thống nhất trong giải quyết vấn đề Myanmar.\r\n\r\nThủ tướng Phạm Minh Chính hoan nghênh những nỗ lực của Malaysia trên cương vị Chủ tịch ASEAN, đồng thời cho biết về các biện pháp hỗ trợ nhanh chóng của Việt Nam giúp Myanmar ngay sau khi xảy ra động đất, bao gồm cử lực lượng cứu hộ hơn 100 người cùng nhiều trang thiết bị, vật tư y tế, thuốc men đến Myanmar và viện trợ 300.000 USD hỗ trợ nước này.\r\n\r\nThủ tướng khẳng định Việt Nam sẽ tiếp tục tích cực đồng hành với Malaysia và các nước thành viên ASEAN, sẵn sàng làm trung gian, hòa giải trong nỗ lực chung thúc đẩy đối thoại và hòa giải dân tộc tại Myanmar.', 'm.webp', 'Hồ Ngọc Vy', '2025-04-06 16:19:13', 'Công nghệ', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
