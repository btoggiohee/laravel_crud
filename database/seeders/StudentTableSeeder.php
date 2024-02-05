<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('student')->insert([
            'id'=>'1',
            'name'=>'田中太郎',
            'email'=>'data@gam.com',
            'tel'=>'090-222-2222',

        ],[
            'id'=>'2',
            'name'=>'山田太郎',
            'email'=>'ssa@ddd.com',
            'tel'=>'900-221-222',
        ]
        );
    }
}
