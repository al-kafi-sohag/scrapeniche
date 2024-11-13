<?php
require_once '../config/config.php';

// Get requested page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Load layout
require_once '../layouts/default.php'; 