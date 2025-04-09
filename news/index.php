<?php
    $title = "Trang Chủ - FASTNEWS";
    include "functions/getArticle.php";

    //lấy bài viết nổi bâth
    $featuredNews = getFeaturedNews($conn);
    $featuredIds = array_column($featuredNews, 'id');

    //lấy tất cả bài viết mưới nhất
    $allNews = getAllNews($conn);

    $latestNews = [];
    $remainingNews = [];

    foreach ($allNews as $news) {
        if (in_array($news['id'], $featuredIds)) continue;

        if (count($latestNews) < 9) {
            $latestNews[] = $news; //lấy 10 bài mới nhất để hiển thị
        } else {
            $remainingNews[] = $news; //lấy các bài còn lại để lọc theo danh mục
        }
    }

    $latestIds = array_column($latestNews, 'id');

    $categories = ['Thế giới', 'Thể thao', 'Công nghệ', 'Giải trí'];

    ob_start();
?>

<main>
    <h2>BÀI VIẾT NỔI BẬT</h2>
    <div class="news-section">
        <!-- featured 1 -->
        <section class="featured">
            <article>
                <img src="uploads/<?= htmlspecialchars($featuredNews[0]['image']) ?>" alt="Hình ảnh nổi bật">
                <h3><b><a href="page/articleDetails.php?id=<?= $featuredNews[0]['id'] ?>">
                    <?= htmlspecialchars($featuredNews[0]['title']) ?></a></b></h3>
                <p><?= htmlspecialchars($featuredNews[0]['description']) ?></p>
                <span id="view-count">👁 0</span>
                <a class="doctiep" href="page/articleDetails.php?id=<?= $featuredNews[0]['id'] ?>">Đọc tiếp</a>
            </article>
        </section>
    </div>

    <div class="news-section">
        <!-- featured 2 & 3 -->
        <?php for ($i = 1; $i <= 2; $i++): ?>
        <section class="featured<?= $i+1 ?>">
            <article>
                <img src="uploads/<?= htmlspecialchars($featuredNews[$i]['image']) ?>" alt="Hình ảnh nổi bật">
                <h3><b><a href="page/articleDetails.php?id=<?= $featuredNews[$i]['id'] ?>">
                    <?= htmlspecialchars($featuredNews[$i]['title']) ?></a></b></h3>
                <p><?= htmlspecialchars($featuredNews[$i]['description']) ?></p>
                <span id="view-count">👁 0</span>
                <a class="doctiep" href="page/articleDetails.php?id=<?= $featuredNews[$i]['id'] ?>">Đọc tiếp</a>
            </article>
        </section>
        <?php endfor; ?>
    </div>

    <hr class="lastestnews-hr">
    <div class="news-section2">
        <!--Tin tức mới nhất -->
        <section class="latest-news">
            <h2>TIN MỚI NHẤT</h2>
            <hr>
            <?php foreach ($latestNews as $news): ?>
                <article>
                    <h3><a href="page/articleDetails.php?id=<?= $news['id'] ?>">
                        <?= htmlspecialchars($news['title']) ?></a></h3>
                    <img src="uploads/<?= htmlspecialchars($news['image']) ?>" alt="Hình ảnh">
                    <p><?= htmlspecialchars($news['description']) ?></p>
                </article>
                <hr class="lastestnews1-hr">
            <?php endforeach; ?>
        </section>

        <!-- Tin tức theo danh mục -->
        <section class="category-news">
            <?php
            $topicIndex = 1;
            $excludedIds = array_merge($featuredIds, $latestIds); // loại hết bài đã hiển thị

            foreach ($categories as $category):
                $newsInCategory = getNewsByCategory($remainingNews, $category, $excludedIds);
                ?>
                <div class="topic<?= $topicIndex ?>">
                    <a class="categoryHeader" href="#"><?= htmlspecialchars($category) ?></a>
                    <div class="category-content">
                        <?php foreach (array_slice($newsInCategory, 0, 3) as $news): ?>
                            <article>
                                <img src="uploads/<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
                                <h3><a href="page/articleDetails.php?id=<?= $news['id'] ?>">
                                    <?= htmlspecialchars($news['title']) ?></a></h3>
                                <p><?= htmlspecialchars($news['description']) ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
                <hr>
                <?php
                $excludedIds = array_merge($excludedIds, array_column($newsInCategory, 'id'));
                $topicIndex++;
            endforeach;
            ?>
        </section>
    </div>

    <div class="most-viewed-container">
        <div id="most-viewed-news"></div>
    </div>
</main>

<?php
    $content = ob_get_clean();
    include 'includes/master.php';
?>
