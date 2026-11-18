<?php

class Database
{

    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
        //     Database::$connection =
        //        new mysqli("localhost", "werepaircp_wr", "O6e?W~a{H$0Yj2+S", "werepaircp_wr", "3306");
        // }

        Database::$connection = new mysqli("localhost", "root", "", "werepaircp_wr", "3306");
        }
    }

    public static function iud($q)
    {
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q)
    {

        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}
