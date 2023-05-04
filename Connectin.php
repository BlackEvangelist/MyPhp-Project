<?php
// اطلاعات اتصال به دیتابیس
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

// ایجاد اتصال به دیتابیس
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // تنظیم خطاهای PDO برای پرتاب شدن خطا
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resCon= $conn->query('SET NAMES utf8');

    // ایجاد جدول با سه فیلد

    echo "اطلاعات کاربر با موفقیت در دیتابیس ذخیره شد";
} catch(PDOException $e) {
    echo "اتصال به دیتابیس ناموفق بود: " . $e->getMessage();
}

// بستن اتصال به دیتابیس
$conn = null;
