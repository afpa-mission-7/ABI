<?php

namespace App\Forms;

abstract class Form
{
    /**
     * @autor Aymeric
     * @param $post
     */
    public function __construct($post)
    {
        // Boucle sur $post et attribut chaque valeur aux propriétés des classes filles correspondantes
        // Si une valeur est vide, la transforme en null
        foreach ($post as $key => $value) {
            if(empty($value)){
                $this->$key = null;
            }else{
                $this->$key = $value;
            }
        }
    }
    
    /**
     * @author Aymeric
     * @author Simon
     * 28/10/20 
     * Retourne un tableau contenant le nom de tous les champs d'un formulaire qui ne sont pas valide
     * @return array
     */
    public function getFailed(): array
    {
        $objectVars = get_object_vars($this);
        unset($objectVars['id']);
        $failed = [];
        foreach($objectVars as $key => $value){
            $methodName = $key . 'IsValid';
            if(!$this->$methodName()){
                $failed[]= $key;
            }
        }
        return $failed;
    }
}