<?php

use App\category;
use Illuminate\Database\Seeder;

class CateDatabaseSeeder extends Seeder
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
                "name"=>"中式料理",
                "description"=>"是指發源於中國的烹飪方式，在日本和韓國稱爲中華料理或中國料理，歐美稱之爲唐餐，乃中國文化的組成部分，深遠的影響了東亞地區的飲食文化。
菜譜來源於中國各個地區和民族的菜肴。

中國菜的特點被總結為：色、香、味、意、形，被稱為「國菜五品」。
按烹飪特點分又可分為：選料、刀工、火候和調味四個方面。

但不論如何，「中國菜」只是一個統稱，因著中國的幅員廣大，各個地方差異極大。
代表菜系有魯菜、川菜、粵菜、淮揚菜 （蘇菜）等四種。",
            ],
            1=>[
                "name"=>"西式料理",
                "description"=>"西方的飲食方面跟中國和台灣的飲食方面有非常大的不同，西方大多喜歡每個人的食物都是分好一人就是一份的習慣
和中國料理大家一起圍著拿筷子夾同一盤菜分吃的習慣非常不同

西方料理大多是屬於漢堡 . 牛排等等這類的料理
西方人非常喜歡自助式的料理，可以自由選擇想要吃的食物
這也是西方料理的特點之一",
            ],
        ];


        foreach ($arr as $a)[
            $Category = new Category(),
            $Category -> name = $a["name"],
            $Category -> description = $a["description"],
            $Category -> save(),
        ];
    }
}
