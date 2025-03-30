<?php
$title = "Trang Chủ";

$content =
    <<<HTML
    <main>
    <h2>BÀI VIẾT NỔI BẬT</h2><hr>
    <div class="news-section">
        <section class = "featured">
            <article>
                <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                <h3><B>WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</B></h3>
                <p>Chính quyền Myanmar ban bố tình trạng khẩn cấp tại 6 vùng sau trận động đất mạnh 7,7 độ xảy ra ở miền trung nước này, khiến nhiều công trình đổ sập và gây thương vong.</p>
                <a href="#">Đọc tiếp</a>
            </article>
        </section>
    </div>
    <div class="news-section">
        <section class = "featured2">
            <article>
                <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                <h3><B>WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</B></h3>
                <p>Chính quyền Myanmar ban bố tình trạng khẩn cấp tại 6 vùng sau trận động đất mạnh 7,7 độ xảy ra ở miền trung nước này, khiến nhiều công trình đổ sập và gây thương vong.</p>
                <a href="#">Đọc tiếp</a>
            </article>
        </section>
        <section class = "featured3">
            <article>
                <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                <h3><B>WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</B></h3>
                <p>Chính quyền Myanmar ban bố tình trạng khẩn cấp tại 6 vùng sau trận động đất mạnh 7,7 độ xảy ra ở miền trung nước này, khiến nhiều công trình đổ sập và gây thương vong.</p>
                <a href="#">Đọc tiếp</a>
            </article>
        </section>
    </div>
    
    <hr class="news-hr">
    <div class="news-section2">
        <!--Tin tức mới nhất -->
        <section class="latest-news">
            <h2>TIN MỚI NHẤT</h2><hr>
            <article>
                <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
            <article>
                <h3><a href="#">Tiêu đề bài viết 2</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
            <article>
                <h3><a href="#">Tiêu đề bài viết 3</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
        </section>
        <!-- Cột 2: Tin tức theo danh mục -->
        <section class="category-news">
            <h2>TIN THEO DANH MỤC</h2><hr>
            <article>
                <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
            <article>
                <h3><a href="#">Tiêu đề bài viết 2</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
            <article>
                <h3><a href="#">Tiêu đề bài viết 3</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
        </section>
    </div>
    <div class="news-section3">
        <!--Tin tức xem nhiều-->
        <section class="top-news">
            <h2>TIN XEM NHIỀU</h2><hr>
            <article>
                <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
            <article>
                <h3><a href="#">Tiêu đề bài viết 2</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
            <article>
                <h3><a href="#">Tiêu đề bài viết 3</a></h3>
                <p>Mô tả ngắn...</p>
            </article>
        </section>    
    </div>

    <!-- back to top button -->
    <button id="back-to-top" style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </button>

    </main>
    HTML;

include 'includes/master.php';
