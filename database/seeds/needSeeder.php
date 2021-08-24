<?php

use Illuminate\Database\Seeder;

class needSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('special_needs')->insert([
            'libelle' => '00',
            'value' => 'No disability',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'A',
            'value' => 'Specific learning disability',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'B',
            'value' => 'Blind or partially sighted',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'C',
            'value' => 'Deaf or hard of hearing',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'D',
            'value' => 'Wheelchair user or mobility difficulties',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'E',
            'value' => 'Personal care support',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'F',
            'value' => 'Mental health difficulties',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'G',
            'value' => 'An unseen disability',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'H',
            'value' => 'Multiple disabilities',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'I',
            'value' => 'A disability not mentioned',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'J',
            'value' => 'Autistic spectrum disorder',
        ]);
        DB::table('special_needs')->insert([
            'libelle' => 'O',
        ]);
    }
}
