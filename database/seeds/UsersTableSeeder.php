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
        //users table seeder
        $user = new User;
        $user->name = "Admin";
        $user->phone ="0705052213";
        $user->email = "simonnabuko@gmail.com";
        $user->password = bcrypt('Simon#@!');
        $user->is_admin = true;
        $user->save();
    }
}
