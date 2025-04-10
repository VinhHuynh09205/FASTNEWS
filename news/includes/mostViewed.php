<?php
include_once __DIR__ . '/../functions/database.php';

$sql = "SELECT id, title, views FROM news ORDER BY views DESC LIMIT 10";
$result = $conn->query($sql);

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
