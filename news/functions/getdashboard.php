<?php
include_once 'database.php';

$total_articles = 0;
$total_views = 0;

// Lấy tổng số bài viết
$sql1 = "SELECT COUNT(*) AS total_articles FROM news";
$result1 = $conn->query($sql1);
if ($result1 && $result1->num_rows > 0) {
    $row1 = $result1->fetch_assoc();
    $total_articles = $row1['total_articles'];
}

// Lấy tổng số mắt xem (nếu có cột views)
$sql2 = "SELECT SUM(views) AS total_views FROM news";
$result2 = $conn->query($sql2);
if ($result2 && $result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $total_views = $row2['total_views'] ?? 0;
}
?>
