<?php

namespace App\Repositories\API;
use App\Repositories\API\RessourceRepo;
use App\User;

class UserRepo extends RessourceRepo{
   
    public function __construct(User $user)
    {
            $this->models=$user;        
    }
   
   
}