<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SummitMember extends Model
{
    public $timestamps = false;
    protected $table = 'summit_members';

    protected $fillable = [
        "summit_team_id",
        "fullname",
        "gender",
        "age",
        "email",
        "line",
        "phone",
        "major",
        "batch",
        "KTM",
        "university",
        "ch_selection"
    ];

    protected $primaryKey = 'summit_member_id';

    public function summitTeam()
    {
        return $this->belongsTo('App\SummitTeam', 'summit_team_id');
    }
}
