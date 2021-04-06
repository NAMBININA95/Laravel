<?php

namespace App\Http\Controllers\TEACHER;

use App\Http\Requests\TEACHER\ShortUrl;
use App\Models\TEACHER\Url_Short;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShotUrl extends Controller
{
    //
    public function create(){
        return view('TEACHER.pages.shortcut');
    }
    public function store(ShortUrl $requestUrl){//Lorsqu'on utilise Request $request on on peut appeler directement le name dans l'input avec $request->link_origi
        //    $url=$_POST['shortcut'];
        /*
         * Il y  a plusieurs facons d'acceder à nos input :
         *      request()->get('shortcut')
         *      request()->input('shortcut')*/

        //$url_short=$requestUrl->all();
        $inputs=array_merge($requestUrl->all(),['link_origi'=>$requestUrl->input('link_origi'),'link_short'=>Url_Short::generateTextRandom()]);
        //$inputs=array_merge($requestUrl->all(),['link_origi'=>$requestUrl->input('link_origi'),'link_short'=>Url_Short::generateTextRandom()]);
        //$url2= Url_Short::where('link_origi',$request->link_origi)->first();
       $url2= Url_Short::where('link_origi',request('link_origi'))->first();

        if($url2){

            return view('TEACHER.pages.shorcutvalue')->withShortcut($url2->link_short);

        }



        /* $row=App\Models\TEACHER\Url_Short::create([
             'link_origi'=>request('shortcut'),//
             'link_short'=>App\Models\TEACHER\Url_Short::generateTextRandom()

         ]);//pour l'insertion si le url n'existe pas encore*/

        $row2=Url_Short::create($inputs);//pour l'insertion si le url n'existe pas encore

        if($row2){
            return view('TEACHER.pages.shorcutvalue')->withShortcut($row2->link_short);
        }


    }
    public function show($shortcut){
        /**Avec firstOrFail fait des erreur dont devrions les corriger dans App/Exception */
        $url2= Url_Short::whereLinkShort($shortcut)->firstOrFail();
//        if(! $url2){
//            return redirect('/shortcut-website');
//        }else{

            return redirect($url2->link_origi);
        //}

    }
}
