<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price', 'started', 'ended', 'min_user', 'max_user', 'description', 'type', 'status'];

    /**
     * Get the user that owns the category.
     *
     * @return App\User
     */
    public function user()
    {
        return $this->belongsToMany('App\User', 'user_categories', 'category_id', 'user_id');
    }

    /**
     * Get the user_category that owns the category.
     *
     * @return App\UserCategory
     */
    public function user_category()
    {
        return $this->hasMany('App\UserCategory');
    }

    /**
     * Get the product that owns the category.
     *
     * @return App\Product
     */
    public function product()
    {
        return $this->hasMany('App\Product');
    }

}
