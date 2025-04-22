<?php
    if (!defined('BASE_URL')) {
        // Fix HTTPS detection for ngrok / reverse proxy
        $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
                    || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
    
        $protocol = $is_https ? 'https' : 'http';
    
        $document_root = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
        $script_dir = str_replace('\\', '/', realpath(dirname(__FILE__)));
        $base_folder = str_replace($document_root, '', $script_dir . "/..");
    
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $base_folder . "/";
    
        define('BASE_URL', $base_url);
    }
    
?>
