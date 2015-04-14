<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLyricsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lyrics', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('song_id');
            $table->integer('version');
            $table->text('lyrics');
            $table->text('notes');

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
		Schema::drop('lyrics');
	}

}
