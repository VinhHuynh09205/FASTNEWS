<?php
    $title = "Trang Chủ";

    $content =
    <<<HTML
        <main>
            <section class="featured">
                <h2>Bài viết nổi bật</h2>
                <article>
                    <img src="assets/img/hi.jpg" alt="Hình ảnh nổi bật" />
                    <h3>Tiêu đề bài viết</h3>
                    <p>Mô tả ngắn về bài viết nổi bật...</p>
                    <a href="#">Đọc tiếp</a>
                </article>
            </section>

            <section class="latest-news">
                <h2>Tin mới nhất</h2>
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
        </main>
    HTML;

    include_once __DIR__ . '/includes/master.php';

?>