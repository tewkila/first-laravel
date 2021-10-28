<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            [
                'title'=> 'ტესტი 1',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'

            ],[
                'title'=> 'ტესტი 2',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'

            ],[
                'title'=> 'ტესტი 3',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'

            ]
        ]);
    }
}
