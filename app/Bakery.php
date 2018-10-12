<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bakery extends Model
{
    protected $table = 'bakeries';
    public $timestamps = true;

    public function category() {
        return $this->belongsTo('App\Category','categoryId');
    }
}
