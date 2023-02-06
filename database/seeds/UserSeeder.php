<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'     => 'Lucas',
                'email'    => 'adsadf@dsks.com',
                'password' => Hash::make('nvsdfvnsdfjvsd'),
            ],
            [
                'name'     => 'Marco',
                'email'    => 'adsadcxf@dsks.com',
                'password' => Hash::make('nfvnsdfjvsd'),
            ],
            [
                'name'     => 'Mario',
                'email'    => 'adsadvsdfvf@dsks.com',
                'password' => Hash::make('nvsddfjvsd'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
