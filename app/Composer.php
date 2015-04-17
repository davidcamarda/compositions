<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model {


    /**
     * Composer is Owned by a User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function user () {

        return $this->belongsTo('App\User');

    }


}
