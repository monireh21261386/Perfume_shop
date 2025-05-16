<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = (int)$_POST['price'];

    // بررسی فایل تصویر
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileExtension, $allowedExtensions)) {
            // اسم فایل یکتا سازی
            $newFileName = uniqid() . '.' . $fileExtension;
            $uploadFileDir = '../assets/images/';
            $destPath = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // وارد کردن اطلاعات در دیتابیس
                $sql = "INSERT INTO products (name, price, image) VALUES ('$name', $price, '$newFileName')";
                if ($conn->query($sql)) {
                    header("Location: dashboard.php?msg=add_success");
                    exit();
                } else {
                    echo "خطا در درج محصول: " . $conn->error;
                }
            } else {
                echo "خطا در آپلود تصویر.";
            }
        } else {
            echo "فرمت تصویر مجاز نیست.";
        }
    } else {
        echo "فایل تصویر ارسال نشده یا خطا دارد.";
    }
} else {
    header("Location: add_product.php");
}
?>
