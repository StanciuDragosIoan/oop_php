<?php

// interface Animal (basic example)
// {
//     public function communicate();

// }


// //implement the interface
// class Dog implements Animal
// {
//     public function communicate()
//     {
//         return 'bark';
//     }
// }


// class Cat implements Animal
// {
//     public function communicate()
//     {
//         return 'meow';
//     }
// }












//interface 2nd exemple
/*
interface Logger
{
    public function execute($message);
}


class LogToFile implements Logger
{
    public function execute($message)
    { 
        var_dump('log the message to a file ' . $message);
    }
}


class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to a database ' . $message);
    }
}



//..
class UsersController
{   
    protected $logger;

    // public function __construct(LogToFile $logger)  //note that intially we had passed in an implementation of the interface as argument
    public function __construct(Logger $logger)  //now the interface only specifies that it needs a type of logger (so instead of having to pass in the LogToFile class obligatory, we can pass LogToFile, LogToDatabase or any other class that implements the Logger interface)
    {
        $this->logger = $logger;
    }


    public function show()
    {
        $user = 'John Doe';

        //log information
        $this->logger->execute($user);

    }
}

$controller = new UsersController(new LogToDatabase);

$controller->show();
*/








//interface 3rd example (class able to cast a JSON)
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











//interface 4th example (Repository);

interface Repository 
{
    public function save();
}

class MongoRepository implements Repository   //class that queries a database store
{
    public function save($data)
    {
        
    }
}

class FileRepository implements Repository   //class that queries a database store
{
    public function save($data)
    {

    }
}












//interface 5th example Filterable (data can befiltered)
interface Filterable
{
    public function filter();
}


class Favourited implements Filterable
{

}


class UnreadPosts implements Filterable
{
    
}



class DifficultyFilter implements Filterable
{
    
}


