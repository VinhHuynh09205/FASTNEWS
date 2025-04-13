<?php
include 'database.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    //lấy trạng thái hiện tại của bài báo gán vào biến row
    $stmt = $conn->prepare("SELECT is_featured FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $newStatus = $row['is_featured'] ? 0 : 1;

        $update = $conn->prepare("UPDATE news SET is_featured = ? WHERE id = ?");
        $update->bind_param("ii", $newStatus, $id);
        $update->execute();
    }
}

header("Location: ../admin/articleList.php");
exit;
?>
