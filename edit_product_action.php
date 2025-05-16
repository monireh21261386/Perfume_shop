<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int)$_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = (int)$_POST['price'];

    // واکشی اطلاعات فعلی محصول
    $sql = "SELECT image FROM products WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows !== 1) {
        header("Location: dashboard.php");
        exit();
    }

    $product = $result->fetch_assoc();
    $imageName = $product['image'];

    // بررسی آپلود تصویر جدید
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = uniqid() . '.' . $fileExtension;
            $uploadFileDir = '../assets/images/';
            $destPath = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // حذف تصویر قدیمی
                if (file_exists($uploadFileDir . $imageName)) {
                    unlink($uploadFileDir . $imageName);
                }
                $imageName = $newFileName;
            } else {
                echo "خطا در آپلود تصویر جدید.";
                exit();
            }
        } else {
            echo "فرمت تصویر جدید مجاز نیست.";
            exit();
        }
    }

    // به‌روزرسانی دیتابیس
    $sqlUpdate = "UPDATE products SET name='$name', price=$price, image='$imageName' WHERE id=$id";
    if ($conn->query($sqlUpdate)) {
        header("Location: dashboard.php?msg=edit_success");
        exit();
    } else {
        echo "خطا در به‌روزرسانی محصول: " . $conn->error;
    }

} else {
    header("Location: dashboard.php");
    exit();
}
?>

