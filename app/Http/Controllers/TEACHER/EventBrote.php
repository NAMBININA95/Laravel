<?php

namespace App\Http\Controllers\TEACHER;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TEACHER\EventBroteModel as broteModel;

class EventBrote extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	public function index()
    {
        //
	    $liste=broteModel::get();
	    //$liste=$this->brModel::get();
	    //dd($liste);
	    $inona="Alika maty ty";
	    return view('TEACHER.pages.EventBrote.liste',compact('liste','inona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	    return view('TEACHER.pages.EventBrote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
	    //return redirect(route('accueil'));

	    $this->validate($request,[
			'titre'=>'required|min:3'
	    ]);
	    $inputData=[
	    	'titre'=>$request->input('titre'),
	    	'description'=>$request->input('description'),
	    	'lieu'=>$request->input('lieu'),
	    	'date_event'=>$request->input('date_event'),
	    	'time_event'=>$request->input('time_event')
	    ];

	    broteModel::create($inputData);
	    return redirect()->route('accueil');
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

	    /**
	    ATTENTION : FAUT PAS UTILISER BOUCLE POUR AFFICHER SUR BLADE
	     MAIS APPEL DIRECTEMENT LES ATTRIBUT DANS LA TABLE
	     *
	     *----
	     *
	     *$recup=broteModel::withoutGlobalScopes()->findOrFail($id);
	     */
	    $recup=broteModel::findOrFail($id);
	    return view('TEACHER.pages.EventBrote.show',compact('recup'));


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
	    //dd('edit mandea');
	    $recup=broteModel::findOrFail($id);
	    return view('TEACHER.pages.EventBrote.edit',compact('recup'));
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
	    $this->validate($request,[
		    'titre'=>'required|min:3'
	    ]);
	    $inputData=[
		    'titre'=>$request->input('titre'),
		    'description'=>$request->input('description'),
		    'lieu'=>$request->input('lieu'),
		    'date_event'=>$request->input('date_event'),
		    'time_event'=>$request->input('time_event')
	    ];
	    $up_date=broteModel::findOrFail($id);
	    $up_date->update($inputData);
	    return redirect()->route('event-brote.show',$id);
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
	    broteModel::destroy($id);
	    return redirect(route('accueil'));
    }
}
