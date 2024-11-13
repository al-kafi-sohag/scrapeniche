<?php
require_once '../includes/meta.php';
require_once '../includes/header.php';

// Load requested page content
$page_path = "../pages/{$page}.php";
if (file_exists($page_path)) {
    require_once $page_path;
} else {
    require_once '../pages/404.php';
}

require_once '../includes/footer.php'; 