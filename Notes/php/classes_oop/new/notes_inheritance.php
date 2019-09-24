<?php

/*
    ### INHERITANCE ###
*/

/*
    A class can inherit methods and properties from its parent class
*/


/*

class Mother 
{
    public function getEyeCount()
    {
        return 2;
    }
}

class Child extends Mother
{

}

$jimmy = new Child;
//child can call Mother's methods
//echo $jimmy->getEyeCount();


//alternative syntax for instantiate class: 
(new Child)->getEyeCount();

*/



/*
    Besides inheriting from the parent class, a child class can also overwrite the default 
    method of the parent class (see below):
*/


/*

class Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}


//Square cna use the getArea() method from Shape
class Square extends Shape
{

}

//Triangle needs to overwrite the getArea() from Shape as its algorithm for area calculation
//is different  (and child can overwrite parent class methods)
class Triangle extends Shape
{
    protected $height = 4;
    protected $base = 7;

    public function getArea()
    {
        return .5 * $this->base*$this->height;
    }
}

//when using inheritance we can overwrite the parent method in the child class by creating a 
//method in the child class with the same name

//echo (new Triangle)->getArea();

*/

/*
    In this case, as the formula for calculating the area for a triangle is different 
    than the one for a square, the Triangle class overwrites the default method getArea() 
    from the parent with an own getArea() method which implements the right algorithm for 
    triangle area calculation;
*/