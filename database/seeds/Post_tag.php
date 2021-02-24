<?php

use Illuminate\Database\Seeder;

class Post_tag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i < 100 ; $i++) { 
            # code...
            $number=range(1,20);
            shuffle($number);
            $n=rand(3,6);

            for ($j=0; $j < $n ; $j++) { 
                # code...

                DB::table('post_tag')->insert(array(
                        'post_id'=>$i,
                        'tags_id'=>$number[$j]
                ));
            }
        }
    }
}
