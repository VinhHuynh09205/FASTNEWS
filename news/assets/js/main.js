document.addEventListener("DOMContentLoaded", function () {
  const articles = document.querySelectorAll(".latest-news article h3 a");
  articles.forEach((article) => {
    article.addEventListener("click", function (event) {
      event.preventDefault();
      alert("Bạn đã nhấp vào: " + this.textContent);
    });
  });
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

// Lấy phần tử nút "Cuộn lên đầu trang"
document.addEventListener("DOMContentLoaded", function () {
  let mybutton = document.getElementById("back-to-top");

  if (!mybutton) {
    console.error("Nút 'back-to-top' không tồn tại!");
    return;
  }

  // Ẩn nút khi ở đầu trang
  mybutton.style.display = "none";

  // Lắng nghe sự kiện cuộn trang
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      mybutton.style.display = "block"; // Hiện nút khi cuộn xuống
    } else {
      mybutton.style.display = "none"; // Ẩn nút khi ở đầu trang
    }
  });

  // Khi người dùng nhấn vào nút, cuộn lên đầu trang mượt mà
  mybutton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});
