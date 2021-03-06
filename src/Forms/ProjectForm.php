<?php

namespace App\Forms;

use App\Config\DbConfig;
use App\Entity\Project;
use \PDO;

class ProjectForm extends Form
{
    protected ?int $id;
    protected $name;
    protected string $type;
    protected $expected_date_start;
    protected $date_start;
    protected $expected_date_end;
    protected $date_end;

    public function __construct(array $post)
    {
        parent::__construct($post);
    }

    /**
     * Regex controle du formulaire nom
     * @author Simon
     * 29/10/20
     */
    protected function nameIsValid()
    {
        return preg_match("/^[A-Za-zÀ-ÿ0-9 .-]{1,}$/", $this->name);
    }

    protected function expected_date_startIsValid()
    {
        return preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}/", $this->expected_date_start);
    }

    protected function expected_date_endIsValid()
    {
        return preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}/", $this->expected_date_start);
    }

    protected function date_startIsValid()
    {
        return preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}/", $this->expected_date_start);
    }

    protected function date_endIsValid()
    {
        return preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}/", $this->expected_date_start);
    }

    /**
     * @author Aymeric
     * 23/10/20
     * Fonction permetant d'ajouter un Projet a la BDD
     */
    public function add()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $objectVars = get_object_vars($this);
        unset($objectVars['id']);
        $param = array_values($objectVars);
        $fields = join(", ", array_keys($objectVars));
        $values = join(",", array_map(fn() => "?", $objectVars));
        $query = $pdo->prepare("INSERT INTO project ($fields) VALUES ($values)");
        $query->execute($param);
    }

    /**
     * @author Aymeric
     * 23/10/20
     * Fonction permetant de modifier un Projet de la BDD
     */
    public function update()
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $params = get_object_vars($this);
        unset($params['id']);
        $params = join(", ", array_map(function ($key, $value) {
            if ($value) {
                return "$key = '$value'";
            } else {
                return "$key = null";
            }
        }, array_keys($params), array_values($params)));
        $query = $pdo->prepare("UPDATE project SET $params WHERE id = $this->id");
        $query->execute();
    }
}