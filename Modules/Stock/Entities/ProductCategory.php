<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:18
 */

namespace Modules\Stock\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductCategory
 * @package Modules\Stock\Entities
 */
class ProductCategory extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'produto_categoria';


}