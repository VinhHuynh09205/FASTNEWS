<?php
include 'database.php';

$news_id = isset($_GET['news_id']) ? (int)$_GET['news_id'] : 0;

// Kiểm tra nếu news_id không hợp lệ
if ($news_id <= 0) {
    echo json_encode(['success' => false, 'message' => 'ID bài viết không hợp lệ.']);
    exit;
}

$stmt = $conn->prepare("SELECT * FROM comments WHERE news_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $news_id);
$stmt->execute();
$result = $stmt->get_result();

$comments = [];
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

echo json_encode(['success' => true, 'comments' => $comments]);
?>
