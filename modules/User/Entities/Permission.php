<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Traits\SlugableTrait;

class Permission extends Model
{

    use SlugableTrait;

    public $incrementing = false;
    protected $table = 'permissions';

    /**
     * Fillable property.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * Relation to "Role".
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('Modules\User\Entities\Role')->withTimestamps();
    }

}
