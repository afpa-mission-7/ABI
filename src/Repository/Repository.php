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
    $query->setFetchMode(PDO::FETCH_CLASS, "App\Entity\\" . $this->classname);
    return $query->fetch();
}

public function findBy(array $criteria, array $orderBy = null, int $limit = null, int $offset = null)
    {
        $params = array_values($criteria);
        if (!empty($citeria)) {
            $criteria = " WHERE " . join(" AND ", array_map(fn($key) => "$key = ?", array_keys($criteria)));
        } else {
            $criteria = null;
        }
        if ($orderBy) $orderBy = " ORDER BY " . join(", ", array_map(fn($key, $value) => "$key $value", array_keys($orderBy), array_values($orderBy)));
        if ($limit) $limit = " LIMIT $limit";
        if ($offset) $offset = " OFFSET $offset";
        $query = $this->pdo->prepare("SELECT * FROM $this->table $criteria $orderBy $limit $offset");
        $query->execute($params);
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Entity\\" . $this->classname);
    }

public function findAll():array 
{
    $sql = "SELECT * FROM $this->table";
    $query = $this->pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, "App\Entity\\" . $this->classname);
}

public function findOneBy(array $criteria, array $orderBy = null) 
{
    $params = array_values($criteria);
    $criteria = " WHERE " . implode(" AND ", array_map(fn($key)=>" $key = ?", array_keys($criteria)));
    $orderBy = " ORDER BY " . implode(", ", array_map(fn($key, $value)=>"$key $value", array_keys($orderBy), array_values($orderBy)));
    $sql = "SELECT * FROM $this->table $criteria $orderBy";
    $query = $this->pdo->prepare($sql);
    $query->execute($params);
    $query->setFetchMode(PDO::FETCH_CLASS, "App\Entity\\" . $this->classname);
    return $query->fetch();
}





}