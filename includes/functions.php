<?php
include_once 'db.php';

if (!function_exists('getDataByCategory')) {
    function getDataByCategory($category, $subcategory = null, $name = null) {
        global $conn;
        $sql = "SELECT * FROM assets WHERE category = ?";
        $params = [$category];
        $types = "s";

        if ($subcategory) {
            $sql .= " AND subcategory = ?";
            $params[] = $subcategory;
            $types .= "s";
        }

        if ($name) {
            $sql .= " AND name = ?";
            $params[] = $name;
            $types .= "s";
        }

        $stmt = $conn->prepare($sql);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}

if (!function_exists('renderShortcode')) {
    function renderShortcode($type, $name = null, $outputType = 'link') {
        global $conn;

        // ดึงข้อมูลจากฐานข้อมูล
        $data = getDataByCategory($type, null, $name);

        // กรณีไม่มีข้อมูล
        if (empty($data)) {
            return "<p>No data found for type: $type, name: $name.</p>";
        }

        $item = $data[0]; // ใช้รายการแรกที่ตรงกับเงื่อนไข

        // เลือกรูปแบบผลลัพธ์ตาม outputType
        switch ($outputType) {
            case 'link': // คืนค่าลิงก์
                return htmlspecialchars($item['link']);
            case 'description': // คืนค่าคำอธิบาย
                return htmlspecialchars($item['description']);
            case 'full': // คืนค่าทั้งหมดในรูปแบบ HTML
                if ($type === 'Banner') {
                    return '<img src="' . htmlspecialchars($item['link']) . '" alt="' . htmlspecialchars($item['description']) . '" style="max-width: 300px;">';
                } elseif ($type === 'MainDocument') {
                    return '<a href="' . htmlspecialchars($item['link']) . '" target="_blank">' . htmlspecialchars($item['description']) . '</a>';
                }
                break;
            default:
                return "<p>Invalid output type: $outputType</p>";
        }
    }
}
?>
