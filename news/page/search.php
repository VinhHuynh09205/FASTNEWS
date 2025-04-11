<?php
include '../includes/config.php';
include '../functions/database.php'; // Kết nối DB gốc dùng mysqli hoặc PDO

$keyword = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];
$message = '';

if ($keyword === '') {
    $message = '<a href="' . BASE_URL . '" class="search-message">Vui lòng nhập từ khóa để tìm kiếm.</a>';
} else {
    $stmt = $conn->prepare("SELECT * FROM news WHERE title LIKE ? OR content LIKE ?");
    $searchTerm = "%$keyword%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    if (count($results) === 0) {
        $message = "Không tìm thấy kết quả nào cho từ khóa: <strong>" . htmlspecialchars($keyword) . "</strong>";
    }
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Kết quả tìm kiếm - FASTNEWS</title>
  <link rel="stylesheet" href="../assets/css/search.css">
</head>
<body>

  <h2 class="search-title">Kết quả tìm kiếm cho: "<strong><?= htmlspecialchars($keyword) ?></strong>"</h2>

  <?php if ($keyword === ''): ?>
    <div class="message-box"><?= $message ?></div>

  <?php elseif (empty($results)): ?>
    <div class="message-box">Không tìm thấy kết quả nào phù hợp với từ khóa "<strong><?= htmlspecialchars($keyword) ?></strong>".</div>

  <?php else: ?>
    <div class="search-wrapper">
        <div class="search-results">
          <?php foreach ($results as $row): ?>
            <div class="result-card">
              <img src="<?php echo BASE_URL; ?>uploads/<?php echo $row['image'] ?? 'default.jpg'; ?>" alt="">
              <div class="result-card-content">
                <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                <p><?php echo mb_strimwidth(strip_tags($row['content']), 0, 100, '...'); ?></p>
                <a href="ArticleDetails.php?id=<?php echo $row['id']; ?>">Đọc thêm</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
  <?php endif; ?>

</body>
</html>
