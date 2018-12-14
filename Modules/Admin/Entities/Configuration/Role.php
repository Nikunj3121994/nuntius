<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 10:54
 */

namespace Modules\Admin\Entities\Configuration;


use Config;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\EntrustRole;

/**
 * Class Role
 * @package Modules\Admin\Entities\Configuration
 */
class Role extends EntrustRole
{

    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(Config::get('auth.providers.users.model'),
            Config::get('entrust.role_user_table'),
            Config::get('entrust.role_foreign_key'),
            Config::get('entrust.user_foreign_key')
        );
    }
}