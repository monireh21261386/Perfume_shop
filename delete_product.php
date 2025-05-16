<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = (int)$_GET['id'];

// واکشی تصویر محصول برای حذف فایل
$sql = "SELECT image FROM products WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows !== 1) {
    header("Location: dashboard.php");
    exit();
}

$product = $result->fetch_assoc();
$imageName = $product['image'];

$uploadFileDir = '../assets/images/';

$sqlDelete = "DELETE FROM products WHERE id=$id";
if ($conn->query($sqlDelete)) {
    // حذف فایل تصویر
    if (file_exists($uploadFileDir . $imageName)) {
        unlink($uploadFileDir . $imageName);
    }
    header("Location: dashboard.php?msg=delete_success");
    exit();
} else {
    echo "خطا در حذف محصول: " . $conn->error;
}
?>
