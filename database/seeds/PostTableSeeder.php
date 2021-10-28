<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            [
            'title'=> 'ტესტი 1',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id'=> 1
            ],[
            'title'=> 'ტესტი 2',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id'=> 1
            ],[
                'title'=> 'ტესტი 3',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'user_id'=> 1
            ],[
                'title'=> 'დლკასმდასლდ',
                'description'=> '11111111',
                'user_id'=> 1
            ]
        ]);
    }
}
