<?php
    session_start();
    include_once 'articleProcessing.php';

    $id = $_POST['id'] ?? null;
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $image = $_FILES['image'] ?? null;

    $imageName = null;

    if ($image && $image['error'] === 0) {
        $imageName = time() . '_' . basename($image['name']);
        move_uploaded_file($image['tmp_name'], "../uploads/" . $imageName);
    } elseif ($id) {
        //nếu không thay đổi ảnh thì dùng ản cũ
        $oldArticle = getArticleById($id);
        $imageName = $oldArticle['image'] ?? null;
    }

    //nếu có truyền id thì hiên giao diện sửa
    if ($id) {
        if (updateArticle($id, $title, $content, $author, $description, $category, $imageName)) {
            $_SESSION['message'] = "Cập nhật bài viết thành công!";
        } else {
            $_SESSION['message'] = "Cập nhật bài viết không thành công!";
        }
        header("Location: ../admin/articleList.php");
    } else {
        if (insertArticle($title, $content, $author, $description, $category, $imageName)) {
            $_SESSION['message'] = "Thêm bài viết thành công!";
        } else {
            $_SESSION['message'] = "Cập nhật bài viết không thành công!";
        }
        header("Location: ../admin/articleList.php");
    }
    exit;
?>
