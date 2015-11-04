<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 11-04-15
 * Time: 10:04 AM
 */
class Answer extends \Illuminate\Database\Eloquent\Model
{
    protected $table='responses';
    public $timestamps =false;

    public function question(){
        return $this->belongsTo('Question');
    }

    public function description(){
        return $this->hasOne('Option');
    }
}