<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'url', 'slug', 'user_category_id', 'note'];

    /**
     * Get the user that owns the product.
     *
     * @return App\User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the category that owns the product.
     *
     * @return App\Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
