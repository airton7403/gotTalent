<?php

use App\Http\Controllers\CompanyPositionController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompanySeeder::class,
            UserSeeder::class,
            ProjectSeeder::class,
            TypeCompetenceSeeder::class,
            CompetenceSeeder::class,
            SubCompetenceSeeder::class,
            CompanyPositionSeeder::class,
            QuestionSeeder::class,
            CompanyDepartmentSeeder::class,
            UserProfileSeeder::class,
        ]);
    }
}
