<?php 
/**
 * @author Doryan
 * date 19/10/20
 */

use App\Config\DbConfig;

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

public function find(int $id){

}

public function findBy(array $criteria, array $orderBy, int $limit, int $offset) {

}

public function finAll():array {
    
}

public function findOneBy(array $criteria, array $orderBy) {
    
}





}