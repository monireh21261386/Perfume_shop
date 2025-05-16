<?php
session_start();

// اگر ادمین بود، می‌تونیم ریدایرکت کنیم به داشبورد، ولی این اختیاریه
// if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
//     header('Location: admin/dashboard.php');
//     exit();
// }

?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <title>فروشگاه عطر و ادکلن</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <style>
        /* سفارشی‌سازی منو */
        .navbar-nav .nav-link {
            font-weight: 600;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

<!-- منوی ناوبری -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">عطر و ادکلن EMA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="تغییر منو">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="#">خانه</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/about.php">درباره ما</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/contact.php">تماس با ما</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/gallery.php">گالری محصولات</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/blog.php">بلاگ</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/articles.php">مقالات</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">ورود / ثبت نام</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php">خروج</a></li>
                
            </ul>
        </div>
    </div>
</nav>

<!-- اسلایدر تبلیغات -->
<div id="promoCarousel" class="carousel slide" data-bs-ride="carousel" style="max-width: 900px; margin: 30px auto;">
    <div class="carousel-inner rounded shadow">
        <div class="carousel-item active">
            <img src="assets/images/bannerone.png" class="d-block w-100" alt="تبلیغ ۱" />
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                <h5>جدیدترین عطرهای تابستان</h5>
                <p>تخفیف ویژه تا ۵۰٪ فقط در این ماه!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/bannertwo.png" class="d-block w-100" alt="تبلیغ ۲" />
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                <h5>عطرهای مردانه کلاسیک</h5>
                <p>رایحه‌ای بی‌نظیر برای هر روز شما</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/bannerthree.png" class="d-block w-100" alt="تبلیغ ۳" />
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                <h5>ارسال رایگان سفارشات بالای ۲۰۰ هزار تومان</h5>
                <p>همین حالا سفارش دهید و بهره‌مند شوید</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">قبلی</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">بعدی</span>
    </button>
</div>
<!-- معرفی کوتاه -->
<div class="container text-center my-5 animate__animated animate__fadeIn">
    <h2 class="mb-3">به فروشگاه عطر و ادکلن ما خوش آمدید!</h2>
    <p class="lead text-muted">جدیدترین و بهترین عطرها را با بهترین قیمت از ما تهیه کنید.  
    کیفیت و اصالت کالا برای ما اولویت است.</p>
</div>

<!-- محصولات جدید -->
<section class="container my-5">
    <h3 class="mb-4 text-center border-bottom pb-2">محصولات جدید</h3>
    <div class="row g-4">
        <?php for($i = 1; $i <= 5; $i++): ?>
        <div class="col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm animate__animated animate__fadeInUp">
                <img src="assets/images/new<?= $i ?>.png" class="card-img-top" alt="محصول جدید <?= $i ?>">
                <div class="card-body">
                    <h5 class="card-title">عطر جدید <?= $i ?></h5>
                    <p class="card-text text-muted">توضیح کوتاه در مورد این محصول خاص.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-primary">۲۵۰,۰۰۰ تومان</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">خرید</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>

<!-- محصولات پرطرفدار -->
<section class="container my-5">
    <h3 class="mb-4 text-center border-bottom pb-2">محبوب‌ترین محصولات</h3>
    <div class="row g-4">
        <?php for($i = 1; $i <= 5; $i++): ?>
        <div class="col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm animate__animated animate__fadeInUp">
                <img src="assets/images/popular<?= $i ?>.png" class="card-img-top" alt="محصول پرطرفدار <?= $i ?>">
                <div class="card-body">
                    <h5 class="card-title">عطر پرطرفدار <?= $i ?></h5>
                    <p class="card-text text-muted">محبوب در بین کاربران خوش‌سلیقه ما.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">۳۲۰,۰۰۰ تومان</span>
                        <a href="#" class="btn btn-sm btn-outline-success">خرید</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>

<!-- پاورقی -->
<?php include "includes/theme-footer.php"; ?>

<!-- کتابخانه انیمیشن -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
