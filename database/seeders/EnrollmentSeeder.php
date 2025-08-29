<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    DB::table('enrollments')->insert([
        ['enroll_no' => 'ENR001', 'batch_id' => 1, 'student_id' => 1, 'join_date' => '2020-09-02', 'fee' => 500.00],
        ['enroll_no' => 'ENR002', 'batch_id' => 2, 'student_id' => 2, 'join_date' => '2023-09-16', 'fee' => 450.00],
    ]);


    }
}
