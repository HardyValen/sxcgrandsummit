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
        "university",
        "major",
        "batch",
        "phone",
        "line",
        "ch_select"
    ];

    protected $primaryKey = 'summit_member_id';

    public function summitTeam()
    {
        return $this->belongsTo('App\SummitTeam', 'summit_team_id');
    }
}
