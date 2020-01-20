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
            'name'              => 'Cássio Klebio Pereira Lins',
            'email'             => 'cassiotr2009@gmail.com',
            'password'          => bcrypt('123456'),
        ]);
    }
}
