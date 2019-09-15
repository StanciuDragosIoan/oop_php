<?php 

    class Person
    {
        public function __construct($name)
        {
            $this->name = $name;
        }
    }


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




//the business will hire a person and the person will join the staff;


//create person
$jeffrey = new Person('Jeffrey Way');
 
//pass $jeffrey as param when instantiating the Staff class (intended behaviour expressed in the Staff constructor method)
$staff = new Staff($jeffrey);

$laracasts = new Business($staff);

 
$laracasts->hire(new Person('Jane Doe'));

 

// var_dump($staff); die();

//replaced the simple staff dumping with a method of Business class which gets all the staff members;
var_dump($laracasts->getStaffMembers());

