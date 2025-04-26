<?php
include '../functions/database.php'; 
include '../functions/getArticle.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';
$title = $category . ' - FASTNEWS';



if (!$category) {
    echo "Không tìm thấy danh mục.";
    exit;
}

//Lấy 24 bài viết mới nhất theo danh mục
$allNews = getNewsByCategoryFromDB($conn, $category, null, 28);

if (empty($allNews)) {
    echo "Không có bài viết nào trong danh mục này.";
    exit;
}

$featured = array_shift($allNews); // 1 bài đầu
$featured4 = array_splice($allNews, 0, 3); // 3 bài tiếp theo
$sectionLeft = array_splice($allNews, 0, 10); // 10 bài tiếp theo
$sectionRight = array_splice($allNews, 0, 15); // 10 bài tiếp theo

ob_start();
?>

<main>
    <h1 style="margin-left: 20px;"><?= htmlspecialchars($category) ?></h1>

    <div class="news-section">
    
        <section class="featured">
            <article>
                <img src="../uploads/<?= htmlspecialchars($featured['image']) ?>" alt="Hình ảnh nổi bật">
                <h3><b><a href="articleDetails.php?id=<?= $featured['id'] ?>"><?= htmlspecialchars($featured['title']) ?></a></b></h3>
                <p><?= htmlspecialchars(mb_substr($featured['content'], 0, 200)) ?>...</p>
                <a class="doctiep" href="articleDetails.php?id=<?= $featured['id'] ?>">Đọc tiếp</a>
            </article>
        </section>
    </div>

    <div class="news-section">
        <?php foreach ($featured4 as $news): ?>
        <section class="featured4">
            <article>
                <img src="../uploads/<?= htmlspecialchars($news['image']) ?>" alt="Hình ảnh nổi bật">
                <h3><b><a href="articleDetails.php?id=<?= $news['id'] ?>"><?= htmlspecialchars($news['title']) ?></a></b></h3>
                <p><?= htmlspecialchars(mb_substr($news['content'], 0, 200)) ?>...</p>
                <a class="doctiep" href="articleDetails.php?id=<?= $news['id'] ?>">Đọc tiếp</a>
            </article>
        </section>
        <?php endforeach; ?>
    </div>

    <hr class="lastestnews-hr">
    <div class="news-section2">
        <section class="category-news" style="border-left: none; border-right: solid 0.5px gray;">
            <!-- tin xem nhiều -->
            <div class="most-viewed-container">
                <div id="most-viewed-news">
                    <?php include '../includes/mostViewed.php'; ?>
                </div>
            </div>
        <!-- cột trái 10 bài -->
            <?php foreach ($sectionLeft as $news): ?>
                <article>
                    <img src="../uploads/<?= htmlspecialchars($news['image']) ?>" alt="Hình ảnh nổi bật">
                    <h3><a href="articleDetails.php?id=<?= $news['id'] ?>"><?= htmlspecialchars($news['title']) ?></a></h3>
                    <p><?= htmlspecialchars(mb_substr($news['content'], 0, 200)) ?>...</p>
                </article>
                <hr class="lastestnews1-hr">
            <?php endforeach; ?>
        </section>
        <!-- cột phải 10 bài -->
        <section class="latest-news">
            <?php foreach ($sectionRight as $news): ?>
                <article>
                    <h3><a href="articleDetails.php?id=<?= $news['id'] ?>"><?= htmlspecialchars($news['title']) ?></a></h3>
                    <img src="../uploads/<?= htmlspecialchars($news['image']) ?>" alt="Hình ảnh nổi bật">
                    <p><?= htmlspecialchars(mb_substr($news['content'], 0, 200)) ?>...</p>
                </article>
                <hr class="lastestnews1-hr">
            <?php endforeach; ?>
        </section>
    </div>
</main>

<?php
$content = ob_get_clean();
include '../includes/master.php';
?>
