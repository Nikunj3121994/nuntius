<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 09:19
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IcmsBcMode
 * @package Modules\Taxes\Entities
 */
class IcmsBcMode extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'icms_bc_modalidade';
}