<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? ""; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/index.css">
</head>
<body>

<?php include_once __DIR__ . '/adminHeader.php'; ?>

<main>
    <?php echo $content ?? ""; ?>
</main>


<?php include_once __DIR__ . '/adminFooter.php'; ?>

</body>
</html>
