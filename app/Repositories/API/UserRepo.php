<?php

namespace App\Repositories\API;
use App\User;

class UserRepo{
    protected $users; 

    public function __construct(User $user)
    {
            $this->users=$user;
    }
    public function save(User $user, Array $inputs)
    {
            $user->name=$inputs['name'];
            $user->email=$inputs['email'];
            /* $user->admin= isset($inputs['admin']); */
            $user->save();
    }

    public function getPaginate($n)
    {
           return $this->users->paginate($n);
    }

    public function store(Array $inputs)
    {
            $user= new $this->users;
            $user->password=bcrypt($inputs['password']);
            $this->save($user,$inputs);
            return $user;
    }
    public function getById($id)
    {
            return $this->users->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
            $this->save($this->getById($id),$inputs);
    }

    public function destroy($id)
    {
            $this->getById($id)->delete();
    }
   
}