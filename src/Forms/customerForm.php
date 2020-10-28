<?php


namespace App\Forms;

use \PDO;
use App\Config\DbConfig;
use App\Entity\Customer;
use App\Repository\Repository;

class CustomerForm extends Form
{
    protected int $id;
    protected string $company_name;
    protected string $sector_activity;
    protected string $address;
    protected string $zip;
    protected string $city;
    protected string $revenue;
    protected int $staff;
    protected string $phone;
    protected string $email;
    protected ?string $comment;

    public function __construct(array $post)
    {
        parent::__construct($post);
    }

/**
 * @author Doryan
 * 23/10/20 
 * Fonction permetant de modifier un Client de la BDD
 */
    public function add()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $objectVars = get_object_vars($this);
        unset($objectVars['id']);
        $param = array_values($objectVars);
        $query = $pdo->prepare("INSERT INTO customer (company_name, sector_activity, address, zip, city, revenue, staff, phone, email, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->execute($param);
    }


    public function update()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $param = get_object_vars($this);
        unset($param['id']);
        $param = join(", ", array_map(fn($key, $value) => "$key = '$value'", array_keys($param), array_values($param)));
        $query = $pdo->prepare("UPDATE customer SET $param WHERE id = $this->id");
        $query->execute([$param]);

    }
}