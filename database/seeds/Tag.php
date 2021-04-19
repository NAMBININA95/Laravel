<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Tag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     private function randDate(){
         return Carbon::createFromDate(null,rand(1,12),rand(1,28));
     }

    public function run()
    {
        //
        DB::table('tags')->delete();
        for ($i=0; $i <100 ; $i++) { 
            # code...
            $dateAl=$this->randDate();
            
            DB::table('tags')->insert(array(
                'tag'=>'tag name'.$i,
                'tag_url'=>'tag url'.$i,
                'created_at'=>$dateAl,
                'updated_at'=>$dateAl
        ));
        }
       
    }
}
