navigator.geolocation.getCurrentPosition(
  (position) => {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;
    const weatherApiKey = "0b8e857b116c127d3e54a277edb42a91";

    //lấy địa chỉ
    const geocodeUrl = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`;

    fetch(geocodeUrl)
      .then((res) => res.json())
      .then((locationData) => {
        const district = locationData.address.suburb || locationData.address.city_district || locationData.address.county || locationData.address.city || "Không rõ địa điểm";

        //gọi api thời tiết
        const weatherUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=metric&appid=${weatherApiKey}`;

        fetch(weatherUrl)
          .then((res) => res.json())
          .then((weatherData) => {
            if (weatherData.main) {
              const temp = weatherData.main.temp;
              document.getElementById("weather").innerText = `${district}: 🌡 ${temp}°C`;
            } else {
              document.getElementById("weather").innerText = "Không lấy được dữ liệu thời tiết.";
            }
          });
      })
      .catch((err) => {
        document.getElementById("weather").innerText = "Không xác định được địa điểm.";
        console.error("Lỗi khi reverse geocode:", err);
      });
  },
  (error) => {
    document.getElementById("weather").innerText = "Không thể xác định vị trí của bạn.";
    console.error("Lỗi định vị:", error);
  }
);
