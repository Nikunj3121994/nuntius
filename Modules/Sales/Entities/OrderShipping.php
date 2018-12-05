<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 12:38
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Taxes\Entities\ApportionmentInsuranceFreitghtType;
use Modules\Taxes\Entities\FreightMode;

/**
 * Class OrderShipping
 * @package Modules\Sales\Entities
 */
class OrderShipping extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pedido_venda_transporte';

    /**
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * @return BelongsTo
     */
    public function freightMode(): BelongsTo
    {
        return $this->belongsTo(FreightMode::class);
    }

    /**
     * @return BelongsTo
     */
    public function apportionmentInsuranceFreightType(): BelongsTo
    {
        return $this->belongsTo(ApportionmentInsuranceFreitghtType::class);
    }

    /**
     * @return BelongsTo
     */
    public function shippingCompany(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    /**
     * @return BelongsTo
     */
    public function redispatchShippingCompany(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    /**
     * @return BelongsTo
     */
    public function customerAddress(): BelongsTo
    {
        return $this->belongsTo(EntityAddress::class);
    }

    /**
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

}