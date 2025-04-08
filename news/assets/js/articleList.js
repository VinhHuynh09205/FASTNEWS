$(document).ready(function() {
    // Chọn tất cả
    $('#chonhet').click(function() {
        var status = this.checked;
        $('input[name=chon]').each(function() {
            this.checked = status;
        });
    });

    // Xóa hàng loạt
    $('#xoahet').click(function() {
        var listid = '';
        $('input[name=chon]:checked').each(function() {
            listid += ',' + this.value;
        });
        listid = listid.substring(1);

        if (listid) {
            if (confirm('Xóa các bài đã chọn?')) {
                window.location = '../functions/deleteArticle.php?listid=' + listid;
            }
        } else {
            alert('Bạn chưa chọn bài nào!');
        }
    });
});