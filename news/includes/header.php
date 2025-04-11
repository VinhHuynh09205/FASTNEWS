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
          <div class="search-container">
            <input action="#" method="POST" type="text" placeholder="Tìm kiếm" id="keyword" name="q">
            <i class="fa fa-search" id="search-icon"></i>
          </div>
        </div>
      </div>
      <nav id="menu">
        <ul>
          <li>
            <a href="../index.php"><i class="fa fa-home"></i> Trang chủ</a>
          </li>
          <li><a href="<?php echo BASE_URL; ?>page/CatalogueDetails.php">Thời sự</a></li>
          <li><a href="<?php echo BASE_URL; ?>page/CatalogueDetails.php">Thế giới</a></li>
          <li><a href="<?php echo BASE_URL; ?>page/CatalogueDetails.php">Thể thao</a></li>
          <li><a href="<?php echo BASE_URL; ?>page/CatalogueDetails.php">Công nghệ</a></li>
          <li><a href="<?php echo BASE_URL; ?>page/CatalogueDetails.php">Giải trí</a></li>
        </ul>
      </nav>
</header>