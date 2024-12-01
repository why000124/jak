<?php
session_start();
include '../includes/db.php';
include '../includes/functions.php';

// ตรวจสอบการล็อกอิน
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../admin-login.php");
    exit;
}

// หมวดหมู่หลักทั้งหมด
$categories = [
    'Banner' => 6,
    'MainDocument' => 6,
    'TeacherEngineimage' => 3,
    'TeacherMachanical' => 3,
    'TeacherWelder' => 3,
    'TeacherIndustrial' => 3,
    'TeacherIT' => 4,
    'TeacherComGame' => 4,
    'TeacherGeneral' => 4,
    'TeacherBasic' => 3,
    'Executive' => 3,
    'Journal' => 6,
    'Info' => 3,
    'Other' => 100
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Admin Panel</h1>

    <?php foreach ($categories as $category => $maxCount): ?>
        <h2>Manage <?php echo htmlspecialchars($category); ?> (<?php echo $maxCount; ?> items)</h2>

        <!-- Form: Upload New Item -->
        <form action="upload_assets.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>New <?php echo htmlspecialchars($category); ?></legend>
                <label>
                    Name:
                    <input type="text" name="name" placeholder="<?php echo htmlspecialchars($category); ?>1" required>
                </label>
                <br>
                <label>
                    Description:
                    <input type="text" name="description" placeholder="<?php echo htmlspecialchars($category); ?> Description">
                </label>
                <br>
                <label>
                    Upload File:
                    <input type="file" name="file" accept="<?php echo ($category === 'MainDocument') ? '.pdf' : 'image/*'; ?>" required>
                </label>
                <input type="hidden" name="category" value="<?php echo htmlspecialchars($category); ?>">
                <button type="submit">Upload</button>
            </fieldset>
        </form>

        <!-- List Existing Items -->
        <?php $items = getDataByCategory($category); ?>
        <?php foreach ($items as $item): ?>
            <fieldset>
                <legend><?php echo htmlspecialchars($item['name']); ?></legend>
                <?php if ($category === 'MainDocument'): ?>
                    <a href="../<?php echo htmlspecialchars($item['link']); ?>" target="_blank">
                        <?php echo htmlspecialchars($item['description']); ?>
                    </a>
                <?php else: ?>
                    <img src="../<?php echo htmlspecialchars($item['link']); ?>" alt="<?php echo htmlspecialchars($item['description']); ?>" style="max-width: 300px;">
                <?php endif; ?>

                <!-- Shortcode -->
                <p>
                    <strong>Shortcode for Link/Media:</strong>
                    <code>
                        &lt;?php echo renderShortcode('<?php echo htmlspecialchars($category); ?>', '<?php echo htmlspecialchars($item['name']); ?>'); ?&gt;
                    </code>
                </p>
                <p>
                    <strong>Shortcode for Description:</strong>
                    <code>
                        &lt;?php echo renderShortcode('<?php echo htmlspecialchars($category); ?>', '<?php echo htmlspecialchars($item['name']); ?>', 'description'); ?&gt;
                    </code>
                </p>

                <!-- Form: Update Item -->
                <form action="update_assets.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                    <input type="hidden" name="category" value="<?php echo htmlspecialchars($category); ?>">
                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($item['name']); ?>">
                    <input type="hidden" name="current_link" value="<?php echo htmlspecialchars($item['link']); ?>">
                    <label>
                        Description:
                        <input type="text" name="description" value="<?php echo htmlspecialchars($item['description']); ?>">
                    </label>
                    <br>
                    <label>
                        Replace File:
                        <input type="file" name="file" accept="<?php echo ($category === 'MainDocument') ? '.pdf' : 'image/*'; ?>">
                    </label>
                    <button type="submit">Update</button>
                </form>
            </fieldset>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>
