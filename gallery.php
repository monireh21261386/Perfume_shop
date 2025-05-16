<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>گالری محصولات</title>
  <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <style>
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    .card-img-top {
      height: 250px;
      object-fit: cover;
    }
    .badge-popular {
      position: absolute;
      top: 10px;
      left: 10px;
    }
  </style>
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container my-5">
  <h1 class="text-center mb-5">🛍️ گالری محصولات</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

    <!-- محصول 1 -->
    <div class="col">
      <div class="card h-100 position-relative">
        <span class="badge bg-danger badge-popular">پرفروش</span>
          <img src="assets/images/product3.png"  class="card-img-top" alt="عطر 1">
        <div class="card-body">
          <h5 class="card-title">عطر لجند مردانه</h5>
          <p class="card-text">رایحه‌ای تلخ و گرم، مناسب برای روزهای پاییزی و زمستانی.</p>
          <p class="text-muted">قیمت: <strong>850,000</strong> تومان</p>
          <button class="btn btn-outline-success w-100">افزودن به سبد خرید 🛒</button>
        </div>
      </div>
    </div>

    <!-- محصول 2 -->
    <div class="col">
      <div class="card h-100">
         <img src="assets/images/product2.png"  class="card-img-top" alt="عطر2">
        <div class="card-body">
          <h5 class="card-title">عطر زنانه فلورا</h5>
          <p class="card-text">رایحه‌ای شیرین و گلی، انتخابی خاص برای بانوان شیک‌پوش.</p>
          <p class="text-muted">قیمت: <strong>980,000</strong> تومان</p>
          <button class="btn btn-outline-success w-100">افزودن به سبد خرید 🛒</button>
        </div>
      </div>
    </div>

    <!-- محصول 3 -->
    <div class="col">
      <div class="card h-100 position-relative">
        <span class="badge bg-danger badge-popular">محبوب‌ترین</span>
        <img src="assets/images/product1.png"  class="card-img-top" alt="عطر 3">
        <div class="card-body">
          <h5 class="card-title">عطر یونیسکس سیلور</h5>
          <p class="card-text">ترکیب رایحه‌های خنک و ملایم، مناسب برای استفاده روزانه.</p>
          <p class="text-muted">قیمت: <strong>720,000</strong> تومان</p>
          <button class="btn btn-outline-success w-100">افزودن به سبد خرید 🛒</button>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
