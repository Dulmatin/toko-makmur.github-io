<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes;

    protected $table = "units";

    protected $guarded= [];

    public function product()
    {
        return $this->hasMany('App/Unit','unit_id');
    }

}
