<?php

class Database
{
    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
            $is_local = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);

            if ($is_local) {
                Database::$connection = @new mysqli("localhost", "root", "", "werepaircp_wr", 3306);
                // Fallback to live credentials if local database user is werepaircp_wr
                if (Database::$connection->connect_errno) {
                    Database::$connection = new mysqli("localhost", "werepaircp_wr", "O6e?W~a{H$0Yj2+S", "werepaircp_wr", 3306);
                }
            } else {
                Database::$connection = new mysqli("localhost", "werepaircp_wr", "O6e?W~a{H$0Yj2+S", "werepaircp_wr", 3306);
            }

            if (Database::$connection->connect_errno) {
                error_log("Database Connection Failed: " . Database::$connection->connect_error);
                die("Database connection failed. Please contact administrator.");
            }

            Database::$connection->set_charset("utf8mb4");
        }
    }

    public static function escape($string)
    {
        Database::setUpConnection();
        return Database::$connection->real_escape_string((string)$string);
    }

    public static function iud($q)
    {
        Database::setUpConnection();
        return Database::$connection->query($q);
    }

    public static function search($q)
    {
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}

if (!function_exists('resolve_project_image')) {
    /**
     * Resolves project image paths between .webp and .png dynamically
     * to prevent broken images if database extensions and disk files diverge.
     */
    function resolve_project_image($dbPath, $fallback = 'https://dummyimage.com/600x400/ebebeb/4a4a4a&text=No+Image')
    {
        if (empty($dbPath)) {
            return $fallback;
        }
        $clean = ltrim($dbPath, '/\\');
        $root = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR;

        // 1. Direct check on disk
        if (file_exists($root . $clean)) {
            return $clean;
        }

        // 2. Try .webp if database had .png or .jpg
        $webpCandidate = preg_replace('/\.(png|jpe?g)$/i', '.webp', $clean);
        if ($webpCandidate !== $clean && file_exists($root . $webpCandidate)) {
            return $webpCandidate;
        }

        // 3. Try .png if database had .webp
        $pngCandidate = preg_replace('/\.(webp|jpe?g)$/i', '.png', $clean);
        if ($pngCandidate !== $clean && file_exists($root . $pngCandidate)) {
            return $pngCandidate;
        }

        // 4. Try .jpg / .jpeg
        $jpgCandidate = preg_replace('/\.(webp|png)$/i', '.jpg', $clean);
        if ($jpgCandidate !== $clean && file_exists($root . $jpgCandidate)) {
            return $jpgCandidate;
        }

        return $clean;
    }
}
