<?php namespace Acme2;




//receives http requests and returns responses
class AuthController implements RespondsToUserRegistration
{   

    //injecting the RegisterUser controller instance to the AuthController constructor method
    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }



    //passing the RegisterUser controller instance directly to the method (METHOD INJECTION)
    // public function register(RegisterUser $registration)
    // {   
    //     $registration->execute();
    // }


       public function register()
    {   
        //pass in the data [] and $this =reference to current object ->$registration which is instance of RegisterUser
        $this->registration->execute([], $this);
    }


    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully..redirect somewhere..');
    }


    public function userRegisteredFailed()
    {
        var_dump('created unsuccessfully..redirect back..');
    }
}



//if we are going to use a dependency in one method of the class -> use method injection

//if we are going to use a dependency in multiple parts of the class ->use constructor injection (to make it avail to the entire class scope not only to 1 method)