<?php
$title = "Thế giới";
include '../functions/getArticle.php'; // Hàm xử lý truy vấn

// Lấy bài viết thuộc chuyên mục "Thế giới"
$worldNews = getNewsByCategoryFromDB($conn, 'Thế giới');

ob_start();
?>

<main>
    <h2 class="section-title">THẾ GIỚI</h2>
    <hr>

    <?php if (count($worldNews) > 0): ?>
        <!-- Bài viết nổi bật đầu tiên -->
        <div class="highlighted-news">
            <article class="highlighted-item">
                <img src="../uploads/<?= htmlspecialchars($worldNews[0]['image']) ?>" alt="Hình ảnh nổi bật" class="highlighted-img">
                <h3 class="highlighted-title">
                    <a href="../page/articleDetails.php?id=<?= $worldNews[0]['id'] ?>">
                        <?= htmlspecialchars($worldNews[0]['title']) ?>
                    </a>
                </h3>
                <p class="highlighted-desc"><?= htmlspecialchars($worldNews[0]['description']) ?></p>
                <a class="read-more" href="../page/articleDetails.php?id=<?= $worldNews[0]['id'] ?>">Đọc tiếp</a>
            </article>
        </div>

        <!-- Các bài viết còn lại -->
        <div class="news-grid">
            <?php foreach (array_slice($worldNews, 1, 3) as $news): ?>
                <article class="news-card">
                    <img src="../uploads/<?= htmlspecialchars($news['image']) ?>" alt="Hình ảnh nổi bật" class="news-img">
                    <h3 class="news-title">
                        <a href="../page/articleDetails.php?id=<?= $news['id'] ?>">
                            <?= htmlspecialchars($news['title']) ?>
                        </a>
                    </h3>
                    <p class="news-desc"><?= htmlspecialchars($news['description']) ?></p>
                    <a class="read-more" href="../page/articleDetails.php?id=<?= $news['id'] ?>">Đọc tiếp</a>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="no-news">Không có bài viết nào trong chuyên mục này.</p>
    <?php endif; ?>

    <div class="most-viewed-container">
        <div id="most-viewed-news">
            <?php include '../includes/mostViewed.php'; ?>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
include '../includes/master.php';
?>
