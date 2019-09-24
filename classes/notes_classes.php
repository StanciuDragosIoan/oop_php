<?php

/*
    ### CLASSES ###
*/

/*
    Basic class definitions begin with the keyword class, followed by a class name, followed 
    by a pair of curly braces which enclose the definitions of the properties and methods 
    belonging to the class.

    class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}
*/



class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo(); // this is defined 

A::foo(); // $this is not defined see below:
/*
    $this is not defined as foo() is not a static method and even if foo were static, 
    $this would not be defined (self would be defined)
*/
$b = new B();
$b->bar(); //this is not defined see below:
/*
    $this is not defined as bar() is not a static method and even if it were static, 
    $this would not be defined (self would be defined)
*/

B::bar(); //this is not defined 
/*
    $this is not defined as bar() is not a static method and even if it were static, 
    $this would not be defined (self would be defined)
*/
