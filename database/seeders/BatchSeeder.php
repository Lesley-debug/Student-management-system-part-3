<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('batches')->insert([
        ['course_id' => 1, 'name' => 'CS Batch A', 'start_date' => '2025-09-01', 'end_date' => '2025-12-01'],
        ['course_id' => 2, 'name' => 'Physics Batch B', 'start_date' => '2025-09-15', 'end_date' => '2026-02-01'],
    ]);
    }
}
