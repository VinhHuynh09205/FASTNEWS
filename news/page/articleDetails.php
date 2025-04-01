<?php

$title = "Chi tiết bài viết";
$content = <<<HTML
<main>
    <article class="article-detail">
        <h2 class="article-title">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</h2>
        <p class="article-meta">Tác giả: <strong>Nguyễn Văn A</strong> | Ngày đăng: 01/04/2025</p>
        <img src="../assets/img/featured-news/h1.webp" alt="Hình ảnh minh họa" class="article-image">
        <div class="article-content">
            <p>Đây là nội dung chi tiết của bài viết. Bạn có thể thêm văn bản tùy ý.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio...</p>
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

    <section class="related-articles">
        <h3>Bài viết liên quan</h3>
        <ul>
            <li><a href="#">Bài viết liên quan 1</a></li>
            <li><a href="#">Bài viết liên quan 2</a></li>
            <li><a href="#">Bài viết liên quan 3</a></li>
        </ul>
    </section>
</main>
HTML;

include '../includes/master.php';
?>

