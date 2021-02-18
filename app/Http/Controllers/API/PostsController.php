<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Requests\api\PostRequest;
use App\Http\Controllers\Controller;
use App\Repositories\API\PostsRepo;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $postRepo;
     protected $nbrePerPage=5;

     public function __construct(PostsRepo $postsRepo)
     {
        $this->middleware('auth',['except'=>'index']); 
        $this->middleware('admin',['only'=>'destroy']); 
        $this->postRepo=$postsRepo;
     }

    public function index()
    {
        //
        $posts=$this->postRepo->getPaginate($this->nbrePerPage);
        $links=$posts->render();
        return view('posts.liste',compact('posts','links'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $postReq)
    {
        //
        $inputs=array_merge($postReq->all(),['user_id'=>$postReq->user()->id]);
        $this->postRepo->store($inputs);
        return redirect(route('post.index'))->with('success','votre article a été ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->postRepo->destroy($id);
        return redirect()->route('post.index')->with('success','votre article a été supprimer');
    }
}
