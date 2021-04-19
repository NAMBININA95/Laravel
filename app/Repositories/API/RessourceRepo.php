<?php

namespace App\Repositories\API;
class RessourceRepo{
    protected $models; 

    /* public function save(User $user, Array $inputs)
    {
            $user->name=$inputs['name'];
            $user->email=$inputs['email'];
            //$user->admin= isset($inputs['admin']); 
            $user->save();
    } */

    public function getPaginate22($n)
    {
            //avec filtre
           return $this->models->with('user')->orderBy('posts.created_at','desc')->paginate($n);
    }
    
    public function getPaginate($n)
    {
        //sans filtre   
        return $this->models->paginate($n);
    }

    public function store(Array $inputs)
    {
            /* $user= new $this->models;
            $user->password=bcrypt($inputs['password']);
            $this->save($user,$inputs); */
            return $this->models->create($inputs);
    }
    public function getById($id)
    {
            return $this->models->findOrFail($id);
    }
    public function update($id, Array $inputs)
    {
            $this->getById($id)->update($inputs);
    }
    public function destroy($id)
    {
            $this->getById($id)->delete();
    }
   
}
