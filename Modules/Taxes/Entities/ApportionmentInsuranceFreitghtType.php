<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 10:29
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ApportionmentInsuranceFreitghtType
 * @package Modules\Taxes\Entities
 */
class ApportionmentInsuranceFreitghtType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'tipo_rateio_seguro_frete';

}