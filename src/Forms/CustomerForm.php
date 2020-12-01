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
    protected $comment;

    public function __construct(array $post)
    {
        parent::__construct($post);
    }

    /**
     * Regex controle du formulaire company_name
     * @author Simon
     * 29/10/20
     */
    protected function company_nameIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ0-9 .-]{1,}$/", $this->company_name);
    }

    /**
     * Controle du formulaire sector_activity
     * @author Simon
     * 29/10/20
     */
    protected function sector_activityIsValid()
    {
        
        return in_array($this->sector_activity, ["1", "2", "3", "4"]);
    }

    /**
     * Regex controle du formulaire adresse
     * @author Simon
     * 29/10/20
     */
    protected function addressIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ0-9, -]{1,}$/", $this->address);
    }
    
    /**
     * Regex controle du formulaire code postal
     * @author Simon
     * 29/10/20
     */
    protected function zipIsValid()
    {
        return preg_match("/^[0-9]{5}$/", $this->zip);
    }
    
    /**
     * Regex controle du formulaire ville
     * @author Simon
     * 29/10/20
     */
    protected function cityIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ -]{1,}$/", $this->city);
    }
    
    /**
     * Regex controle du formulaire chiffre d'affaire
     * @author Simon
     * 29/10/20
     */
    protected function revenueIsValid()
    {
        return preg_match("/^[0-9]{1,10}$/", $this->revenue);
    }

    /**
     * Regex controle du formulaire effectif
     * @author Simon
     * 29/10/20
     */
    protected function staffIsValid()
    {
        return preg_match("/^[0-9]{1,4}$/", $this->staff);
    }

    /**
     * Regex controle du formulaire téléphone
     * @author Simon
     * 29/10/20
     */
    protected function phoneIsValid()
    {
        return preg_match("/^[0-9]{10}$/", $this->phone);
    }

    /**
     * Regex controle du formulaire commentaire
     * @author Simon
     * 29/10/20
     */
    protected function commentIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ0-9, .:;()]{0,}$/", $this->comment);
    }

    /**
     * @author Doryan
     * 23/10/20 
     * Fonction permetant d'ajouter un Client a la BDD
     */
    public function add()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $objectVars = get_object_vars($this);
        unset($objectVars['id']);
        $param = array_values($objectVars);
        $query = $pdo->prepare("INSERT INTO customer (company_name, sector_activity, address, zip, city, revenue, staff, phone, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->execute($param);
    }

    /**
     * @author Doryan
     * 23/10/20 
     * Fonction permetant de modifier un Client de la BDD
     */
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