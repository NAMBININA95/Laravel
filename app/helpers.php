<?php

if(!function_exists('verif_nbre_paire')){
    function verif_nbre_paire($articles){
        if($articles->isPair()){
            return '<strong>Le Id de user est un nombre paire</strong>';
        }else{
            return '<strong>Le Id de user est un nombre imppaire</strong>';
        }
    }
}
if(!function_exists('format_dates')){
    function format_dates($dates){
        return $dates->format('d/m/Y H:i');
    }

}

if(!function_exists('flash_customs')){

	function flash_customs($msg,$type="success"){

		session()->flash('notification.message',$msg);
		session()->flash('notification.type',$type);

	}

}


class Test_Helpers{
    public static function verif_nbre_paire($articles){
        if($articles->isPair()){
            return '<strong>Le Id de user est un nombre paire</strong>';
        }else{
            return '<strong>Le Id de user est un nombre imppaire</strong>';
        }
    }

    public static function format_dates($dates){
        return $dates->format('d/m/Y ');
    }
}
