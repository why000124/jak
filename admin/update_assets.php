<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $currentLink = $_POST['current_link'];
    $newFileLink = null;
    $uploadDir = "../assets/uploads/"; // เปลี่ยนโฟลเดอร์เป็น assets/uploads

    // ตรวจสอบว่ามีการอัปโหลดไฟล์ใหม่หรือไม่
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $uploadedFileName = basename($_FILES['file']['name']);
        $targetFile = $uploadDir . $uploadedFileName;

        // ย้ายไฟล์ไปยังโฟลเดอร์ assets/uploads
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            $newFileLink = "assets/uploads/" . $uploadedFileName; // ลิงก์สำหรับเก็บในฐานข้อมูล
        } else {
            die("Error uploading the file.");
        }
    }

    // อัปเดตข้อมูลในฐานข้อมูล
    if ($newFileLink) {
        // ลบไฟล์เก่า (หากมี)
        if (file_exists("../" . $currentLink)) {
            unlink("../" . $currentLink);
        }

        $sql = "UPDATE assets SET link = ?, description = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $newFileLink, $description, $id);
    } else {
        // กรณีไม่มีไฟล์ใหม่ อัปเดตเฉพาะคำอธิบาย
        $sql = "UPDATE assets SET description = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $description, $id);
    }

    // ดำเนินการอัปเดต
    if ($stmt->execute()) {
        header("Location: admin.php");
        exit;
    } else {
        die("Error updating the database: " . $conn->error);
    }
}
?>
