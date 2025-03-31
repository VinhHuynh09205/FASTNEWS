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
                <h3><b><a href="#">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</a></b></h3>
                <p>Chính quyền Myanmar ban bố tình trạng khẩn cấp tại 6 vùng sau trận động đất mạnh 7,7 độ xảy ra ở miền trung nước này, khiến nhiều công trình đổ sập và gây thương vong.</p>
                <a class="doctiep" href="#">Đọc tiếp</a>
            </article>
        </section>
    </div>
    <div class="news-section">
        <section class = "featured2">
            <article>
                <img src="assets/img/h2.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">Hàng chục người về Đền Hùng trước ngày giỗ Tổ</a></b></h3>
                <p>Phú Thọ - Khu di tích lịch sử Đền Hùng đón hàng chục nghìn lượt khách về hành lễ trong hai ngày 29 và 30/3, trước giỗ Tổ Hùng Vương hơn một tuần.</p>
                <a class="doctiep" href="#">Đọc tiếp</a>
            </article>
        </section>
        <section class = "featured3">
            <article>
                <img src="assets/img/h3.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">Việt Nam viện trợ 300.000 USD giúp Myanmar khắc phục hậu quả động đất</a></b></h3>
                <p>Việt Nam cung cấp đồ cứu trợ và viện trợ 300.000 USD nhằm giúp Myanmar khắc phục hậu quả sau trận động đất 7,7 độ.</p>                
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
                <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
            </article>
            <hr class="lastestnews1-hr">    
            <article>
                <h3><a href="#">Tiêu đề bài viết 2</a></h3>
                <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
            </article>
            <hr class="lastestnews1-hr">  
            <article>
                <h3><a href="#">Tiêu đề bài viết 3</a></h3>
                <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
            </article>
        </section>
        <!-- Cột 2: Tin tức theo danh mục -->
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
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                    <article>
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 2</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                    <article>
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 3</a></h3>
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
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                    <article>
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 2</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                    <article>
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 3</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                </div>
            </div>
            <hr>
            <div class="topic1">
                <div class="category-header">
                    <a href="#">Công nghệ</a>
                    <a href="#">Thể thao</a>
                    <a href="#">Thế giới</a>
                    <a href="#">Giải trí</a>
                </div>
                <div class="category-content">
                    <article>
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 1</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                    <article>
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 2</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                    <article>
                        <img src="assets/img/h1.webp" alt="Hình ảnh nổi bật">
                        <h3><a href="#">Tiêu đề bài viết 3</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    </article>
                </div>
            </div>
            
        </section>
    </div>
    <hr>
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

?>