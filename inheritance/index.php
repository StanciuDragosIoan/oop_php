<?php

//INHERITANCE (basic exemple)
/*
class Mother
{

    public function getEyeCount()
    {
        return 2;
    }

}

//inherits mother
class Child extends Mother
{

}

$jimmy = new Child();

//child can call mother's methods
//echo $jimmy->getEyeCount(); //2


$jimmy2 = new Child();

//child can call mother's methods
//echo $jimmy2->getEyeCount(); //2
echo (new Child)->getEyeCount();
*/





// //SHAPES EXEMPLE (abstract class example)

/*
abstract class Shape
{
    //adds encapsulation
    protected $color;
    
        //this makes sure that 'red' is the default color for any subclasses if they don't 
        //pass in another color to overwrite the default
    
        public function __construct($color = 'red')
    {
        $this->color = $color;
    }


    
        //shared behaviour for all the subclasses (this method allows us to access the protected
        //color from the subclasses)
    
    public function getColor()
    {
        return $this->color;
    }


    //abstract method (abstract template design patter)
    abstract protected function getArea();

    
        //this abstract function does not require a body (it will only enforce the behaviour that
        //all its subclasses have a getArea() method defined)
    
}


class Square extends Shape
{
    protected $length = 4;
    public function getArea()
    {   
        return pow($this->length, 2);
    }

}


class Triangle extends Shape
{   
    protected $base = 4;
    protected $height = 7;
    public function getArea()
    {   
        return .5 * $this->base * $this->height;
    }
}


 
class Circle extends Shape
{
    protected $radius = 5;

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }
}

echo (new Circle)->getArea();

*/







//real life example


/*
//abstract class (entry point for all the mail sendings)
abstract class Mailer 
{   

    //generic method defined in the abstract class
    public function send($to, $from, $body)
    {

    }
}

class userMailer extends Mailer
{   
    //method of the subclass which leverages the parent method 
    public function sendWelcomeEmail($user)
    {
        return $this->send($user->email);
    }
}
*/

