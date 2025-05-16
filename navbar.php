<?php
// pages/navbar.php
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <link href="../assets/css/style.css" rel="stylesheet" />
    <div class="container">
        <a class="navbar-brand fw-bold" href="../index.php">عطر و ادکلن من</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="تغییر منو">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="../index.php">خانه</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">درباره ما</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">تماس با ما</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">گالری محصولات</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">بلاگ</a></li>
                <li class="nav-item"><a class="nav-link" href="articles.php">مقالات</a></li>
                <li class="nav-item"><a class="nav-link" href="../login.php">ورود / ثبت نام</a></li>
                <li class="nav-item"><a class="nav-link" href="../logout.php">خروج</a></li>

            </ul>
        </div>
    </div>
</nav>
