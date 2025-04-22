<?php
include '../functions/database.php';

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$selectedCategory = $_GET['category'] ?? '';

$categories = $conn->query("SELECT DISTINCT category FROM news");

if ($search !== '' || $selectedCategory !== '') {
    $sql = "SELECT * FROM news WHERE 1";
    $params = [];
    $types = "";

    if ($search !== '') {
        $sql .= " AND title LIKE ?";
        $params[] = '%' . $search . '%';
        $types .= "s";
    }

    if ($selectedCategory !== '') {
        $sql .= " AND category = ?";
        $params[] = $selectedCategory;
        $types .= "s";
    }

    $sql .= " ORDER BY created_at DESC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
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
        value="<?= htmlspecialchars($search) ?>">

    <select name="category" id="selectCategories">
        <option value="">-- Tất cả danh mục --</option>
        <?php while ($cat = $categories->fetch_assoc()): ?>
            <option value="<?= htmlspecialchars($cat['category']) ?>"
                <?= ($selectedCategory === $cat['category']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($cat['category']) ?>
            </option>
        <?php endwhile; ?>
    </select>

    <button type="submit">Tìm</button>
</form>

<hr style="width: 90%; margin-bottom: 30px;">

<form id="form1" method="post">
    <table align="center" border="1" cellpadding="4" cellspacing="0" width="1000">
        <tr>
            <td colspan="4" align="left">
                <input class="deleteButton" id="xoahet" value="Xóa đã chọn" type="button">
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
                <td>
                    <a href="../page/articleDetails.php?id=<?= $row['id'] ?>">
                        <?= htmlspecialchars($row['title']) ?>
                    </a>
                </td>
                <td style="white-space: nowrap; padding: 10px;"><?= htmlspecialchars($row['category']) ?></td>
                <td style="white-space: nowrap; padding: 10px;"><?= $row['created_at'] ?></td>
                <td align="center">
                    <a href="../functions/addFeaturedArticle.php?id=<?= $row['id'] ?>"
                        onclick="return confirm('<?= $row['is_featured'] ? 'Bạn có muốn gỡ khỏi danh sách nổi bật?' : 'Đặt bài này thành nổi bật?' ?>')"
                        style="font-size: 20px; text-decoration: none;">
                        <?= $row['is_featured'] ? '⭐' : '☆' ?>
                    </a>
                </td>
                <td align="center">
                    <button id="editButton">
                        <a href="addArticle.php?id=<?= $row['id'] ?>">Sửa</a>
                    </button>
                </td>
                <td align="center">
                    <button class="deleteButton">
                        <a href="../functions/deleteArticle.php?id=<?= $row['id'] ?>"
                            onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                    </button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</form>

<?php
$content = ob_get_clean();
include '../includes/masterAdmin.php';
?>
