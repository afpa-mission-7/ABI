<?php


namespace App\Forms;


abstract class Form
{
    public function __construct($post)
    {
        foreach ($post as $key => $value) {
            if (!empty($value)) {
                $this->$key = $value;
            } else {
                $this->$key = null;
            }
        }
    }
}