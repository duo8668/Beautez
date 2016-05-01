<?php  namespace Modules\User\Traits;
/**
 * Created by PhpStorm.
 * User: leemaousheng
 * Date: 23/1/16
 * Time: 9:18 PM
 */
trait SlugableTrait
{
    /**
     * Set slug property.
     *
     * @param string $value
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '_');
    }
}