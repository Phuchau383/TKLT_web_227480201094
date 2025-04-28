<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trường Đại học Bạc Liêu - Quản lý nhân sự</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f9ff;
            color: #333;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
        }
        .header img {
            height: 70px;
        }
        .header .info {
            flex-grow: 1;
            margin-left: 20px;
        }
        .header .info h1 {
            margin: 0;
            font-size: 28px;
        }
        .header .info p {
            margin: 2px 0 0;
            font-size: 16px;
        }
        .header .title-right {
            font-weight: bold;
            font-size: 18px;
        }
        .container {
            display: flex;
            min-height: calc(100vh - 100px);
        }
        .sidebar {
            width: 250px;
            background-color: #e0ecff;
            padding: 20px;
            border-right: 1px solid #ccc;
        }
        .sidebar h3 {
            margin-top: 20px;
            font-size: 18px;
            color: #0056b3;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .sidebar a {
            display: block;
            margin: 10px 0;
            text-decoration: none;
            color: #333;
            font-size: 15px;
            padding: 5px 10px;
            border-radius: 4px;
        }
        .sidebar a:hover {
            background-color: #cce0ff;
            color: #0056b3;
        }
        .content {
            flex: 1;
            padding: 30px;
            background-color: white;
        }
        .content h2 {
            font-size: 24px;
            color: #0056b3;
            margin-bottom: 15px;
        }
        .content h3 {
            font-size: 20px;
            color: #0077cc;
            margin-top: 20px;
        }
        .content p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .content img {
            width: 100%;
            max-width: 500px;
            margin: 20px 0;
            display: block;
        }
        .footer {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="header">
    <img src="images.png" alt="Logo">
    <div class="info">
        <h1>TRƯỜNG ĐẠI HỌC BẠC LIÊU</h1>
        <p>BAC LIEU UNIVERSITY</p>
    </div>
    <div class="title-right">
QUẢN LÝ NHÂN SỰ
    </div>
</div>

<div class="container">
    <div class="sidebar">
        <h3>Trang chủ</h3>
        <a href="index.php">Giới thiệu</a>

        <h3>Đơn vị trực thuộc</h3>
        <a href="donvi/khoa_ktcn.php">Khoa KT&CN</a>
        <a href="donvi/khoa_supham.php">Khoa Sư phạm</a>
        <a href="donvi/khoa_nnns.php">Khoa NN&NS</a>
        <a href="donvi/khoa_ktvl.php">Khoa Kinh tế và Luật</a>

        <h3>Hồ sơ nhân viên</h3>
        <a href="hosonhanvien/danhsach.php">Danh sách</a>
        <a href="hosonhanvien/xem.php">Xem hồ sơ</a>
        <a href="hosonhanvien/them.php">Thêm hồ sơ</a>
        <a href="hosonhanvien/sua.php">Sửa hồ sơ</a>
        <a href="hosonhanvien/xoa.php">Xóa hồ sơ</a>

        <h3>Quản lý tiền lương</h3>
        <a href="quanlyluong/bangluong.php">Bảng lương</a>
        <a href="quanlyluong/capnhat.php">Cập nhật hồ sơ</a>
        <a href="quanlyluong/timkiem.php">Tìm kiếm</a>
        <a href="quanlyluong/tinhluong.php">Tính lương</a>
        <a href="quanlyluong/tinhthuong.php">Tính thưởng</a>
    </div>

    <div class="content">
    <h2>Giới thiệu Trường Đại học Bạc Liêu</h2>
    <h3>Tên tiếng Anh: BAC LIEU UNIVERSITY</h3>
    <h3>Tên viết tắt: ĐHBL - BLU</h3>

    <p>
        Trường Đại học Bạc Liêu (ĐHBL) được thành lập theo Quyết định số 1558/QĐ-TTg ngày 24/11/2006 của Thủ tướng Chính phủ, 
        là cơ sở giáo dục đại học công lập trực thuộc UBND tỉnh Bạc Liêu và chịu sự quản lý Nhà nước về giáo dục của Bộ Giáo dục và Đào tạo.
    </p>

    <img src="download.jfif" alt="Hình ảnh Trường Đại học Bạc Liêu">

    <h3>II. Sứ mệnh và Tầm nhìn</h3>
    <p><strong>Sứ mệnh:</strong> Đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, ứng dụng và chuyển giao công nghệ, 
    góp phần phát triển kinh tế - xã hội tỉnh Bạc Liêu và khu vực Đồng bằng sông Cửu Long.</p>
    <p><strong>Tầm nhìn đến năm 2030:</strong> Phấn đấu trở thành trường đại học ứng dụng, đào tạo đa ngành, đa lĩnh vực, 
    có uy tín trong nước và khu vực ASEAN.</p>

    <h3>III. Các ngành đào tạo</h3>
    <p>Trường tổ chức đào tạo ở các nhóm ngành:</p>
    <ul>
        <li>Công nghệ thông tin, Kỹ thuật điện - điện tử</li>
        <li>Nông nghiệp, Thủy sản</li>
        <li>Kinh tế, Quản trị kinh doanh, Kế toán</li>
        <li>Luật, Xã hội học</li>
        <li>Sư phạm Toán, Ngữ văn, Tiếng Anh, Giáo dục Mầm non, Giáo dục Tiểu học</li>
    </ul>

    <h3>IV. Cơ sở vật chất</h3>
    <p>
Trường có cơ sở vật chất khang trang với khuôn viên rộng rãi, phòng học lý thuyết và thực hành hiện đại, thư viện điện tử, 
        ký túc xá sinh viên, trung tâm nghiên cứu khoa học, phòng thực nghiệm đạt chuẩn khu vực.
    </p>

    <h3>V. Hoạt động nghiên cứu khoa học</h3>
    <p>
        Trường chú trọng đẩy mạnh nghiên cứu khoa học, thực hiện các đề tài ứng dụng phục vụ phát triển kinh tế - xã hội, 
        tổ chức hội thảo khoa học trong và ngoài nước, tham gia nhiều chương trình hợp tác quốc tế.
    </p>

    <h3>VI. Hợp tác quốc tế</h3>
    <p>
        Nhà trường đã thiết lập mối quan hệ hợp tác với nhiều trường đại học, viện nghiên cứu uy tín ở Nhật Bản, Hàn Quốc, Thái Lan, 
        nhằm nâng cao chất lượng đào tạo và nghiên cứu.
    </p>

    <h3>VII. Cam kết chất lượng</h3>
    <p>
        Trường Đại học Bạc Liêu cam kết đào tạo ra những thế hệ sinh viên năng động, sáng tạo, có kiến thức chuyên sâu, kỹ năng nghề nghiệp vững chắc, 
        đáp ứng nhu cầu của thị trường lao động và hội nhập quốc tế.
    </p>
</div>

</div>

<div class="footer">
    Địa chỉ: 178 Võ Thị Sáu, P.8, TP. Bạc Liêu | Điện thoại: 02913822653 | Email: mail@blu.edu.vn
</div>

</body>
</html>
