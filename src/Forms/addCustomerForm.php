<?php

namespace App\Forms;

use App\Entity\Customer;
use App\Config\DbConfig;
use \PDO;

class AddCustomerForm extends Customer
{
    public function __construct($post)
    {
        $this->id = $post['id'];
        $this->company_name = $post['company_name'];
        $this->sector_activity = $post['sector_activity'];
        $this->address = $post['address'];
        $this->zip = $post['zip'];
        $this->city = $post['city'];
        $this->revenue = $post['revenue'];
        $this->staff = $post['staff'];
        $this->phone = $post['phone'];
        $this->email = $post['email'];
    }
    
    public function addCustomer()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $objectVars = get_object_vars($this);
        unset($objectVars['id']);
        $param = array_values($objectVars);
        $query = $pdo->prepare("INSERT INTO customer (company_name, sector_activity, address, zip, city, revenue, staff, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->execute($param);
    }
    public function updateCustomer()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $param = get_object_vars($this);
        unset($param['id']);
        $param = join(", ", array_map(fn($key, $value) => "$key = '$value'", array_keys($param), array_values($param))); 
        $query = $pdo->prepare("UPDATE customer SET $param WHERE id = $this->id");
        $query->execute([$param]);

    }




}