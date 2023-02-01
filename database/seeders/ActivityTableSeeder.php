<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use Illuminate\Notifications\Action;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::truncate();

        for ($i = 1; $i <= 5; $i++) {
            Activity::create([
                'name' => 'Activity ' . $i,
            ]);
        }
    }
}
