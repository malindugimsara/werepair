<?php
$http_host = $_SERVER['HTTP_HOST'] ?? 'localhost';
if (strpos($http_host, 'localhost') !== false || strpos($http_host, '127.0.0.1') !== false) {
    $url = "http://" . $http_host . "/werepair/";
} else {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || ($_SERVER['SERVER_PORT'] ?? 80) == 443) ? "https://" : "https://";
    $url = $protocol . $http_host . "/";
}
?>