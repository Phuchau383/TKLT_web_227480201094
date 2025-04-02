<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra thông tin (ở đây dùng dữ liệu cố định)
    if ($username === "admin" && $email === "admin@example.com" && $password === "123456") {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header("Location: mainpage.php");
        exit();
    } else {
        echo "<script>alert('Thông tin đăng nhập không hợp lệ!'); window.location.href='login.html';</script>";
    }
}
?>