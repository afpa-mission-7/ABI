<?php


namespace App\Entity;


abstract class Entity
{
    public function unjoin(Entity $entity)
    {
        $tableThis = strtolower(str_replace("App\Entity\\", "", get_class($this)));
        $tableEntity = strtolower(str_replace("App\Entity\\", "", get_class($entity)));

    }
}