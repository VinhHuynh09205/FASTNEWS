<?php
    $title = "Trang Admin";

    $content =
    <<<HTML
        <div class="admin-container">
            <h2>Thêm Bài Báo</h2>
            <form id="articleForm" class="form-container">
                <div class="form-group">
                    <label>Tiêu đề:</label>
                    <input type="text" name="title" required>
                </div>

                <div class="form-group">
                    <label>Miêu tả ngắn:</label>
                    <textarea name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label>Nội dung:</label>
                    <textarea name="content" required></textarea>
                </div>

                <div class="form-group">
                    <label>Hình ảnh:</label>
                    <input type="file" name="image" id="image" required>
                </div>

                <div class="form-group">
                    <label>Danh mục:</label>
                    <select name="category" required>
                        <option value="">-- Chọn danh mục --</option>
                        <option value="1">Thế giới</option>
                        <option value="2">Thể thao</option>
                        <option value="3">Công nghệ</option>
                        <option value="4">Giải trí</option>
                    </select>
                </div>

                <button type="submit">Thêm Bài</button>
                <p id="status"></p>
            </form>
        </div>

        <script src="../assets/js/addArticle.js"></script>
    HTML;
    
    include '../includes/masterAdmin.php';
?>