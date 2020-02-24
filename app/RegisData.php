<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisData extends Model
{
    protected $table = 'regis_data';

    protected $fillable = [
        'nama', 
        'gender', 
        'email', 
        'usia',
        'line',
        'univ',
        'jurusan',
        'domisili'
    ];

    protected $primaryKey = 'Id';
}
