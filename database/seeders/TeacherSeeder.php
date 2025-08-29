<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('students')->insert([
        ['name' => 'Calvin Doe','mobile' => '89235352645', 'address' => 'mile 7'],
        ['name' => 'Sam Smith','mobile' => '76893642426', 'address' => 'mile 60'],
    ]);
    }
}
