<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model {

    /**
     *
     * LYRIC
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function song () {

        return $this->belongsTo('App\Song');

    }

}
