<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Recording extends Model {

    /**
     *
     * SONG
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function song () {

        return $this->belongsTo('App\Song');

    }

    /**
     * PHOTO GROUPS FOR THE RECORDING
     *
     *@return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function photogroups () {

        return $this->hasMany('App\PhotoGroup');

    }

}
