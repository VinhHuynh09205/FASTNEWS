<?php
$title = "Thế giới";

ob_start();
?>

<main>
    <h2>THẾ GIỚI</h2>
    <hr>
    <div class="news-section">
        <section class="featured">
            <article>
                <img src="../assets/img/latest-news/h1.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</a></b></h3>
                <p>Chính quyền Myanmar ban bố tình trạng khẩn cấp tại 6 vùng sau trận động đất mạnh 7,7 độ xảy ra ở miền trung nước này, khiến nhiều công trình đổ sập và gây thương vong.</p>
                <article data-id="5">
                    <a class="doctiep" href="#">Đọc tiếp</a>
                </article>
            </article>
        </section>
    </div>
    <div class="news-section">
        <section class="featured4">
            <article>
                <img src="../assets/img/latest-news/h2.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">Hàng chục người về Đền Hùng trước ngày giỗ Tổ</a></b></h3>
                <p>Phú Thọ - Khu di tích lịch sử Đền Hùng đón hàng chục nghìn lượt khách về hành lễ trong hai ngày 29 và 30/3, trước giỗ Tổ Hùng Vương hơn một tuần.</p>
                <article data-id="5">
                    <a class="doctiep" href="#">Đọc tiếp</a>
                </article>
            </article>
        </section>
        <section class="featured5">
            <article>
                <img src="../assets/img/latest-news/h3.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">Việt Nam viện trợ 300.000 USD giúp Myanmar khắc phục hậu quả động đất</a></b></h3>
                <p>Việt Nam cung cấp đồ cứu trợ và viện trợ 300.000 USD nhằm giúp Myanmar khắc phục hậu quả sau trận động đất 7,7 độ.</p>
                <article data-id="5">
                    <a class="doctiep" href="#">Đọc tiếp</a>
                </article>
            </article>
        </section>
        <section class="featured6">
            <article>
                <img src="../assets/img/latest-news/h3.webp" alt="Hình ảnh nổi bật">
                <h3><b><a href="#">Việt Nam viện trợ 300.000 USD giúp Myanmar khắc phục hậu quả động đất</a></b></h3>
                <p>Việt Nam cung cấp đồ cứu trợ và viện trợ 300.000 USD nhằm giúp Myanmar khắc phục hậu quả sau trận động đất 7,7 độ.</p>
                <article data-id="5">
                    <a class="doctiep" href="#">Đọc tiếp</a>
                </article>
            </article>
        </section>
    </div>

    <hr class="lastestnews-hr">

    <div class="news-section2">
        <section class="category-news" style="border-left: none; border-right: solid 0.5px gray;">
            <div class="most-viewed-container">
                <div id="most-viewed-news">
                    <?php include '../includes/mostViewed.php'; ?>
                </div>
            </div>
            <?php for ($i=0; $i<5; $i++) { ?>
                <article>
                    <img src="../assets/img/latest-news/h1.webp" alt="Hình ảnh nổi bật">
                    <h3><a href="#">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</a></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    <article data-id="5"></article>
                </article>
                <hr class="lastestnews1-hr">
            <?php } ?>
        </section>
        <section class="latest-news">
            <?php for ($i=0; $i<7; $i++) { ?>
                <article>
                    <h3><a href="#">WHO kích hoạt cơ chế khẩn để hỗ trợ Myanmar sau động đất 7,7 độ</a></h3>
                    <img src="../assets/img/latest-news/h1.webp" alt="Hình ảnh nổi bật">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptas, molestias quos, tempora ex aliquam blanditiis deserunt suscipit rerum, assumenda iusto iste laboriosam! Quos, nihil maxime recusandae voluptatibus pariatur provident.</p>
                    <article data-id="5"></article>
                </article>
                <hr class="lastestnews1-hr">
            <?php } ?>
        </section>
    </div>
</main>

<?php
$content = ob_get_clean();
include '../includes/master.php';
?>
