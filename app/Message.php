<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['subject', 'content'];

    /**
     * Get the messages details of the message.
     *
     * @return App\MessageDetail
     */
    public function detail()
    {
        return $this->hasMany('App\MessageDetail');
    }

    /**
     * Get the user (sender) of the message.
     *
     * @return App\User
     */
    public function sender()
    {
        return $this->belongsToMany('App\User', 'message_details', 'sender_id', 'message_id');
    }

    /**
     * Get the user (receiver) of the message.
     *
     * @return App\User
     */
    public function receiver()
    {
        return $this->belongsToMany('App\User', 'message_details', 'receiver_id', 'message_id');
    }

}
