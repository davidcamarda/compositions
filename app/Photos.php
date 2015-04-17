<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model {




    public function photogroup () {

        return $this->belongsTo('App\PhotoGroup');

    }

}
