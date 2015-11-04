<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 11-04-15
 * Time: 10:14 AM
 */
class Option extends \Illuminate\Database\Eloquent\Model
{
    protected $table='options';
    public $timestamps=false;

    public function question(){
        return $this->belongsTo('Question');
    }

    public function answer(){
        return $this->belongsTo('Answer');
    }
}