document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.getElementById("submit-comment");

    if (!submitBtn) return; // Kiểm tra nếu submitBtn tồn tại

    submitBtn.addEventListener("click", function () {
        const name = document.getElementById("username").value.trim();
        const content = document.getElementById("comment").value.trim();
        const newsId = document.getElementById("news-id").value;

        if (!name || !content) {
            alert("Vui lòng nhập tên và nội dung bình luận.");
            return;
        }

        fetch("../functions/submit_comment.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ news_id: newsId, name: name, content: content })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                loadComments();  // Tải lại các bình luận
                document.getElementById("comment").value = ""; // Xóa ô nhập bình luận
            } else {
                alert("Có lỗi khi gửi bình luận.");
            }
        })
        .catch(error => console.error("Lỗi khi gửi bình luận:", error));
    });

    // Hàm tải bình luận
    function loadComments() {
        const newsId = document.getElementById("news-id").value;
        fetch("../functions/get_comments.php?news_id=" + newsId)
            .then(res => res.json())
            .then(data => {
                const list = document.getElementById("comment-list");
                if (!list) return;

                list.innerHTML = ""; // Xóa danh sách bình luận hiện tại

                if (data.success) {
                    // Nếu có bình luận, hiển thị từng bình luận
                    data.comments.forEach(cmt => {
                        const li = document.createElement("li");
                        li.innerHTML = `
                            <div style="display: flex; justify-content: space-between;">
                                <strong>${cmt.name}</strong>
                                <small style="color: gray;">${formatDateTime(cmt.created_at)}</small>
                            </div>
                            <span>${cmt.content}</span>
                        `;
                        list.appendChild(li);
                    });
                } else {
                    // Nếu không có bình luận, hiển thị thông báo
                    const li = document.createElement("li");
                    li.textContent = data.message || "Không có bình luận nào.";
                    list.appendChild(li);
                }
            })
            .catch(error => {
                console.error("Lỗi khi tải bình luận:", error);
            });
    }

    // Hàm định dạng ngày giờ
    function formatDateTime(datetimeStr) {
        const date = new Date(datetimeStr);
        const options = {
            year: 'numeric', month: '2-digit', day: '2-digit',
            hour: '2-digit', minute: '2-digit',
            hour12: false
        };
        return date.toLocaleString('vi-VN', options);
    }

    loadComments(); // Tải bình luận khi trang được tải
});
