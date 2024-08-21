<?php

use App\Models\LoginUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        LoginUser::create([
            'username' => 'name',
            'password' => md5('password'),
        ]);
        LoginUser::create([
            'username' => 'foo',
            'password' => md5('bar'),
        ]);
        // Other seeding logic...
    }
}
