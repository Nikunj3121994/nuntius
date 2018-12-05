<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 09:23
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IcmsReductionReason
 * @package Modules\Taxes\Entities
 */
class IcmsReductionReason extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'icms_razao_reducao';

}