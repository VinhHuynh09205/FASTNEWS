function increaseViews() {
  let views = localStorage.getItem("articleViews") || 0;
  views = parseInt(views) + 1;
  localStorage.setItem("articleViews", views);
  document.getElementById("view-count").innerText = `👁 ${views}`;
}

// Hiển thị số lượt xem khi tải trang
document.addEventListener("DOMContentLoaded", function () {
  let views = localStorage.getItem("articleViews") || 0;
  document.getElementById("view-count").innerText = `👁 ${views}`;
});
