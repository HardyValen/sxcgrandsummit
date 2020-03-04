<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preevent2Member extends Model
{
    public $timestamps = false;
    protected $table = 'preevent2_members';

    protected $fillable = [
        "fullname",
        "gender",
        "hometown",
        "email",
        "phone",
        "major",
        "university",
    ];

    protected $primaryKey = 'preevent2_member_id';
}
