const url = `https://api.openweathermap.org/data/2.5/weather?id=1566083&units=metric&appid=0b8e857b116c127d3e54a277edb42a91
`;

fetch(url)
  .then((response) => response.json())
  .then((data) => {
    if (data.main) {
      const temp = data.main.temp;
      document.getElementById("weather").innerText = `Hồ Chí Minh:🌡 ${temp}°C`;
    } else {
      document.getElementById("weather").innerText =
        "Không lấy được dữ liệu thời tiết.";
    }
  })
  .catch((error) => console.log("Lỗi khi lấy dữ liệu thời tiết:", error));
