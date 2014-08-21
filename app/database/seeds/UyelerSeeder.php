<?php

class UyelerSeeder extends Seeder {

	public function run(){
		
		DB::table('uyeler')->delete();
		
		DB::table('uyeler')->insert(

                        array(
                                array(
                                	'isim' => 'Ahmed Alparslan Özdemir',
                                	'kullanici' => 'alparslan',
                                	'password' => Hash::make('123321'),
                                        'yetki' => 1,
                                	'created_at' => date('Y-m-d H:i:s')
                                ),
                                array(
                                	'isim' => 'Bozkurt Mahmut Özdemir',
                                	'kullanici' => 'bozkurt',
                                	'password' => Hash::make('123321'),
                                        'yetki' => 2,
                                	'created_at' => date('Y-m-d H:i:s')
                                )                             
                        ));

	}

}
