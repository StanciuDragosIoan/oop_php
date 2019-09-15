<?php

namespace Acme;

use Acme\Users\Person;

//we can typehint a class that is not part of the current namespace by preceding it with \ -> \Person or we can use the syntax above;

class Business
{   
    protected $staff = [];

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    //type hinting -> hire() can only be used with a Person object
    public function hire(Person $person)
    {   
        //add person to the staff
        $this->staff->add($person);
    }


    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}