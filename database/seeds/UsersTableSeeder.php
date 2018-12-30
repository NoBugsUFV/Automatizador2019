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
        User::create([
            "name" => "Gub No Bugs",
            "username" => "gub.nobugs",
            "email" => "contato@nobugs.com.br",
            "password" => hash("sha256","123456")
        ]);
    }
}
