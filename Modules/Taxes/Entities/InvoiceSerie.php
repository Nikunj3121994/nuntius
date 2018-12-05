<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:45
 */

namespace Modules\Taxes\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InvoiceSerie
 * @package Modules\Taxes\Entities
 */
class InvoiceSerie extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'nota_fiscal_serie';

}