<?php


namespace App\Forms;


abstract class Form
{
    public function __construct($post)
    {
        // Boucle sur $post et attribut chaque valeur aux propriétés des classes filles correspondantes
        foreach ($post as $key => $value) {
            if(empty($value)){
                $this->$key = null;
            }else{
                $this->$key = $value;
            }
        }
    }
}