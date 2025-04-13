<?php 
session_start();
include_once 'ArticleProcessing.php';

$listid = $_GET['listid'] ?? null;
$id = $_GET['id'] ?? null;

if ($listid) {
    $ids = explode(',', $listid);
    deleteMultipleArticles($ids);
    $_SESSION['message'] = "Đã xóa " . count($ids) . " bài viết.";
} elseif ($id) {
    if (deleteArticle($id)) {
        $_SESSION['message'] = "Xóa bài viết thành công.";
    } else {
        $_SESSION['message'] = "Xóa thất bại.";
    }
}

header("Location: ../admin/articleList.php");
exit;

?>