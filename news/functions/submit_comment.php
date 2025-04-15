<?php
include 'database.php';

$data = json_decode(file_get_contents("php://input"), true);
$news_id = isset($data['news_id']) ? (int)$data['news_id'] : 0;
$name = isset($data['name']) ? $data['name'] : '';
$content = isset($data['content']) ? $data['content'] : '';

// Kiểm tra nếu có thông tin cần thiết
if ($news_id <= 0 || empty($name) || empty($content)) {
    echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ.']);
    exit;
}

// Chèn bình luận vào cơ sở dữ liệu
$stmt = $conn->prepare("INSERT INTO comments (news_id, name, content) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $news_id, $name, $content);
$stmt->execute();

// Kiểm tra kết quả
if ($stmt->affected_rows > 0) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Không thể lưu bình luận.']);
}
?>
