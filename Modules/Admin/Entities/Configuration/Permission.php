<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 10:53
 */

namespace Modules\Admin\Entities\Configuration;


use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\EntrustPermission;

/**
 * Class Permission
 * @package Modules\Admin\Entities\Configuration
 */
class Permission extends EntrustPermission
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

}