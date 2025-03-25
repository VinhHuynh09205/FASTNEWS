<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? ""; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/index.css">
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>

<?php echo $content ?? ""; ?>

<?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
