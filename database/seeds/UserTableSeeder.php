<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        for ($i=0; $i <20 ; $i++) { 
            # code...

            DB::table('users')->insert([
                    'name'=>'Codeur'.$i,
                    'email'=>'codeur'.$i.'@hotmail.fr',
                    'password'=>bcrypt('password'.$i),
                    'admin'=>rand(0,1)
            ]);
        }
    }
}
