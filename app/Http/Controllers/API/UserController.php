<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\UsersController;
use App\Http\Requests\api\UserCreateRequest;
use App\Http\Requests\api\UserUpdateRequest;
use App\Repositories\API\UserRepo;
use App\User;

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


    public function index(/* User $Usr */)
    {
        //
       
       //Mandea code io fa mijery code source hafa koa
         $users=$this->usersRepo->getPaginate($this->nbrePerPage);
         //$links=$users->render();
         $links=$users->setPath('')->render();
         return view('API/index',compact('users','links'));

       /* 
       *Mandea io code io 
        $users = User::latest()->paginate(5);
        return view('API.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5); */
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
        $this->setAdmin($userReq);
        $user=$this->usersRepo->store($userReq->all());
        return redirect()->route('users-teste.index')->with('success','Votre donnée : '.$user->name.' a été enregistrer !!!!');
       /*  return redirect('API/index')->with('success',"L'utilisateur ".$user->name." a été enregistrer .. "); */
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
    public function update( Request $request , UserUpdateRequest $userReq, $id)
    {
        //
        $this->setAdmin($userReq);
        //$this->usersRepo->update($id,$userReq->all());
        $this->usersRepo->update($id,$userReq->except('admin')+['admin'=>$request->has('admin')]);
        return redirect()->route('users-teste.index')->with('success','Votre donnée : '.$userReq->name.' a été modifier !!!!');
        /* return redirect('API/user')->withOk("L'utilisateur a été ".$userReq->input('name')." a été modifié."); */

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
       $this->usersRepo->destroy($id);
       return redirect()->route('users-teste.index')->with('success','Votre donnée a été supprimer !!!!');
    }

    private function setAdmin(Request $request){

        return $request->input('admin');
       /*  if($request->has('admin')==1){
            $request->merge(['admin'=>0]);
        } */ 
       /*  if(!$request->has('admin')){
            $request->merge(['admin'=>0]);
        } */

        //$user->admin= isset($inputs['admin']);
    }
}
