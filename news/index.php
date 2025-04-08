<?php
$title = "Trang Chủ - FASTNEWS";

$content =
    <<<HTML
    <main>
    <h2>BÀI VIẾT NỔI BẬT</h2>
    <div class="news-section">
        <!-- bài viết nổi bật 1 -->
        <section class = "featured">
            <article>
                <img src="assets\img\latest-news\h1.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="page/articleDetails.php">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</a></b></h3>
                <p>Chính quyền Myanmar ban bố tình trạng khẩn cấp tại 6 vùng sau trận động đất mạnh 7,7 độ xảy ra ở miền trung nước này, khiến nhiều công trình đổ sập và gây thương vong.</p>
                <span id="view-count">👁 0</span>
                <a class="doctiep" href="#">Đọc tiếp</a>
            </article>
        </section>
    </div>
    <div class="news-section">
        <!-- bài viết nổi bật 2 -->
        <section class = "featured2">
            <article>
                <img src="assets\img\latest-news\h2.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">Hàng chục người về Đền Hùng trước ngày giỗ Tổ</a></b></h3>
                <p>Phú Thọ - Khu di tích lịch sử Đền Hùng đón hàng chục nghìn lượt khách về hành lễ trong hai ngày 29 và 30/3, trước giỗ Tổ Hùng Vương hơn một tuần.</p>
                <span id="view-count">👁 0</span>
                <a class="doctiep" href="#">Đọc tiếp</a>
            </article>
        </section>
        <!-- bài viết nổi bật 3 -->
        <section class = "featured3">
            <article>
                <img src="assets\img\latest-news\h3.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">Việt Nam viện trợ 300.000 USD giúp Myanmar khắc phục hậu quả động đất</a></b></h3>
                <p>Việt Nam cung cấp đồ cứu trợ và viện trợ 300.000 USD nhằm giúp Myanmar khắc phục hậu quả sau trận động đất 7,7 độ.</p>                
                <span id="view-count">👁 0</span>
                <a class="doctiep" href="#">Đọc tiếp</a>
            </article>
        </section>
    </div>
    
    <hr class="lastestnews-hr">
    <div class="news-section2">
        <!--Tin tức mới nhất -->
        <section class="latest-news">
            <h2>TIN MỚI NHẤT</h2><hr>
            <article>
                <h3><a href="#">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</a></h3>
                <img src="assets\img\latest-news\h1.webp" alt="Hình ảnh nổi bật">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
            </article>
            <hr class="lastestnews1-hr">     
        </section>
        <!-- Tin tức theo danh mục -->
        <section class="category-news">
            <div class="topic1">
                <div class="category-header">
                    <a href="#">Thế giới</a>
                    <a href="#">Thể thao</a>
                    <a href="#">Công nghệ</a>
                    <a href="#">Giải trí</a>
                </div>
                <div class="category-content">
                    <article>
                        <img src="assets\img\latest-news\h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                </div>
            </div>
            <hr>
            <div class="topic2">
                <div class="category-header">
                    <a href="#">Giải trí</a>
                    <a href="#">Thế giới</a>
                    <a href="#">Công nghệ</a>
                    <a href="#">Thể thao</a>
                </div>
                <div class="category-content">
                    <article>
                        <img src="assets\img\latest-news\h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                </div>
            </div>
            <hr>
            <div class="topic3">
                <div class="category-header">
                    <a href="#">Công nghệ</a>
                    <a href="#">Thể thao</a>
                    <a href="#">Thế giới</a>
                    <a href="#">Giải trí</a>
                </div>
                <div class="category-content">
                    <article>
                        <img src="assets\img\latest-news\h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                </div>
            </div>
            <hr>
            <div class="topic4">
                <div class="category-header">
                    <a href="#">Thể thao</a>
                    <a href="#">Giải trí</a>
                    <a href="#">Thế giới</a>
                    <a href="#">Công nghệ</a>
                </div>
                <div class="category-content">
                    <article>
                        <img src="assets\img\latest-news\h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                </div>
            </div>
            
        </section>
    </div>
    <div class="most-viewed-container">
        <div id="most-viewed-news"></div>
    </div>
 
    </main>
    HTML;

include 'includes/master.php';

?>