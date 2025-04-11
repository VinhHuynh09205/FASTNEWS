<?php
$title = "Chi tiết bài báo - FASTNEWS";

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

$title = $article['title'] . " - FASTNEWS";

//lấy bài viết liên quan đến chủ đề bài đang xem
$relatedArticles = getNewsByCategoryFromDB($conn, $article['category'], $article['id'], 6);


ob_start();
?>


<main>
    <div class="articleDetailFlex" style="display: flex;">
        <article class="article-detail">
            <h2 class="article-title"><?= htmlspecialchars($article['title']) ?></h2>
            <p class="article-meta">
                Tác giả: <strong><?= htmlspecialchars($article['author']) ?></strong> |
                Ngày đăng: <?= date('d/m/Y', strtotime($article['created_at'])) ?>
                <span style="float: right; margin-right: 10px">👁 <?= $article['views'] ?></span>
            </p>
            <img src="../uploads/<?= htmlspecialchars($article['image']) ?>" alt="Hình ảnh minh họa"
                class="article-image">
            <div class="article-content">
                <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
            </div>
        </article>
        <div class="otherArticle">
            <h2>Bài viết liên quan</h2>
            <hr>
            <?php foreach ($relatedArticles as $related): ?>
                <section class="latest-news">
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


    <!-- cmt -->
    <section class="comment">
        <h3>Bình luận</h3>
        <div class="comment-box">
            <input type="text" id="username" placeholder="Nhập tên của bạn">
            <textarea id="comment" placeholder="Viết bình luận..."></textarea>
            <button id="submit-comment">Gửi</button>
        </div>
        <ul id="comment-list">
            <!-- Danh sách bình luận sẽ được tải động -->
        </ul>
    </section>
    
    <!-- tin xem nhiều  -->
    <div class="most-viewed-container" style="margin-top: 20px;">
        <div id="most-viewed-news" >
            <?php include '../includes/mostViewed.php'; ?>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
include '../includes/master.php';
?>