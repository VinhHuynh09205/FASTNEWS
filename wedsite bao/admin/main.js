document.addEventListener("DOMContentLoaded", function () {
  const articles = document.querySelectorAll(".latest-news article h3 a");
  articles.forEach((article) => {
    article.addEventListener("click", function (event) {
      event.preventDefault();
      alert("Bạn đã nhấp vào: " + this.textContent);
    });
  });
});
