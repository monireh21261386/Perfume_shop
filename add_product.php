<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>افزودن محصول جدید</title>
    <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <h3 class="mb-4">افزودن محصول جدید</h3>
    <form action="add_product_action.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">نام محصول</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">قیمت (تومان)</label>
            <input type="number" class="form-control" id="price" name="price" min="0" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">تصویر محصول</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-success">افزودن</button>
        <a href="dashboard.php" class="btn btn-secondary">بازگشت</a>
    </form>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
