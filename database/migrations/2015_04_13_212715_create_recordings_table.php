<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recordings', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('song_id')->unsigned();
            $table->string('name');
			$table->timestamps();
            $table->foreign('song_id')
                ->refrences('id')
                ->on('songs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recordings');
	}

}
