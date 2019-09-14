<?php

//ENCAPSULATION
     
    class Person
    {
        private $name;
    
        private $age;
    
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
     
    $john->setAge(30);

    var_dump($john->getAge());


    //through getters and setters, we can manipulate private and protected data (properties), through a 'public interface' (note that the getAge and setAge methods are public);
    //now the direct manipulation of properties like $john->age will throw an error, and force the user to use the public interface;




    // #--------------------------------------------------------------------------------

    // //ENCAPSULATION BASIC EXAMPLE
    // class LightSwitch
    // {

    //     public function on()
    //     {

    //     }


    //     public function off(){
            
    //     }

    //     protected function connect()
    //     {

    //     }


    //     protected function activate()
    //     {
            
    //     }
    // }

    // $switch = new LightSwitch();



    // $switch->connect();

    // //note that protected or private methods cannot be accessed from outside the class (so instances of LightSwitch cannot access them )
    // // but if we extend the LightSwitch class, instances of the inheriting class CAN access the protected methods (private ones can only be accessed from the LightSwitch class)