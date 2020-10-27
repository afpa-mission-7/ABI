<?php


namespace App\Traits;


use App\Helpers\JsonHelpers;

Trait JSONTrait
{
    public function toAssoc()
    {
        $objectVars = get_object_vars($this);
        JsonHelpers::formatDates($objectVars);
        JsonHelpers::ObjectToAssoc($objectVars);
        return $objectVars;
    }

    public function toJSON()
    {
        return json_encode($this->toAssoc());
    }
}