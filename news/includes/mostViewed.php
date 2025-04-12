<?php
include_once __DIR__ . '/../functions/database.php';

// Lấy category nếu có
$category = $_GET['category'] ?? null;

if ($category) {
    $sql = "SELECT id, title, views FROM news WHERE category = ? ORDER BY views DESC LIMIT 10";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $sql = "SELECT id, title, views FROM news ORDER BY views DESC LIMIT 10";
    $result = $conn->query($sql);
}

echo '<h2>Tin Xem Nhiều</h2>';

$rank = 1;
while ($row = $result->fetch_assoc()) {
    $title = htmlspecialchars($row['title']);
    $id = $row['id'];
    $views = $row['views'];

    echo <<<HTML
    <div class="most-viewed-item">
        <span>{$rank}</span>
        <a href="article.php?id={$id}">{$title}</a>
        <span style="margin-left: 10px" class="comment-count">👁 {$views}</span>
    </div>
    HTML;

    $rank++;
}
?>
