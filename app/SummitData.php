<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SummitData extends Model
{
    public $timestamps = false;
    protected $table = 'summit_data';

    protected $fillable = [

    ];

    protected $primaryKey = 'Id';
}
