<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('name');
            $table->string('working_name');
            $table->text('description');
            $table->integer('genre_id');
            $table->integer('sub_genre_id');
            $table->integer('composer_id');
            $table->integer('lyric_id');
            $table->integer('recording_id');

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
		Schema::drop('songs');
	}

}
