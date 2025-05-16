<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "<script>alert('شما قبلاً وارد شده‌اید'); window.location.href = 'index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ورود | فروشگاه عطر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-dark text-light d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">ورود به حساب</h3>
        <form action="login_action.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">نام کاربری</label>
                <input type="text" class="form-control" id="username" name="username" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">ورود</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="register.php" class="text-info">ثبت‌نام نکردی؟ کلیک کن!</a>
        </div>
    </div>

</body>
</html>
