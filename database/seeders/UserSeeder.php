<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'tokoweb@gmail.com',
            'password' => bcrypt('tokoweb'),
        ]);
    }
}