<?php
session_start();
include("includes/db.php"); // فایل اتصال به دیتابیس

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = "user"; // نقش پیش‌فرض
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// جلوگیری از SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// بررسی تکراری نبودن یوزرنیم
$check_user = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
if (mysqli_num_rows($check_user) > 0) {
    echo "<script>alert('این نام کاربری قبلاً ثبت شده است!'); window.location='register.php';</script>";
    exit();
}

// درج کاربر جدید
$sql = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('ثبت‌نام با موفقیت انجام شد!'); window.location='login.php';</script>";
} else {
    echo "<script>alert('خطا در ثبت‌نام. لطفاً دوباره تلاش کنید.'); window.location='register.php';</script>";
}

mysqli_close($conn);
?>
