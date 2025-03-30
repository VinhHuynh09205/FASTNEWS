<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? ""; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/index.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>
</head>
<body>

<?php include __DIR__ . '/adminHeader.php'; ?>

<main>
    <?php echo $content ?? ""; ?>
</main>


<?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
