
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>فروشگاه عطر و ادکلن</title>
    <link href="/assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/index.php">فروشگاه عطر و ادکلن</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="تغییر منو">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/index.php">خانه</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/about.php">درباره ما</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/contact.php">تماس با ما</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/gallery.php">گالری محصولات</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/rules.php">قوانین و مقررات</a></li>
                <li class="nav-item"><a class="nav-link" href="/pages/blog.php">مقالات</a></li>
                 <li class="nav-item"><a class="nav-link" href="../logout.php">خروج</a></li>

                <?php if (isset($_SESSION['user'])): ?>
                    <li class="nav-item"><a class="nav-link" href="../logout.php">خروج</a></li>

                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="/login.php">ورود</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
