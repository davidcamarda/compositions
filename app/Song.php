<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {

    protected $fillable = [

       'name','composer_id','lyric_id'
    ];


}
