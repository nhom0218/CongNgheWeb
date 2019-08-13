-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2019 at 06:08 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khoacntt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `img`, `tieude`, `tomtat`, `noidung`, `ngaydang`) VALUES
(1, 'tuyensinh.png', 'Thông báo tuyển sinh địa học chính quy 2019', 'Theo đó, năm 2019, Trường Đại học Thủy lợi tuyển sinh 27 ngành và nhóm ngành,...', 'Theo đó, năm 2019, Trường Đại học Thủy lợi tuyển sinh 27 ngành và nhóm ngành, trong đó có 2 ngành Chương trình tiên tiến giảng dạy bằng Tiếng Anh. Trường tuyển sinh tại 3 cơ sở với tổng chỉ tiêu là 3700, trong đó: Tại cơ sở chính 175 Tây Sơn, Đống Đa, Hà Nội tuyển 2790 chỉ tiêu cho 27 ngành; tại cơ sở mở rộng Phố Hiến - Hưng Yên tuyển 330 chỉ tiêu cho 05 ngành và tại Cơ sở 2 – Thành Phố Hồ Chí Minh tuyển 580 chỉ tiêu cho 09 ngành.\r\n\r\nXem chi tiết thông báo\r\n\r\nMẫu phiếu đăng ký xét tuyển thẳng\r\n\r\nMẫu phiếu đăng ký xét tuyển học bạ\r\n\r\n', '2019-08-01'),
(2, 'kiniem.jpg', '60 năm - Gắn kết cựu sinh viên Trường Đại học Thủy lợi', 'Trải qua 1 năm hoạt động, Công tác cựu sinh viên Trường Đại học Thủy lợi không...', 'Trải qua 1 năm hoạt động, Công tác cựu sinh viên Trường Đại học Thủy lợi không ngừng được tăng cường với những hoạt động thiết thực. Mạng lưới cựu sinh viên cũng phát triển rộng khắp theo tỉnh, theo vùng, theo đơn vị công tác, theo lưu học sinh…lan tỏa đi hình ảnh của Trường Đại học Thủy lợi giàu truyền thống đoàn kết, sáng tạo và đổi mới', '2019-08-02'),
(3, 'chihoi.jpg', 'Chi hội cựu sinh viên khối cơ quan đầu tiên được ra mắt', 'Chi hội cựu sinh viên khối cơ quan trung ương đầu tiên được thành lập,...', 'Chi hội cựu sinh viên khối cơ quan trung ương đầu tiên được thành lập, Viện Quy hoạch Thủy lợi nơi công tác của 95% cán bộ, viên chức người lao động được đào tạo tại Trường Đại học Thủy lợi.Ngày 26/7 vừa qua, tại Viện Quy hoạch Thủy lợi đã diễn ra buổi lễ công bố quyết định thành lập chi hội Cựu sinh viên Viện Quy hoạch Thủy lợi. Đây là chi hội thứ 20 được thành lập trực thuộc Hội cựu sinh viên Trường Đại học Thủy lợi.', '2019-08-03'),
(4, 'banner1.jpg', 'Hội thảo Dự án tuyển chọn nguồn nhân lực chất lượng cao Nhật Bản', 'hi hội cựu sinh viên khối cơ quan trung ương đầu tiên được thành lập, Viện Quy hoạch Thủy lợi ........', 'TLU) – Sáng ngày 6/8, Trường Đại học Thủy lợi phối hợp với đoàn đại biểu Thành phố Tottori Nhật Bản và Công ty JIS tổ chức hội thảo giới thiệu dự án tuyển chọn kỹ sư, cử nhân chất lượng cao sang làm việc tại đất nước mặt trời mọc.Đoàn đại biểu gồm có đại diện chính quyền thành phố Tottori – Nhật Bản: Ông Ono Masami – Phó Giám đốc Sở kinh tế du lịch và Ông Tanimoto Asushi – Tổng quản bộ phận ủng hộ, thành lập doanh nghiệp; đại diện tập đoàn SKYBIRD ông Kato Shoichi – Tổng giám đốc; đại diện Học viện đào tạo Yatani Gakuen, trường Nhật ngữ Tottori Johoku Nihongo Gakko, ông Ishiura Tokiyoshi – Tổng giám đốc và bà Nagasato – Tổng giáo vụ. Đặc biệt còn có ông Hoàng Minh Điều – cựu sinh viên ĐHTL nay là Tổng giám đốc Công ty Cổ phần phát triển nhân lực JIS.\r\n\r\nLàm việc và tiếp đoàn, đại diện Trường Đại học Thủy lợi, GS.TS Nguyễn Trung Việt – Phó hiệu trưởng cảm ơn những thịnh tình của đại diện chính quyền thành phố Tottori cũng như của Công ty JIS đối với Nhà trường. Trong thời gian qua, Trường đã có nhiều hợp tác đào tạo và tuyển chọn nhân lực cho nhiều đối tác Nhật Bản. Giáo sư bày tỏ kỳ vọng cho những dự định hợp tác sắp tới diễn ra giữa các bên liên quan, làm tăng cơ hội việc làm cho sinh viên sau khi tốt nghiệp.\r\n\r\nCũng ngay trong sáng ngày 6/8, Trường Đại học Thủy lợi phối hợp với đoàn đại biểu Thành phố Tottori Nhật Bản và Công ty JIS tổ chức hội thảo giới thiệu dự án tuyển chọn kỹ sư, cử nhân chất lượng cao sang làm việc tại đất nước mặt trời mọc.', '2019-08-04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
