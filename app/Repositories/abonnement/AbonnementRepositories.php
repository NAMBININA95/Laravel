<?php

namespace App\Repositories\abonnement;
use App\Repositories\abonnement\AbonnerRepositoriesInterface;
use App\Models\abonnement\Abonner;

class AbonnementRepositories implements AbonnerRepositoriesInterface{

    protected $emails;
    public function __construct(Abonner $abonnerModels){
        $this->emails=$abonnerModels;
    }
    public function save($mails){
        $eemails=new $this->emails;
        $eemails->emails=$mails;
        $eemails->save();


    }

}