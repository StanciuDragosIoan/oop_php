<?php
 namespace Acme2;
//registers a user
class RegisterUser
{


    //accept data as param and a $listener of type RespondsToUserRegistration
    public function execute(array $data, RespondsToUserRegistration $listener)
    {   
        var_dump('registering the user');

        //listener calls userRegisteredSuccessfully from the AuthController class
        $listener->userRegisteredFailed();
    }
}