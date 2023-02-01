<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();

        $states = [
            ["name" => "Alabama", "abbreviated_name" => "AL"],
            ["name" => "Alaska", "abbreviated_name" => "AK"],
            ["name" => "Arizona", "abbreviated_name" => "AZ"],
            ["name" => "Arkansas", "abbreviated_name" => "AR"],
            ["name" => "California", "abbreviated_name" => "CA"],
            ["name" => "Colorado", "abbreviated_name" => "CO"],
            ["name" => "Connecticut", "abbreviated_name" => "CT"],
            ["name" => "Delaware", "abbreviated_name" => "DE"],
            ["name" => "District of Columbia", "abbreviated_name" => "DC"],
            ["name" => "Florida", "abbreviated_name" => "FL"],
            ["name" => "Georgia", "abbreviated_name" => "GA"],
            ["name" => "Hawaii", "abbreviated_name" => "HI"],
            ["name" => "Idaho", "abbreviated_name" => "ID"],
            ["name" => "Illinois", "abbreviated_name" => "IL"],
            ["name" => "Indiana", "abbreviated_name" => "IN"],
            ["name" => "Iowa", "abbreviated_name" => "IA"],
            ["name" => "Kansas", "abbreviated_name" => "KS"],
            ["name" => "Kentucky", "abbreviated_name" => "KY"],
            ["name" => "Louisiana", "abbreviated_name" => "LA"],
            ["name" => "Maine", "abbreviated_name" => "ME"],
            ["name" => "Maryland", "abbreviated_name" => "MD"],
            ["name" => "Massachusetts", "abbreviated_name" => "MA"],
            ["name" => "Michigan", "abbreviated_name" => "MI"],
            ["name" => "Minnesota", "abbreviated_name" => "MN"],
            ["name" => "Mississippi", "abbreviated_name" => "MS"],
            ["name" => "Missouri", "abbreviated_name" => "MO"],
            ["name" => "Montana", "abbreviated_name" => "MT"],
            ["name" => "Nebraska", "abbreviated_name" => "NE"],
            ["name" => "Nevada", "abbreviated_name" => "NV"],
            ["name" => "New Hampshire", "abbreviated_name" => "NH"],
            ["name" => "New Jersey", "abbreviated_name" => "NJ"],
            ["name" => "New Mexico", "abbreviated_name" => "NM"],
            ["name" => "New York", "abbreviated_name" => "NY"],
            ["name" => "North Carolina", "abbreviated_name" => "NC"],
            ["name" => "North Dakota", "abbreviated_name" => "ND"],
            ["name" => "Ohio", "abbreviated_name" => "OH"],
            ["name" => "Oklahoma", "abbreviated_name" => "OK"],
            ["name" => "Oregon", "abbreviated_name" => "OR"],
            ["name" => "Pennsylvania", "abbreviated_name" => "PA"],
            ["name" => "Rhode Island", "abbreviated_name" => "RI"],
            ["name" => "South Carolina", "abbreviated_name" => "SC"],
            ["name" => "South Dakota", "abbreviated_name" => "SD"],
            ["name" => "Tennessee", "abbreviated_name" => "TN"],
            ["name" => "Texas", "abbreviated_name" => "TX"],
            ["name" => "Utah", "abbreviated_name" => "UT"],
            ["name" => "Vermont", "abbreviated_name" => "VT"],
            ["name" => "Virginia", "abbreviated_name" => "VA"],
            ["name" => "Washington", "abbreviated_name" => "WA"],
            ["name" => "West Virginia", "abbreviated_name" => "WV"],
            ["name" => "Wisconsin", "abbreviated_name" => "WI"],
            ["name" => "Wyoming", "abbreviated_name" => "WY"]
        ];

        foreach ($states as $key => $state) {
            State::create($state);
        }
    }
}
