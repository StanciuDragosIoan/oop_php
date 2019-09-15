<?php
//STATIC METHODS (they are not dynamic like the other ones - they don't need to reach into other classes, they just accept some input and return some output)

/*
class Math
{
    //old way
    // public function add()
    // {
    //     return array_sum(func_get_args());
    // }


    //new way
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}
*/
// $math = new Math;

// var_dump($math->add(2,3));

//call static method (static methods are like some global functions)
//echo Math::add(1,2,3);







//STATIC PROPERTIES
/*class Person 
{   
    //it's a bad idea to declare static properties in a class (as they are shared between class instances)
    // public static $age = 1;

    // public function haveBirthday()
    // {
    //     static::$age ++;
    // }


    //redeclare age as public
    public  $age = 1;


    public function haveBirthday()
    {
        $this->age ++;
    }


    public function age()
    {
        return $this->age;
    }


}

$joe = new Person();

//check the age
$joe->haveBirthday();  //age is 2 if $age static
$joe->haveBirthday();  //age is 3  if $age static

echo $joe->age();
$jane = new Person();  //age is supposed to be 1 but it's actually 3  if $age static
$jane->haveBirthday(); //age is 4   if $age static


echo $jane->age();
// echo Person::$age;



//MOST OF the time static properties/methods are not the right choice;
*/








// CONSTANTS

// class BankAccount
// {
//     const TAX = .09;
// }


// //note they are referenced just like static methods with the scope resolution operator :: )
// echo BankAccount::TAX;







//EXAMPLES WHEN STATIC PROPS/METHS ARE A GOOD CHOICE:

///static functions are namespaced but they are globally accessible functions (e. g. string manip functions from laravel classes)

// public static function lower($str)
// {
//     return str_tolower($str);
// }

// echo lower('TEST');

//they are ok to be used as pure functions (that only take some input and return some output without affecting the surroundings)


//in principle we should not use static methods/props 