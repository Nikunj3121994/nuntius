<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:39
 */

namespace Modules\Stock\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Sales\Entities\Entity;

/**
 * Class Warehouse
 * @package Modules\Stock\Entities
 */
class Warehouse extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'armazem';

    /**
     * @return BelongsTo
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    /**
     * @return BelongsTo
     */
    public function warehouseType(): BelongsTo
    {
        return $this->belongsTo(WarehouseType::class);
    }

}