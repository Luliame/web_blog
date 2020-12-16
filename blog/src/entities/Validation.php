<?php

class Validation
{
    public $patterns = array(
        'pseudo' => "/^([a-zA-Z0-9-_]{2,10})$/",
        'date' => "/[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}/",
        'title' => "/^([a-zA-Z0-9-_]{2,16})$/"
    );

    public function verif(string $str, string $pattern): bool
    {
        switch ($pattern) {
            case 'pseudo':
                return preg_match($this->patterns["$pattern"], $str);
            case 'title':
                return preg_match($this->patterns["$pattern"], $str);
            case 'date':
                return preg_match($this->patterns["$pattern"], $str);
            default:
                return false;
        }
    }

    function allExist(array $a): bool
    {
        foreach ($a as $item) {
            if (empty($item)) return false; // juste empty suffit
        }
        return true;
    }

    function nettoyer(string $str): string
    {
        return filter_var($str, FILTER_SANITIZE_STRING);
    }
}