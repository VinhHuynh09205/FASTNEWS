// document.addEventListener("DOMContentLoaded", function () {
//   updateMostViewedNews();

//   // Theo dõi lượt xem khi click vào bài viết
//   document.querySelectorAll(".news-section a").forEach((link) => {
//     link.addEventListener("click", function () {
//       let title = this.innerText; // Lấy tiêu đề bài viết
//       increaseViewCount(title);
//     });
//   });
// });

// // Hàm tăng số lượt xem
// function increaseViewCount(title) {
//   let views = JSON.parse(localStorage.getItem("viewCounts")) || {};
//   views[title] = (views[title] || 0) + 1; // Tăng lượt xem
//   localStorage.setItem("viewCounts", JSON.stringify(views));
//   updateMostViewedNews(); // Cập nhật danh sách
// }

// // Hàm cập nhật danh sách "Xem Nhiều"
// function updateMostViewedNews() {
//   let views = JSON.parse(localStorage.getItem("viewCounts")) || {};
//   let sortedArticles = Object.entries(views)
//     .sort((a, b) => b[1] - a[1]) // Sắp xếp theo lượt xem giảm dần
//     .slice(0, 8); // Lấy top 8 bài xem nhiều nhất

//   let mostViewedContainer = document.getElementById("most-viewed-news");
//   mostViewedContainer.innerHTML = ""; // Xóa danh sách cũ

//   sortedArticles.forEach(([title, count], index) => {
//     let articleElement = document.createElement("div");
//     articleElement.classList.add("most-viewed-item");
//     articleElement.innerHTML = `
//             <span>${index + 1}</span>
//             <a href="#">${title}</a>
//             <span class="comment-count">👁 ${count}</span>
//         `;
//     mostViewedContainer.appendChild(articleElement);
//   });
// }
