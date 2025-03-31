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
                <h3><a href="#">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</a></h3>
                <p>Chính quyền Myanmar ban bố tình trạng khẩn cấp tại 6 vùng sau trận động đất mạnh 7,7 độ xảy ra ở miền trung nước này, khiến nhiều công trình đổ sập và gây thương vong.</p>
                <span id="view-count">👁 0</span>
                <a href="#" class="a-doctiep">Đọc tiếp</a>
            </article>
        </section>
    </div>
    <div class="news-section">
        <section class = "featured2">
            <article>
                <img src="assets/img/h2.webp" alt="Hình ảnh nổi bật">
                <h3><a href="#">Hàng chục người về Đền Hùng trước ngày giỗ Tổ</a></h3>
                <p>Phú ThọKhu di tích lịch sử Đền Hùng đón hàng chục nghìn lượt khách về hành lễ trong hai ngày 29 và 30/3, trước giỗ Tổ Hùng Vương hơn một tuần.</p>
                <a href="#" class="a-doctiep">Đọc tiếp</a>
            </article>
        </section>
        <section class = "featured3">
            <article>
                <img src="assets/img/h3.webp" alt="Hình ảnh nổi bật">
                <h3><a href="#">Việt Nam viện trợ 300.000 USD giúp Myanmar khắc phục hậu quả động đất</a></h3>
                <p>Việt Nam cung cấp đồ cứu trợ và viện trợ 300.000 USD nhằm giúp Myanmar khắc phục hậu quả sau trận động đất 7,7 độ.</p>
                <a href="#" class="a-doctiep">Đọc tiếp</a>
            </article>
        </section>
    </div>
    <div class="news-section2">
        <!--Tin tức mới nhất -->
        <section class="latest-news">
            <h2>TIN MỚI NHẤT</h2>
            <article>
                <img src="assets/img/h4.webp" alt="Hình ảnh tin mới">
                <h3><a href="#">Đất đấu giá huyện ven Hà Nội lại trúng hơn 100 triệu đồng một m2</a></h3>
                <p>Hà NộiHuyện Quốc Oai vừa đấu giá thành công 26 lô đất tại xã Hưng Đạo, trong đó giá trúng cao nhất 104 triệu một m2 - tăng mạnh so với phiên trước.</p>
            </article>
            <hr>
            <article>
                <img src="assets/img/h5.webp" alt="Hình ảnh tin mới">
                <h3><a href="#">'Bộ đội Việt Nam sẽ tìm người mất tích ở Myanmar như tìm người thân'</a></h3>
                <p>Thiếu tướng Phạm Văn Tỵ khẳng định bộ đội Việt Nam sẽ tìm kiếm nạn nhân bị vùi lấp sau thảm họa động đất tại Myanmar như tìm kiếm chính người thân của mình.</p>
            </article>
            <hr>
            <article>
                <img src="assets/img/h6.webp" alt="Hình ảnh tin mới">
                <h3><a href="#">Ôtô chở 36 khách rơi xuống vực đèo Bảo Lộc</a></h3>
                <p>Lâm ĐồngXe chở khách từ Bình Phước lên Đà Lạt du lịch trên đường về gặp tai nạn, rơi xuống vực đèo Bảo Lộc, một nạn nhân tử vong, hơn 30 người bị thương, chiều 30/3.</p>
            </article>
            <article>
                <img src="assets/img/h7.webp" alt="Hình ảnh tin mới">
                <h3><a href="#">Thủ tướng yêu cầu gỡ vướng dứt điểm cho hơn 1.500 dự án</a></h3>
                <p>Thủ tướng yêu cầu gỡ vướng cho hơn 1.500 dự án tồn đọng kéo dài theo hướng "sai tới đâu xử lý đó", không để tạo tiền lệ xấu.</p>
            </article>
            <article>
                <img src="assets/img/h8.webp" alt="Hình ảnh tin mới">
                <h3><a href="#">Myanmar đối mặt khủng hoảng nhân đạo sau động đất</a></h3>
                <p>Hội Chữ thập Đỏ nói rằng Myanmar đang đối mặt khủng hoảng nhân đạo, nhu cầu viện trợ tăng từng giờ sau trận động đất làm khoảng 1.700 người chết.</p>
            </article>
        </section>
        <!-- Cột 2: Tin tức theo danh mục -->
        <section class="category-news">
            <h2>TIN THEO DANH MỤC</h2>
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
            <h2>TIN XEM NHIỀU</h2>
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
