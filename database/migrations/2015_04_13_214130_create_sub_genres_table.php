<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubGenresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_genres', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('genre_id');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres');

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
		Schema::drop('sub_genres');
	}

}
