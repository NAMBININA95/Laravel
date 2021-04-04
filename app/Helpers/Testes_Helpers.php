<?php

class Testes_Helpers{
    public static function verif_nbre_paire($articles){
        if($articles->isPair()){
            return '<strong>Le Id de user est un nombre paire</strong>';
        }else{
            return '<strong>Le Id de user est un nombre imppaire</strong>';
        }
    }

    public static function format_dates($dates){
        return $dates->format('d/m/Y H:i');
    }
}
