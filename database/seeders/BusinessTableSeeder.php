<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Filing;
use App\Models\Activity;
use App\Models\State;
use App\Models\Type;
use App\Models\Status;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::truncate();
        
        for ($i = 1; $i <= 15; $i++) {
            Business::create([
                'status_id' => Status::inRandomOrder()->first()->id,
                'type_id' => Type::inRandomOrder()->first()->id,
                'activity_id' => Activity::inRandomOrder()->first()->id,
                'filing_id' => Filing::inRandomOrder()->first()->id,
                'state_id' => State::inRandomOrder()->first()->id,
                'name' => 'Business ' . $i,
                'file_number' => $i,
                'foreign_legal_name' => 'Business' . $i,
                'fictitious_name' => 'Business' . $i,
                'sectionof_law' => 'Section ' . $i,
                'county' => 'County ' . $i,
                'jurisdiction' => 'Jurisdiction ' . $i,
                'farm_corp_flag' => true,
                'duration_expiration' => 'Expiration ' . $i,
                'formation_date' => now()->subDays($i),
                'statement_of_info_due_date' => now()->subDays($i),
                'formed_in' => 'Formed ' . $i,
                'standing_sos' => 'SOS ' . $i,
                'effective_sos_registration_date' => now()->subDays($i),
                'texas_sos_file_number' => 'Texas ' . $i,
                'rigth_to_transact_business_in_texas' => 'RTT ' . $i,
                'inactive_date' => now()->subDays($i),
                'standing_ftb' => 'FTB ' . $i,
                'standing_vcfcf' => 'VCFCF ' . $i,
                'fein_ein_number' => 'FEIN_EIN_' . $i,
                'forfeiture_date' => now()->subDays($i),
                'nfp_category' => 'NFP ' . $i,
            ]);
        }
    }
}
