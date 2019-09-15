<?php
//interface vs abstract classes ####################3


//interfaces
/*
interface Provider
{
    public function authorize($provider);
}

function login(Provider $provider)
{
    //if($provider)  (if we are type checking an object, we need to use an interface and leverage polymorphism)

    //polymorphism in this case refers to the fact that the login() function does not need to know what type of provider it accepts as param (it should accept any type of provider ->that's why we use an interface instead of hardcoding a specific provider implementation)
    $provider->authorize();
}

*/

//interfaces can only enforce public methods;




/*

//abstract classes (cannot be instantiated)
abstract class Provider2
{
    abstract protected function getAuthorizationUrl();
}

//we instantiate sub-classes and leverage enheritance

class FacebookProvider extends Provider2
{
   protected function getAUthorizationUrl()
   {    
     return '';
   }
}
*/





//we can implement multiple interfaces but extend only 1 abstract class


//An interface defines a public API (any implementation has to abide by this public API) but it will not store any logic;

//An abstract class will store logic and will put the common logic in one place;









//example using both interfaces and asbtract classes (use an interface to enfore behaviour and an abstract class to put the common logic in one place);

//interface (an interface is like a contrat)
interface Provider
{
    public function getAuthorizationUrl();
}

abstract class AbstractProvider
{
    protected function related(){

    }
}


class FacebookProvider implements Provider
{
    protected function getAuthorizationUrl()
    {
        return '..';
    }
}