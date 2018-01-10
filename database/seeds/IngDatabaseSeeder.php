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
        $ingredients = array(
            array('id' => '1','name' => '水煮蛋','unit' => '顆','heat' => '75.00','created_at' => '2018-01-02 15:26:25','updated_at' => '2018-01-02 15:26:25'),
            array('id' => '2','name' => '南瓜','unit' => '公克','heat' => '0.40','created_at' => '2018-01-02 15:26:26','updated_at' => '2018-01-02 15:26:26'),
            array('id' => '3','name' => '大蕃茄(切丁)','unit' => '顆','heat' => '2500.00','created_at' => '2018-01-02 15:35:32','updated_at' => '2018-01-02 15:35:32'),
            array('id' => '4','name' => '芋頭(切絲）','unit' => 'g','heat' => '0.85','created_at' => '2018-01-02 15:37:36','updated_at' => '2018-01-02 15:37:36'),
            array('id' => '5','name' => '洋蔥','unit' => '顆','heat' => '20.00','created_at' => '2018-01-02 15:37:44','updated_at' => '2018-01-02 15:37:44'),
            array('id' => '6','name' => '地瓜（切絲）','unit' => 'g','heat' => '0.90','created_at' => '2018-01-02 15:37:54','updated_at' => '2018-01-02 15:37:54'),
            array('id' => '7','name' => '香菜（切小段）','unit' => 'g','heat' => '0.14','created_at' => '2018-01-02 15:38:20','updated_at' => '2018-01-02 15:38:20'),
            array('id' => '8','name' => '蛋','unit' => '顆','heat' => '80.00','created_at' => '2018-01-02 15:38:30','updated_at' => '2018-01-02 15:38:30'),
            array('id' => '9','name' => '白飯','unit' => '公克','heat' => '5.00','created_at' => '2018-01-02 15:39:12','updated_at' => '2018-01-02 15:39:12'),
            array('id' => '10','name' => '鹽','unit' => '公克','heat' => '0.00','created_at' => '2018-01-02 15:40:51','updated_at' => '2018-01-02 15:40:51'),
            array('id' => '11','name' => '白蘿蔔','unit' => '公克','heat' => '0.57','created_at' => '2018-01-02 15:44:13','updated_at' => '2018-01-02 15:44:13'),
            array('id' => '12','name' => '香菇','unit' => '公克','heat' => '0.56','created_at' => '2018-01-02 15:45:20','updated_at' => '2018-01-02 15:45:20'),
            array('id' => '13','name' => '豬絞肉','unit' => '公斤','heat' => '51.00','created_at' => '2018-01-02 15:45:36','updated_at' => '2018-01-02 15:45:36'),
            array('id' => '14','name' => '蔥','unit' => '節','heat' => '0.88','created_at' => '2018-01-02 15:45:54','updated_at' => '2018-01-02 15:45:54'),
            array('id' => '15','name' => '大蕃茄','unit' => '公克','heat' => '0.67','created_at' => '2018-01-02 15:47:32','updated_at' => '2018-01-02 15:47:32'),
            array('id' => '16','name' => '大蕃茄','unit' => '公克','heat' => '0.24','created_at' => '2018-01-02 15:47:49','updated_at' => '2018-01-02 15:47:49'),
            array('id' => '17','name' => '薑黃粉','unit' => '公克','heat' => '0.57','created_at' => '2018-01-02 15:49:40','updated_at' => '2018-01-02 15:49:40'),
            array('id' => '18','name' => '月桂葉','unit' => '片','heat' => '0.30','created_at' => '2018-01-02 15:50:06','updated_at' => '2018-01-02 15:50:06'),
            array('id' => '19','name' => '白醋','unit' => '公克','heat' => '0.63','created_at' => '2018-01-02 15:50:21','updated_at' => '2018-01-02 15:50:21'),
            array('id' => '20','name' => '韓國冬粉','unit' => '公克','heat' => '60.00','created_at' => '2018-01-02 15:51:54','updated_at' => '2018-01-02 15:51:54'),
            array('id' => '21','name' => '牛肉絲','unit' => '公克','heat' => '30.00','created_at' => '2018-01-02 15:52:05','updated_at' => '2018-01-02 15:52:05'),
            array('id' => '22','name' => '菠菜','unit' => '公克','heat' => '0.61','created_at' => '2018-01-02 15:52:15','updated_at' => '2018-01-02 15:52:15'),
            array('id' => '23','name' => '蒜頭','unit' => '公克','heat' => '0.57','created_at' => '2018-01-02 15:54:48','updated_at' => '2018-01-02 15:54:48'),
            array('id' => '24','name' => '低筋麵粉','unit' => '公克','heat' => '3640.00','created_at' => '2018-01-02 15:56:01','updated_at' => '2018-01-02 15:56:01'),
            array('id' => '25','name' => '動物性鮮奶油','unit' => '公克','heat' => '25.00','created_at' => '2018-01-02 15:56:37','updated_at' => '2018-01-02 15:56:37'),
            array('id' => '26','name' => '牛奶','unit' => '毫升','heat' => '0.87','created_at' => '2018-01-02 15:56:54','updated_at' => '2018-01-02 15:56:54'),
            array('id' => '27','name' => '鮮奶','unit' => '公克','heat' => '620.00','created_at' => '2018-01-02 15:56:57','updated_at' => '2018-01-02 15:56:57'),
            array('id' => '28','name' => '糖','unit' => '公克','heat' => '2.00','created_at' => '2018-01-02 15:57:06','updated_at' => '2018-01-02 15:57:06'),
            array('id' => '29','name' => '奶油','unit' => '公克','heat' => '716.00','created_at' => '2018-01-02 16:03:43','updated_at' => '2018-01-02 16:03:43'),
            array('id' => '30','name' => '蘑菇','unit' => '公克','heat' => '22.00','created_at' => '2018-01-02 16:04:29','updated_at' => '2018-01-02 16:04:29'),
            array('id' => '31','name' => '白胡椒粉','unit' => '公克','heat' => '5.00','created_at' => '2018-01-02 16:13:30','updated_at' => '2018-01-02 16:13:30'),
            array('id' => '32','name' => '黑胡椒粉','unit' => '公克','heat' => '7.00','created_at' => '2018-01-02 16:14:19','updated_at' => '2018-01-02 16:14:19'),
            array('id' => '33','name' => '橄欖油','unit' => '公克','heat' => '55.00','created_at' => '2018-01-02 16:15:17','updated_at' => '2018-01-02 16:15:17'),
            array('id' => '34','name' => '啤酒','unit' => '公克','heat' => '100.00','created_at' => '2018-01-03 02:20:44','updated_at' => '2018-01-03 02:20:44')
        );


        foreach ($ingredients as $a)[
            $Ingredient = new Ingredient(),
            $Ingredient -> name = $a["name"],
            $Ingredient -> unit = $a["unit"],
            $Ingredient -> heat = $a["heat"],
            $Ingredient -> save(),
        ];
    }
}
