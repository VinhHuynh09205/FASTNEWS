document.addEventListener("DOMContentLoaded", function () {
  const articles = document.querySelectorAll(".latest-news article h3 a");
  articles.forEach((article) => {
    article.addEventListener("click", function (event) {
      event.preventDefault();
      alert("Bạn đã nhấp vào: " + this.textContent);
    });
  });
});
function updateTime() {
  let now = new Date();
  let options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
    hour: "2-digit",
    minute: "2-digit",
    second: "2-digit",
  };
  document.getElementById("datetime").textContent = now.toLocaleDateString(
    "vi-VN",
    options
  );
}

// Cập nhật ngay khi tải trang và sau đó mỗi giây
document.addEventListener("DOMContentLoaded", function () {
  updateTime();
  setInterval(updateTime, 1000);
});
document.addEventListener("DOMContentLoaded", function () {
  const bellIcon = document.getElementById("bell-icon");
  const notificationDropdown = document.getElementById("notification-dropdown");

  bellIcon.addEventListener("click", function (event) {
    notificationDropdown.classList.toggle("show");
    event.stopPropagation(); // Ngăn sự kiện lan ra ngoài
  });

  // Ẩn dropdown khi nhấn ngoài
  document.addEventListener("click", function (event) {
    if (
      !notificationDropdown.contains(event.target) &&
      event.target !== bellIcon
    ) {
      notificationDropdown.classList.remove("show");
    }
  });
});
