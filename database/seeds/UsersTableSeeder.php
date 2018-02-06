<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->truncate();
        User::create([
            'name' => 'usera',
            'email' => 'usera@gmail.com',
            'password' => bcrypt('userasecret')
        ]);
        User::create([
            'name' => 'userb',
            'email' => 'userb@gmail.com',
            'password' => bcrypt('userbsecret'),
        ]);
    }
}
