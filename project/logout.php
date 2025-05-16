<?php
session_start();
session_unset();     // حذف تمام متغیرهای سشن
session_destroy();   // پایان سشن
header("Location: login.php"); // هدایت به صفحه ورود
exit();
?>
