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
