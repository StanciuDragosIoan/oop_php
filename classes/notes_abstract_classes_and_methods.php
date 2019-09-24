<?php

/*
    ### ABSTRACT CLASSES ###
*/

/*
    Abstract classes are declared using the abstract word and they are used to enforce a 
    certain behavior for its sub-classes. 
    
    Also, abstract classes cannot be instantiated.
*/


/*

abstract class Shape
{
    protected $color;

    //set default color if none passed to sub-classes on instantiation
    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    //abstract method only enforces that sub-classes must have it (doesn't 
    //matter how it is implemented)
    abstract protected function getArea();
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
        return 0.5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    public function getArea()
    {
        return 'calculating circle area...';
    }
}

//(new Circle); //throws error if Circle class has no getArea() method (this is enforced by the Shape abstract class)

(new Square); //has default color red
(new Square('blue')); //has color blue

//use 'getter method' to access private property
echo (new Square('green'))->getColor(); //prints green

*/


/*
    in the example above, the shapes must have a color being passed as argument when they 
    are instantiated (this is enforced through the abstract class);

    abstract class also adds encapsulation by declaring $color as protected;

    we also added a default color to the abstract class (so that when its subclasses are 
    being instantiated, if they aren’t being passed a color, the default one is being 
    appied);

    we also have a method in the abstract class that allows us to access the private property
    color;

    an abstract method enforces the behavior that its subclasses have the method defined;
*/