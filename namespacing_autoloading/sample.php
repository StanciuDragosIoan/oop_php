<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

//create person
$jeffrey = new Person('Jeffrey Way');

//pass $jeffrey as param when instantiating the Staff class (intended behaviour expressed in the Staff constructor method)
$staff = new Staff($jeffrey);

$laracasts = new Business($staff);


$laracasts->hire(new Person('Jane Doe'));



// var_dump($staff); die();

//replaced the simple staff dumping with a method of Business class which gets all the staff members;
var_dump($laracasts->getStaffMembers());

