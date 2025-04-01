$(document).ready(function() {
    $("#articleForm").on("submit", function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        // Giả lập gửi dữ liệu (chưa có backend)
        setTimeout(function() {
            $("#status").text("Bài báo đã được gửi (giả lập)");
            $("#articleForm")[0].reset();
        }, 1000);
    });
});
