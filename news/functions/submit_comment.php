<?php
header('Content-Type: application/json');
include 'database.php';

// Nhận dữ liệu JSON từ client
$data = json_decode(file_get_contents("php://input"), true);

$news_id = isset($data['news_id']) ? (int)$data['news_id'] : 0;
$name = trim($data['name'] ?? '');
$content = trim($data['content'] ?? '');

if ($news_id <= 0 || $name === '' || $content === '') {
    echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ.']);
    exit;
}

// Thêm bình luận vào cơ sở dữ liệu
$stmt = $conn->prepare("INSERT INTO comments (news_id, name, content) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $news_id, $name, $content);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Lỗi khi lưu vào CSDL.']);
}
?>
