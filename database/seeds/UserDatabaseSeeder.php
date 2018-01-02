<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            0=>[
                "name"=>"王小明",
                "email"=>"ming@gmail.com",
                "password"=>hash::make("ming00"),
                "level"=>"0",
            ],
            1=>[
                "name"=>"佩佩",
                "email"=>"pig@gmail.com",
                "password"=>hash::make("pig111"),
                "level"=>"5",
            ],
            2=>[
                "name"=>"佩佩",
                "email"=>"nini@gmail.com",
                "password"=>hash::make("nini"),
                "level"=>"5",
            ],
        ];


        foreach ($arr as $a)[
            $User = new User(),
            $User -> name = $a["name"],
            $User -> email = $a["email"],
            $User -> level = $a["level"],
            $User -> password = $a["password"],
            $User -> save(),
        ];
    }
}
