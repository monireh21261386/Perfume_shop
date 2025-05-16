<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

$sql = "SELECT * FROM products ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>داشبورد مدیریت</title>
    <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
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

<div class="container my-5">
    <h2 class="mb-4">محصولات ثبت شده</h2>

    <?php if (isset($_GET['msg'])): ?>
      <div class="alert alert-success">
        <?php
          if ($_GET['msg'] == 'add_success') echo "محصول با موفقیت افزوده شد.";
          else if ($_GET['msg'] == 'edit_success') echo "محصول با موفقیت ویرایش شد.";
          else if ($_GET['msg'] == 'delete_success') echo "محصول با موفقیت حذف شد.";
        ?>
      </div>
    <?php endif; ?>

    <table class="table table-bordered table-striped table-hover text-center align-middle">
        <thead class="table-primary">
            <tr>
                <th>آیدی</th>
                <th>نام محصول</th>
                <th>قیمت (تومان)</th>
                <th>تصویر</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
              <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?= htmlspecialchars($row['id']) ?></td>
                  <td><?= htmlspecialchars($row['name']) ?></td>
                  <td><?= number_format($row['price']) ?></td>
                  <td><img src="../assets/images/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['name']) ?>" style="width:80px; border-radius:5px;"></td>
                  <td>
                    <a href="edit_product.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">ویرایش</a>
                    <a href="delete_product.php?id=<?= $row['id'] ?>" onclick="return confirm('آیا از حذف این محصول اطمینان دارید؟');" class="btn btn-sm btn-danger">حذف</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-danger">هیچ محصولی ثبت نشده است.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
