<?php

use App\Ingredient;
use Illuminate\Database\Seeder;

class IngDatabaseSeeder extends Seeder
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
                "name"=>"水煮蛋",
                "unit"=>"顆",
                "heat"=>"75",
            ],
            1=>[
                "name"=>"南瓜",
                "unit"=>"公克",
                "heat"=>"0.4",
            ],
        ];


        foreach ($arr as $a)[
            $Ingredient = new Ingredient(),
            $Ingredient -> name = $a["name"],
            $Ingredient -> unit = $a["unit"],
            $Ingredient -> heat = $a["heat"],
            $Ingredient -> save(),
        ];
    }
}
