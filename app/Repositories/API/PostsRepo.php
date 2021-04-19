<?php

namespace App\Repositories\API;
use App\Models\API\PostModel;

class PostsRepo extends RessourceRepo{
   
    public function __construct(PostModel $posts)
    {
            $this->models=$posts;        
    }

    public function queryWithUserAndTags(){
        return $this->models->with('user','tag')->orderBy('posts.created_at','desc');
    }

    public function getWithUserAndTagsPaginate($n){
        return $this->queryWithUserAndTags()->paginate($n);
    }
    public function getWithUserAndTagsForTagPaginate($tag,$n){
        return $this->queryWithUserAndTags()->whereHas('tag',function($q) use ($tag){
            $q->where('tags.tag_url',$tag);
        })->paginate($n);
    }

    public function destroy($id){
        $post=$this->models->findOrFail($id);
        $post->tags()->detach();
        $post->delete();
    }
    
   
   
}
