<?php

namespace App\Helpers;

use \DateTime;

class JsonHelpers
{

    public static function ObjectToAssoc(array &$objectVars)
    {
        array_walk_recursive($objectVars,function(&$value){
            if(is_object($value)){
                $value = $value->toAssoc();
            }
        });
    }

    public static function formatDates(array &$objectVars)
    {
        $objectVars =  array_combine(array_keys($objectVars), array_map(function ($value) {
            if ($value instanceof DateTime) {
                return $value->format("Y-m-d");
            } else {
                return $value;
            }
        }, array_values($objectVars)));
    }
}