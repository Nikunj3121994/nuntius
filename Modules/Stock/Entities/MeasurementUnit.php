<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 10:19
 */

namespace Modules\Stock\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MeasurementUnit
 * @package Modules\Stock\Entities
 */
class MeasurementUnit extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'unidade_medida';

}