<?php

use Illuminate\Database\Seeder;
use BigStore\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $user->name = "Admin";
        $user->email = "career_dev@kaiglo.com
        ";
        $user->password = bcrypt('secret');
        $user->is_admin = true;
        $user->save();
    }
}
