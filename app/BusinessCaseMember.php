<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessCaseMember extends Model
{
    public $timestamps = false;
    protected $table = 'business_case_members';

    protected $fillable = [
        "business_case_team_id",
        "name",
        "age",
        "gender",
        "phone",
        "major",
        "batch",
        "KTM",
        "email",
        "line"
    ];

    protected $primaryKey = 'business_case_member_id';

    public function businessCaseTeam()
    {
        return $this->belongsTo('App\BusinessCaseTeam', 'business_case_team_id');
    }
}
