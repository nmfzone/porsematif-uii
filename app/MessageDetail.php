<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageDeail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'message_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['status'];

}
