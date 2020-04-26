<?php

use App\Models\CompanyBoard;
use Illuminate\Database\Seeder;

class CompanyBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CompanyBoard::class, 8)->create();
    }
}
