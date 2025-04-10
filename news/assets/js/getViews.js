document.addEventListener("DOMContentLoaded", function () {
    fetch("../functions/getViews.php?id=<?= $id ?>")
        .then(response => response.text())
        .then(data => {
            document.getElementById("view-count").innerHTML = "👁 " + data;
        });
});

