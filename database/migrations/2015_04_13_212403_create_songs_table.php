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
            $table->string('working_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('genre_id')->nullable();
            $table->integer('sub_genre_id')->nullable();
            $table->integer('composer_id')->nullable();
            $table->integer('lyric_id')->nullable();
            $table->integer('recording_id')->nullable();

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
