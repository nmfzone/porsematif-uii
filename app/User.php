<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Str;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'name', 'email', 'password', 'profil_img', 'institution_name', 'institution_address', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'activation_key', 'role_id'];

    /**
     * Always set and make name attribute as Camel Case if not empty.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['name'] = ucwords($value);
        }
    }

    /**
     * Always set and hash the password attribute if not empty.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    /**
     * Get the roles record associated with the user.
     *
     * @return App\Role
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * Get the categories record associated with the team (user).
     *
     * @return App\Category
     */
    public function category()
    {
        return $this->belongsToMany('App\Category', 'user_categories', 'user_id', 'category_id');
    }

    /**
     * Get the user_category that owns the team (user).
     *
     * @return App\UserCategory
     */
    public function user_category()
    {
        return $this->hasMany('App\UserCategory');
    }

    /**
     * Get the team member that owns the team (user).
     *
     * @return App\TeamMember
     */
    public function member()
    {
        return $this->hasMany('App\TeamMember', 'team_id');
    }

    /**
     * Get the image that owns the user.
     *
     * @return App\Image
     */
    public function image()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Get the product that owns the user.
     *
     * @return App\Product
     */
    public function product()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * Get the message that owns the user.
     *
     * @return App\Message
     */
    public function message()
    {
        return $this->belongsToMany('App\Message', 'message_details', 'message_id', 'sender_id');
    }

    /**
     * Check is user has given category or not.
     *
     * @param  string|int  $key
     * @return bool
     */
    public function hasCategory($key)
    {
        foreach($this->category as $category) {
            if ((Str::upper($category->name) == Str::upper($key)) ||
                ($category->id == $key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check is user has given role or not.
     *
     * @param  string  $name
     * @return bool
     */
    public function hasRole($name)
    {
        return Str::upper($this->role->name) == Str::upper($name);
    }

    /**
     * Display user profil image.
     *
     * @return string
     */
    public function getProfilImg()
    {
        if (!empty($this->profil_img)) {
            $img = $this->profil_img;
        } else {
            $img = "assets/images/default-avatar.png";
        }
        return "<img src='" . asset($img) . "' width='20px' />";
    }

}
