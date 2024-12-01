<?php
ob_start(); // เริ่มการบัฟเฟอร์ output
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'includes\db.php';

// สร้างตัวแปรสำหรับ debug messages
$debugMessages = [];

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    $debugMessages[] = "Database connection failed: " . $conn->connect_error;
    echo "<p>Database connection failed: " . $conn->connect_error . "</p>";
    die();
}

// ตรวจสอบว่าเป็น POST request
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // เพิ่มข้อความ debug
    $debugMessages[] = "Received POST request.";
    $debugMessages[] = "Username: $username";

    // สร้าง prepared statement
    $stmt = $conn->prepare("SELECT password FROM admin_users WHERE username = ?");
    if (!$stmt) {
        $debugMessages[] = "Prepare statement failed: " . $conn->error;
        echo "<p>Prepare statement failed: " . $conn->error . "</p>";
        die();
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // ตรวจสอบจำนวนแถวที่พบ
    $debugMessages[] = "Number of rows found: " . $stmt->num_rows;

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        // แสดงรหัสผ่านที่ดึงจากฐานข้อมูล
        $debugMessages[] = "Hashed Password from DB: $hashedPassword";

        // ตรวจสอบรหัสผ่าน
        if ($password === $hashedPassword) { // ใช้ password_verify หากเข้ารหัส
            $_SESSION['loggedin'] = true;
            $debugMessages[] = "Login successful.";
            header("Location: admin/admin.php");
            exit;
        } else {
            $debugMessages[] = "Invalid password.";
            echo "<p>Invalid username or password.</p>";
        }
    } else {
        $debugMessages[] = "No matching user found.";
        echo "<p>Invalid username or password.</p>";
    }

    $stmt->close();
} else {
    $debugMessages[] = "Not a POST request.";
    echo "<p>Not a POST request.</p>";
    header("Location: login.html");
    exit;
}

$conn->close();
ob_end_flush(); // ปล่อย output หลังการประมวลผล
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debugging Console</title>
</head>
<body>
    <script>
        // ส่งข้อความ debug ไปยัง console
        const debugMessages = <?php echo json_encode($debugMessages); ?>;
        debugMessages.forEach(msg => console.log(msg));
    </script>
</body>
</html>
