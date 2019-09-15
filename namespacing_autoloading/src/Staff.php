<?php

namespace Acme;

use Acme\Users\Person;

class Staff
{   
    protected $members = [];
    //set $members default to empty array (but $members can also be passed through as argument when instantiating a new Staff obj)
    public function __construct($members =[])
    {
        $this->members[] = $members;
    }

    public function add (Person $person)
    {
        array_push($this->members, $person);
    }

    public function members()
    {
        return $this->members;
    }
}
