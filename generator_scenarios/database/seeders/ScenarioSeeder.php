<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('scenarios')->insert([
            'scenario_desc'=>Str::random(10), 
            'process_id'=>Str::random(10), 
            'process_name'=>Str::random(10), 
            'expected_result'=>Str::random(10), 
            'step_desc'=>Str::random(10), 
            'pages'=>Str::random(10), 
            'test_data'=>Str::random(10), 
            'status'=>Str::random(10) 
        ]);

    }
}
