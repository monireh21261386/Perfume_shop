<?php
session_start();
include("includes/db.php"); // اتصال به دیتابیس

$username = $_POST["username"];
$password = $_POST["password"];

$conn = mysqli_connect("localhost", "root", "", "testdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// امن‌سازی ورودی‌ها
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// بررسی وجود کاربر با این مشخصات
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    // ذخیره‌ی اطلاعات در سشن
    $_SESSION["username"] = $row["username"];
    $_SESSION["role"] = $row["role"];

    // تشخیص نقش کاربر و هدایت
    if ($row["role"] == "admin") {
        header("Location: admin/dashboard.php");
    } else {
        header("Location: index.php");
    }
    exit();
} else {
    echo "<script>alert('نام کاربری یا رمز عبور اشتباه است!'); window.location='login.php';</script>";
}

mysqli_close($conn);
?>
