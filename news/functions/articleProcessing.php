<?php
    include 'database.php';

    //lấy bài báo theo id
    function getArticleById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    //hàm thêm bài báo
    function insertArticle($title, $content, $author, $description, $category, $image) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO news (title, content, author, description, category, image, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssssss", $title, $content, $author, $description, $category, $image);
        return $stmt->execute();
    }

    //hàm sửa bài báo
    function updateArticle($id, $title, $content, $author, $description, $category, $image) {
        global $conn;
        $stmt = $conn->prepare("UPDATE news SET title = ?, content = ?, author = ?, description = ?, category = ?, image = ? WHERE id = ?");
        $stmt->bind_param("ssssssi", $title, $content, $author, $description, $category, $image, $id);
        return $stmt->execute();
    }

    //hàm xóa 1 bài viết
    function deleteArticle($id) {
        global $conn;
    
        //lấy hình ảnh để xóa
        $query = "SELECT image FROM news WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($image);
        $stmt->fetch();
        $stmt->close();
    
        //xóa bài viétes
        $query = "DELETE FROM news WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
    
        //xóa hình
        if ($result && $image && file_exists("../uploads/$image")) {
            unlink("../uploads/$image");
        }
    
        return $result;
    }

    //hàm xóa nhiều bài viết
    function deleteMultipleArticles($ids) {
        global $conn;
    
        //lấy id của nhiều bài
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $types = str_repeat('i', count($ids));
    
        //lấy hình ảnh
        $sql = "SELECT image FROM news WHERE id IN ($placeholders)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($types, ...$ids);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            if ($row['image'] && file_exists("../uploads/" . $row['image'])) {
                unlink("../uploads/" . $row['image']);
            }
        }
        $stmt->close();
    
        //xóa bài 
        $sql = "DELETE FROM news WHERE id IN ($placeholders)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($types, ...$ids);
        $stmt->execute();
        $stmt->close();
    }
    
?>
