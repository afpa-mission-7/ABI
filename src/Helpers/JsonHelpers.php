<?php

namespace App\Helpers;

use \DateTime;

class JsonHelpers
{
    /**
     * Transforme toutes les entrées d'un tableau en tableau assiociatif, de manière récursive
     * @param array $objectVars
     */
    public static function toAssocRecursive(array &$objectVars)
    {
        array_walk_recursive($objectVars, function (&$value) {
            if (is_object($value)) {
                $value = $value->toAssoc();
            }
        });
    }

    /**
     * Transforme tous les DateTime d'un tableau en string au format "Y-m-d"
     * @param array $objectVars
     */
    public static function formatDates(array &$objectVars)
    {
        array_walk_recursive($objectVars, function (&$value, &$key) {
            if ($value instanceof DateTime) {
                $value = $value->format("Y-m-d");
            }
        });
    }
}