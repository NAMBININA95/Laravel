<?php
namespace App\ServiceInjectionUtilities;


class DateInjection{
    public function isWeekend(){
        return date('N')>=6;
    }
}
