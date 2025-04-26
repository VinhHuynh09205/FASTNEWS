<?php

include '../functions/database.php';
include '../functions/getArticle.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Bài viết không hợp lệ.";
    exit;
}

$id = (int) $_GET['id'];

//Tăng lượt xem
$stmt = $conn->prepare("UPDATE news SET views = views + 1 WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

//Lấy thông tin bài viết
$article = getArticleById($conn, $id);

if (!$article) {
    echo "Không tìm thấy bài viết.";
    exit;
}

//Cập nhật title trang
$title = $article['title'] . ' - FASTNEWS';
;

//Lấy bài viết liên quan đến chủ đề bài đang xem
$relatedArticles = getNewsByCategoryFromDB($conn, $article['category'], $article['id'], 30);

ob_start();
?>

<main>
    <div class="articleDetailFlex">
        <!-- chi tiết bài báo -->
        <article class="article-detail">
            <h2 class="article-title"><?= htmlspecialchars($article['title']) ?></h2>
            <p class="article-meta">
                Tác giả: <strong><?= htmlspecialchars($article['author']) ?></strong> 
                <span class="date">|
                    Ngày đăng: <?= date('d/m/Y', strtotime($article['created_at'])) ?> 
                </span>
                <span class="eye"> 👁 <?= $article['views'] ?></span>
            </p>
            <img src="../uploads/<?= htmlspecialchars($article['image']) ?>" alt="Hình ảnh minh họa"
                class="article-image">
            <div class="article-content">
                <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
            </div>
            <!-- cmt -->
            <section class="comment">
                <h3>Bình luận</h3>
                <div class="comment-box">
                    <input type="text" id="username" placeholder="Nhập tên của bạn">
                    <textarea id="comment" placeholder="Viết bình luận..."></textarea>
                    <button id="submit-comment">Gửi</button>
                </div>
                <hr>
                <ul id="comment-list">
                    <!-- Danh sách bình luận sẽ được tải động -->
                </ul>
            </section>
        </article>
        <!-- bài viết liên quan -->
        <div class="otherArticle">
            <h2>Bài viết liên quan</h2>
            <hr>
            <?php foreach (array_slice($relatedArticles, 0, 10) as $related): ?>
                <section class="latest-news ">
                    <article>
                        <h3><a href="articleDetails.php?id=<?= $related['id'] ?>">
                                <?= htmlspecialchars($related['title']) ?>
                            </a></h3>
                        <img src="../uploads/<?= htmlspecialchars($related['image']) ?>" alt="Hình ảnh nổi bật">
                        <p><?= htmlspecialchars($related['description']) ?></p>
                    </article>
                    <hr class="lastestnews1-hr">
                </section>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- tin xem nhiều  -->
    <div class="most-viewed-container" style="margin-top: 20px;">
        <div id="most-viewed-news">
            <?php include '../includes/mostViewed.php'; ?>
        </div>
        <?php foreach (array_slice($relatedArticles, 11, 30) as $related): ?>
            <section class="latest-news latest-news-inDetail">
                <article>
                    <img src="../uploads/<?= htmlspecialchars($related['image']) ?>" alt="Hình ảnh nổi bật">
                    <h3><a href="articleDetails.php?id=<?= $related['id'] ?>">
                            <?= htmlspecialchars($related['title']) ?>
                        </a></h3>
                    <p><?= htmlspecialchars($related['description']) ?></p>
                </article>
                <hr class="lastestnews1-hr">
            </section>
        <?php endforeach; ?>
    </div>
</main>

<input type="hidden" id="news-id" value="<?= $article['id'] ?>">

<?php
$content = ob_get_clean();
include '../includes/master.php';
?>