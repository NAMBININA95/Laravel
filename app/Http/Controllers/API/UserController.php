<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\UsersController;
use App\Http\Requests\api\UserCreateRequest;
use App\Http\Requests\api\UserUpdateRequest;
use App\Repositories\API\UserRepo;

class UserController extends Controller
{
    protected $usersRepo;
    protected $nbrePerPage=5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(UserRepo $userRepo)
    {
        $this->usersRepo=$userRepo;
    }


    public function index()
    {
        //
        $users=$this->usersRepo->getPaginate($this->nbrePerPage);
        $links=$users->render();
        return view('API/index',compact('users','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('API/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/* Request $request,  */UserCreateRequest $userReq)
    {
        //
        $user=$this->usersRepo->store($userReq->all());
        return redirect('API/user')->withOK("L'utilisateur ".$user->name." a été enregistrer .. ");
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

        $user=$this->usersRepo->getById($id);
        return view('API/show',compact('user'));
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
        $user=$this->usersRepo->getById($id);
        return view('API/edit',compact('user'));
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
    }
}
