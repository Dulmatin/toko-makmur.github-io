<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function unit()
    {
        return $this->belongsTo('App\Unit','unit_id'); 
    }

    public function categori()
    {
        return $this->belongsTo('App\Category','categori_id'); 
    }
}
