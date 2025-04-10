<?php
include "database.php";

//lấy 3 bài nổi bật
function getFeaturedNews($conn) {
    $sql = "SELECT * FROM news WHERE is_featured = 1 ORDER BY created_at DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);
    $Featurednews = [];

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $Featurednews[] = $row;
        }
    }

    return $Featurednews;
}

//lấy tất cả bài viết
function getAllNews($conn) {
    $sql = "SELECT * FROM news ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
    $allNews = [];

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $allNews[] = $row;
        }
    }

    return $allNews;
}

//lọc bài viết theo danh mục (không trùng cái bài đã hiển thị trong các mục khác)
//$allNews = $remainingNews
function getNewsByCategory($allNews, $category, $excludedIds = []) {
    $filtered = [];
    foreach ($allNews as $news) {
        if (
            $news['category'] === $category &&
            !in_array($news['id'], $excludedIds)
        ) {
            $filtered[] = $news;
        }
    }
    return $filtered;
}

//lấy bài viết theo id
function getArticleById($conn, $id) {
    $sql = "SELECT * FROM news WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }

    return null;
}

?>
