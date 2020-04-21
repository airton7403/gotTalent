<?php

use App\Models\TypeCompetence;
use Illuminate\Database\Seeder;

class TypeCompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TypeCompetence::class)->create();
    }
}
