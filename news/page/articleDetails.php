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

ob_start();
?>


<main>
    <article class="article-detail">
        <h2 class="article-title"><?= htmlspecialchars($article['title']) ?></h2>
        <p class="article-meta">
            Tác giả: <strong><?= htmlspecialchars($article['author']) ?></strong> |
            Ngày đăng: <?= date('d/m/Y', strtotime($article['created_at'])) ?>
            <span style="float: right; margin-right: 10px">👁 <?= $article['views'] ?></span>
        </p>
        <img src="../uploads/<?= htmlspecialchars($article['image']) ?>" alt="Hình ảnh minh họa" class="article-image">
        <div class="article-content">
            <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
        </div>
    </article>

    <!-- Bình luận -->
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

    <!-- Bài viết liên quan (có thể nâng cấp sau) -->
    <section class="related-articles">
        <h3>Bài viết liên quan</h3>
        <ul>
            <li><a href="#">Bài viết liên quan 1</a></li>
            <li><a href="#">Bài viết liên quan 2</a></li>
            <li><a href="#">Bài viết liên quan 3</a></li>
        </ul>
    </section>
</main>

<?php
$content = ob_get_clean();
include '../includes/master.php';
?>