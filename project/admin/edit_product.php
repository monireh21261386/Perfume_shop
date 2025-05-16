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

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows !== 1) {
    header("Location: dashboard.php");
    exit();
}

$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>ویرایش محصول</title>
    <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <h3 class="mb-4">ویرایش محصول</h3>
    <form action="edit_product_action.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product['id'] ?>" />

        <div class="mb-3">
            <label for="name" class="form-label">نام محصول</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">قیمت (تومان)</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= (int)$product['price'] ?>" min="0" required>
        </div>

        <div class="mb-3">
            <label>تصویر فعلی:</label><br>
            <img src="../assets/images/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width:120px; border-radius:5px; margin-bottom:10px;">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">تصویر جدید (در صورت تغییر)</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" >
        </div>

        <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
        <a href="dashboard.php" class="btn btn-secondary">بازگشت</a>
    </form>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
