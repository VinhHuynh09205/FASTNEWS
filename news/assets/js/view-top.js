document.addEventListener("DOMContentLoaded", function () {
  let articles = document.querySelectorAll("article");

  articles.forEach((article, index) => {
    let link = article.querySelector("a");
    let viewSpan = article.querySelector("span");

    // Lấy số lượt xem từ localStorage
    let title = link.innerText.trim();
    let views = getViewCount(title);
    viewSpan.textContent = `👁 ${views}`;

    // Khi người dùng click vào bài viết
    link.addEventListener("click", function () {
      increaseViewCount(title);
      viewSpan.textContent = `👁 ${getViewCount(title)}`;
      updateMostViewedNews(); // Cập nhật "TIN XEM NHIỀU"
    });
  });

  updateMostViewedNews(); // Cập nhật danh sách khi load trang
});

// Hàm lấy số lượt xem từ localStorage
function getViewCount(title) {
  let views = JSON.parse(localStorage.getItem("viewCounts")) || {};
  return views[title] || 0;
}

// Hàm tăng số lượt xem
function increaseViewCount(title) {
  let views = JSON.parse(localStorage.getItem("viewCounts")) || {};
  views[title] = (views[title] || 0) + 1;
  localStorage.setItem("viewCounts", JSON.stringify(views));
}

// Hàm cập nhật danh sách "TIN XEM NHIỀU"
function updateMostViewedNews() {
  let views = JSON.parse(localStorage.getItem("viewCounts")) || {};
  let sortedArticles = Object.entries(views)
    .sort((a, b) => b[1] - a[1]) // Sắp xếp theo số lượt xem giảm dần
    .slice(0, 8); // Lấy top 8 bài xem nhiều nhất

  let mostViewedContainer = document.getElementById("most-viewed-news");
  mostViewedContainer.innerHTML = "<h2>TIN XEM NHIỀU</h2>";

  sortedArticles.forEach(([title, count], index) => {
    let articleElement = document.createElement("div");
    articleElement.classList.add("most-viewed-item");
    articleElement.innerHTML = `
              <span>${index + 1}</span> 
              <a href="#">${title}</a>
              <span class="comment-count">👁 ${count}</span>
          `;
    mostViewedContainer.appendChild(articleElement);
  });
}
