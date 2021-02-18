<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    private function randDate(){
        return Carbon::createFromDate(/* null */2021,rand(1,12),rand(1,28));
    }
    public function run()
    {
        //
        DB::table('posts')->delete();
        for ($i=0; $i <200 ; $i++) { 
            # code...
            $datePost=$this->randDate();

            DB::table('posts')->insert([
                'titre'=>'Titre n° : '.$i,
                'contenu'=>'Conternu n°'.$i.'U n CMS permet de créer un domaine web en vue de publier un blog. Sur ce type de plateforme, il est possible de gérer des domaines d\'hébergement de site web, ainsi que des sous-domaines, reliés à un site existant.

                Les sites web des clients de HubSpot sont hébergés sur le CMS de HubSpot. Certaines entreprises utilisent des services compatibles par exemple avec WordPress. Un blog peut aussi bien être hébergé sur un domaine que sur un sous-domaine.

                Une fois le CMS sélectionné, il est nécessaire de recourir à un hébergeur de noms de domaine.',
                'user_id'=>rand(1,20),
                'created_at'=>$datePost,
                'updated_at'=>$datePost

            ]);
        }
    }
}
