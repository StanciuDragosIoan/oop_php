<?php namespace Acme2;

interface RespondsTouserRegistration
{
    public function userRegisteredSuccessfully();

    public function UserRegisteredFailed();
}
