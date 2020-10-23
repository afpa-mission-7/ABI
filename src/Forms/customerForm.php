<?php


namespace App\Forms;

use \PDO;
use App\Config\DbConfig;
use App\Entity\Customer;
use App\Repository\Repository;

class CustomerForm extends Customer
{
    public function __construct($post)
    {
        $this->company_name = $post['company_name'];
        $this->sector_activity = $post['sector_activity'];
        $this->address = $post['address'];
        $this->zip = $post['zip'];
        $this->city = $post['city'];
        $this->revenue = $post['revenue'];
        $this->staff = $post['staff'];
        $this->phone = $post['phone'];
        $this->comment = $post['comment'];
       // $this->email = $email['email'];
    }


    public function updateCustomer()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $param = array_values(get_object_vars($this));
        $query = $pdo->prepare("UPDATE customer (company_name, sector_activity, address, zip, city, revenue, staff, phone, email, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->execute($param);
    }


}