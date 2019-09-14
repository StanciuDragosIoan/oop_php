<?php
 //MESSAGES

 class Person
 {
     protected $name;
     public function __construct($name)
     {
         $this->name = $name;
     }
 }


 class Business
 {  
    protected $staff;

    //the business class needs an instance of the Staff class when it's initialized (so it can add the person it employs to the staff collection)
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;

    }
    //the hire() method takes in as parameter only an instance of the Person class (this is called type hinting)
    public function hire(Person $person){

        //add person to the staff collection
        $this->staff->add($person);
    }
 }

 class Staff
 {  

    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }


 
    public function add(Person $person)
    {   
        //add the person to the members array
        $this->members[] = $person;
    }
 }

 $jeffrey = new Person('Jeffrey');

 $staff = new Staff(($jeffrey));

 

 $laracasts = new Business($staff);


 //hire some1 else
//  $jane = new Person('Jane Doe');
//  $laracasts->hire($jane);
$laracasts->hire(new Person('Jane'));

// now staff has 1 member ($jeffrey);
 var_dump($staff);


 //the fact that a class requires an instance of another class means it has a dependency; Also the idea of loosely/tight coupled classes
 //is based on dependencies (how many dependencies does a class have and how tightly/loosely coupled are they? );