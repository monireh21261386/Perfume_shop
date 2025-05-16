<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>مقالات</title>
  <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <style>
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      transition: 0.3s ease;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container my-5">
  <h1 class="mb-4 text-center">مقالات پیشنهادی درباره عطر و ادکلن</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

    <!-- مقاله 1 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://cdn.pixabay.com/photo/2016/11/29/05/18/perfume-1868284_1280.jpg" class="card-img-top" alt="مقاله ۱">
        <div class="card-body">
          <h5 class="card-title">راهنمای انتخاب عطر مناسب</h5>
          <p class="card-text">نکاتی برای انتخاب عطری که با شخصیت و استایل شما هماهنگ باشد.</p>
        </div>
        <div class="card-footer bg-transparent border-top-0 text-end">
          <a href="https://www.perfume.com/article/how-to-choose-a-fragrance" class="btn btn-outline-primary btn-sm" target="_blank">مطالعه مقاله</a>
        </div>
      </div>
    </div>

    <!-- مقاله 2 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://cdn.pixabay.com/photo/2017/08/02/00/49/perfume-2561616_1280.jpg" class="card-img-top" alt="مقاله ۲">
        <div class="card-body">
          <h5 class="card-title">تاریخچه عطر و ادکلن</h5>
          <p class="card-text">مروری جذاب بر تاریخچه‌ی عطر از مصر باستان تا دنیای مدرن.</p>
        </div>
        <div class="card-footer bg-transparent border-top-0 text-end">
          <a href="https://www.fragrantica.com/news/The-History-of-Perfume-16729.html" class="btn btn-outline-primary btn-sm" target="_blank">مطالعه مقاله</a>
        </div>
      </div>
    </div>

    <!-- مقاله 3 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://cdn.pixabay.com/photo/2015/09/18/19/03/perfume-944386_1280.jpg" class="card-img-top" alt="مقاله ۳">
        <div class="card-body">
          <h5 class="card-title">انواع رایحه‌های عطر</h5>
          <p class="card-text">آشنایی با خانواده‌های بویایی و اینکه کدام نوع برای شما مناسب است.</p>
        </div>
        <div class="card-footer bg-transparent border-top-0 text-end">
          <a href="https://www.basenotes.net/guides/fragrance-families/" class="btn btn-outline-primary btn-sm" target="_blank">مطالعه مقاله</a>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

