<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker\Factory::create();
        $region = [
        	[
        		'name'=>'Miền Bắc',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-mien-bac',
        		'cate_id'=>'1',
        	],
        	[
        		'name'=>'Miền Trung',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-mien-trung',
        		'cate_id'=>'1',
        	],
        	[
        		'name'=>'Miền Nam',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-mien-nam',
        		'cate_id'=>'1',
        	],
        	[
        		'name'=>'Chùm Tour',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-chum-tour',
        		'cate_id'=>'1',
        	],
        	[
        		'name'=>'Châu Á',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-chau-a',
        		'cate_id'=>'2',
        	],
        	[
        		'name'=>'Châu Âu',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-chau-au',
        		'cate_id'=>'2',
        	],
        	[
        		'name'=>'Châu Mỹ',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-chau-my',
        		'cate_id'=>'2',
        	],
        	[
        		'name'=>'Chùm Tour ngoài',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-chum-tour-ngoai',
        		'cate_id'=>'2',
        	],
        ];
        DB::table('region')->insert($region);
    }
}
