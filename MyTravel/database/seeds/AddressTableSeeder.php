<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fake = Faker\Factory::create();
         $address = [
        	[
        		'name'=>'Hạ Long',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-ha-long',
        		'region_id'=>'1',
        	],
        	[
        		'name'=>'Sapa',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-sa-pa',
        		'region_id'=>'1',
        	],
        	[
        		'name'=>'Nha Trang',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-nha-trang',
        		'region_id'=>'2',
        	],
        	[
        		'name'=>'Đà Lạt',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-da-lat',
        		'region_id'=>'2',
        	],
        	[
        		'name'=>'Phú Quốc',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-phu-quoc',
        		'region_id'=>'3',
        	],
        	[
        		'name'=>'Đông Bắc - Tây Bắc',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-dong-bac-tay-bac',
        		'region_id'=>'4',
        	],
        	[
        		'name'=>'Du lịch Campuchia',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-cam-pu-chia',
        		'region_id'=>'5',
        	],
        	[
        		'name'=>'Du lịch Anh',
        		'description'=>$fake->realText(),
        		'slug'=>'du-lich-anh',
        		'region_id'=>'6',
        	],
            [
                'name'=>'Du lịch Canada',
                'description'=>$fake->realText(),
                'slug'=>'du-lich-Canada',
                'region_id'=>'7',
            ],
            [
                'name'=>'Du lịch Cao cấp',
                'description'=>$fake->realText(),
                'slug'=>'du-lich-cao-cap',
                'region_id'=>'8',
            ],
        ];
        DB::table('addess')->insert($address);
    }
}
