<?php
include '../functions/getdashboard.php'; 
$result = $conn->query("SELECT id, title, views FROM news");

$title = "Trang Admin - FASTNEWS";

$content =
<<<HTML
<body>
  <div class="stat-box">
    <h3>Tổng số bài báo</h3>
    <p>$total_articles</p>

    <h3>Tổng số mắt xem</h3>
    <p>$total_views</p>
  </div>
</body>
HTML;

include '../includes/masterAdmin.php';
?>
