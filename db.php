<?php
// اطلاعات اتصال به دیتابیس
$host = "localhost";      // معمولا localhost هست
$username = "root";       // یوزرنیم دیتابیس
$password = "";           // پسورد دیتابیس (اگر داری وارد کن)
// نام دیتابیس که قبلاً ایجاد کردی
$database ="testdb";

// ساخت اتصال با MySQL با استفاده از mysqli
$conn = new mysqli($host, $username, $password, $database);

// بررسی اتصال
if ($conn->connect_error) {
    // اگر اتصال برقرار نشد، خطا نمایش بده و اسکریپت رو متوقف کن
    die("اتصال به دیتابیس برقرار نشد: " . $conn->connect_error);
}

// تنظیم charset به utf8mb4 برای پشتیبانی کامل از یونیکد (فارسی و اموجی و ...)
$conn->set_charset("utf8mb4");
?>
