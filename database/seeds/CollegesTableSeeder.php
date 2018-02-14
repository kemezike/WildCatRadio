<?php

use Illuminate\Database\Seeder;

class CollegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\College::create([
        'name' => 'College of Computer Studies',
    ]);
        \App\College::create([
        'name' => 'College of Engineering and Architecture',
    ]);
        \App\College::create([
        'name' => 'College of Management and Business Administration',
    ]);
        \App\College::create([
        'name' => 'College of Education',
    ]);
        \App\College::create([
        'name' => 'College of Nursing',
    ]);


    }
}
