<?php 
/**
 * @author Doryan
 * date 19/10/20
 */

require_once '../src/Config/DbConfig.php';

abstract class Repository
{
    protected PDO $pdo;
    private string $table;
    private string $classname;

    public function __construct(string $classname)
    {
        $this->pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $this->classname = $classname;
        $this->table = strtolower($classname);
    }
}