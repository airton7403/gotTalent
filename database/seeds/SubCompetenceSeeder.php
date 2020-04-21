<?php

use App\Models\SubCompetence;
use Illuminate\Database\Seeder;

class SubCompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SubCompetence::class, 20)->create();
    }
}
