<?php

use App\Models\CompanyBranch;
use Illuminate\Database\Seeder;

class CompanyBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CompanyBranch::class, 1)->create();
    }
}
