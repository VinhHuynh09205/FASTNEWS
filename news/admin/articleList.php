<?php
include '../functions/database.php';

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

if ($search !== '') {
    $stmt = $conn->prepare("SELECT * FROM news WHERE title LIKE ? ORDER BY created_at DESC");
    $searchParam = '%' . $search . '%';
    $stmt->bind_param("s", $searchParam);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");
}

$title = "Quản lý bài viết - FASTNEWS";

ob_start();
?>

<h1 style="text-align: center;"> QUẢN LÝ BÀI VIẾT</h1>
<form method="get" id="search-form">
    <input type="text" name="search" placeholder="Tìm bài viết..."
        value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
    <button type="submit">Tìm</button>
</form>
<hr style="width: 90%; margin-bottom: 30px;">
<form id="form1" method="post">
    <table align="center" border="1" cellpadding="4" cellspacing="0" width="1000">
        <tr>
            <td colspan="4" align="left">
                <input id="xoahet" value="Xóa đã chọn" type="button" STYLE ="background-color: #EE0000; color:white">
            </td>
            <td colspan="3" align="center" nowrap>
                <a id="btn-add-article" STYLE ="background-color: #e0e0e0" href="addArticle.php">Thêm bài mới</a>
            </td>
        </tr>
        <tr style="background-color:#444; color: white; text-align: center;">
            <td><input id="chonhet" type="checkbox"></td>
            <td>Tên bài</td>
            <td>Chủ đề</td>
            <td>Ngày thêm</td>
            <td colspan="3">Thao tác</td>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td align="center">
                    <input name="chon" value="<?= $row['id'] ?>" class="chon" type="checkbox">
                </td>
                <td>
                    <a href="../page/articleDetails.php?id=<?= $row['id'] ?>">
                        <?= htmlspecialchars($row['title']) ?>
                    </a>
                </td>
                <td><?= htmlspecialchars($row['category']) ?></td>
                <td><?= $row['created_at'] ?></td>
                <td align="center">
                    <!-- thêm bài viết nổi bâtj -->
                    <a href="../functions/addFeaturedArticle.php?id=<?= $row['id'] ?>"
                        onclick="return confirm('<?= $row['is_featured'] ? 'Bạn có muốn gỡ khỏi danh sách nổi bật?' : 'Đặt bài này thành nổi bật?' ?>')"
                        style="font-size: 20px; text-decoration: none;">
                        <?= $row['is_featured'] ? '⭐' : '☆' ?>
                    </a>
                </td>
                <td align="center"><a id="btn-edit" STYLE ="background-color: #e0e0e0" href="addArticle.php?id=<?= $row['id'] ?>">Sửa</a></td>
                <td align="center">
                    <!-- alert confirm xóa bài viết  -->
                    <a id="btn-delete" STYLE ="background-color: #e0e0e0" href="../functions/deleteArticle.php?id=<?= $row['id'] ?>"
                        onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</form>

<?php
$content = ob_get_clean();
include '../includes/masterAdmin.php';
?>