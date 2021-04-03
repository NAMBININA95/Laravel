<?php
namespace App\Services;


class DateInjection{
    public function isWeekend(){
        return date('N')>=6;
    }
}
