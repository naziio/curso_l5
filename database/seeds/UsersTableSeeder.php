<?php

use App\Profession;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $professionId = Profession::where('title', 'Desarrollador back-end')
            ->value('id');

        User::create([
            'name' => 'Ignacio Pena',
            'email' => 'ignacio.pena@ceinf.cl',
            'password' => bcrypt('luna'),
            'profession_id' => $professionId
        ]);
    }
}