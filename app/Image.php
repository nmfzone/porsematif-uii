<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'status'];

    /**
     * Get the user that owns the image.
     *
     * @return App\User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
