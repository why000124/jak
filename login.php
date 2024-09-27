<?php
session_start();
include 'config.php'; // ไฟล์เชื่อมต่อฐานข้อมูล

if (isset($_SERVER['REQUEST_METHOD'])) {
    $request_method = $_SERVER['REQUEST_METHOD'];
    // ทำงานกับ $request_method ต่อไป
} else {
    // กำหนดค่าเริ่มต้นหรือแจ้งเตือนว่าค่า REQUEST_METHOD ไม่มี
    $request_method = 'GET'; // หรือค่าที่เหมาะสม
}

?>