<?php

use Illuminate\Database\Seeder;
// use Illuminate\Database\Model;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$fake = Faker\Factory::create();
        $cate = [
        	[
        		'name'=>'Tou trong nước',
        		'description'=>$fake->realText(),
        		'slug'=>'tour-trong-nuoc',
        	],
        	[
        		'name'=>'Tou nước ngoài',
        		'description'=>$fake->realText(),
        		'slug'=>'tour-nuoc-ngoai',
        	],
        ];
        DB::table('categories')->insert($cate);
    }
}
