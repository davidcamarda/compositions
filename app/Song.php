<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {



    /**
     *
     * SUB GENRE
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subgenre () {

        return $this->hasOne('App\SubGenre');

    }


    /**
     *
     * LYRIC
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lyric () {

        return $this->hasOne('App\Lyric');

    }


    /**
     *
     * RECORDING
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recordings () {

        return $this->hasMany('App\Recording');

    }


    /**
     *
     * COMPOSER
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function composer () {

        return $this->hasOne('App\Lyric');

    }

}
