<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'title' => 'Desarrollador back-end',
        ]);
        Profession::create([
            'title' => 'Desarrollador front-end',
        ]);
        Profession::create([
            'title' => 'Desarrollador back-end',
        ]);
    }
}