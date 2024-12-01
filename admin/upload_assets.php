<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $uploadDir = "../assets/uploads/";
    $fileLink = null;

    // ตรวจสอบว่ามีการอัปโหลดไฟล์ใหม่หรือไม่
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $uploadedFileName = basename($_FILES['file']['name']);
        $targetFile = $uploadDir . $uploadedFileName;

        // ย้ายไฟล์ไปยังโฟลเดอร์ assets/uploads
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            $fileLink = "assets/uploads/" . $uploadedFileName; // ลิงก์สำหรับเก็บในฐานข้อมูล
        } else {
            die("Error uploading the file.");
        }
    } else {
        die("File upload failed. Please try again.");
    }

    // เพิ่มข้อมูลในฐานข้อมูล
    if ($fileLink) {
        $sql = "INSERT INTO assets (category, name, link, description) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $category, $name, $fileLink, $description);

        if ($stmt->execute()) {
            header("Location: admin.php");
            exit;
        } else {
            die("Error inserting data into the database: " . $conn->error);
        }
    } else {
        die("File upload link is missing.");
    }
}
?>
