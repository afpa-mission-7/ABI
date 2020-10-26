<?php

namespace App\Helpers;

use \DateTime;

class JsonHelpers
{

    public static function ObjectToAssoc(array &$objectVars)
    {
        array_walk_recursive($objectVars, function (&$value) {
            if (is_object($value)) {
                $value = $value->toAssoc();
            }
        });
    }

    public static function formatDates(array &$objectVars)
    {
        array_walk_recursive($objectVars, function (&$value, &$key) {
            if ($value instanceof DateTime) {
                $value = $value->format("Y-m-d");
            }
        });
    }
}