<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UyelerTablo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uyeler', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('isim',35);
			$table->string('kullanici',16)->unique();
			$table->string('password',64);
			$table->integer('yetki_id');
			$table->string('remember_token',100)->nullable();
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uyeler');
	}

}
