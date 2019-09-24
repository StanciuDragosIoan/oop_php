<?php
/*
    Getters and setters add a bit of security and validation for data manipulation 
    in our classes;

    We can enfore behaviour in our app (business logic behaviour) through getters and 
    setters (like making sure age is at least 18 or that age is returned as days 
    number hence * 365)
*/


 


class Person
{
    public $name;

    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    //getter
    public function getAge(){
        return $this->age * 365;
    }


    //setter
    public function setAge($age)
    {   
        if($age < 18){
            
            throw new Exception('Person is not old enough');
        }
        $this->age = $age;
    }
}


$john = new Person('John Doe');

$john->age = 30;    

/*
    Note that as $age is public, we can still modify it directly too 
    (and not only through the setter) this is an issue as we want our app to NOT allow 
    setting properties like $age directly, and force the user to do it through a method;

    We would need to make the $age protected in order to do that 
*/
$john->setAge(30);
var_dump($john->getAge());

// var_dump($john);