<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [];

        for ($i = 1; $i <= 100; $i++){
            $values[] = ['name' => 'Position #'. $i];
        }

        DB::table('positions')->insert($values);
    }
}
