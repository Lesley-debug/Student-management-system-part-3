<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
        ['name' => 'Computer Science', 'syllabus' => 'Learn programming basics', 'duration' => 12],
        ['name' => 'Physics 101', 'syllabus' => 'Introduction to Physics', 'duration' => 10],
    ]);
    }
}
