
function updateTime() {
  let now = new Date();
  let options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
    // hour: "2-digit",
    // minute: "2-digit",
    // second: "2-digit",
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
          behavior: "smooth"
      });
  });
});

//giữ thanh menu đầu trang
window.addEventListener("scroll", function () {
  var menu = document.getElementById("menu");

  if (window.scrollY > 143) {
      menu.style.position = "fixed";
      menu.style.top = "0";
      menu.style.left = "0";
      menu.style.width = "100%";
      menu.style.zIndex = "1000";
      menu.style.boxShadow = "0 2px 5px rgba(0, 0, 0, 0.3)";
  } else {
      menu.style.position = "relative";
      menu.style.boxShadow = "none";
  }
});

//khi không có dữ liệu trong ô tìm kiếm thì không cho ấn tìm kiếm
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('.search-form');
  const input = document.querySelector('.search-input');

  form.addEventListener('submit', function (e) {
    if (input.value.trim() === '') {
      e.preventDefault();
    }
  });
});

