<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chính</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .container { width: 400px; margin: auto; padding: 20px; border: 1px solid #000; }
        button { padding: 10px; background: black; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>TRANG CHÍNH</h2>
        <p>Người dùng đã đăng nhập với tên <b><?php echo $_SESSION['username']; ?></b></p>
        <p>Email: <b><?php echo $_SESSION['email']; ?></b></p>
        <form action="logout.php" method="POST">
            <button type="submit">Đăng Xuất</button>
        </form>
    </div>
</body>
</html>