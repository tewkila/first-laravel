<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            [
                'title'=> 'ტესტი 1',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'img'=> '123'
            ],[
                'title'=> 'ტესტი 2',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'img'=> '123'
            ],[
                'title'=> 'ტესტი 3',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'img'=> '123'
            ]
        ]);
    }
}
