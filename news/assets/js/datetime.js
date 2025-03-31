function updateTime() {
  let now = new Date();
  let dateOptions = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  let timeOptions = {
    hour: "2-digit",
    minute: "2-digit",
    second: "2-digit",
  };

  let date = now.toLocaleDateString("vi-VN", dateOptions);
  let time = now.toLocaleTimeString("vi-VN", timeOptions);

  document.getElementById("datetime").innerHTML = `📆 ${time} <b>${date}</b>`;
}

document.addEventListener("DOMContentLoaded", function () {
  updateTime();
  setInterval(updateTime, 1000);
});
