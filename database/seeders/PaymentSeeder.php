<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
        ['enrollment_id' => 1, 'amount' => 250.00, 'payment_date' => '2022-04-05', 'method' => 'Cash'],
        ['enrollment_id' => 2, 'amount' => 450.00, 'payment_date' => '2019-09-21', 'method' => 'Card'],
    ]);
    }
}
