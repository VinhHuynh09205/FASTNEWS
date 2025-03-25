<?php
    // tìm thư mục gốc
    $document_root = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
    // tìm thư mục chưa file hiện tại
    $script_dir = str_replace('\\', '/', realpath(dirname(__FILE__)));
    // Lùi về thư mục 'news'
    $base_folder = str_replace($document_root, '', $script_dir . "/.."); 

    // tạo đường dẫn đến các file
    $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $base_folder . "/";

    // định nghĩa base_url
    define('BASE_URL', $base_url);
?>
