<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();

        for ($i = 1; $i <= 5; $i++) {
            Status::create([
                'name' => 'Status ' . $i,
                'statement_status' => 'Status ' . $i . ' statement',
                'reason_for_status' => 'Status ' . $i . ' reason',
            ]);
        }
    }
}
