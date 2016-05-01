<?php

namespace Modules\User\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use SlugableTrait;

    public $incrementing = false;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
