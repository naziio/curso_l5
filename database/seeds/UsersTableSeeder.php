<?php
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
        DB::table('users')->insert([
            'name' => 'Ignacio Pena',
            'email' => 'ignacio.pena@ceinf.cl',
            'password' => bcrypt('luna'),
            'profession_id' => 1
        ]);
    }
}