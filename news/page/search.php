<?php
$title = "Tìm kiếm - FASTNEWS";

include '../functions/database.php';

$keyword = isset($_GET['q']) ? trim($_GET['q']) : '';

if ($keyword !== '') {
    $likeKeyword = '%' . $keyword . '%';

    $stmt = $conn->prepare("SELECT * FROM news WHERE title LIKE ? OR content LIKE ?");
    $stmt->bind_param("ss", $likeKeyword, $likeKeyword);
    $stmt->execute();
    $result = $stmt->get_result();
    $results = $result->fetch_all(MYSQLI_ASSOC);
}


ob_start();
?>

<main>
    <?php if ($keyword !== '' && !empty($results)): ?>
        <h2 class="search-title">Kết quả tìm kiếm cho: <em><?= htmlspecialchars($keyword) ?></em></h2>
    <?php endif; ?>

    <div class="search-container">
        <?php if ($keyword === ''): ?>
            <p class="search-message">Vui lòng nhập từ khóa để tìm kiếm.</p>
        <?php elseif (empty($results)): ?>
            <p class="search-message">Không tìm thấy kết quả phù hợp với từ khóa: <strong><?= htmlspecialchars($keyword) ?></strong></p>
        <?php else: ?>
            <div class="search-results">
                <?php foreach ($results as $row): ?>
                    <div class="search-card">
                        <div class="search-text">
                            <h3>
                                <a href="articleDetails.php?id=<?= $row['id'] ?>">
                                    <?= htmlspecialchars($row['title']) ?>
                                </a>
                            </h3>
                            <p><?= mb_strimwidth(strip_tags($row['content']), 0, 100, "...") ?></p>
                            <a href="articleDetails.php?id=<?= $row['id'] ?>" class="read-more">Đọc tiếp &rarr;</a>
                        </div>
                        <?php if (!empty($row['image'])): ?>
                            <img class="search-img" src="<?= '../uploads/' . htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
$content = ob_get_clean();
include '../includes/master.php';
