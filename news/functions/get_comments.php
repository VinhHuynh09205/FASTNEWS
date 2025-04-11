<?php
header('Content-Type: application/json');
include 'database.php';

$news_id = isset($_GET['news_id']) ? (int)$_GET['news_id'] : 0;

if ($news_id <= 0) {
    echo json_encode([]);
    exit;
}

$stmt = $conn->prepare("SELECT name, content, created_at FROM comments WHERE news_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $news_id);
$stmt->execute();

$result = $stmt->get_result();
$comments = [];

while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

echo json_encode($comments);
?>
