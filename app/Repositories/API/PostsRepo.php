<?php

namespace App\Repositories\API;
use App\Repositories\API\RessourceRepo;
use App\Models\API\PostModel;

class PostsRepo extends RessourceRepo{
   
    public function __construct(PostModel $posts)
    {
            $this->models=$posts;        
    }
   
   
}