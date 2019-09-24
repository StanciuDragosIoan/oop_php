<?php

/*
    ### Interfaces ###
*/

/*
    An interface enforces behavior that must be implemented in the classes that ‘implement’ 
    that interface:
*/


/*
interface Animal
{
    public function communicate();
}

class Dog implements Animal
{
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal
{
    public function communicate()
    {
        return 'mewo';
    }
}
*/


/*
    the fact that the method communicate() is defined like this in the Animal interface, 
    means that all classes that implement the Animal interface must have a communicate 
    method (without telling how that method should be implemented so it can be implemented 
    however necessary)

    all animal classes must have a communicate() method (it’s enforced by the interface 
    they implement);

    As a generic rule, whenever a task has multiple possible implementations, we should 
    program them into an interface which makes it easier to change/modify subsequent 
    implementations;
*/  


//2nd Exemple Interface Logger:

/*
interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('Log the message to a file...');
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('Log the message to a database...');
    }
}

class UsersController
{
    protected $logger;

    //type-hinting an interface instead of a specific logger class
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'John Doe';
        //log user to whatever...
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToDatabase);
$controller->show();
*/


/*
    an interface dictates how the classes that implement it should behave (in this case 
    that they should have a log() method, that accepts a $message variable as param;

    if we had type-hinted a specific implementation of logger to the UsersController class,
    whenever we had to change the Logger (add a LoggToRepo class), we would have to modify 
    the UsersController class

    in order to de-couple our code, we simply passed an interface (Logger) to the 
    UsersController constructor 

    now we can pass a LogToDatabase or a LogToFile or whatever other implementation of a 
    Logger to the UsersController, as long as the logger implementation adheres to the 
    interface

    an interface is perfect to use in order to enforce implementation logic and to 
    de-couple the functionality of the app (we do not need to touch the UsersController but 
    we can modify its behavior by passing it a different Logger interface class);

*/

//3rd Exemple Interface:

/*

interface CastsToJson
{
    public function toJson();
}

class User implements CastsToJson
{

}

class Collection implements CastsToJson
{

}

*/


//4th Exemple of Interface (Repository):

/*
interface Repository
{
    public function save();
}

class MongoRepository implements Repository
{
    public function save($data)
    {
        //save $data to mongo repository
    }
}

class FileRepository implements Repository
{
    public function save($data)
    {
        //save $data to File Repository...
    }
}
*/


//5th exemple (Filterable - data can be filtered)

/*

interface Filterable
{
    public function filter();
}

class Favourited implements Filterable
{
    public function filter()
    {
        //filters only the favourite posts
    }
}

class UnreadPosts implements Filterable{
    public function filter()
    {
        //filters only the unread posts
    }
}

class DifficultyFilter implements Filterable
{
    public function filter()
    {
        //filters posts by difficulty
    }
}

*/