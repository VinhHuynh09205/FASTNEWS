<?php
include_once '../functions/article.php';

$id = $_GET['id'] ?? null;
$title = $id ? "Sửa Bài Báo" : "Thêm Bài Báo";
$article = $id ? getArticleById($id) : null;
$articleId = $article['id'] ?? '';
$articleTitle = $article['title'] ?? '';
$articleAuthor = $article['author'] ?? '';
$articleDesc = $article['description'] ?? '';
$articleContent = $article['content'] ?? '';
$articleImage = $article['image'] ?? '';
$articleCategory = $article['category'] ?? '';

$content = <<<HTML
    <div class="admin-container">
        <h2>$title</h2>
        <form id="articleForm" class="form-container" method="POST" action="../functions/insertOrUpdateArticle.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="$articleId">

            <div class="form-group">
                <label>Tiêu đề:</label>
                <input type="text" name="title" value="$articleTitle" required>
            </div>

            <div class="form-group">
                <label>Tác giả:</label>
                <input type="text" name="author" value="$articleAuthor" required>
            </div>

            <div class="form-group">
                <label>Miêu tả ngắn:</label>
                <textarea name="description" required>$articleDesc</textarea>
            </div>

            <div class="form-group">
                <label>Nội dung:</label>
                <textarea name="content" required>$articleContent</textarea>
            </div>

            <div class="form-group">
                <label>Hình ảnh:</label>
    HTML;

    ////////////////////
    if (!empty($articleImage)) {
        $content .= "<img src='../uploads/{$articleImage}' width='200'><br>";
    }

    $content .= <<<HTML
                <input style="margin-top: 10px;" type="file" name="image" id="image" accept="image/*">
            </div>

            <div class="form-group">
                <label>Danh mục:</label>
                <select name="category" required>
                    <option value="">-- Chọn danh mục --</option>
    HTML;
    
    /////////////////////
    $categories = ["Thế giới", "Thể thao", "Công nghệ", "Giải trí"];
    foreach ($categories as $cat) {
        $selected = ($articleCategory === $cat) ? 'selected' : '';
        $content .= "<option value='$cat' $selected>$cat</option>";
    }

    $content .= <<<HTML
                </select>
            </div>

            <button type="submit">$title</button>
        </form>
    </div>
    HTML;

include '../includes/masterAdmin.php';
?>
