<?php


namespace App\Traits;


use App\Helpers\JsonHelpers;

Trait JSONTrait
{
    /**
     * Transforme un objet en tableau associatif, de manière récursive.
     * Si une propriété est une instance de DateTime, elle sera transformé en string sous le format "Y-m-d"
     * @return array
     */
    public function toAssoc():array
    {
        $objectVars = get_object_vars($this);//$this correspond a l'instance de l'objet dans lequel est appelé jsontrait.
        JsonHelpers::formatDates($objectVars);
        JsonHelpers::toAssocRecursive($objectVars);
        return $objectVars;
    }

    /**
     * Retourne un objet au format JSON, ou false si le formatage est impossible
     * @return false|string
     */
    public function toJSON(): string
    {
        return json_encode($this->toAssoc());
    }
}