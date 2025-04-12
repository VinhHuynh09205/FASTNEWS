<?php
include '../functions/database.php';

$result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");
$title = "Quản lý bài viết - FASTNEWS";

ob_start(); // Bắt đầu lưu output
?>

<h1 style="text-align: center;"> QUẢN LÝ BÀI VIẾT</h1>
<hr style="width: 90%; margin-bottom: 30px;">
<form id="form1" method="post">
    <table align="center" border="1" cellpadding="4" cellspacing="0" width="1000">
        <tr>
            <td colspan="4" align="left">
                <input id="xoahet" value="Xóa đã chọn" type="button">
            </td>
            <td colspan="3" align="center" nowrap>
                <a href="addArticle.php">Thêm bài mới</a>
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
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['category']) ?></td>
                <td><?= $row['created_at'] ?></td>
                <td align="center">
                    <a href="../functions/addFeaturedArticle.php?id=<?= $row['id'] ?>"
                        onclick="return confirm('<?= $row['is_featured'] ? 'Bạn có muốn gỡ khỏi danh sách nổi bật?' : 'Đặt bài này thành nổi bật?' ?>')"
                        style="font-size: 20px; text-decoration: none;">
                        <?= $row['is_featured'] ? '⭐' : '☆' ?>
                    </a>
                </td>

                <td align="center"><a href="addArticle.php?id=<?= $row['id'] ?>">Sửa</a></td>
                <td align="center">
                    <a href="../functions/deleteArticle.php?id=<?= $row['id'] ?>"
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