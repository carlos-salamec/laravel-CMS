<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'cjsalame@uc.cl')->first();

        if(!$user){
          User::create([
            'name' => 'Carlos Salame',
            'role' => 'admin',
            'email' => 'cjsalame@uc.cl',
            'password' => Hash::make('123123123'),
          ]);
        }
    }
}
