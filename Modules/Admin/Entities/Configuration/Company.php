<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 29/10/2018
 * Time: 18:53
 */

namespace Modules\Admin\Entities\Configuration;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package Modules\Admin\Entities
 */
class Company extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'empresa';

    /**
     * @return HasMany
     */
    public function subsidiary(): HasMany
    {
        return $this->hasMany(Subsidiary::class);
    }

}