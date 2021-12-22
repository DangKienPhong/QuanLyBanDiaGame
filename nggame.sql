-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 08:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nggame`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `ten_admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `ten_admin`, `mat_khau`) VALUES
(1, 'long', '39692159');

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_bv` int(11) NOT NULL,
  `id_dm_bv` int(11) NOT NULL,
  `ten_bv` text NOT NULL,
  `tac_gia` varchar(255) NOT NULL,
  `tom_tat` text NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_tao` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_bv`, `id_dm_bv`, `ten_bv`, `tac_gia`, `tom_tat`, `noi_dung`, `ngay_tao`) VALUES
(1, 1, 'Devil May Cry 5: Special Edition sắp ra mắt với nhiều cải tiến', 'Hạo Anh', 'Gần đây Capom đã thông báo về việc tựa game Devil May Cry 5: Special Edition sẽ được phát hành cùng ngày với PS5 tại sự kiện Playstation 5 Showcase.', 'Gần đây Capom đã thông báo về việc tựa game Devil May Cry 5: Special Edition sẽ được phát hành cùng ngày với PS5 tại sự kiện Playstation 5 Showcase.\r\n\r\nTheo đó Devil May Cry 5: Special Edition sẽ có nội dung mới và nhiều cải tiến chức năng và hình ảnh đáng kể, hầu hết trong số đó tận dụng sức mạnh phần cứng của hệ máy PS5. Các bổ sung nội dung chính bao gồm chế độ Turbo, tùy chọn độ khó của \"Hiệp sĩ bóng đêm huyền thoại\" và game thủ có thể điều khiển nhân vật Vergil.\r\n\r\nVề cải tiến đồ họa, Devil May Cry 5: Special Edition hứa hẹn sẽ tỏa sáng theo đúng nghĩa đen bằng cách tận dụng khả năng tính toán phản xạ ánh sáng của PS5. Nhờ đó, game sẽ có ánh sáng và bóng tối cực kỳ chân thực được tính toán theo thời gian thực thay vì được các nhà thiết kế thiết lập sẵn. Người chơi sẽ có quyền lựa chọn trải nghiệm đồ họa đỉnh cao bằng cách ưu tiên độ phân giải, nếu không họ có thể cài đặt chế độ ưu tiên tốc độ khung hình.\r\n\r\nNgoài đồ họa, Devil May Cry 5: Special Edition cũng sẽ cải tiến âm thanh với chất lượng âm thanh 3D ấn tượng của PS5. Cải tiến này hứa hẹn trong những cuộc chạm trán game thủ giờ đây sẽ có thể xác định vị trí của kẻ thù bằng âm thanh. Với những cải tiến này, Devil May Cry 5: Special Edition chắc chắn sẽ mang lại cảm giác đặc biệt phong cách hơn cả bản gốc.\r\n\r\nDevil May Cry 5: Special Edition sẽ được phát hành dưới định dạng kỹ thuật số trên Xbox Series X và Series S vào ngày 10.11 và PS5 vào ngày 12.11.', '2021-12-18'),
(3, 4, 'Đánh giá Spider-Man: Miles Morales – Nhện chuẩn “nhọ” phiêu lưu ký', 'Mọt Game', 'Spider-Man: Miles Morales đã xuất sắc nối bước thành công của người tiền nhiệm trước đây cũng như mở ra một chương mới cho series.', 'Spider-Man: Miles Morales đã xuất sắc nối bước thành công của người tiền nhiệm trước đây cũng như mở ra một chương mới cho series.\r\n\r\nĐánh giá Spider-Man: Miles Morales – Nhớ lại hồi năm 2016, studio Insomniac của Sony đã khiến cả làng game phải “đứng ngồi không yên” bằng việc cho công bố tựa game Spider-Man với nền tảng đồ họa cực đỉnh cùng với lối chơi  bay nhảy tự do trong môi trường thế giới mở hoành tráng.\r\n\r\nHai năm sau đó, tựa game về chàng Nhện nhọ được chính thức ra mắt giới mộ điệu và nhanh chóng gặt hái được nhiều thành công vang dội cũng như đạt được lượng sale vô cùng khả quan. Rất nhiều fan đã đánh giá rằng đây chính là phiên bản trò chơi điện tử hay nhất từ trước đến nay về một trong những siêu anh hùng quan trọng và nổi tiếng của Marvel.\r\n\r\nHành trình trưởng thành của Miles Morales\r\nNếu đã từng chơi qua phần game đầu tiên thì hẳn bạn sẽ nhận ra Miles Morales là một trong những nhân vật phụ quan trọng của trò chơi, tất nhiên đối với những ai là fan ruột của Marvel và đã từng coi qua bộ phim Into the Spider-Verse thì đều sẽ biết rằng Miles là một trong các nhân vật được vinh dự khoác lên mình bộ áo của siêu anh hùng Người Nhện. Câu chuyện trong Spider-Man: Miles Morales cũng có vài nét tương đồng như vậy bởi cậu thiếu niên Mile Morales trong thế giới của game cũng chính là người sẽ tiếp tục kế thừa trọng trách bảo vệ người dân của Peter Parker.\r\n\r\nMạch truyện chính trong Miles Morales nói về hành trình trưởng thành của Miles từ những ngày đầu chập chững theo chân “sư phụ” Peter Parker để tầm sư học đạo cho đến thời điểm cậu chính thức trở thành người bảo vệ chính thức của thành phố Manhattan sau khi người đàn anh của mình nói lời tạm biệt. Game khắc họa rất rõ nét và chân thực những khó khăn mà Miles phải trải qua khi cậu vừa phải gánh vác trên vai trách nhiệm nặng nề mà Peter để lại, vừa phải tạo dựng hình ảnh cho riêng mình để xứng đáng với danh xưng Spider-Man.\r\n\r\nTuy sở hữu cho mình câu chuyện hấp dẫn như vậy nhưng cá nhân tác giả lại cảm thấy thời lượng trong game thực sự chưa đủ để truyền tải hết các nội dung cũng như thông điệp mà nhà phát triển muốn hướng tới người chơi. Ngoài khuyết điểm nho nhỏ trên thì nhìn chung phần story của game vẫn để lại cho người chơi rất nhiều cảm xúc khác nhau và rất hy vọng Insomniac vẫn sẽ giữ được cách dẫn truyện tuyệt vời nói trên trong các phần Spider-Man trong tương lai.\r\n\r\nVà cuối cùng nhưng cũng không kém phần quan trọng, chính là tiết mục đu dây của gia đình nhà Nhện. Về phần này thì có lẽ các fan không cần phải lo lắng mấy bởi cảm giác đu dây giữa những tòa nhà chọc trời hay những dãy phố đông đúc của Manhattan vẫn giữ được nhịp độ phấn khích và nhanh đến chóng mặt giống như tựa game trước. Tuy vậy “xì tai” đu dây của nhọ trẻ Miles Morales có phần hơi khác biệt so với ông nhọ lớn Peter Parker bởi anh chàng da màu này là một thanh niên “trẻ trâu” chính hiệu 100%.', '2021-12-18'),
(4, 1, 'Phiên bản The Witcher 3: Wild Hunt dành cho console next-gen sẽ cập bến vào nửa cuối 2021', 'Vĩnh Tuấn', 'Vào tháng 9/2020, Red đã xác nhận thông tin sẽ có phiên bản mới của The Witcher 3 phù hợp với những console thế hệ mới những chưa công bố thời gian phát hành cụ thể. Bây giờ người hâm mộ đã có thể \"kê cao gối\" ngủ ngon đợi đến thời gian cuối năm để được trải nghiệm tựa game này ở cấu hình và đồ họa mạnh mẽ hơn.', 'Vậy là sắp tới, người hâm mộ sẽ có thể trải nghiệm The Witcher 3: Wild Hunt trên PS5 và Xbox Series X/S rồi. Mới đây, CD Projekt Red đã thông báo rằng phiên bản The Witcher 3: Wild Hunt dành cho console next-gen sẽ được hãng phát hành vào nửa cuối năm nay thông qua một buổi thuyết trình trực tuyến. Sau đó, trưởng phòng PR của Red cũng đã nhắc lại thông tin này một lần nữa thông qua Twitter cá nhân.\r\n\r\nVào tháng 9/2020, Red đã xác nhận thông tin sẽ có phiên bản mới của The Witcher 3 phù hợp với những console thế hệ mới những chưa công bố thời gian phát hành cụ thể. Bây giờ người hâm mộ đã có thể \"kê cao gối\" ngủ ngon đợi đến thời gian cuối năm để được trải nghiệm tựa game này ở cấu hình và đồ họa mạnh mẽ hơn. Phiên bản này sẽ được nâng cấp về mặt kỹ thuật để phù hợp với PC, PS5, Xbox Series X/S và sẽ đến tay cộng đồng game thủ theo dạng bản cập nhật miễn phí cho những người chơi đang sở hữu The Witcher 3: Wild Hunt trên console hoặc PC thế hệ hiện tại.\r\n\r\nNgoài ra, Red cũng tiết lộ rằng hãng đang tập trung nhiều vào The Witcher 3 để tận dụng phần cứng chơi game mạnh mẽ nhất. The Witcher 3: Wild Hunt Complete Edition sẽ có thêm các tính năng dò tia và thời gian tải nhanh hơn trên tựa game gốc và tất cả các bản mở rộng của nó trên PC và console next-gen.\r\n', '2021-12-18'),
(5, 1, 'Valorant sắp được chính thức phát hành tại Việt Nam', 'Mọt Game', 'Vào rạng sáng nay, tựa game Valorant đã chính thức ra mắt phiên bản 2.04. Theo đó, phiên bản này đã giới thiệu hàng loạt thay đổi dành cho đấu xếp hạng, sửa lỗi cũng như điệp viên mới có tên Astra. Đồng thời các game thủ cũng được diện kiến Battle Pass dành cho mùa giải mới.', 'Vào rạng sáng nay, tựa game Valorant đã chính thức ra mắt phiên bản 2.04. Theo đó, phiên bản này đã giới thiệu hàng loạt thay đổi dành cho đấu xếp hạng, sửa lỗi cũng như điệp viên mới có tên Astra. Đồng thời các game thủ cũng được diện kiến Battle Pass dành cho mùa giải mới.\r\n\r\nVới danh hiệu ‘người giữ cửa hạng Đồng và Bạc’, Mọt tui luôn dùng cách khoe skin súng mới mua để cảm thấy đỡ tủi thân hơn sau những lần ăn hành sấp mặt. Chính vì vậy sau khi mất kèo mua Battle Pass của Act 2 Episode 1, Mọt tui luôn dặn lòng rằng mình phải mua bằng được Battle Pass tiếp theo. Vì vậy khi Episode 2 chính thức cập bến, Mọt gà tui đã vào check ngay để không bỏ lỡ dịp thu thập chúng.\r\n\r\nTrong khi đang lang thang xem qua những khẩu súng xịn xò của Prism III, Polyfrog và Cavalier, Mọt tui đã không kềm lòng được và muốn mua ngay Battle Pass để mang những ‘bé yêu’ về bộ sưu tập. Trong những lần trước, mỗi lần người chơi muốn mua Battle Pass sẽ phải cần thẻ Visa để mua, còn’ đỗ nghèo khỉ’ như Mọt tui thì chưa bao giờ biết đến thẻ Visa nên chỉ có thể nhờ bạn bè nạp dùm. Những tưởng lần Battle Pass này không thể mua được, nhưng bất ngờ thay hệ thống thanh toán của Valorant đã chạy ngon lành.\r\n\r\nNgay sau khi thấy cổng thanh toán này, Mọt tui đã nghĩ ngay đến việc liệu Valorant đã sắp chính thức được ra mắt tại Việt Nam hay không? Và Valorant cũng sẽ được do chính VNG phát hành? Trước đó, mọi người đã biết rằng LMHT: Tốc Chiến được VNG phát hành tại Việt Nam. Vì vậy khả năng Riot tiếp tục tin tưởng VNG để phát hành tựa game bắn súng này tại Việt Nam cũng không hẳn là bất ngờ.\r\n\r\nVào cuối tháng 2 mới đây, Steelseries cũng đã thực hiện một buổi livestream kỉ niệm 20 năm tuổi ngay tại fanpage chính thức. Trong buổi livestream này có sự tham gia của ông Nguyễn Trần Sơn, đại diện của VNG Esports. Theo đó ông đã chia sẻ về tựa game Valorant như sau: “Trong tháng 3, tựa game này sẽ có nhiều hoạt động hơn nữa dành cho người chơi tại khu vực Việt Nam. Không chỉ vậy, Valorant cũng sẽ có một hệ thống giải đấu chuyên nghiệp trong thời gian tới“.\r\n\r\nVới sự chia sẻ của đại diện của VNG Esports về tựa game Valorant, mọi người gần như cũng đã đoán được rằng VNG cũng chính là nhà phát hành tựa game này tại Việt Nam. Thêm vào đó, thông tin “tựa game này sẽ có nhiều hoạt động hơn vào tháng 3 dành cho người chơi tại khu vực Việt Nam” cũng có thể ám chỉ rằng Valorant sẽ chính thức ra mắt trong tháng này.\r\n\r\nVà không để game thủ đợi lâu, công ty cổ phần VNG đã chính thức được Riot Games xác nhận là đơn vị phát hành sản phẩm VALORANT tại Việt Nam. Theo đó, cộng đồng game thủ Việt Nam sẽ có cơ hội tranh tài cùng những người chơi khác tại Đông Nam Á thông qua các server hiện có dành cho toàn khu vực.\r\n\r\nTheo kế hoạch, VNG sẽ chính thức phát hành sản phẩm VALORANT vào ngày 06.04 sắp tới. Vì vậy hãy cùng đón chờ sự ra mắt tựa game FPS đầu tiên của Riot Games tại Việt Nam vào đầu tháng 4 sắp tới nhé!', '2021-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_don_hang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_don_hang`, `id_sp`, `so_luong`, `don_gia`) VALUES
(17, 19, 2, 1234),
(17, 20, 1, 124),
(18, 19, 1, 1234),
(18, 20, 2, 124),
(18, 21, 1, 12345),
(19, 19, 3, 1270000),
(20, 19, 1, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmucbv`
--

CREATE TABLE `danhmucbv` (
  `id_dm_bv` int(11) NOT NULL,
  `ten_dm_bv` varchar(255) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmucbv`
--

INSERT INTO `danhmucbv` (`id_dm_bv`, `ten_dm_bv`, `ngay_tao`, `ngay_sua`) VALUES
(1, 'Phát Hành Game', '2021-12-17 15:56:06', '2021-12-17 15:56:58'),
(2, 'Hướng dẫn', '2021-12-17 15:56:06', '2021-12-17 15:56:06'),
(3, 'Tin tức', '2021-12-17 15:58:07', '2021-12-17 15:58:07'),
(4, 'Review', '2021-12-17 15:58:07', '2021-12-17 15:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_dm_sp` int(10) NOT NULL,
  `ten_dm_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background_dm_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_dm_sp`, `ten_dm_sp`, `background_dm_sp`, `ngay_tao`, `ngay_sua`) VALUES
(1, 'Hành Động', 'action.jpg', '2021-11-17 11:30:17', '2021-12-17 11:09:42'),
(2, 'RPG', 'gta.JPG', '2021-11-17 15:24:25', '2021-12-17 11:10:00'),
(3, 'Phiêu Lưu', 'adventure.jpg', '2021-11-18 09:12:27', '2021-12-17 11:10:15'),
(7, 'Võ Thuật', 'fighting.JPEG', '0000-00-00 00:00:00', '2021-12-17 11:11:26'),
(8, 'Thể Thao', 'sport.jpg', '0000-00-00 00:00:00', '2021-12-17 11:11:45'),
(9, 'Chiến Lược', 'strategy.jpg', '0000-00-00 00:00:00', '2021-12-17 11:16:03'),
(10, 'Đấu Súng', 'shooting.jpg', '0000-00-00 00:00:00', '2021-12-17 11:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_don_hang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ten_user` varchar(255) NOT NULL,
  `ngay_dat` date NOT NULL DEFAULT current_timestamp(),
  `dia_chi` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `thanh_tien` int(255) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL,
  `phuong_thuc_thanh_toan` varchar(30) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_don_hang`, `id_user`, `ten_user`, `ngay_dat`, `dia_chi`, `so_dien_thoai`, `email`, `thanh_tien`, `ghi_chu`, `phuong_thuc_thanh_toan`, `trang_thai`) VALUES
(17, 1, 'Phạm Tiến Long', '2021-12-13', '714/34 Nguyễn Trãi', '0934562', 'phamtienlong135@gmail.com', 2592, 'Hàng dễ vỡ', 'COD', 'Nhận đơn hàng'),
(18, 1, 'Phạm Tiến Long', '2021-12-13', 'Địa chỉ thứ 2', '13456', 'phamtienlong135@gmail.com', 13827, 'Đơn hàng thứ 2 trong ngày', 'Banking', 'Đang giao hàng'),
(19, 1, 'Phạm Tiến Long', '2021-12-15', 'ás', '123123', 'phamtienlong135@gmail.com', 3810000, 'đâsdada', 'Banking', 'Nhận đơn hàng'),
(20, 1, 'Phạm Tiến Long', '2021-12-17', 'địa chỉ chi tiet', '0934562', 'phamtienlong135@gmail.com', 1200000, 'Test đơn sau khi tách mô hình', 'COD', 'Nhận đơn hàng');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanhbv`
--

CREATE TABLE `hinhanhbv` (
  `id_hinhanh` int(11) NOT NULL,
  `ten_hinhanh` varchar(255) NOT NULL,
  `id_bv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinhanhbv`
--

INSERT INTO `hinhanhbv` (`id_hinhanh`, `ten_hinhanh`, `id_bv`) VALUES
(2, 'devil-may-cry-sap-ra-mat-2.jpg', 1),
(3, 'devil-may-cry-sap-ra-mat-3.jpg', 1),
(5, 'danh-gia-spider-man-miles-morales-2.jpg', 3),
(6, 'danh-gia-spider-man-miles-morales-3.jpg', 3),
(7, 'danh-gia-spider-man-miles-morales-bia.jpg', 3),
(8, 'devil-may-cry-sap-ra-mat-bia.jpg', 1),
(10, 'the-witcher-3-wild-hunt-duoc-gioi-thieu-bia.jpg', 4),
(11, 'the-witcher-3-wild-hunt-duoc-gioi-thieu-2.jpg', 4),
(12, 'the-witcher-3-wild-hunt-duoc-gioi-thieu-3.jpg', 4),
(13, 'valorant-sap-phat-hanh-bia.jpg', 5),
(14, 'valorant-sap-phat-hanh-2.jpg', 5),
(15, 'valorant-sap-phat-hanh-3.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `maqr`
--

CREATE TABLE `maqr` (
  `id_QR` int(11) NOT NULL,
  `ten_QR` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `website_su_dung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id_ncc` int(10) NOT NULL,
  `ten_ncc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_ncc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_ncc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`id_ncc`, `ten_ncc`, `email_ncc`, `sdt_ncc`) VALUES
(1, 'Bandai Namco', 'bandai_namco@gmail.com', '09245361525'),
(2, 'Electronic Arts', 'electronic_art@gmail.com', '0935154321'),
(3, 'Activision', 'activision@gmail.com', '09651342864'),
(4, 'Square Enix', 'square_enix@gmail.com', '0934561256'),
(5, 'Rockstar Games', 'rockstar_games@gmail.com', '0934526165');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `id_danhmuc` int(10) NOT NULL,
  `id_ncc` int(10) NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `he_may` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` int(255) NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_danhmuc`, `id_ncc`, `tinh_trang`, `he_may`, `ten_sp`, `don_gia`, `anh_sp`, `noi_dung`, `ngay_tao`, `ngay_sua`) VALUES
(19, 2, 1, 'Còn hàng', 'PS4', 'Elden Ring', 1200000, 'elden-ring-ps5.jpg', 'Golden Order đã bị phá vỡ.\r\n\r\nHãy trỗi dậy, Tarnished, để được ân huệ dẫn dắt đến sức mạnh của Elden Ring, trở thành Elden Lord ở Lands Between.\r\n\r\nTại Lands Between, nơi được cai trị bởi Queen Marika the Eternal, cội nguồn sức mạnh của Erdtree - Elden Ring đã tan vỡ.\r\n\r\nNhững đứa con của Marika, các á thần, đã thu thập các mảnh vỡ của Elden Ring, hay còn được biết đến là Great Runes. Chúng đã bị mê hoặc bởi nguồn sức mạnh mới mẻ đó và khơi mào cuộc chiến: The Shattering. Một cuộc chiến đồng nghĩa vói việc bị từ bỏ bởi Greater Will.', '2021-11-18 15:29:56', '2021-12-17 04:28:24'),
(20, 1, 1, 'Còn hàng', 'PS4', 'Code Vein', 1000000, 'code-vein-ps4.jpg', 'Code Vein đưa người chơi vào một thế giới hoang tàn, loạn lạc hiện đang trên bờ vực sinh tử. Bạn, cũng như bao người khác, là một Revenant (người trở về từ cõi chết) mang trong mình sự bất tử nhưng lại cần máu người để duy trì nguồn sống, nếu không bạn sẽ mất đi lý trí và dần hóa thành Lost – một sinh vật cuồng loạn lang thang trong thành phố truy tìm máu.\r\n\r\nBên cạnh phần cốt truyện hấp dẫn, Code Vein còn mang đến khả năng chỉnh sửa và tùy biến cực kỳ đa dạng cho bạn thỏa sức sáng tạo. Đầu tiên, một trọng những điểm bạn sẽ thích vào đầu game đó chính là việc trò chơi cung cấp rất nhiều dụng cụ cho phép bạn tinh chỉnh nhân vật theo ý thích của mình. Bất chấp giới tính nam hay nữ, người chơi đều có thể tự do tùy biến ngoại hình từ tóc tai, quần áo, khuôn mặt… với nhiều mẫu cực thời thượng, khiến cho đây là một trong những phần tốn thời gian và chất xám bậc nhất trong game.', '2021-11-18 15:43:07', '2021-12-17 04:57:01'),
(21, 10, 2, 'Còn hàng', 'PS5', 'Battlefield V', 1500000, 'battlefield-2042-ps5.jpg', 'Battlefield 5 là một game bắn súng góc nhìn thứ nhất được phát triển bởi EA DICE và phát hành bởi Electronic Arts. Battlefield V là phiên bản thứ 16 trong series game Battlefield. Game sẽ được phát hành trên toàn thế giới cho các nền tảng Microsoft Windows, PlayStation 4 và Xbox One vào ngày 20 tháng 11 năm 2018.\r\n\r\nNhững người đã đặt hàng trước phiên bản Deluxe Edition của trò chơi sẽ được cấp quyền truy cập sớm vào trò chơi từ ngày 15 tháng 11 năm 2018  và những ai đăng ký Origin Access Premium trên PC có thể truy cập trò chơi bắt đầu từ ngày 09 tháng 11 năm 2018.\r\n\r\nGame sẽ tiếp tục hành trình từ phiên bản tiền nhiệm Battlefield 1 bằng cách tập trung vào Chiến tranh thế giới thứ II.\r\n\r\nBattlefield 5 sẽ tập trung chủ yếu vào các tính năng và cơ chế khi phản ánh về sự tranh giành giữa các phe phái quốc gia, sự khan hiếm tài nguyên và loại bỏ dần sự trừu tượng để tăng tính hiện thực cho trò chơi. Sẽ có sự tập trung mở rộng vào việc tùy biến người chơi thông qua hệ thống Company mới, nơi người chơi sẽ có thể tạo nhiều nhân vật với nhiều tùy chọn về mỹ phẩm và vũ khí khác nhau. Các mặt hàng mỹ phẩm và tiền tệ được sử dụng để mua những mặt hàng khác sẽ kiếm được bằng cách hoàn thành các nhiệm vụ trong trò chơi.', '2021-11-18 16:44:55', '2021-12-17 04:58:56'),
(23, 1, 4, 'Hết hàng', 'PS5', 'Marvels Guardians Of The Galaxy', 1300000, 'marvels-guardians-of-the-galaxy-ps5.jpg', 'Tựa game Marvel\'s Guardians of the Galaxy hay còn được biết đến với cái tên quen thuộc Vệ Binh Dải Ngân Hà chỉ vừa mới ra mắt vào ngày 26/10 vừa qua đã thu hút được nhiều sự chú ý. Đáng nói nhất đó là tựa game nhận được rất nhiều lời khen so với các sản phẩm khác của Marvel trước đây.\r\n\r\nTheo nhận định từ một số game thủ trên các trang đánh giá uy tín, đa số đều công nhận Marvel\'s Guardians of the Galaxy tuy là phiên bản chuyển thể, có nhiều yếu tố vay mượn từ phim, nhưng tựa game lại chẳng hề tỏ ra bị lép vế hay có bất kì sự trùng lặp nào về mặt nội dung. Khiến cộng đồng game thủ hào hứng đón nhận, đặc biệt là với những ai đã từng xem qua cả 2 phần phim vốn đã quá nổi tiếng do đạo diễn James Gunn chủ trì. Chỉ sau một ngày ra mắt là game đã trở thành một trong những cái tên được nhiều game thủ quan tâm nhất. Theo số điểm được đánh giá trên các trang tin, tựa game của Square Enix đã nhận được 91% các phản hồi, đánh giá tích cực và vô số lời khen từ cộng đồng game thủ.', '2021-11-19 15:26:24', '2021-12-17 05:01:51'),
(24, 10, 2, 'Còn hàng', 'PS5, PS4', 'Crysis Remastered Trilogy', 1500000, 'crysis-remastered-trilogy-ps4.jpg', 'Crysis Remastered Trilogy vừa qua đã ra mắt đoạn trailer mới toanh kèm với ngày ra mắt chính thức của tựa game. Được biết phiên bản này là để tri ân với các fan lâu năm của dòng game, cải thiện lớp đồ họa cực kỳ đẹp mắt cùng với hiệu năng trọn vẹn khiến người chơi sẽ thỏa mãn với cả 3 phiên bản bao gồm Crysis 1, 2 và 3 đến từ Crytek.\r\n\r\nCrysis Remastered Trilogy sẽ bao gồm các phiên bản được làm lại của Crysis, Crysis 2 và Crysis 3, được tối ưu hóa mọi thứ trong game cùng với sự hợp tác của Saber Interactive. Trò chơi được lên kế hoạch phát hành trên PlayStation 5, Xbox Series X, Nintendo Switch và cho PC, nhà phát triển của tựa game cho hay “Trò chơi thậm chí còn mượt mà hơn trên PS5 và Xbox Series X/S bạn chắc chắn sẽ phải ngạc nhiên về tựa game mới của chúng tôi” theo Crytek. Bản làm lại của trò chơi Crysis gốc được phát hành vào năm ngoái và Crytek đã xác nhận rằng Crysis 2 và Crysis 3 cũng sẽ được bán lẻ bên cạnh gói “Trilogy”. \r\n\r\nNgười chơi hoàn toàn có thể tự do chọn lựa mua Trilogy hoặc combo 2 bản bán riêng tùy ý.\r\n', '2021-11-20 14:55:35', '2021-12-17 05:03:03'),
(25, 10, 3, 'Còn hàng', 'ps5', 'Call Of Duty Vanguard', 12500000, 'call-of-duty-vanguard-ps5.jpg', 'Call of Duty: Vanguard sẽ đưa người chơi trở về thời Thế Chiến thứ 2 quen thuộc nhưng chọn cách khai thác mang hơi hướm giả tưởng và phóng đại một tí so với lịch sử thật của các trận chiến. Vào vai 4 người lính kì cựu thuộc lực lượng đặc nhiệm sau chiến tranh, họ là Polina Petrova (Soviet), Arthur Kingsley (Anh), Wade Jackson (Mỹ) và Lucas Riggs (Úc). Do chính những thành viên của quân Đồng Minh tập hợp lại để tạo thành một toán đặc nhiệm đặc biệt. Với sứ mệnh được giao phó phải tìm kiếm các thông tin tuyệt mật bị cất giấu và phá hủy âm mưu được gọi là Project Phoenix – Kế Hoạch Phượng Hoàng. Mục đích của kế hoạch được tạo ra nhằm tìm kiếm người kế vị trùm Phát xít Đức Adolf Hitler.\r\n\r\nNếu xem qua phim hành động The Expendables chắc chắn bạn sẽ thấy sự tương đồng rõ rệt, mục đích của nhà phát triển là muốn tạo ra một lực lượng đặc nhiệm cảm tử với từng thành viên trong đó đều sở hữu những kỹ năng riêng biệt, cốt truyện của game sẽ đưa người chơi hành động xuyên suốt các phân đoạn từ đầu đến cuối. Các thành viên trong lực lượng đặc nhiệm gần như bất khả chiến bại, rất thích hợp với phong cách ám sát, tiêu diệt số lượng lớn kẻ địch. Cốt truyện sẽ dựa trên những trường đoạn hồi tưởng của mỗi nhân vật, để rồi tới những phân đoạn cuối họ sẽ cùng nhau kết hợp để cướp một đoàn tàu và mở đường máu tấn công vào căn chứ chỉ huy của Đức Quốc Xã.\r\n', '2021-11-20 14:56:58', '2021-12-17 05:04:14'),
(26, 8, 1, 'Hết hàng', 'PS4', 'Grand Theft Auto The Trilogy The Definitive Edition', 1200000, 'grand-theft-auto-the-trilogy-the-definitive-edition-ps4.jpg', 'Sau khoảng thời gian dài chờ đợi, Rockstar Game thông báo Grand Theft Auto: The Trilogy – The Definitive Edition hiện đã được phát hành cho PlayStation 5, PlayStation 4, Xbox Series X | S, Xbox One, Nintendo Switch và PC.\r\n\r\nPhiên bản đĩa của Grand Theft Auto: The Trilogy – The Definitive Edition cho các hệ máy là Xbox Series X|S và Xbox One, Nintendo Switch và PlayStation 4 cũng sẽ được phát hành vào ngày 7 tháng 12.\r\n\r\nGrand Theft Auto: The Trilogy – The Definitive Edition có các tính năng cải tiến toàn diện như điều khiển hiện đại lấy cảm hứng từ GTAV, nâng cấp đồ họa và môi trường bao gồm kết cấu độ phân giải cao hơn, ánh sáng và thời tiết nâng cao, v.v., mang đến các địa điểm mang tính biểu tượng của Thành phố Liberty, Vice City và San Andreas lên các nền tảng mới nhất, tôn vinh trải nghiệm của các tựa game gốc đồng thời nâng cao chúng cho một thế hệ người chơi hoàn toàn mới.\r\n', '2021-11-20 15:02:36', '2021-12-17 05:05:56'),
(27, 3, 1, 'Còn hàng', 'PS5', 'Tales Of Arise', 3213123, 'tales-of-arise-ps5.jpg', 'Tales of Arise là phần mới nhất của dòng game nhập vai Tales đình đám, mới được ra mắt trong năm 2021. Tựa game lấy bối cảnh thế giới bị chia ra 2 nửa, Dahna vẫn còn ở thời trung cổ còn Rena thì nắm giữ công nghệ và phép thuật hiện đại. Với sức mạnh áp đảo, Rena hoàn toàn kiểm soát Dahna, cướp bóc tài nguyên và xem người dân Dahna như nô lệ.\r\n\r\nCâu chuyện bắt đầu khi anh chàng Alphen đến từ Dahna và cô nàng Shionne đến từ Rena gặp nhau. Dahna thì mất đi ký ức còn Shionne thì mang một lời nguyền. Cùng nhau, họ sẻ chia lý tưởng và dấn thân vào cuộc hành trình trong thế giới đầy thú vị của game. Sau này họ còn có nhiều người đồng đội tham gia nữa.\r\n\r\nTựa game hành động nhập vai này đã có một màn khởi động mạnh như vũ bão khi đánh bại kỷ lục “nhiều người chơi cùng lúc trên Steam” của các đàn anh đi trước như Tales of Berseria và Tales of Zestiria. Không chỉ thế, nhà phát hành còn tự hào thông báo rằng Tales of Arise hiện đang bán được hơn 1 triệu bản trên toàn cầu. Theo trang Metacritic, tựa game này đạt số điểm trung bình (Metascore) là 86 trên nền tảng PC, cho thấy Tales of Arise được đón nhận nồng nhiệt. Mời các bạn cùng điểm qua những bài đánh giá từ những trang game nổi tiếng để có cái nhìn khái quát về tựa game này nhé.', '2021-11-20 15:03:43', '2021-12-17 05:07:09'),
(28, 9, 2, 'Còn hàng', 'PS5', 'The Medium - US', 3000000, 'the-medium-ps5-700x700h.jpg', 'The Medium là tựa game kinh dị gần đây nhất thành công, đặc biệt là khi bên trong nó kết hợp âm hưởng của nhiều game kinh dị nổi tiếng. Một trong số đó chính là Silent Hill, tựa game kinh điển một thời. Chủ đề mà game khai thác lại có nhiều nét tương đồng khi chọn thể loại kinh dị tâm linh, hơn hết thì đây lại là sở trường của nhà phát triển Bloober Team đến từ Ba Lan.\r\n\r\nGame sẽ dẫn dắt bạn đi qua chuyến hành trình đi tìm những lời giải đáp về năng lực bí ẩn của Marianne, nhân vật chính trong game. Cũng sẽ là người mà bạn điều khiển xuyên suốt chuyến hành trình với 2 thực thể khác nhau. Một bên là thực thể của thế giới thực tại và một bên là thế giới của linh hồn. Vào thời điểm những năm 1999, nước Ba Lan lúc bấy giờ khi vừa trải qua thời kỳ hậu cộng sản. Marianne luôn gặp phải những giấc mơ kỳ lạ luôn quấy rầy trong giấc ngủ của cô. \r\n\r\nBỗng một ngày xảy ra một cuộc gọi lạ không rõ từ đâu xuất hiện và chia sẻ sự thật với Marianne. Có vẻ như anh ta là người nắm rõ được thân phận thật sự của cô, đồng thời cũng biết cô đang sở hữu một thứ siêu năng lực kỳ lạ cho phép hồn rời khỏi xác để đi vào thế giới của những linh hồn. Tại đây, chính anh đã nhờ cô giúp con gái của mình vì cưỡng hiếp và giết hại. Marianne cũng mong muốn tìm ra sự thật nên cô sẵn sàng nhận lời để đi đến khu nghỉ dưỡng tại Niwa. Nơi đây giờ chỉ còn là một bãi tha ma bị bỏ hoang, từng có một cuộc thảm sát man rợ diễn ra tại đây. Vì điều đó mà nơi đây tồn tại rất nhiều linh hồn chết oan đang vất vưởng, hành trình của bạn sẽ bắt đầu ngay tại đây...', '2021-11-26 14:34:45', '2021-12-17 05:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `ten_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `ten_user`, `mat_khau`, `so_dien_thoai`, `email`, `dia_chi`) VALUES
(1, 'Phạm Tiến Long', '123', '02894564', 'phamtienlong135@gmail.com', 'New York'),
(2, 'Đặng Kiến Phong', '123', '0125464', 'dfff@gmail.com', 'Sài Gòn'),
(3, 'Đặng Kiến Phong', 'md5(wer)', '09864523', 'binvipro135@gmail.com', 'Tân Bình'),
(5, 'Trần Quốc Trọng', '09b5e8ed117d394342dae46af74e5ff5', '09415487', 'fabinhobrasilia@gmail.com', 'Bình Chánh'),
(6, 'long', 'd41d8cd98f00b204e9800998ecf8427e', '0654894655', 'fabinhobrasilia@gmail.com', 'Sài Gòn'),
(8, 'Đặng Kiến Phong', 'd41d8cd98f00b204e9800998ecf8427e', '01231242412', 'fabinhobrasilia@gmail.com', 'Tân Bình'),
(10, 'Đặng Kiến Phong', '202cb962ac59075b964b07152d234b70', '01254641', 'binvipro135@gmail.com', 'ásádasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_bv`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_don_hang`,`id_sp`);

--
-- Indexes for table `danhmucbv`
--
ALTER TABLE `danhmucbv`
  ADD PRIMARY KEY (`id_dm_bv`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_dm_sp`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_don_hang`);

--
-- Indexes for table `hinhanhbv`
--
ALTER TABLE `hinhanhbv`
  ADD PRIMARY KEY (`id_hinhanh`);

--
-- Indexes for table `maqr`
--
ALTER TABLE `maqr`
  ADD PRIMARY KEY (`id_QR`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id_ncc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `id_ncc` (`id_ncc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `danhmucbv`
--
ALTER TABLE `danhmucbv`
  MODIFY `id_dm_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id_dm_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hinhanhbv`
--
ALTER TABLE `hinhanhbv`
  MODIFY `id_hinhanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `maqr`
--
ALTER TABLE `maqr`
  MODIFY `id_QR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id_ncc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmucsp` (`id_dm_sp`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`id_ncc`) REFERENCES `nhacungcap` (`id_ncc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
