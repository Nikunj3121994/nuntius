<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 10:42
 */

namespace Modules\Finance\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessUnit extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'unidade_negocio';


}