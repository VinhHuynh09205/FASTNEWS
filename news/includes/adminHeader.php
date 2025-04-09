<header>
  <div class="header-container">
    <h1>
      <a href="index.html">
        <img src="<?php echo BASE_URL; ?>assets/img/logo.jpg" alt="logo" height="100px" width="100px" />
      </a>
    </h1>
    <span class="separator">|</span>
    <span id="datetime"></span>
    
    <div class="logout">
      <a href="../functions/logout.php" class="logout-button">
        <i class="fas fa-sign-out-alt"></i> Đăng xuất
      </a>
    </div>
  </div>
  <nav id="menu">
    <ul>
      <li><a href="../admin/dashboard.php">Trang Chủ</a></li>
      <li><a href="../index.php" target="_blank">Giao diện người dùng</a></li>
      <li><a href="../admin/articleList.php">Quản lý bài viết</a></li>
    </ul>
  </nav>
</header>