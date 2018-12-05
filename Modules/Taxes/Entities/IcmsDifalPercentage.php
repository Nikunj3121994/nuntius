<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 09:24
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IcmsDifalPercentage
 * @package Modules\Taxes\Entities
 */
class IcmsDifalPercentage extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'icms_difal_percentual';

}