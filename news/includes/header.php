<?php
include_once __DIR__ . '/../functions/database.php';
$sql = "select distinct category from news";
$kq = mysqli_query($conn, $sql);
?>

<header>
  <div class="header-container">
    <h1>
      <a href="index.php">
        <img class="logo" src="<?php echo BASE_URL; ?>assets/img/logo.jpg" alt="logo" height="100px" width="100px" />
      </a>
    </h1>
    <span class="separator">|</span>
    <div id="datetime">Đang tải thời gian...</div>
    <span class="separator">|</span>
    <div id="weather">Đang tải nhiệt độ...</div>
    <div class="icons">
      <!-- search button -->
      <div class="search-container">
        <form action="<?php echo BASE_URL; ?>page/search.php" method="GET" class="search-form">
          <input type="text" name="q" placeholder="Tìm kiếm" class="search-input">
          <button type="submit" class="search-btn">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
  <nav id="menu">
    <ul>
      <li>
        <a href="<?php echo BASE_URL; ?>index.php"><i class="fa fa-home"></i></a>
      </li>

      <?php while ($d = mysqli_fetch_array($kq)) { ?>
        <li>
          <a href="<?php echo BASE_URL; ?>page/CatalogueDetails.php?category=<?php echo urlencode($d['category']); ?>">
            <?php echo htmlspecialchars($d['category']); ?>
          </a>
        </li>
      <?php } ?>

    </ul>
  </nav>
</header>