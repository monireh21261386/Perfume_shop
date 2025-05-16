<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>وبلاگ</title>
  <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <style>
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    .read-more {
      transition: all 0.3s;
    }
    .read-more:hover {
      color: #0d6efd;
      text-decoration: underline;
    }
  </style>
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container my-5">
  <h1 class="text-center mb-5">📚 وبلاگ تخصصی عطر و ادکلن</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

    <!-- مقاله ۱ -->
    <div class="col">
      <div class="card h-100">
         <img src="assets/images/blog3.jpg"  class="card-img-top" alt="blog3">
        <div class="card-body">
          <h5 class="card-title">چگونه عطر مناسب خود را انتخاب کنیم؟</h5>
          <p class="card-text">راهنمای انتخاب عطر بر اساس نوع پوست، فصل و شخصیت شما...</p>
        </div>
        <div class="card-footer bg-transparent border-top-0">
          <a href="https://www.perfume.com/article/perfume-tips" target="_blank" class="read-more">ادامه مطلب →</a>
        </div>
      </div>
    </div>

    <!-- مقاله ۲ -->
    <div class="col">
      <div class="card h-100">
        <img src="assets/images/blog2.jpg"  class="card-img-top" alt="blog2">
        <div class="card-body">
          <h5 class="card-title">فرق بین ادوپرفیوم، ادوتویلت و ادوکلن</h5>
          <p class="card-text">در این مقاله با انواع غلظت‌های عطر آشنا می‌شوید و یاد می‌گیرید چه زمانی از کدام استفاده کنید...</p>
        </div>
        <div class="card-footer bg-transparent border-top-0">
          <a href="https://www.fragrantica.com/articles" target="_blank" class="read-more">ادامه مطلب →</a>
        </div>
      </div>
    </div>

    <!-- مقاله ۳ -->
    <div class="col">
      <div class="card h-100">
         <img src="assets/images/blog1.jpg"  class="card-img-top" alt="blog1">
        <div class="card-body">
          <h5 class="card-title">نکات نگهداری عطر برای ماندگاری بیشتر</h5>
          <p class="card-text">عطرها موجوداتی حساس هستند! در این مقاله با روش‌های افزایش ماندگاری عطر آشنا شوید...</p>
        </div>
        <div class="card-footer bg-transparent border-top-0">
          <a href="https://www.gq-magazine.co.uk/grooming/article/how-to-store-fragrance" target="_blank" class="read-more">ادامه مطلب →</a>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

