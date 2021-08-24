<?php

use Illuminate\Database\Seeder;

class programsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'title' => 'MEDICAL LABORATORY TECHNOLOGY',
        ]);
        DB::table('programs')->insert([
            'title' => 'BIOANALYTICS',
        ]);
        DB::table('programs')->insert([
            'title' => 'FOOD TECHNOLOGY',
        ]);
        DB::table('programs')->insert([
            'title' => 'AGRICULTURAL BIOTECHNOLOGY',
        ]);
        DB::table('programs')->insert([
            'title' => 'ENVIRONMENTAL  MANAGEMENT',
        ]);
        DB::table('programs')->insert([
            'title' => 'CORPORATE COMMUNICATION TECHNOLOGY',
        ]);
    }
}
