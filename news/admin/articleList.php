<?php
    include '../functions/database.php';
    $result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");

    $title = "Quản lý bài viết - FASTNEWS";

    /////////////////////////////
    $content = <<<HTML
    <h1 style="text-align: center;"> QUẢN LÝ BÀI VIẾT</h1>
    <hr style="width: 90%; margin-bottom: 30px;">
    <form id="form1" method="post">
    <table align="center" border="1" cellpadding="4" cellspacing="0" width="1000">
        <tr>
            <td colspan="4" align="left">
                <input id="xoahet" value="Xóa đã chọn" type="button">
            </td>
            <td colspan="2" align="center">
                <a href="addArticle.php">Thêm bài mới</a>
            </td>
        </tr>
        <tr style="background-color:#444; color: white; text-align: center;">
            <td><input id="chonhet" type="checkbox"></td>
            <td>Tên bài</td>
            <td>Chủ đề</td>
            <td>Ngày thêm</td>
            <td colspan="2">Thao tác</td>
        </tr>
    HTML;

    /////////////////////////
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $titleRow = htmlspecialchars($row['title']);
        $category = htmlspecialchars($row['category']);
        $createdAt = $row['created_at'];

        $content .= <<<HTML
        <tr>
            <td align="center"><input name="chon" value="{$id}" class="chon" type="checkbox"></td>
            <td>{$titleRow}</td>
            <td>{$category}</td>
            <td>{$createdAt}</td>
            <td align=center><a href="addArticle.php?id={$id}">Sửa</a></td>
            <td align=center><a href="../functions/deleteArticle.php?id={$id}" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a></td>
        </tr>
        HTML;
    }

    /////////////////////////////////
    $content .= <<<HTML
    </table>
    </form>
    HTML;
    include '../includes/masterAdmin.php';
?>
