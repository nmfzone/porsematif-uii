<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryImage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'image_id'];

    /**
     * Get the image that owns the category_image.
     *
     * @return App\Image
     */
    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    /**
     * Get the category that owns the category_image.
     *
     * @return App\Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
