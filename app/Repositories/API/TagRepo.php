<?php
namespace App\Repositories\API;

use App\Models\API\Tags;

class TagRepo {

    protected $tag;
    public function __construct(Tags $tags) {
            $this->tag=$tags;
    }

    public function store($post,$tagss){

        $tags=explode(',',$tagss);
        foreach($tags as $taag){
            $tag=trim($taag);
            $tag_url=Str::slug($tag);
            $tag_ref=$this->tag->where('tag_url',$tag_url)->first();
            if(is_null($tag_ref)){
                $tag_ref= new $this->tag([
                    'tag'=>$tag,
                    'tag_url'=>$tag_url
                ]);
                $post->tags()->save($tag_ref);
            }else{
                $post->tags()->attach($tag_ref->id);
            }
        }
    }
}