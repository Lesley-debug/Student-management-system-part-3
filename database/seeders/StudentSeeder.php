<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    DB::table('students')->insert([
        ['name' => 'John Doe','mobile' => '1234567890', 'address' => 'mile 3'],
        ['name' => 'Jane Smith','mobile' => '0987654321', 'address' => 'mile 3'],
    ]);


    }
}
