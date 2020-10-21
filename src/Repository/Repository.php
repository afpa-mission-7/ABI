<?php 
/**
 * @author Doryan
 * date 19/10/20
 */
namespace App\Repository;

use App\Config\DbConfig;
use \PDO;

class Repository
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

public function find(int $id)
{
    $sql = "SELECT * FROM $this->table WHERE id =?";
    $query = $this->pdo->prepare($sql);
    $query->execute([$id]);
    $query->setFetchMode(PDO::FETCH_OBJ);
    return $query->fetch();
}

public function findBy(array $criteria, array $orderBy, int $limit, int $offset) {

}

public function findAll():array 
{
    $sql = "SELECT * FROM $this->table";
    $query = $this->pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS);
}

public function findOneBy(array $criteria, array $orderBy = null) 
{
    $params = array_values($criteria);
    $criteria = " WHERE " . implode(" AND ", array_map(fn($key)=>" $key = ?", array_keys($criteria)));
    $orderBy = " ORDER BY " . implode(", ", array_map(fn($key, $value)=>"$key $value", array_keys($orderBy), array_values($orderBy)));
    $sql = "SELECT * FROM $this->table $criteria $orderBy";
    dd($sql);
    $query = $this->pdo->prepare($sql);
    $query->execute($params);
    $query->setFetchMode(PDO::FETCH_OBJ);
    return $query->fetch();
}





}