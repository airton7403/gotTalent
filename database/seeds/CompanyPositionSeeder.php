<?php

use App\Models\CompanyPosition;
use Illuminate\Database\Seeder;

class CompanyPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CompanyPosition::class, 43)->create();
    }
}
