<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preevent3Member extends Model
{
    public $timestamps = false;
    public $emailException;
    
    protected $table = 'preevent3_members';

    protected $fillable = [
        "fullname",
        "gender",
        "hometown",
        "email",
        "phone",
        "major",
        "university",
    ];

    protected $primaryKey = 'preevent3_member_id';
}
