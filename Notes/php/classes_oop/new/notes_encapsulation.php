<?php


/*
    ### ENCAPSULATION (or VISIBILITY) ###
*/

/*
    The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined 
    by prefixing the declaration with the keywords public, protected or private. Class 
    members declared public can be accessed everywhere. Members declared protected can be 
    accessed only within the class itself and by inheriting and parent classes. Members 
    declared as  private may only be accessed by the class that defines the member.
*/






/*
    #### Public:

    When you declare a method (function) or a property (variable) as public, those methods
    and properties can be accessed by:

    The same class that declared it.
    The classes that inherit the above declared class.
    Any foreign elements outside this class can also access those 
    things (so instances of the inherited class)
*/

 
/*

class GrandPa {
	public $name='Mark Henry';// A public variable
}


class Daddy extends GrandPa{
     function displayGrandPaName(){
         return $this->name; //public property of GrandPa is avail to subclass
     }
}


// Inherited class Daddy wants to know Grandpas Name
$daddy = new Daddy();
echo $daddy->displayGrandPaName();// Prints 'Mark Henry'

// Public variables can also be accessed outside of the class!
$outsiderWantsToKnowGrandPaName = new GrandPa;

//note class instance accesses the property directly
echo $outsiderWantsToKnowGrandPaName->name;// Prints 'Mark Henry'

*/
 

/*
    public properties/methods/constants can be used by: 
        the originating class, 
        any of its instances,
        the extending classes or any of their instances 
        
    and they can be accessed directly without having to be returned from a method

*/






/*
    #### Protected:

    When you declare a method (function) or a property (variable) as protected, those
    methods and properties can be accessed by:

        The same class that declared it.
        The classes that inherit the above declared class.
        Outsider members cannot access those variables. 
    
    "Outsiders" in the sense that they are not object instances of the inheriting 
    class itself (so only the instances of the parent class).
*/

 
/*

class GrandPa
{
    protected $name = "Mark Henry";
}

class Daddy extends GrandPa
{
    function displayGranPaName()
    {
        return $this->name;
    }
}

$daddy = new Daddy;
//echo $daddy->displayGranPaName();//prints Mark Henry

$outsider = new GrandPa;
echo $outsider->name; //cannot access protected property

*/ 

/*
    protected properties/methods/constants can only be used by:
        the originating class and the classes that extend it + the inheriting classes’ 
        instances, they CANNOT be used by instances of the originating class. 
        
    They have to be returned by a class method in order to be used by the class instances;
*/

/*
    NOTE:

    for the class instance (for inheriting classes), the 
    protected properties/methods/constants cannot be accessed directly, 
    they have to be returned through a class metod:
*/

/*

class One
{
    protected $name = "One";
}

class Two extends One
{
    protected $name = "Two";

    function displayName()
    {
        return $this->name;
    }
}

$two = new Two;
//echo $two->name;//cannot access protected property (even though it's of the Two class)

//protected properties have to be returned from a method (cannot be accessed directly)
echo $two->displayName();//prints 'Two'

*/


/*
    #### Private:

    When you declare a method (function) or a property (variable) as private, 
    those methods and properties can be accessed by:

        The same class that declared it.
*/

/*
class GrandPa
{
    private $name = "Mark Henry";
}

class Daddy extends GrandPa
{
    function displayName()
    {
        return $this->name;
    }
}

$daddy = new Daddy;
echo $daddy->displayName();//notice undefined property
$outsider = new GrandPa;
echo $outsider->name;//error cannot access private property 
*/

/*
    We cannot access private property directly from the class (we have to return it 
    through a class method)
*/



