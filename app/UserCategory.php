<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'category_id', 'verified', 'status'];

    /**
     * Get the user that owns the user_category.
     *
     * @return App\User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the category that owns the user_category.
     *
     * @return App\Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the image that owns the user_category.
     *
     * @return App\Image
     */
    public function image()
    {
        return $this->hasMany('App\Image');
    }

}
