<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../includes/db.php'); // اتصال به دیتابیس
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>مدیریت محصولات</title>
  <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <style>
    .product-img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">پنل مدیریت</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="products.php">مدیریت محصولات</a></li>
        <li class="nav-item"><a class="nav-link" href="add_product.php">افزودن محصول</a></li>
        <li class="nav-item"><a class="nav-link" href="../logout.php">خروج</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>مدیریت محصولات</h3>
    <a href="add_product.php" class="btn btn-success">➕ افزودن محصول جدید</a>
  </div>

  <table class="table table-bordered table-hover text-center align-middle">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>تصویر</th>
        <th>نام محصول</th>
        <th>قیمت</th>
        <th>تاریخ ثبت</th>
        <th>عملیات</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $stmt = $conn->prepare("SELECT * FROM products ORDER BY created_at DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        $i = 1;
        while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><img src="../assets/images/products/<?= htmlspecialchars($row['image']) ?>" class="product-img"></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= number_format($row['price']) ?> تومان</td>
        <td><?= date("Y/m/d", strtotime($row['created_at'])) ?></td>
        <td>
          <a href="edit_product.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">ویرایش</a>
          <a href="delete_product.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('آیا مطمئنید؟')">حذف</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
