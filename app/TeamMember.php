<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    /**
     *The database table used by the model.
     *
     * @var string
     */
    protected $table = 'team_members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the teams(users) record associated with the user team.
     *
     * @return App\User
     */
    public function team()
    {
        return $this->belongsTo('App\User');
    }

}
