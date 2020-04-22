<?php

use App\Models\CompanyDepartment;
use Illuminate\Database\Seeder;

class CompanyDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CompanyDepartment::class, 26)->create();
    }
}
