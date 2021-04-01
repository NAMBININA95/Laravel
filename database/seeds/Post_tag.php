<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Post_tag extends Seeder
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
        $date_aleatoire=$this->randDate();
        DB::table('post_tag')->delete();
        for ($i=1; $i < 100 ; $i++) { 
            # code...
            $number=range(1,20);
            shuffle($number);
            $n=rand(3,6);

            for ($j=0; $j < $n ; $j++) { 
                # code...

                DB::table('post_tag')->insert(array(
                        'post_id'=>$i,
                        'tags_id'=>$number[$j],
                    'created_at'=>$date_aleatoire,
                    'updated_at'=>$date_aleatoire
                ));
            }
        }
    }
}
