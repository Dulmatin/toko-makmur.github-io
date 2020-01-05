<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function product()
    {
        return $this->hasMany('App/Category','categori_id');
    }

}
