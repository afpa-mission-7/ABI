<?php


namespace App\Forms;

use \PDO;
use App\Config\DbConfig;
use App\Entity\Customer;
use App\Repository\Repository;

class CustomerForm extends Form
{
    protected ?int $id;
    protected $company_name;
    protected $sector_activity;
    protected $address;
    protected $zip;
    protected $city;
    protected $revenue;
    protected $staff;
    protected $phone;
    protected $email;
    protected $comment;

    public function __construct(array $post)
    {
        parent::__construct($post);
    }

    protected function company_nameIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ0-9 .-]{1,}$/", $this->company_name);
    }

    protected function sector_activityIsValid()
    {
        return $this->sector_activity;
    }
    
    protected function addressIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ0-9, -]{1,}$/", $this->address);
    }
    
    protected function zipIsValid()
    {
        return preg_match("/^[0-9]{5}$/", $this->zip);
    }
    
    protected function cityIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ -]{1,}$/", $this->city);
    }
    
    protected function revenueIsValid()
    {
        return preg_match("/^[0-9]{1,10}$/", $this->revenue);
    }

    protected function staffIsValid()
    {
        return preg_match("/^[0-9]{1,4}$/", $this->staff);
    }

    protected function phoneIsValid()
    {
        return preg_match("/^[0-9]{10}$/", $this->phone);
    }

    protected function emailIsValid()
    {
        return preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $this->email);
    }

    protected function commentIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ0-9, .:;()]{0,}$/", $this->comment);
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