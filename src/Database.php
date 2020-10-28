<?php


namespace App;

use \PDO;
use App\Config\DbConfig;


class Database
{
    public static function connect()
    {
        return new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
}
}