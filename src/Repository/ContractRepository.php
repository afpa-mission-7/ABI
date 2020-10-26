<?php
/**
 * @author Yann BOYER
 */

namespace App\Repository;
use App\Repository\Repository;
use App\Entity\Contract;
use \PDO;

class ContractRepository extends Repository 
{
    public function __construct() 
    {
        parent::__construct("Contract");
    }

    public function addContract(){
        
    }

}
