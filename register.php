<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ثبت‌نام | فروشگاه عطر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-dark text-light d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 450px;">
        <h3 class="text-center mb-4">ثبت‌نام کاربر جدید</h3>
        <form action="register_action.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">نام کاربری</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">ایمیل</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">ثبت‌نام</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <a href="login.php" class="text-info">قبلاً عضو شدی؟ ورود</a>
        </div>
    </div>

</body>
</html>

