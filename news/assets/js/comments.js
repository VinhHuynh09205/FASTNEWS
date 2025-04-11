document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.getElementById("submit-comment");

    if (!submitBtn) return;

    submitBtn.addEventListener("click", function () {
        const name = document.getElementById("username").value.trim();
        const content = document.getElementById("comment").value.trim();

        if (!name || !content) {
            alert("Vui lòng nhập tên và nội dung bình luận.");
            return;
        }

        fetch("../functions/submit_comment.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ news_id: newsId, name: name, content: content }),
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                loadComments();
                document.getElementById("comment").value = "";
            } else {
                alert("Có lỗi khi gửi bình luận.");
            }
        });
    });

    function loadComments() {
        fetch("../functions/get_comments.php?news_id=" + newsId)
            .then(res => res.json())
            .then(data => {
                const list = document.getElementById("comment-list");
                if (!list) return;

                list.innerHTML = "";
                data.forEach(cmt => {
                    const li = document.createElement("li");
                    li.textContent = `${cmt.name}: ${cmt.content}`;
                    list.appendChild(li);
                });
            });
    }

    loadComments();
});
