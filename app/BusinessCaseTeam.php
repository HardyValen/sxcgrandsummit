<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessCaseTeam extends Model
{
    public $timestamps = false;
    protected $table = 'business_case_teams';

    protected $fillable = [
        'team_name',
        'posted'
    ];

    protected $primaryKey = 'business_case_team_id';

    public function businessCaseMembers()
    {
        return $this->hasMany('App\BusinessCaseMember', 'business_case_member_id');
    }
}
