<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    //
    protected $table = 'cd';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'price',

    ];


}
