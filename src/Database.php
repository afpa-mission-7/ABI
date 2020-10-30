<?php
/**
 * @author Aymeric
 */

namespace App;

use \PDO;
use App\Config\DbConfig;

class Database
{
    /**
     * Retourne une instance de PDO
     * @return PDO
     */
    public static function connect(): PDO
    {
        return new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
}
}