<?php

use Illuminate\Database\Seeder;

class pubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pubs')->insert([
            'name' => 'FINISTECH WEBSITE',
        ]);
        DB::table('pubs')->insert([
            'name' => 'RADI0/TV(PLEASE STATE)',
        ]);
        DB::table('pubs')->insert([
            'name' => 'OTHER WEBSITE PLEASE STATE',
        ]);
        DB::table('pubs')->insert([
            'name' => 'ADVERTISEMENT PLEASE STATE',
        ]);
        DB::table('pubs')->insert([
            'name' => 'UNIVERSITY PROSPECTUS FROM FINISTECH  REPRESENTATIVE',
        ]);
    }
}
