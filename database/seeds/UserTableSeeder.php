// app/database/seeds/UserTableSeeder.php

<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
         'username' => 'sevilayha',
         'password' => Hash::make('Shopdirect1!'),
    ));
}

}