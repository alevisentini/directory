<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Filing;

class FilingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filing::truncate();

        for ($i = 1; $i <= 5; $i++) {
            Filing::create([
                'initial_date' => now()->subDays($i),
                'effective_date' => now()->subDays($i),
                'last_event' => now()->subDays($i),
                'event_date_filed' => now()->subDays($i),
                'event_effective_date' => now()->subDays($i),
            ]);
        }
    }
}