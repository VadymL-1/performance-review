<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/performance-review') {
    require __DIR__ . '/performance-review.php';
    return true;
}

return false; // let the server handle other files normally