<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 11-04-15
 * Time: 09:54 AM
 */
class Question extends Illuminate\Database\Eloquent\Model
{
    protected $table = 'questions';
    public $timestamps =false;

    public function options(){
        return $this->hasMany('Option');
    }

    public function answer(){
        return $this->hasOne('Answer');

    }
}