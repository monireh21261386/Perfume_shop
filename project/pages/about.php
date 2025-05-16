<?php
// صفحه درباره ما - about.php
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>درباره ما | فروشگاه عطر</title>
    <link href="../assets/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Tahoma', sans-serif;
            color: #444;
        }
        .about-header {
            background: url('../assets/images/about-bg.jpg') center center/cover no-repeat;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 0 0 10px rgba(0,0,0,0.7);
            border-radius: 8px;
            margin-bottom: 40px;
        }
        .about-header h1 {
            font-weight: 700;
            font-size: 3rem;
        }
        .about-content {
            background: white;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .highlight {
            color: #007bff;
            font-weight: 600;
        }
    </style>
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container my-5">

    <div class="about-header">
        <h1>درباره فروشگاه عطر ما</h1>
    </div>

    <div class="about-content">
        <p>فروشگاه <span class="highlight">عطر و ادکلن</span> ما با سال‌ها تجربه در صنعت زیبایی، متعهد به ارائه بهترین و با کیفیت‌ترین محصولات به شما عزیزان است.</p>
        <p>تیم ما از بهترین متخصصان انتخاب عطر تشکیل شده و با دقت فراوان، تنها برندهای معتبر و محبوب را در فروشگاه قرار می‌دهد.</p>
        <p>ما در تلاشیم تا تجربه خرید شما را با <span class="highlight">قیمت‌های رقابتی، ارسال سریع و پشتیبانی ۲۴ ساعته</span> به بهترین شکل ممکن ارائه دهیم.</p>
        <p>هدف ما <span class="highlight">رضایت کامل مشتری</span> و ایجاد رابطه‌ای بلندمدت بر پایه اعتماد است.</p>
    </div>

</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

