<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <title>تماس با ما</title>
    <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container my-5">
    <h1 class="mb-4">تماس با ما</h1>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">نام شما</label>
            <input type="text" class="form-control" id="name" placeholder="نام خود را وارد کنید" required />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید" required />
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">پیام شما</label>
            <textarea class="form-control" id="message" rows="4" placeholder="پیام خود را بنویسید" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

