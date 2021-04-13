<?php

namespace App\Http\Controllers\TEACHER;

use App\Models\TEACHER\EventBroteModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TEACHER\EventBroteModel as broteModel;
use App\Http\Requests\TEACHER\EventBrote as RequestBrote;

/**

 L'implicite Route Model Binding est un methode refactoriser le code
 dont vous devez prendre le nom de paramètre dans le route:liste sinon cela ne fonctionnera jamais
 on le donnant n'importe quel nom
 Par contre vous pouvez modifier le nom de de ce paramètre grace à la commande artisan
 */

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
	    $liste=broteModel::paginate(3);
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
	    $event_brote=new EventBroteModel();
	    return view('TEACHER.pages.EventBrote.create',compact('event_brote'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/*Request $request*/ RequestBrote $request)
    {
        //
	    //return redirect(route('accueil'));

	 /*   $this->validate($request,[
			'titre'=>'required|min:3',
		    'titre'=>'required',
		    'lieu'=>'required',
		    'date_event'=>'required',
		    'time_event'=>'required'
	    ]);*/
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
    public function show(broteModel $event_brote)
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
	    //$recup=broteModel::findOrFail($id);

	    //dd($event_brote);
	    return view('TEACHER.pages.EventBrote.show',compact('event_brote'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(broteModel $event_brote)
    {
        //
	    //dd('edit mandea');
	    //$recup=broteModel::findOrFail($id);
	    return view('TEACHER.pages.EventBrote.edit',compact('event_brote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestBrote $request, broteModel $event_brote)
    {
        //
	   /* $this->validate($request,[
		    'titre'=>'required|min:3'
	    ]);*/
	    $inputData=[
		    'titre'=>$request->input('titre'),
		    'description'=>$request->input('description'),
		    'lieu'=>$request->input('lieu'),
		    'date_event'=>$request->input('date_event'),
		    'time_event'=>$request->input('time_event')
	    ];
	    //$up_date=broteModel::findOrFail($id);
	    $event_brote->update($inputData);
	    return redirect()->route('event-brote.show',$event_brote->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(broteModel $event_brote)
    {
        //
	    //broteModel::destroy($id);
	    $event_brote->delete();
	    return redirect(route('accueil'));
    }
}
