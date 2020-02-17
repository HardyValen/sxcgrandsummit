<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SummitTeam extends Model
{
    public $timestamps = false;
    protected $table = 'summit_teams';

    protected $fillable = [
        'team_name'
        'posted'
    ];

    protected $primaryKey = 'summit_team_id';

    public function summitMembers()
    {
        return $this->hasMany('App\SummitMember', 'summit_member_id');
    }
}
