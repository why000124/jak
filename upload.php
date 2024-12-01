<?php
session_start();
include 'db.php';

// ตรวจสอบการล็อกอิน
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $fileName;

        // ตรวจสอบว่าการอัปโหลดสำเร็จหรือไม่
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            // บันทึกชื่อไฟล์ลงในฐานข้อมูล
            $stmt = $conn->prepare("INSERT INTO images (filename) VALUES (?)");
            $stmt->bind_param("s", $fileName);

            if ($stmt->execute()) {
                echo "Image uploaded successfully!";
                header("Location: admin.php");
                exit;
            } else {
                echo "Failed to save image to database.";
            }
            $stmt->close();
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }
}

$conn->close();
?>
