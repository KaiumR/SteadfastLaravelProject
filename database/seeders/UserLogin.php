<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\employee;

class UserLogin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new employee;
        $user->user_name="Rume";
        $user->mobile="01521106284";
        $user->address="Mohammadpur";
        $user->passcode=md5("1018");
        $user->save();
    }
}
