<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $file = "../" . ($_POST['file'] ?? '');

    // Debug: แสดงค่าที่ได้รับ
    echo "ID: " . htmlspecialchars($id) . "<br>";
    echo "File: " . htmlspecialchars($file) . "<br>";

    // ตรวจสอบ ID และ File
    if (empty($id)) {
        die("Error: Missing ID.");
    }

    if (empty($file)) {
        die("Error: Missing file path.");
    }

    // ลบไฟล์ในระบบ
    if (file_exists($file)) {
        if (!unlink($file)) {
            die("Error: Failed to delete file: " . htmlspecialchars($file));
        }
    } else {
        echo "Warning: File does not exist: " . htmlspecialchars($file) . "<br>";
    }

    // ลบข้อมูลในฐานข้อมูล
    $stmt = $conn->prepare("DELETE FROM assets WHERE id = ?");
    if (!$stmt) {
        die("Error: Failed to prepare statement: " . $conn->error);
    }

    $stmt->bind_param("i", $id);
    if (!$stmt->execute()) {
        die("Error: Failed to delete record: " . $stmt->error);
    }

    echo "Record deleted successfully.<br>";
    $stmt->close();

    header("Location: admin.php");
    exit;
} else {
    die("Error: Invalid request method.");
}
?>
