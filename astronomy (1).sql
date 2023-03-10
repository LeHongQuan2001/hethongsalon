-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2022 lúc 05:26 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `astronomy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `img`) VALUES
(1, 'admin', '08052000', '0a20818e18e4aadc3e7125aa6ba09e62.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `name_blog` varchar(40) NOT NULL,
  `date_blog` date NOT NULL,
  `scontent_blog` text NOT NULL,
  `lcontent_blog` text NOT NULL,
  `level_blog` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `user`, `name_blog`, `date_blog`, `scontent_blog`, `lcontent_blog`, `level_blog`) VALUES
(1, 'thinh', '9 KỸ NĂNG ĐỂ TRƠ THÀNH  TESTER ', '2022-02-24', 'Tester (kiểm thử) đang là một nghề siêu hot trong thời gian gần đây, đồng nghĩa với việc hành trình chạy đua đến những công việc “ngon nghẻ” cũng cạnh tranh hơn rất nhiều. Vậy làm gì để bạn trở thành một ứng viên nổi bật? Một Tester giỏi thì cần những kỹ năng gì?', 'Tester (kiểm thử) đang là một nghề siêu hot trong thời gian gần đây, đồng nghĩa với việc hành trình chạy đua đến những công việc “ngon nghẻ” cũng cạnh tranh hơn rất nhiều. Vậy làm gì để bạn trở thành một ứng viên nổi bật? Một Tester giỏi thì cần những kỹ năng gì?\r\nBài viết đã tổng hợp những điểm quan trọng về Tech (kỹ thuật) và Non-Tech (phi kỹ thuật) để bạn có thể hoàn thiện bản thân một cách toàn diện nhất. Hãy bỏ túi những kỹ năng sau đây để tự tin giành lấy công việc trong mơ trong nghề kiểm thử nhé!\r\nTechnical Skills\r\n𝟏. 𝐒𝐲𝐬𝐭𝐞𝐦𝐬 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭 𝐋𝐢𝐟𝐞 𝐂𝐲𝐜𝐥𝐞\r\nSystems Development Life Cycle (SDLC — Vòng đời phát triển hệ thống) là một chuỗi các pha (phases) trong chu trình phát triển một dự án phần mềm. Về cơ bản, một SDLC thường bao gồm 6 pha:\r\n- Pha 1: Planning (Pha kế hoạch)\r\n- Pha 2: Analysis (Pha phân tích)\r\n- Pha 3: Design (Pha thiết kế)\r\n- Pha 4: Development (Pha lập trình)\r\n- Pha 5: Testing (Pha kiểm thử)\r\n- Pha 6: Maintenance (Pha triển khai & bảo trì)\r\nLà một tester, việc nắm rõ SDLC không chỉ cho phép bạn hiểu sâu về quá trình phát triển sản phẩm, mà còn giúp bạn xây dựng kế hoạch kiểm thử dễ dàng hơn, dự đoán sớm những vấn đề phức tạp để có phương án đo lường, dự phòng từ trước.\r\nWaterfall, Scrum, Lean và Kanban là những phương pháp phổ biến được các công ty áp dụng để xây dựng SDLC. Hãy đảm bảo rằng bạn đã có khái niệm cơ bản về các phương pháp trên và đào sâu hơn vào phương pháp phù hợp nhất với yêu cầu công việc nhé.\r\n𝟐. 𝐓𝐞𝐬𝐭𝐢𝐧𝐠 𝐏𝐫𝐨𝐜𝐞𝐬𝐬\r\nCó 2 cách để thực hiện Testing Process (Quy trình kiểm thử), bao gồm: Manual Testing (kiểm thử thủ công) và Automation Testing (kiểm thử tự động).\r\nManual Testing: Giống như cái tên “Kiểm thử thủ công”, tester sẽ kiểm tra ứng dụng bằng cách đóng vai một người dùng cuối (end-user) để tìm ra bug. Việc của bạn là thực hiện tất cả các test cases một cách thủ công mà không sử dụng công cụ kiểm thử tự động nào.\r\nAutomation Testing: “Kiểm thử tự động” sử dụng các công cụ để tự động hóa quy trình kiểm thử. Ví dụ thay vì phải nhập từng email và password bằng tay khi test chức năng login, bạn sẽ chạy code để máy tự động nhập các dữ liệu này. Test Automation Engineer tại đây đã ví đây như một “cuộc cách mạng công nghiệp” khi tester có thể tối đa hiệu suất bằng các công cụ hiện đại, giúp giảm đáng kể thời gian và công sức bỏ ra.\r\nAutomation Testing không thể thay thế hoàn toàn Manual Testing. Tuy nhiên, nếu bạn muốn mở rộng lộ trình nghề nghiệp thì đây là một phương án rất đáng cân nhắc đấy nhé.\r\n𝟑. 𝐓𝐞𝐬𝐭𝐢𝐧𝐠 𝐓𝐨𝐨𝐥𝐬 𝐚𝐧𝐝 𝐓𝐞𝐜𝐡𝐧𝐨𝐥𝐨𝐠𝐢𝐞𝐬\r\nHiểu biết về các công cụ và công nghệ kiểm thử là những kỹ năng sống còn đối với mọi tester. Nó giống như việc bạn sẽ không thể đi cày mà không có trâu hay máy cày vậy!\r\nBài viết tổng hợp những công cụ kiểm thử phổ biến nhất trong thời gian qua. Tuy nhiên, bạn không cần phải “master” tất cả những thứ được nêu tên, mà hãy chọn những gì phù hợp với nhu cầu của mình đã nhé.\r\nTest Management Tools (Công cụ quản lý kiểm thử): Thường được dùng để quản lý các dự án, tài nguyên kiểm thử, lưu trữ kết quả kiểm thử, tạo báo cáo (reports),... Các công cụ quản lý kiểm thử thông dụng bao gồm TestRail, TestLink, Asana, Zephyr, và QMetry.\r\nAgile Testing Tools (Công cụ kiểm thử Agile): Nếu bạn đang/muốn làm trong một công ty áp dụng Agile/Scrum, bạn nên có hiểu biết hoặc kinh nghiệm làm việc với JIRA hay SoapUI.\r\nLoad Testing Tools (Công cụ kiểm thử chịu tải): Apache JMeter và Tsung là hai công cụ thường được các tester sử dụng khi thực hiện load test và stress tests.\r\nGiữa vô số công cụ kiểm thử, bạn lựa chọn những công cụ phù hợp nhất với công việc để đào sâu thay vì học lan man. (Nguồn: Memory Leak)\r\nDefect Tracking Tools (Công cụ quản lý lỗi): Để mọi thành viên (tester, developer, PM,...) đều nắm được các lỗi và trạng thái của chúng trong một dự án phần mềm, ta thường sử dụng các công cụ như QC, Bugzilla hay JIRA.\r\nAutomation Testing Tools (Công cụ kiểm thử tự động): Những công cụ này cho phép bạn kiểm tra các chức năng của phần mềm một cách tự động, từ đó chạy được nhiều tests hơn trong thời gian ngắn một cách hiệu quả. Những công cụ kiểm thử tự động thông dụng bao gồm Selenium, Watir và Ranorex. Tuy nhiên, chỉ biết lý thuyết về chúng là chưa đủ. Bạn cần có kinh nghiệm thực tế (qua dự án tại công ty, bài tập nhóm, hackathon, dự án cá nhân,...) thì mới có thể thực sự biết cách sử dụng các công cụ này.\r\n𝟒. 𝐊𝐢𝐞̂́𝐧 𝐭𝐡𝐮̛́𝐜 𝐜𝐨̛ 𝐛𝐚̉𝐧 𝐯𝐞̂̀ 𝐃𝐚𝐭𝐚𝐛𝐚𝐬𝐞/𝐒𝐐𝐋\r\nMỗi hệ thống phần mềm đều có một lượng lớn dữ liệu. Chúng có thể được lưu trữ trong nhiều kho dữ liệu khác nhau như Oracle, MySQL/NoSQL (Redis, MongoDB)/SQL Server (Query DB),... ở phần backend. Bởi vậy, tester cần có kiến thức cơ bản về các kho dữ liệu, cũng như cách sử dụng những câu truy vấn cần thiết để có thể truy cập vào database, tạo dữ liệu test mà không cần phải nhờ đến sự giúp đỡ từ các developers.\r\n𝟓. 𝐊𝐢𝐞̂́𝐧 𝐭𝐡𝐮̛́𝐜 𝐜𝐨̛ 𝐛𝐚̉𝐧 𝐯𝐞̂̀ 𝐥𝐚̣̂𝐩 𝐭𝐫𝐢̀𝐧𝐡 (𝐤𝐡𝐨̂𝐧𝐠 𝐛𝐚̆́𝐭 𝐛𝐮𝐨̣̂𝐜)\r\nBạn không bắt buộc phải biết code để ứng tuyển vào vị trí tester. Tuy nhiên, có kiến thức cơ bản về lập trình sẽ giúp bạn hiểu được cách các lập trình viên tạo ra sản phẩm, hiểu được các chức năng cũng như các lỗi thường gặp. Từ đó, việc tạo ra các test cases phù hợp cũng sẽ dễ dàng hơn rất nhiều.\r\n 𝐍𝐨𝐧-𝐓𝐞𝐜𝐡𝐧𝐢𝐜𝐚𝐥 𝐒𝐤𝐢𝐥𝐥𝐬\r\n𝟏. 𝐀𝐧𝐚𝐥𝐲𝐭𝐢𝐜𝐚𝐥 𝐬𝐤𝐢𝐥𝐥𝐬 (𝐊𝐲̃ 𝐧𝐚̆𝐧𝐠 𝐩𝐡𝐚̂𝐧 𝐭𝐢́𝐜𝐡)\r\nMột tester giỏi cần có kỹ năng phân tích sắc bén. Bạn cần có khả năng bẻ nhỏ các vấn đề phức tạp của hệ thống phần mềm thành những phần nhỏ hơn để tạo test cases cho chúng. Bạn chưa chắc về kỹ năng phân tích của mình? Hãy thử bài test này — nếu có thể giải được ít nhất 1 câu thì kỹ năng phân tích của bạn đã rất đỉnh rồi đấy!\r\n𝟐. 𝐂𝐨𝐦𝐦𝐮𝐧𝐢𝐜𝐚𝐭𝐢𝐨𝐧 𝐬𝐤𝐢𝐥𝐥𝐬 (𝐊𝐲̃ 𝐧𝐚̆𝐧𝐠 𝐠𝐢𝐚𝐨 𝐭𝐢𝐞̂́𝐩)\r\nNhiều bạn nghĩ rằng tester là một vị trí thiên về kỹ thuật nên không cần quá nhiều khả năng giao tiếp. Tuy nhiên, thực tế đã chứng minh ngược lại.\r\nTester thường làm việc với rất nhiều bên trong một dự án, ví dụ như cập nhật tình hình cho khách hàng, trao đổi các vấn đề (issues) với developers, biến các tài liệu về requirements thành test cases và báo cáo kết quả cho quản lý,... Trong bất cứ trường hợp nào, bất kể người đang nói chuyện với bạn là ai, mọi thông tin đều phải được truyền đạt một cách vô cùng chính xác và súc tích, đặc biệt là với những vấn đề phức tạp và có liên quan đến nhiều bên.\r\n𝐍𝐡𝐮̛̃𝐧𝐠 𝐤𝐲̃ 𝐧𝐚̆𝐧𝐠 𝐜𝐮̣ 𝐭𝐡𝐞̂̉ 𝐛𝐚𝐨 𝐠𝐨̂̀𝐦:\r\n- Kỹ năng đặt câu hỏi. Với bất cứ điều gì chưa rõ, hãy luôn đặt câu hỏi. Đây là một trong những kỹ năng quan trọng nhất bạn cần có khi trở thành một tester. Học cách hỏi đúng câu, đúng lúc là điều mà bạn sẽ luôn phải trau dồi trong suốt quá trình làm việc của mình.\r\n- Kỹ năng lắng nghe. Hãy lắng nghe một cách chủ động và có trách nhiệm. Điều này không chỉ giúp bạn hiểu rõ tình hình công việc hiện tại, mà còn giúp bạn nảy ra những ý tưởng để cải thiện nó.\r\n- Kỹ năng thuyết trình. Chỉ lắng nghe thôi là chưa đủ. Bạn cần biết cách trình bày ý kiến của mình một cách rõ ràng, mạch lạc với các bên liên quan. Hãy luôn đảm bảo mọi người đã biết đến các lỗi mà bạn tìm ra để sửa chúng kịp thời nhé.\r\n𝟑. 𝐓𝐢𝐦𝐞 𝐌𝐚𝐧𝐚𝐠𝐞𝐦𝐞𝐧𝐭 & 𝐎𝐫𝐠𝐚𝐧𝐢𝐳𝐚𝐭𝐢𝐨𝐧 𝐒𝐤𝐢𝐥𝐥𝐬 (𝐊𝐲̃ 𝐧𝐚̆𝐧𝐠 𝐪𝐮𝐚̉𝐧 𝐥𝐢́ 𝐭𝐡𝐨̛̀𝐢 𝐠𝐢𝐚𝐧)\r\nTester lúc nào cũng rất bận rộn, đặc biệt là những khi sắp release. Bởi vậy, nếu không quản lý được thời gian của mình, rất có thể bạn sẽ “ngập lụt” trong công việc và rơi vào cái vòng OT luẩn quẩn không hồi kết. Hãy học cách đặt ra thứ tự ưu tiên cho các đầu việc, thậm chí tạm thời nói “không” với những việc không quan trọng.\r\n𝟒. 𝐁𝐞 𝐏𝐫𝐨𝐚𝐜𝐭𝐢𝐯𝐞 𝐀𝐭 𝐖𝐨𝐫𝐤 (𝐋𝐚̀𝐦 𝐯𝐢𝐞̣̂𝐜 𝐜𝐡𝐮̉ đ𝐨̣̂𝐧𝐠)\r\nCông nghệ phần mềm thay đổi từng giờ, từng phút. Là một tester, bạn rất dễ tụt hậu nếu không liên tục những kiến thức và công nghệ mới. Bởi vậy, trước tiên hãy chủ động tìm kiếm và học hỏi những kiến thức liên quan đến kiểm thử và phát triển phần mềm, như các hướng tiếp cận mới, cách tăng hiệu suất công việc.\r\nThứ hai, hãy chủ động trong việc áp dụng kiến thức vào thực tế. Như đã nói ở trên, bạn không thể nói mình thành thạo Test Automation nếu chưa thực sự dùng nó trong một dự án cụ thể. Việc chủ động áp dụng kỹ thuật, công nghệ mới sẽ giúp bạn dày dặn kinh nghiệm và có chỗ đứng tốt hơn trong công việc.\r\n𝟒. 𝐁𝐞 𝐏𝐫𝐨𝐚𝐜𝐭𝐢𝐯𝐞 𝐀𝐭 𝐖𝐨𝐫𝐤 (𝐋𝐚̀𝐦 𝐯𝐢𝐞̣̂𝐜 𝐜𝐡𝐮̉ đ𝐨̣̂𝐧𝐠)\r\nCuối cùng, hãy chủ động trong toàn bộ quá trình làm việc. Bạn sẽ không thể trở thành Senior hay Manager nếu lúc nào cũng phải chờ người khác giao việc hay chỉ dẫn. Hãy chủ động học hỏi và đề xuất ý tưởng để cải thiện chất lượng sản phẩm. Và đừng quên hỏi nếu còn bất cứ điều gì chưa rõ nhé.\r\nNguồn got it', '1'),
(2, '', 'TÍNH NĂNG CẢNH BÁO TẤN CÔNG DDOS', '2022-02-24', 'CLOUDFLARE BỔ SUNG TÍNH NĂNG CẢNH BÁO TẤN CÔNG DDOS THEO THỜI GIAN THỰC CHO GÓI MIỄN PHÍ', 'Cloudflare vừa thông báo cho khách hàng sử dụng gói Miễn phí có thể nhận được cảnh báo thời gian thực về các cuộc tấn công HTTP DDoS đã được Cloudflare tự động phát hiện và giảm thiểu. \r\nCảnh báo DDoS theo thời gian thực đã được thông báo hơn một năm trước nhưng ban đầu chỉ cung cấp cho khách hàng sử dụng gói Pro trở lên. Thông báo này mở rộng tính năng cảnh báo DDoS cho người dùng gói Miễn phí.', '1'),
(3, '', '[FUN FACT]: Easy Game!', '2022-02-08', 'Truyền thuyết kể rằng, Elon Musk đã cày cuốn sách ngôn ngữ lập trình BASIC cho người mới bắt đầu chỉ vỏn vẹn 3 ngày (dù lộ trình trong sách phải là 6 tháng).', 'Truyền thuyết kể rằng, Elon Musk đã cày cuốn sách ngôn ngữ lập trình BASIC cho người mới bắt đầu chỉ vỏn vẹn 3 ngày (dù lộ trình trong sách phải là 6 tháng). Đây là một ngôn ngữ lập trình phổ biến trong những năm 1960 và vẫn được nhiều máy tính sử dụng trong những năm 1980.\r\nElon Musk bắt đầu phát triển trò chơi điện tử đầu tiên của mình. Năm 1984, ở tuổi 12, Elon Musk đã tạo ra trò chơi Blastar mà ta có thể tìm thấy với cú pháp: Blastar for HTML5.\r\nElon Musk đã khởi nghiệp, đăng kí bản quyền và bán trò chơi của mình cho công ty PC và Office Technology với giá 500 đô. Từ những bước đầu tiên trong thế giới lập trình rộng lớn, Elon Musk đã học được cách kiếm lợi nhuận. Sau thành công ban đầu này, Elon Musk nhận ra rằng đọc sách để học những điều mới là một điều vô cùng bổ ích. Khi được hỏi về trò chơi Blastar của mình, Elon Musk giải thích: \"Đó là một trò chơi tầm thường thôi... nhưng hay hơn Flappy Bird\".\r\nDù học nhanh đến thế nhưng khi hỏi đến ngôn ngữ lập trình nào mà Elon Musk thích nhất, anh vui vẻ đáp rằng: \"Tôi thích ngôn ngữ lập trình C hơn, bao gồm thêm cả C++ nữa nhé\".\r\n[ Trong cuốn tiểu sử của Ashlee Vance về Elon Musk, người ta nói rằng Elon đọc hai cuốn sách mỗi ngày khi còn nhỏ. Đến năm 15 tuổi, anh đã đọc hết tất cả sách trong thư viện địa phương của mình. ]', '2'),
(8, 'gode', 'thịnh đẹp trai', '2022-03-13', '33333333333333333', '444444444444444444', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Term` varchar(50) NOT NULL,
  `Subcrible` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `id_user` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobbie` varchar(50) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `register`
--

INSERT INTO `register` (`id_user`, `user`, `password`, `address`, `date`, `file`, `gender`, `hobbie`, `level`) VALUES
(12, 'thinh', '1', 'hà nội', '2022-04-13', '', 'nam', 'học ', '2'),
(24, 'gode', '1', 'Hà Nội', '2001-11-11', 'WIN_20220304_23_48_04_Pro.jpg', 'Nam', 'Xem phim', '2'),
(25, 'admin', '1', 'Hải Dương', '2000-02-02', 'WIN_20220405_07_48_20_Pro.jpg', 'Nam', 'Chơi game', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
