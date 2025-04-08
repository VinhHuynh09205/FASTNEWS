<?php 
  include 'config.php';
  include_once __DIR__ . '/../functions/checkLogin.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? ""; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/index.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/addArticle.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/articleList.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/articleList.js"></script>
</head>
<body>

    <?php include __DIR__ . '/adminHeader.php'; ?>

    <main>
        <?php echo $content ?? ""; ?>
    </main>


    <?php include __DIR__ . '/footer.php'; ?>

    <?php if (isset($_SESSION['message'])): ?>
        <script>alert("<?= $_SESSION['message'] ?>");</script>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
</body>
</html>
