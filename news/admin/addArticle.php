<?php
include_once '../functions/articleProcessing.php';

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

ob_start();
?>

<div class="admin-container">
    <h2><?= $title ?></h2>
    <form id="articleForm" class="form-container" method="POST" action="../functions/insertOrUpdateArticle.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $articleId ?>">

        <div class="form-group">
            <label>Tiêu đề:</label>
            <input type="text" name="title" value="<?= htmlspecialchars($articleTitle) ?>" required>
        </div>

        <div class="form-group">
            <label>Tác giả:</label>
            <input type="text" name="author" value="<?= htmlspecialchars($articleAuthor) ?>" required>
        </div>

        <div class="form-group">
            <label>Miêu tả ngắn:</label>
            <textarea name="description" required><?= htmlspecialchars($articleDesc) ?></textarea>
        </div>

        <div class="form-group">
            <label>Nội dung:</label>
            <textarea name="content" required><?= htmlspecialchars($articleContent) ?></textarea>
        </div>

        <div class="form-group">
            <label>Hình ảnh:</label>
            <?php if (!empty($articleImage)): ?>
                <img src="../uploads/<?= htmlspecialchars($articleImage) ?>" width="200"><br>
            <?php endif; ?>
            <input style="margin-top: 10px;" type="file" name="image" id="image" accept="image/*">
        </div>

        <div class="form-group">
            <label>Danh mục:</label>
            <select name="category" required>
                <option value="">-- Chọn danh mục --</option>
                <?php
                $categories = ["Thời sự", "Thế giới", "Thể thao", "Công nghệ", "Giải trí"];
                foreach ($categories as $cat):
                    $selected = ($articleCategory === $cat) ? 'selected' : '';
                ?>
                    <option value="<?= $cat ?>" <?= $selected ?>><?= $cat ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="button" type="submit"><?= $title ?></button>
    </form>
</div>

<?php
$content = ob_get_clean();
include '../includes/masterAdmin.php';
?>
