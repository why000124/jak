<?php
session_start();
session_destroy(); // ล้างข้อมูลใน session
header("Location: login.html"); // กลับไปหน้า login
exit;
?>
