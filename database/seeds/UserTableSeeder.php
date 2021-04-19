<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
        DB::table('users_perso')->delete();

        for ($i=0; $i <20 ; $i++) { 
            # code...
		  $datePost=$this->randDate();
            DB::table('users_perso')->insert([
                    'name'=>'Codeur'.$i,
                    'email'=>'codeur'.$i.'@hotmail.fr',
                    'password'=>bcrypt('password'.$i),
                    'admin'=>0,
			  'NOM'=>"Hello".$i,
			  'PRENOM'=>'He iano'.$i,
			  'TELEPHONE'=>'000 000 000'.$i,
			  'ADRESSE'=>'Adresse'.$i,
			  'POINTSPIZZA'=>0,
			  'created_at'=>$datePost,
			  'updated_at'=>$datePost,
			  'ID_ROLE'=>rand(1,5)
            ]);
        }
    }
}
